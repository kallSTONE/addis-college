<?php
$pageTitle = "Addis Future College — Shaping Ethiopia's Next Generation of Leaders";
$programs = programs_data();
$news = news_data();
$events = events_data();
$stats = stats_data();
$portals = portals_data();
require __DIR__ . '/../includes/header.php';
?>
<!-- Hero -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="container hero-inner">
    <div>
      <span class="eyebrow"><?= icon('star') ?> Admissions open for 2025/26 E.C.</span>
      <h1>Build your future at <span class="hl">Addis Future College</span></h1>
      <p>From computing and engineering to nursing, business, and hospitality — we equip students with the skills, mentorship, and real-world experience to lead Ethiopia forward.</p>
      <div class="hero-actions">
        <a href="<?= url('apply') ?>" class="btn btn-gold btn-lg"><?= icon('arrow-right') ?> Apply Online</a>
        <a href="<?= url('programs') ?>" class="btn btn-outline-light btn-lg">Explore Programs</a>
      </div>
      <div class="hero-stats">
        <?php foreach (array_slice($stats, 0, 3) as $s): ?>
          <div class="hero-stat">
            <div class="num"><?= e($s['value']) ?></div>
            <div class="lbl"><?= e($s['label']) ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="hero-card float">
      <img src="https://images.pexels.com/photos/207692/pexels-photo-207692.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Addis Future College campus" loading="eager">
      <div class="meta">
        <div>
          <small>Next Open Day</small>
          <div style="font-weight:700">Sat, Aug 9, 2026</div>
        </div>
        <a href="<?= url('news') ?>" class="btn btn-light btn-ghost" style="padding:.5rem 1rem">RSVP</a>
      </div>
    </div>
  </div>
</section>

<!-- Quick bar -->
<div class="quick-bar">
  <a href="<?= url('apply') ?>"><?= icon('check-circle') ?> Apply Online</a>
  <a href="<?= url('admissions') ?>"><?= icon('info') ?> Admissions</a>
  <a href="<?= url('programs') ?>"><?= icon('book') ?> Programs</a>
  <a href="<?= url('news') ?>"><?= icon('calendar') ?> Events</a>
  <a href="<?= url('portals/student') ?>"><?= icon('graduation') ?> Student Portal</a>
  <a href="<?= url('contact') ?>"><?= icon('mail') ?> Contact</a>
</div>

<!-- Stats strip -->
<section class="section tight section-soft">
  <div class="container">
    <div class="stats-strip">
      <?php foreach ($stats as $s): ?>
        <div class="stat reveal">
          <div class="num" data-count="<?= preg_replace('/[^0-9.]/', '', $s['value']) ?>" data-suffix="<?= preg_replace('/[0-9.,]/', '', $s['value']) ?>"><?= e($s['value']) ?></div>
          <div class="lbl"><?= e($s['label']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Why AFC -->
<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('target') ?> Why Addis Future</span>
      <h2>An education built for Ethiopia's future</h2>
      <p>We blend academic rigor with industry partnerships, mentorship, and modern facilities — so graduates leave ready to contribute from day one.</p>
    </div>
    <div class="grid grid-4">
      <div class="feature reveal" data-delay="1"><span class="icon"><?= icon('award') ?></span><h3>Accredited Programs</h3><p>Degrees and TVET diplomas accredited by HESC and the TVET Agency, recognized across Ethiopia and abroad.</p></div>
      <div class="feature reveal" data-delay="2"><span class="icon"><?= icon('users') ?></span><h3>Industry Faculty</h3><p>Learn from practitioners with years of real-world experience in tech, finance, engineering, and healthcare.</p></div>
      <div class="feature reveal" data-delay="3"><span class="icon"><?= icon('flask') ?></span><h3>Modern Labs</h3><p>Hands-on learning in computing, biomedical, networking, and engineering labs with current equipment.</p></div>
      <div class="feature reveal" data-delay="4"><span class="icon"><?= icon('rocket') ?></span><h3>Career Outcomes</h3><p>94% of graduates find employment or continue studies within six months — supported by our career center.</p></div>
    </div>
  </div>
</section>

<!-- Programs preview -->
<section class="section section-soft">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('book') ?> Programs</span>
      <h2>Find the path that fits your ambition</h2>
      <p>Eight flagship programs across four faculties, with more launching each year.</p>
    </div>
    <div class="grid grid-3">
      <?php foreach (array_slice($programs, 0, 6) as $i => $p): ?>
        <article class="card program-card reveal" data-delay="<?= ($i % 3) + 1 ?>">
          <div class="card-body">
            <span class="icon"><?= icon($p['icon']) ?></span>
            <div class="meta">
              <span class="badge badge-<?= e($p['accent']) ?>"><?= e($p['level']) ?></span>
              <span class="badge"><?= e($p['duration']) ?></span>
            </div>
            <h3><?= e($p['title']) ?></h3>
            <p><?= e($p['blurb']) ?></p>
            <div class="footer">
              <span class="tuition"><?= e($p['tuition']) ?></span>
              <a href="<?= url('programs') ?>" class="more">Learn more <?= icon('arrow-right') ?></a>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="center mt-4">
      <a href="<?= url('programs') ?>" class="btn btn-primary btn-lg">View all programs <?= icon('arrow-right') ?></a>
    </div>
  </div>
</section>

<!-- Campus life split -->
<section class="section">
  <div class="container">
    <div class="grid" style="grid-template-columns:1fr 1fr;align-items:center;gap:3rem">
      <div class="reveal">
        <span class="eyebrow"><?= icon('compass') ?> Campus Life</span>
        <h2>A vibrant community in the heart of Addis Ababa</h2>
        <p>From innovation hubs and student clubs to sports, cultural weeks, and entrepreneurship challenges — campus life at AFC is designed to help you grow beyond the classroom.</p>
        <ul style="list-style:none;display:grid;gap:.75rem;margin:1.5rem 0">
          <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> <span>40+ student clubs and societies</span></li>
          <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> <span>Annual hackathons, case competitions, and tech fests</span></li>
          <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> <span>Mentorship with 200+ industry partners</span></li>
          <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> <span>Modern library, gym, and innovation plaza</span></li>
        </ul>
        <a href="<?= url('gallery') ?>" class="btn btn-primary">Explore campus <?= icon('arrow-right') ?></a>
      </div>
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:1rem">
        <img class="reveal" data-delay="1" src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Students collaborating" style="border-radius:var(--r-lg);aspect-ratio:1;object-fit:cover">
        <img class="reveal" data-delay="2" src="https://images.pexels.com/photos/2774556/pexels-photo-2774556.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Career fair" style="border-radius:var(--r-lg);aspect-ratio:1;object-fit:cover;margin-top:2rem">
        <img class="reveal" data-delay="3" src="https://images.pexels.com/photos/263402/pexels-photo-263402.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Lab equipment" style="border-radius:var(--r-lg);aspect-ratio:1;object-fit:cover;margin-top:-2rem">
        <img class="reveal" data-delay="4" src="https://images.pexels.com/photos/1438072/pexels-photo-1438072.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Campus courtyard" style="border-radius:var(--r-lg);aspect-ratio:1;object-fit:cover">
      </div>
    </div>
  </div>
</section>

<!-- News + Events -->
<section class="section section-soft">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('calendar') ?> News & Events</span>
      <h2>What's happening at AFC</h2>
    </div>
    <div class="news-events-layout">
      <div class="news-preview-grid">
        <?php foreach (array_slice($news, 0, 4) as $i => $n): ?>
          <article class="card news-card compact reveal" data-delay="<?= ($i % 2) + 1 ?>">
            <img class="thumb" src="<?= e($n['image']) ?>" alt="<?= e($n['title']) ?>" loading="lazy">
            <div class="overlay">
              <h3><?= e($n['title']) ?></h3>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
      <div class="reveal">
        <h3 style="margin-bottom:1rem">Upcoming Events</h3>
        <?php foreach ($events as $e): ?>
          <div class="event-item" style="margin-bottom:.75rem">
            <div class="event-date">
              <div class="d"><?= date('d', strtotime($e['date'])) ?></div>
              <div class="m"><?= date('M', strtotime($e['date'])) ?></div>
            </div>
            <div>
              <h3><?= e($e['title']) ?></h3>
              <div class="meta"><span><?= icon('clock') ?> <?= e($e['time']) ?></span><span><?= icon('map-pin') ?> <?= e($e['location']) ?></span></div>
            </div>
          </div>
        <?php endforeach; ?>
        <a href="<?= url('news') ?>" class="btn btn-ghost btn-block mt-3">All events <?= icon('arrow-right') ?></a>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('quote') ?> Voices of AFC</span>
      <h2>Our students and alumni speak</h2>
    </div>
    <div class="grid grid-3">
      <div class="testimonial reveal" data-delay="1">
        <p class="quote">"The CS program at AFC gave me both the theory and the hands-on projects I needed. I launched my startup before graduation."</p>
        <div class="who"><img src="https://images.pexels.com/photos/220459/pexels-photo-220459.jpeg?auto=compress&cs=tinysrgb&w=120" alt="Alumnus"><div><div class="n">Eyob Tadesse</div><div class="r">BSc Computer Science, '24</div></div></div>
      </div>
      <div class="testimonial reveal" data-delay="2">
        <p class="quote">"Faculty who actually worked in the industry made all the difference. My accounting diploma led directly to a job at a Big Four firm."</p>
        <div class="who"><img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=120" alt="Alumna"><div><div class="n">Hanna Girma</div><div class="r">Diploma Accounting & Finance, '23</div></div></div>
      </div>
      <div class="testimonial reveal" data-delay="3">
        <p class="quote">"The nursing labs and hospital placements prepared me to serve my community with confidence. I'm proud to be an AFC alumna."</p>
        <div class="who"><img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=120" alt="Alumna"><div><div class="n">Saba Kebede</div><div class="r">BSc Nursing, '22</div></div></div>
      </div>
    </div>
  </div>
</section>

<!-- Coming soon portals -->
<section class="section section-dark">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('sparkles') ?> Digital Campus</span>
      <h2>Powering the modern college experience</h2>
      <p>We're building a connected suite of digital tools for students, faculty, and alumni. Here's what's coming.</p>
    </div>
    <div class="grid grid-4">
      <?php foreach ($portals as $i => $p): ?>
        <article class="card portal-card reveal" data-delay="<?= ($i % 4) + 1 ?>" style="background:rgba(255,255,255,.04);border-color:rgba(255,255,255,.12)">
          <span class="ribbon">SOON</span>
          <div class="card-body">
            <span class="icon" style="background:rgba(255,255,255,.08);color:var(--gold-300)"><?= icon($p['icon']) ?></span>
            <h3 style="color:#fff"><?= e($p['title']) ?></h3>
            <p style="color:rgba(255,255,255,.72)"><?= e($p['desc']) ?></p>
            <a href="<?= url('portals/' . $p['id']) ?>" class="btn btn-outline-light btn-block mt-2">Learn more</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?= render_cta_band('Ready to take the next step?', 'Applications for the 2025/26 E.C. academic year are open. Secure your place at Addis Future College today.', 'Apply Online', '/apply') ?>

<?php require __DIR__ . '/../includes/footer.php'; ?>
