<?php
// Localization handler for Addis Future College

// Get current language from cookie, URL param, or default to English
function get_current_language(): string {
    // Check URL parameter (?lang=am or ?lang=en)
    if (!empty($_GET['lang']) && in_array($_GET['lang'], ['en', 'am'])) {
        setcookie('AFC_LANG', $_GET['lang'], time() + (365 * 24 * 60 * 60), '/');
        return $_GET['lang'];
    }
    
    // Check cookie
    if (!empty($_COOKIE['AFC_LANG']) && in_array($_COOKIE['AFC_LANG'], ['en', 'am'])) {
        return $_COOKIE['AFC_LANG'];
    }
    
    // Check Accept-Language header for Amharic
    if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        if (strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'am') !== false) {
            return 'am';
        }
    }
    
    // Default to English
    return 'en';
}

$current_lang = get_current_language();

// Load translation file
$lang_file = __DIR__ . '/../lang/' . $current_lang . '.php';
if (file_exists($lang_file)) {
    $translations = include $lang_file;
} else {
    // Fallback to English if language file not found
    $translations = include __DIR__ . '/../lang/en.php';
    $current_lang = 'en';
}

// Translation helper function
function t(string $key, array $params = []): string {
    global $translations;
    $value = $translations[$key] ?? $key;
    
    // Support placeholders like {name}
    if (!empty($params)) {
        foreach ($params as $k => $v) {
            $value = str_replace('{' . $k . '}', (string)$v, $value);
        }
    }
    
    return $value;
}

// Get full language name
function get_language_name(string $lang): string {
    return $lang === 'am' ? 'አማርኛ' : 'English';
}

// Get other language for switcher
function get_other_language(): string {
    global $current_lang;
    return $current_lang === 'am' ? 'en' : 'am';
}
