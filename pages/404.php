<?php
$pageTitle = 'Page not found — Addis Future College';
http_response_code(404);
require __DIR__ . '/../includes/header.php';
?> 
<section class="page-hero">
  <div class="container center">
    <span class="eyebrow"><?= icon('compass') ?> 404</span>
    <h1>Page not found</h1>
    <p>The page you're looking for doesn't exist or has moved. Let's get you back on track.</p>
    <div class="flex gap-2 wrap center mt-3">
      <a href="<?= url('') ?>" class="btn btn-gold btn-lg"><?= icon('arrow-right') ?> Back to home</a>
      <a href="<?= url('programs') ?>" class="btn btn-outline-light btn-lg">Browse programs</a>
    </div> 
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="grid grid-4">
      <a href="<?= url('about') ?>" class="feature reveal" data-delay="1"><span class="icon"><?= icon('info') ?></span><h3>About</h3><p>Our mission, history, and leadership.</p></a>
      <a href="<?= url('admissions') ?>" class="feature reveal" data-delay="2"><span class="icon"><?= icon('check-circle') ?></span><h3>Admissions</h3><p>How to apply, requirements, and scholarships.</p></a>
      <a href="<?= url('news') ?>" class="feature reveal" data-delay="3"><span class="icon"><?= icon('calendar') ?></span><h3>News & Events</h3><p>Latest announcements and upcoming events.</p></a>
      <a href="<?= url('contact') ?>" class="feature reveal" data-delay="4"><span class="icon"><?= icon('mail') ?></span><h3>Contact</h3><p>Reach our team by phone or email.</p></a>
    </div>
  </div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
