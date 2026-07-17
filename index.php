<?php
// Front controller. Routes pretty URLs to page files.
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/config/data.php';

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
$uri = rtrim($uri, '/') ?: '/';

// Serve static assets directly (PHP built-in server handles these if using -t)
$routes = [
    '/'           => 'pages/home.php',
    '/about'      => 'pages/about.php',
    '/programs'   => 'pages/programs.php',
    '/admissions' => 'pages/admissions.php',
    '/faculty'    => 'pages/faculty.php',
    '/news'       => 'pages/news.php',
    '/gallery'    => 'pages/gallery.php',
    '/contact'    => 'pages/contact.php',
    '/apply'      => 'pages/apply.php',
    '/portals/student'   => 'pages/portal.php',
    '/portals/lecturer'  => 'pages/portal.php',
    '/portals/payments'  => 'pages/portal.php',
    '/portals/lms'       => 'pages/portal.php',
    '/portals/ai'       => 'pages/portal.php',
    '/portals/alumni'    => 'pages/portal.php',
    '/portals/mobile'    => 'pages/portal.php',
];

if (isset($routes[$uri])) {
    $GLOBALS['current_route'] = $uri;
    require __DIR__ . '/' . $routes[$uri];
    return;
}

// 404
http_response_code(404);
$GLOBALS['current_route'] = $uri;
require __DIR__ . '/pages/404.php';
