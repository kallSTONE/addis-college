<?php
$pageTitle = 'News & Events — Addis Future College';
$pageDesc = 'The latest news, announcements, and upcoming events at Addis Future College.';
$news = news_data();
$events = events_data();
require __DIR__ . '/../includes/header.php';
?>
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?= url('') ?>">Home</a><span>/</span> News & Events</div>
    <span class="eyebrow"><?= icon('calendar') ?> Newsroom</span>
    <h1>What's happening at AFC</h1>
    <p>Stay up to date with the latest announcements, student achievements, research, and campus events.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head left">
      <span class="eyebrow"><?= icon('star') ?> Featured</span>
      <h2>Latest news</h2>
    </div>
    <div class="grid grid-3">
      <?php foreach ($news as $i => $n): ?>
        <article class="card news-card reveal" data-delay="<?= ($i % 3) + 1 ?>">
          <img class="thumb" src="<?= e($n['image']) ?>" alt="<?= e($n['title']) ?>" loading="lazy">
          <div class="body">
            <span class="badge badge-brand"><?= e($n['category']) ?></span>
            <span class="date"><?= date('F j, Y', strtotime($n['date'])) ?></span>
            <h3><?= e($n['title']) ?></h3>
            <p><?= e($n['excerpt']) ?></p>
            <a href="#" class="more" onclick="return false">Read more <?= icon('arrow-right') ?></a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('calendar') ?> Upcoming</span>
      <h2>Events calendar</h2>
      <p>Join us on campus — prospective students, families, and the public are welcome.</p>
    </div>
    <div class="grid" style="gap:1rem">
      <?php foreach ($events as $i => $e): ?>
        <div class="event-item reveal" data-delay="<?= ($i % 3) + 1 ?>">
          <div class="event-date">
            <div class="d"><?= date('d', strtotime($e['date'])) ?></div>
            <div class="m"><?= date('M', strtotime($e['date'])) ?></div>
          </div>
          <div>
            <h3><?= e($e['title']) ?></h3>
            <div class="meta">
              <span><?= icon('clock') ?> <?= e($e['time']) ?></span>
              <span><?= icon('map-pin') ?> <?= e($e['location']) ?></span>
            </div>
            <p style="margin:.5rem 0 0;font-size:.92rem"><?= e($e['desc']) ?></p>
          </div>
          <div class="cta-col">
            <a href="<?= url('contact') ?>" class="btn btn-ghost">RSVP <?= icon('arrow-right') ?></a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid" style="grid-template-columns:1fr 1fr;gap:2.5rem;align-items:center">
      <img class="reveal" src="https://images.pexels.com/photos/2774556/pexels-photo-2774556.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Career fair" style="border-radius:var(--r-xl);aspect-ratio:4/3;object-fit:cover;box-shadow:var(--shadow-lg)">
      <div class="reveal" data-delay="2">
        <span class="eyebrow"><?= icon('mail') ?> Stay Informed</span>
        <h2>Subscribe to our newsletter</h2>
        <p>Get the latest AFC news, event invitations, and admissions updates delivered monthly to your inbox.</p>
        <form class="mt-3" data-validate onsubmit="return false;">
          <div class="flex gap-2 wrap">
            <div class="field" style="flex:1;min-width:240px"><input type="email" required placeholder="you@example.com" aria-label="Email"></div>
            <button type="submit" class="btn btn-primary"><?= icon('send') ?> Subscribe</button>
          </div>
          <p class="hint mt-1">We respect your privacy. Unsubscribe anytime.</p>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
