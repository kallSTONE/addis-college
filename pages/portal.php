<?php
require_once __DIR__ . '/../config/data.php';
$portals = portals_data();
$route = $GLOBALS['current_route'] ?? '';
$slug = ltrim(str_replace('/portals/', '', $route), '/');
$portal = null;
foreach ($portals as $p) {
    if ($p['id'] === $slug) { $portal = $p; break; }
}
if (!$portal) { http_response_code(404); require __DIR__ . '/404.php'; return; }

$pageTitle = $portal['title'] . ' — Coming Soon — Addis Future College';
$pageDesc = $portal['title'] . ' is coming soon to Addis Future College. ' . $portal['desc'];

require_once __DIR__ . '/../config/db.php';
require __DIR__ . '/../includes/header.php';

$submitted = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        insert_record('portal_interest', ['portal' => $portal['id'], 'email' => $email, 'ip' => $_SERVER['REMOTE_ADDR'] ?? '']);
        $submitted = true;
    }
}
?>
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?= url('') ?>">Home</a><span>/</span> Portals <span>/</span> <?= e($portal['title']) ?></div>
    <span class="eyebrow"><?= icon('sparkles') ?> Coming Soon</span>
    <h1><?= e($portal['title']) ?></h1>
    <p><?= e($portal['desc']) ?></p>
  </div>
</section>

<section class="section">
  <div class="container narrow">
    <div class="form-card center reveal" style="padding:clamp(2rem,6vw,3.5rem)">
      <span class="icon" style="display:inline-flex;width:84px;height:84px;border-radius:20px;background:linear-gradient(135deg,var(--brand-50),var(--gold-100));color:var(--brand-700);align-items:center;justify-content:center;margin:0 auto 1.5rem"><?= icon($portal['icon']) ?></span>
      <span class="soon" style="display:inline-flex;align-items:center;gap:.4rem;font-size:.78rem;font-weight:600;color:var(--gold-700);background:var(--gold-100);padding:.35rem .8rem;border-radius:var(--r-pill)"><?= icon('clock') ?> Launching soon</span>
      <h2 style="margin-top:1rem">We're putting the finishing touches on this</h2>
      <p class="text-mute" style="max-width:520px;margin:0 auto">The <?= e($portal['title']) ?> is part of our new digital campus — a connected suite of tools for students, faculty, and alumni. Leave your email and we'll let you know the moment it goes live.</p>

      <?php if ($submitted): ?>
        <div class="alert alert-success mt-3" data-auto-dismiss style="text-align:left"><?= icon('check-circle') ?> <div><strong>You're on the list!</strong> We'll email you when the <?= e($portal['title']) ?> launches.</div></div>
      <?php else: ?>
        <form method="post" class="mt-3" data-validate style="max-width:440px;margin-inline:auto">
          <div class="flex gap-2 wrap">
            <div class="field" style="flex:1;min-width:220px"><input type="email" name="email" required placeholder="you@example.com" aria-label="Email"></div>
            <button type="submit" class="btn btn-primary"><?= icon('send') ?> Notify me</button>
          </div>
        </form>
      <?php endif; ?>

      <div class="flex gap-2 wrap center mt-4">
        <a href="<?= url('') ?>" class="btn btn-ghost">Back to home</a>
        <a href="<?= url('contact') ?>" class="btn btn-ghost">Contact us</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('sparkles') ?> Digital Campus</span>
      <h2>Other portals in development</h2>
      <p>The <?= e($portal['title']) ?> is one of seven digital tools we're building for the AFC community.</p>
    </div>
    <div class="grid grid-4">
      <?php foreach ($portals as $i => $p): ?>
        <a href="<?= url('portals/' . $p['id']) ?>" class="card portal-card reveal" data-delay="<?= ($i % 4) + 1 ?>" style="<?= $p['id']===$portal['id'] ? 'border-color:var(--brand-400);box-shadow:var(--shadow-md)' : '' ?>">
          <span class="ribbon">SOON</span>
          <div class="card-body">
            <span class="icon"><?= icon($p['icon']) ?></span>
            <h3 style="font-size:1rem"><?= e($p['title']) ?></h3>
            <p style="font-size:.85rem;margin:0"><?= e($p['desc']) ?></p>
            <?php if ($p['id'] === $portal['id']): ?><span class="badge badge-brand mt-2">You are here</span><?php endif; ?>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
