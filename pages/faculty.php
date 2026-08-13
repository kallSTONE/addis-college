<?php
$pageTitle = 'Faculty — Addis Future College';
$pageDesc = 'Meet the faculty of Addis Future College — experienced educators and industry practitioners across computing, business, engineering, nursing, and more.';
$faculty = faculty_data();
require __DIR__ . '/../includes/header.php';
?> 
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?= url('') ?>">Home</a><span>/</span> Faculty</div>
    <span class="eyebrow"><?= icon('users') ?> Our People</span>
    <h1>Learn from practitioners, not just professors</h1>
    <p>Our 180+ faculty members bring decades of combined industry and academic experience into the classroom — from software engineers and licensed engineers to nurses, accountants, and architects.</p>
  </div> 
</section>  
 
<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('star') ?> Department Heads</span>
      <h2>Meet the faculty</h2>
      <p>Department heads and program coordinators who shape what and how we teach.</p>
    </div> 
    <div class="grid grid-4">
      <?php foreach ($faculty as $i => $f): ?>
        <article class="card faculty-card reveal" data-delay="<?= ($i % 4) + 1 ?>">
          <img class="photo" src="<?= e($f['photo']) ?>" alt="<?= e($f['name']) ?>" loading="lazy">
          <div class="card-body">
            <h3><?= e($f['name']) ?></h3>
            <div class="role"><?= e($f['role']) ?></div>
            <div class="qual"><?= e($f['qual']) ?></div>
            <p class="bio"><?= e($f['bio']) ?></p>
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
        <span class="eyebrow"><?= icon('award') ?> Faculty Excellence</span>
        <h2>Teaching that connects to the real world</h2>
        <p>AFC faculty don't just lecture — they mentor. Small class sizes mean you'll work closely with instructors who know your name, your goals, and your work. Many continue to consult, research, and practice in their fields, bringing current insights into every course.</p>
        <div class="grid grid-2 mt-3">
          <div class="card card-flat" style="padding:1.25rem;background:var(--bg-soft)"><div class="text-brand fw-700" style="font-size:1.8rem;font-family:var(--font-display)">180+</div><div class="text-mute">Faculty members</div></div>
          <div class="card card-flat" style="padding:1.25rem;background:var(--bg-soft)"><div class="text-brand fw-700" style="font-size:1.8rem;font-family:var(--font-display)">68%</div><div class="text-mute">Hold a master's or PhD</div></div>
          <div class="card card-flat" style="padding:1.25rem;background:var(--bg-soft)"><div class="text-brand fw-700" style="font-size:1.8rem;font-family:var(--font-display)">15:1</div><div class="text-mute">Student-to-faculty ratio</div></div>
          <div class="card card-flat" style="padding:1.25rem;background:var(--bg-soft)"><div class="text-brand fw-700" style="font-size:1.8rem;font-family:var(--font-display)">40+</div><div class="text-mute">Industry partners</div></div>
        </div>
      </div>
      <img class="reveal" data-delay="2" src="https://images.pexels.com/photos/5212343/pexels-photo-5212343.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Faculty member teaching" style="border-radius:var(--r-xl);aspect-ratio:4/3;object-fit:cover;box-shadow:var(--shadow-lg)">
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('building') ?> Schools & Departments</span>
      <h2>Four faculties, eight departments</h2>
    </div>
    <div class="grid grid-4">
      <div class="feature reveal" data-delay="1"><span class="icon"><?= icon('cpu') ?></span><h3>Computing</h3><p>Computer Science, Information Technology</p></div>
      <div class="feature reveal" data-delay="2"><span class="icon"><?= icon('briefcase') ?></span><h3>Business</h3><p>Business Administration, Accounting & Finance</p></div>
      <div class="feature reveal" data-delay="3"><span class="icon"><?= icon('ruler') ?></span><h3>Engineering</h3><p>Civil Engineering, Architectural Drafting</p></div>
      <div class="feature reveal" data-delay="4"><span class="icon"><?= icon('heart') ?></span><h3>Health & Hospitality</h3><p>Nursing, Hospitality & Tourism</p></div>
    </div>
  </div>
</section>

<?= render_cta_band('Want to join our faculty?', "We're always looking for experienced educators and industry practitioners. Reach out to learn about open positions.", 'Contact HR', '/contact') ?>

<?php require __DIR__ . '/../includes/footer.php'; ?>
