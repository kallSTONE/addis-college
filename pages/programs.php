<?php
$pageTitle = 'Programs — Addis Future College';
$pageDesc = 'Explore degrees and TVET diplomas at Addis Future College across computing, business, engineering, nursing, accounting, IT, hospitality, and architecture.';
$programs = programs_data();
require __DIR__ . '/../includes/header.php';
?>
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?= url('') ?>">Home</a><span>/</span> Programs</div>
    <span class="eyebrow"><?= icon('book') ?> Academic Programs</span>
    <h1>Programs designed for real careers</h1>
    <p>Choose from eight flagship programs across four faculties — each built with industry input, hands-on learning, and clear pathways to employment.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid grid-3">
      <?php foreach ($programs as $i => $p): ?>
        <article class="card program-card reveal" data-delay="<?= ($i % 3) + 1 ?>">
          <div class="card-body">
            <span class="icon"><?= icon($p['icon']) ?></span>
            <div class="meta">
              <span class="badge badge-<?= e($p['accent']) ?>"><?= e($p['level']) ?></span>
              <span class="badge"><?= icon('clock') ?> <?= e($p['duration']) ?></span>
            </div>
            <h3><?= e($p['title']) ?></h3>
            <p><?= e($p['blurb']) ?></p>
            <div style="margin-top:.75rem">
              <strong style="font-size:.82rem;color:var(--text-mute);text-transform:uppercase;letter-spacing:.06em">Highlights</strong>
              <ul style="list-style:none;display:grid;gap:.4rem;margin-top:.5rem">
                <?php foreach ($p['highlights'] as $h): ?>
                  <li class="flex items-center gap-2" style="font-size:.9rem;color:var(--text-soft)"><?= icon('check','text-brand') ?> <?= e($h) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="footer">
              <span class="tuition"><?= e($p['tuition']) ?></span>
              <a href="<?= url('apply') ?>" class="more">Apply <?= icon('arrow-right') ?></a>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container">
    <div class="grid" style="grid-template-columns:1fr 1fr;gap:2.5rem;align-items:center">
      <div class="reveal">
        <span class="eyebrow"><?= icon('lightbulb') ?> How We Teach</span>
        <h2>Learning that goes beyond the classroom</h2>
        <p>Every AFC program combines rigorous coursework with project-based learning, internships, and capstone projects sponsored by industry partners. You graduate with a portfolio — not just a transcript.</p>
        <ul style="list-style:none;display:grid;gap:.7rem;margin:1.25rem 0">
          <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Project-based coursework every semester</li>
          <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Mandatory internship in your final year</li>
          <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Industry-sponsored capstone projects</li>
          <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Career coaching and job placement support</li>
        </ul>
        <a href="<?= url('admissions') ?>" class="btn btn-primary">Admissions process <?= icon('arrow-right') ?></a>
      </div>
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:1rem">
        <img class="reveal" data-delay="1" src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Students coding" style="border-radius:var(--r-lg);aspect-ratio:1;object-fit:cover">
        <img class="reveal" data-delay="2" src="https://images.pexels.com/photos/5212703/pexels-photo-5212703.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Engineering workshop" style="border-radius:var(--r-lg);aspect-ratio:1;object-fit:cover;margin-top:2rem">
        <img class="reveal" data-delay="3" src="https://images.pexels.com/photos/5407206/pexels-photo-5407206.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Nursing lab" style="border-radius:var(--r-lg);aspect-ratio:1;object-fit:cover;margin-top:-2rem">
        <img class="reveal" data-delay="4" src="https://images.pexels.com/photos/8961065/pexels-photo-8961065.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Business class" style="border-radius:var(--r-lg);aspect-ratio:1;object-fit:cover">
      </div> 
    </div>
  </div>
</section>

<section class="section">
  <div class="container narrow">
    <div class="section-head">
      <span class="eyebrow"><?= icon('info') ?> FAQ</span>
      <h2>Questions about our programs</h2>
    </div>
    <div class="accordion">
      <div class="accordion-item"><button class="accordion-head">Can I transfer credits from another college? <span class="chev"><?= icon('chevron-down') ?></span></button><div class="accordion-body"><div class="inner">Yes. AFC accepts transfer credits from accredited institutions on a case-by-case basis. Submit your transcripts to the Registrar's Office for evaluation; most decisions are returned within two weeks.</div></div></div>
      <div class="accordion-item"><button class="accordion-head">Are evening and weekend classes available? <span class="chev"><?= icon('chevron-down') ?></span></button><div class="accordion-body"><div class="inner">Yes. Most diploma programs offer evening and weekend tracks for working students. Select degree programs also offer extended schedules.</div></div></div>
      <div class="accordion-item"><button class="accordion-head">What scholarships are available? <span class="chev"><?= icon('chevron-down') ?></span></button><div class="accordion-body"><div class="inner">AFC offers merit-based, need-based, and regional scholarships covering 25% to 100% of tuition. We also partner with organizations offering sponsored places for students from underserved regions.</div></div></div>
      <div class="accordion-item"><button class="accordion-head">Do you help with job placement? <span class="chev"><?= icon('chevron-down') ?></span></button><div class="accordion-body"><div class="inner">Yes. Our Career Center runs internship programs, employer networking events, and a job board, and provides CV and interview coaching. 94% of our graduates are employed or in further study within six months.</div></div></div>
    </div>
  </div>
</section> 

<?= render_cta_band('Found a program you love?', 'Start your application today — it takes about 15 minutes, and our admissions team is here to help.', 'Apply Online', '/apply') ?>
 
<?php require __DIR__ . '/../includes/footer.php'; ?>
