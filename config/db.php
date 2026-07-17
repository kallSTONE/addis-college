<?php
// Database abstraction. Uses MySQL/PDO in production; falls back to a
// JSON-file store so the demo works in environments without MySQL.

function db(): ?PDO {
    static $pdo = null;
    if ($pdo !== null) return $pdo;
    if (!extension_loaded('pdo_mysql')) return null;
    try {
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
        return $pdo;
    } catch (Throwable $e) {
        return null;
    }
}

function storage_path(string $name): string {
    if (!is_dir(STORAGE_DIR)) @mkdir(STORAGE_DIR, 0775, true);
    return STORAGE_DIR . '/' . $name . '.json';
}

function json_store_read(string $name): array {
    $path = storage_path($name);
    if (!file_exists($path)) return [];
    $data = json_decode((string)file_get_contents($path), true);
    return is_array($data) ? $data : [];
}

function json_store_append(string $name, array $row): void {
    $rows = json_store_read($name);
    $row['id'] = ($rows ? max(array_column($rows, 'id')) : 0) + 1;
    $row['created_at'] = date('c');
    $rows[] = $row;
    file_put_contents(storage_path($name), json_encode($rows, JSON_PRETTY_PRINT));
}

// Insert a record into the given table (or JSON store as fallback).
function insert_record(string $table, array $data): bool {
    $pdo = db();
    if ($pdo) {
        $cols = array_keys($data);
        $placeholders = array_map(fn($c) => ':' . $c, $cols);
        $sql = "INSERT INTO `$table` (" . implode(',', array_map(fn($c) => "`$c`", $cols)) .
               ") VALUES (" . implode(',', $placeholders) . ")";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(array_combine($placeholders, array_values($data)) + $data);
    }
    json_store_append($table, $data);
    return true;
}

function fetch_all(string $table, array $where = []): array {
    $pdo = db();
    if ($pdo) {
        $sql = "SELECT * FROM `$table`";
        $params = [];
        if ($where) {
            $clauses = [];
            foreach ($where as $k => $v) {
                $clauses[] = "`$k` = :w_$k";
                $params["w_$k"] = $v;
            }
            $sql .= " WHERE " . implode(' AND ', $clauses);
        }
        $sql .= " ORDER BY id DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }
    $rows = json_store_read($table);
    foreach ($where as $k => $v) {
        $rows = array_values(array_filter($rows, fn($r) => ($r[$k] ?? null) === $v));
    }
    usort($rows, fn($a, $b) => ($b['id'] ?? 0) <=> ($a['id'] ?? 0));
    return $rows;
}
