<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/data.php';
require_once __DIR__ . '/components.php';
require_once __DIR__ . '/icons.php';

$navItems = [
    ['href' => '/',         'label' => 'Home'],
    ['href' => '/about',    'label' => 'About'],
    ['href' => '/programs', 'label' => 'Programs'],
    ['href' => '/admissions','label' => 'Admissions'],
    ['href' => '/contact',  'label' => 'Contact'],
];

$moreNavItems = [
  ['href' => '/faculty', 'label' => 'Faculty'],
  ['href' => '/news', 'label' => 'News & Events'],
  ['href' => '/gallery', 'label' => 'Gallery'],
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
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='7' fill='%23065f46'/%3E%3Ctext x='16' y='22' font-size='18' font-family='Arial' font-weight='bold' fill='%23fcd34d' text-anchor='middle'%3EA%3C/text%3E%3C/svg%3E">
</head>
<body>
<a href="#main" class="skip-link">Skip to content</a>
<header class="site-header">
  <div class="container header-inner">
    <a href="<?= url('') ?>" class="brand" aria-label="<?= e(SITE_NAME) ?> home">
      <span class="brand-mark"><?= icon('graduation') ?></span>
      <span>Addis Future College<small>Est. 2008 E.C.</small></span>
    </a>
    <nav class="main-nav" aria-label="Primary">
      <?php foreach ($navItems as $n): ?>
        <a href="<?= url($n['href']) ?>" class="<?= is_active($n['href']) ? 'active' : '' ?>"><?= e($n['label']) ?></a>
      <?php endforeach; ?>
      <span class="has-dropdown">
        <a href="#" aria-haspopup="true">More <?= icon('chevron-down', 'inline-icon') ?></a>
        <span class="dropdown">
          <?php foreach ($moreNavItems as $n): ?>
            <a href="<?= url($n['href']) ?>"><?= e($n['label']) ?></a>
          <?php endforeach; ?>
        </span>
      </span>
      <span class="has-dropdown">
        <a href="#" aria-haspopup="true">Portals <?= icon('chevron-down', 'inline-icon') ?></a>
        <span class="dropdown">
          <a href="<?= url('portals/student') ?>"><?= icon('graduation') ?> Student Portal <small>Coming soon</small></a>
          <a href="<?= url('portals/lecturer') ?>"><?= icon('chalkboard') ?> Lecturer Portal <small>Coming soon</small></a>
          <a href="<?= url('portals/payments') ?>"><?= icon('wallet') ?> Online Payments <small>Coming soon</small></a>
          <a href="<?= url('portals/lms') ?>"><?= icon('book') ?> Learning Mgmt System <small>Coming soon</small></a>
          <a href="<?= url('portals/ai') ?>"><?= icon('sparkles') ?> AI Assistant <small>Coming soon</small></a>
          <a href="<?= url('portals/alumni') ?>"><?= icon('network') ?> Alumni Portal <small>Coming soon</small></a>
          <a href="<?= url('portals/mobile') ?>"><?= icon('phone') ?> Mobile App <small>Coming soon</small></a>
        </span>
      </span>
    </nav>
    <div class="header-cta">
      <a href="<?= url('contact') ?>" class="btn btn-ghost">Visit Us</a>
      <a href="<?= url('apply') ?>" class="btn btn-primary">Apply Now</a>
      <button class="nav-toggle" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>
<div class="mobile-nav" id="mobileNav">
  <?php foreach ($navItems as $n): ?>
    <a href="<?= url($n['href']) ?>" class="<?= is_active($n['href']) ? 'active' : '' ?>"><?= e($n['label']) ?></a>
  <?php endforeach; ?>
  <div class="mobile-nav-section">
    <div class="mobile-nav-label">More</div>
    <?php foreach ($moreNavItems as $n): ?>
      <a href="<?= url($n['href']) ?>" class="<?= is_active($n['href']) ? 'active' : '' ?>"><?= e($n['label']) ?></a>
    <?php endforeach; ?>
  </div>
  <div class="mobile-nav-section">
    <div class="mobile-nav-label">Portals</div>
    <a href="<?= url('portals/student') ?>">Student Portal</a>
    <a href="<?= url('portals/lecturer') ?>">Lecturer Portal</a>
    <a href="<?= url('portals/payments') ?>">Online Payments</a>
    <a href="<?= url('portals/lms') ?>">Learning Mgmt System</a>
    <a href="<?= url('portals/ai') ?>">AI Assistant</a>
    <a href="<?= url('portals/alumni') ?>">Alumni Portal</a>
    <a href="<?= url('portals/mobile') ?>">Mobile App</a>
  </div>
  <a href="<?= url('apply') ?>" class="btn btn-primary">Apply Now</a>
</div>
<main id="main">
