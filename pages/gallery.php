<?php
$pageTitle = 'Gallery — Addis Future College';
$pageDesc = 'Photos of campus life, facilities, academics, and events at Addis Future College.';
$gallery = gallery_data();
$cats = array_unique(array_column($gallery, 'cat'));
require __DIR__ . '/../includes/header.php';
?>
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?= url('') ?>">Home</a><span>/</span> Gallery</div>
    <span class="eyebrow"><?= icon('globe') ?> Campus Gallery</span>
    <h1>A glimpse</h1>
    <p>From modern labs and lecture halls to student life and signature events — explore Addis Future College through images.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="gallery-filters">
      <button class="filter-btn active" data-filter="all">All</button>
      <?php foreach ($cats as $c): ?>
        <button class="filter-btn" data-filter="<?= e($c) ?>"><?= e($c) ?></button>
      <?php endforeach; ?>
    </div>
    <div class="gallery-grid">
      <?php foreach ($gallery as $i => $g): ?>
        <figure class="gallery-item reveal" data-cat="<?= e($g['cat']) ?>" data-delay="<?= ($i % 4) + 1 ?>">
          <img src="<?= e($g['src']) ?>" alt="<?= e($g['alt']) ?>" loading="lazy">
          <span class="badge badge-brand"><?= e($g['cat']) ?></span>
          <figcaption class="cap"><?= e($g['alt']) ?></figcaption>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container">
    <div class="grid grid-3">
      <div class="feature reveal" data-delay="1"><span class="icon"><?= icon('building') ?></span><h3>Main Campus</h3><p>A purpose-built campus on Bole Road with library, labs, auditoriums, and an innovation plaza.</p></div>
      <div class="feature reveal" data-delay="2"><span class="icon"><?= icon('flask') ?></span><h3>Modern Labs</h3><p>Computing, biomedical, networking, and engineering labs equipped with current technology.</p></div>
      <div class="feature reveal" data-delay="3"><span class="icon"><?= icon('users') ?></span><h3>Student Life</h3><p>40+ clubs, sports, cultural weeks, hackathons, and entrepreneurship challenges year-round.</p></div>
    </div>
  </div>
</section>

<?= render_cta_band('See it for yourself', 'Book a campus tour and experience Addis Future College in person.', 'Book a Tour', '/contact') ?>

<?php require __DIR__ . '/../includes/footer.php'; ?>
