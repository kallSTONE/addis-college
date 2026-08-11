<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/lang.php';
require_once __DIR__ . '/../config/data.php';
require_once __DIR__ . '/components.php';
require_once __DIR__ . '/icons.php';

$navItems = [
    ['href' => '/',         'label' => 'nav_home'],
    ['href' => '/about',    'label' => 'nav_about'],
    ['href' => '/programs', 'label' => 'nav_programs'],
    ['href' => '/admissions','label' => 'nav_admissions'],
    ['href' => '/contact',  'label' => 'nav_contact'],
];

$moreNavItems = [
  ['href' => '/faculty', 'label' => 'nav_faculty'],
  ['href' => '/news', 'label' => 'nav_news'],
  ['href' => '/gallery', 'label' => 'nav_gallery'],
];

function current_path(): string {
    $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
    return rtrim($uri, '/') ?: '/';
}
$cp = current_path();
function is_active(string $href): bool {
    $cp = current_path();
    $h = rtrim($href, '/') ?: '/';
    if ($h === '/') return $cp === '/';
    return $cp === $h || strpos($cp, $h) === 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#065f46">
<title><?= e($pageTitle ?? SITE_NAME . ' — ' . SITE_TAGLINE) ?></title>
<meta name="description" content="<?= e($pageDesc ?? 'Addis Future College is a private college in Addis Ababa offering degrees and TVET diplomas in computing, business, engineering, nursing, hospitality, and more.') ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= asset('css/styles.css') ?>">
<link rel="icon" href="<?= asset('Icon/favicon.ico') ?>">
<link rel="apple-touch-icon" href="<?= asset('Icon/apple-touch-icon.png') ?>">
<link rel="manifest" href="<?= asset('Icon/site.webmanifest') ?>">
</head>
<body>
<a href="#main" class="skip-link">Skip to content</a>
<header class="site-header">
  <div class="container header-inner">
    <a href="<?= url('') ?>" class="brand" aria-label="<?= e(SITE_NAME) ?> home">
      <img src="<?= asset('Images/Logo (2).png') ?>" alt="<?= e(SITE_NAME) ?>" class="brand-logo">
    </a>
    <nav class="main-nav" aria-label="Primary">
      <?php foreach ($navItems as $n): ?>
        <a href="<?= url($n['href']) ?>" class="<?= is_active($n['href']) ? 'active' : '' ?>"><?= e(t($n['label'])) ?></a>
      <?php endforeach; ?>
      <span class="has-dropdown">
        <a href="#" aria-haspopup="true"><?= e(t('nav_more')) ?> <?= icon('chevron-down', 'inline-icon') ?></a>
        <span class="dropdown">
          <?php foreach ($moreNavItems as $n): ?>
            <a href="<?= url($n['href']) ?>"><?= e(t($n['label'])) ?></a>
          <?php endforeach; ?>
        </span>
      </span>
      <span class="has-dropdown">
        <a href="#" aria-haspopup="true"><?= e(t('nav_portals')) ?> <?= icon('chevron-down', 'inline-icon') ?></a>
        <span class="dropdown">
          <a href="<?= url('portals/student') ?>"><?= icon('graduation') ?> <?= e(t('nav_student_portal')) ?> <small><?= e(t('coming_soon')) ?></small></a>
          <a href="<?= url('portals/lecturer') ?>"><?= icon('chalkboard') ?> <?= e(t('nav_lecturer_portal')) ?> <small><?= e(t('coming_soon')) ?></small></a>
          <a href="<?= url('portals/payments') ?>"><?= icon('wallet') ?> <?= e(t('nav_payments')) ?> <small><?= e(t('coming_soon')) ?></small></a>
          <a href="<?= url('portals/lms') ?>"><?= icon('book') ?> <?= e(t('nav_lms')) ?> <small><?= e(t('coming_soon')) ?></small></a>
          <a href="<?= url('portals/ai') ?>"><?= icon('sparkles') ?> <?= e(t('nav_ai')) ?> <small><?= e(t('coming_soon')) ?></small></a>
          <a href="<?= url('portals/alumni') ?>"><?= icon('network') ?> <?= e(t('nav_alumni')) ?> <small><?= e(t('coming_soon')) ?></small></a>
          <a href="<?= url('portals/mobile') ?>"><?= icon('phone') ?> <?= e(t('nav_mobile')) ?> <small><?= e(t('coming_soon')) ?></small></a>
        </span>
      </span>
    </nav>
    <div class="header-cta">
      <a href="<?= url('contact') ?>" class="btn btn-ghost"><?= e(t('nav_visit')) ?></a>
      <div class="lang-switcher" id="langSwitcher">
        <button class="lang-toggle" aria-label="<?= e(t('select_language')) ?>" aria-haspopup="true" aria-expanded="false" title="<?= e(t('select_language')) ?>">
          <span class="lang-code"><?= strtoupper($current_lang) ?></span>
          <?= icon('chevron-down', 'inline-icon') ?>
        </button>
        <div class="lang-menu" role="menu">
          <a href="?lang=en" class="lang-option <?= $current_lang === 'en' ? 'active' : '' ?>" role="menuitem">
            <?= icon('globe') ?> English
          </a>
          <a href="?lang=am" class="lang-option <?= $current_lang === 'am' ? 'active' : '' ?>" role="menuitem">
            <?= icon('globe') ?> አማርኛ
          </a>
        </div>
      </div>
      <button class="nav-toggle" aria-label="Open menu" aria-controls="mobileNav" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>
<div class="mobile-nav" id="mobileNav">
  <?php foreach ($navItems as $n): ?>
    <a href="<?= url($n['href']) ?>" class="<?= is_active($n['href']) ? 'active' : '' ?>"><?= e(t($n['label'])) ?></a>
  <?php endforeach; ?>
  <div class="mobile-nav-section">
    <div class="mobile-nav-label"><?= e(t('nav_more')) ?></div>
    <?php foreach ($moreNavItems as $n): ?>
      <a href="<?= url($n['href']) ?>" class="<?= is_active($n['href']) ? 'active' : '' ?>"><?= e(t($n['label'])) ?></a>
    <?php endforeach; ?>
  </div>
  <div class="mobile-nav-section">
    <div class="mobile-nav-label"><?= e(t('nav_portals')) ?></div>
    <a href="<?= url('portals/student') ?>"><?= e(t('nav_student_portal')) ?></a>
    <a href="<?= url('portals/lecturer') ?>"><?= e(t('nav_lecturer_portal')) ?></a>
    <a href="<?= url('portals/payments') ?>"><?= e(t('nav_payments')) ?></a>
    <a href="<?= url('portals/lms') ?>"><?= e(t('nav_lms')) ?></a>
    <a href="<?= url('portals/ai') ?>"><?= e(t('nav_ai')) ?></a>
    <a href="<?= url('portals/alumni') ?>"><?= e(t('nav_alumni')) ?></a>
    <a href="<?= url('portals/mobile') ?>"><?= e(t('nav_mobile')) ?></a>
  </div>
  <a href="<?= url('apply') ?>" class="btn btn-primary"><?= e(t('nav_apply')) ?></a>
</div>
<main id="main">
