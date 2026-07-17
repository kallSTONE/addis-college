<?php
// Core site configuration for Addis Future College

define('SITE_NAME', 'Addis Future College');
define('SITE_TAGLINE', "Shaping Ethiopia's Next Generation of Leaders");
define('SITE_URL', 'http://localhost:8000');

define('CONTACT_EMAIL', 'admissions@addisfuture.edu.et');
define('CONTACT_PHONE', '+251 11 234 5678');
define('CONTACT_ADDRESS', 'Bole Road, Kirkos Sub-City, Addis Ababa, Ethiopia');
define('CONTACT_HOURS', 'Mon-Fri, 8:30 AM - 5:00 PM EAT');

// Social
define('SOCIAL_FACEBOOK', 'https://facebook.com');
define('SOCIAL_TWITTER', 'https://twitter.com');
define('SOCIAL_LINKEDIN', 'https://linkedin.com');
define('SOCIAL_YOUTUBE', 'https://youtube.com');
define('SOCIAL_TELEGRAM', 'https://telegram.org');

// Database (production MySQL). Demo falls back to JSON files if unavailable.
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'addis_future_college');
define('DB_USER', 'afc_user');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

define('STORAGE_DIR', __DIR__ . '/../storage');

// Helper: base URL for assets/links (pretty URLs supported via .htaccess / router)
function url(string $path = ''): string {
    $path = ltrim($path, '/');
    return '/' . $path;
}

function asset(string $path): string {
    return '/assets/' . ltrim($path, '/');
}

function e($value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
