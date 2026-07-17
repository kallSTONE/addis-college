<?php
// PHP built-in server router. Serves static assets directly, everything else
// through index.php. Usage: php -S localhost:8000 serve.php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = __DIR__ . $uri;
if ($uri !== '/' && preg_match('/\.(css|js|png|jpe?g|gif|svg|ico|webp|woff2?|ttf|map)$/', $uri) && is_file($path)) {
    return false; // let built-in server serve the static file
}
require __DIR__ . '/index.php';
