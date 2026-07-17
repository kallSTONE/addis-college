<?php
$pageTitle = 'About — Addis Future College';
$pageDesc = 'Founded in 2008 E.C., Addis Future College is a private college in Addis Ababa committed to accessible, industry-relevant education.';
$stats = stats_data();
require __DIR__ . '/../includes/header.php';
?>
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?= url('') ?>">Home</a><span>/</span> About</div>
    <span class="eyebrow"><?= icon('info') ?> Our Story</span>
    <h1>Building Ethiopia's future, one graduate at a time</h1>
    <p>Since 2008 E.C., Addis Future College has grown from a small TVET institute into one of Addis Ababa's most respected private colleges — known for industry-aligned programs and a deep commitment to student success.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid" style="grid-template-columns:1.1fr .9fr;gap:3rem;align-items:center">
      <div class="reveal">
        <span class="eyebrow"><?= icon('compass') ?> Mission</span>
        <h2>To expand access to high-quality, relevant education</h2>
        <p>We exist to prepare students from across Ethiopia for meaningful careers and civic leadership — combining strong academics with practical skills, mentorship, and values of integrity, excellence, and service.</p>
        <p>Our graduates are found in banks, hospitals, tech firms, construction companies, and startups across the country — and increasingly, abroad.</p>
        <div class="flex gap-2 wrap mt-3">
          <a href="<?= url('programs') ?>" class="btn btn-primary">Our Programs</a>
          <a href="<?= url('faculty') ?>" class="btn btn-ghost">Meet the Faculty</a>
        </div>
      </div>
      <img class="reveal" data-delay="2" src="https://images.pexels.com/photos/207692/pexels-photo-207692.jpeg?auto=compress&cs=tinysrgb&w=800" alt="AFC campus" style="border-radius:var(--r-xl);box-shadow:var(--shadow-lg);aspect-ratio:4/3;object-fit:cover">
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('target') ?> Mission & Values</span>
      <h2>What guides us</h2>
    </div>
    <div class="grid grid-4">
      <div class="feature reveal" data-delay="1"><span class="icon"><?= icon('award') ?></span><h3>Excellence</h3><p>We hold ourselves and our students to high academic and professional standards in everything we do.</p></div>
      <div class="feature reveal" data-delay="2"><span class="icon"><?= icon('shield') ?></span><h3>Integrity</h3><p>Honesty, transparency, and ethical conduct are non-negotiable in our community and our work.</p></div>
      <div class="feature reveal" data-delay="3"><span class="icon"><?= icon('users') ?></span><h3>Inclusion</h3><p>We welcome students from every region and background, and support them with scholarships and mentorship.</p></div>
      <div class="feature reveal" data-delay="4"><span class="icon"><?= icon('rocket') ?></span><h3>Innovation</h3><p>We continuously update our curriculum and invest in technology to keep our graduates ahead of the curve.</p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('clock') ?> Our Journey</span>
      <h2>A timeline of growth</h2>
    </div>
    <div class="grid" style="grid-template-columns:1fr 1fr;gap:3rem;align-items:start">
      <div class="timeline reveal">
        <div class="timeline-item"><div class="when">2008 E.C.</div><h3>Founded</h3><p>Addis Future College opens its doors with three TVET diploma programs and 120 students.</p></div>
        <div class="timeline-item"><div class="when">2011 E.C.</div><h3>Degree Programs</h3><p>AFC earns accreditation to offer BSc Computer Science and BA Business Administration.</p></div>
        <div class="timeline-item"><div class="when">2014 E.C.</div><h3>New Main Campus</h3><p>Relocates to a purpose-built campus on Bole Road with modern labs and library.</p></div>
        <div class="timeline-item"><div class="when">2016 E.C.</div><h3>Faculty Expansion</h3><p>Civil Engineering and Nursing programs launch; faculty grows to 180+.</p></div>
        <div class="timeline-item"><div class="when">2025 E.C.</div><h3>Digital Campus</h3><p>Announces a connected suite of digital portals for students, faculty, and alumni.</p></div>
      </div>
      <div class="reveal" data-delay="2">
        <img src="https://images.pexels.com/photos/1597756/pexels-photo-1597756.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Graduation" style="border-radius:var(--r-xl);aspect-ratio:4/5;object-fit:cover;width:100%;box-shadow:var(--shadow-lg)">
        <div class="card mt-3" style="padding:1.5rem">
          <h3>By the numbers</h3>
          <div class="grid grid-2 mt-2">
            <?php foreach ($stats as $s): ?>
              <div><div class="text-brand fw-700" style="font-size:1.6rem;font-family:var(--font-display)"><?= e($s['value']) ?></div><div class="text-mute" style="font-size:.85rem"><?= e($s['label']) ?></div></div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('building') ?> Leadership</span>
      <h2>Our leadership team</h2>
      <p>Experienced educators and administrators guiding AFC's mission.</p>
    </div>
    <div class="grid grid-4">
      <article class="card faculty-card reveal" data-delay="1"><img class="photo" src="https://images.pexels.com/photos/5212317/pexels-photo-5212317.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Dr. Selamawit Bekele"><div class="card-body"><h3>Dr. Selamawit Bekele</h3><div class="role">President</div><div class="qual">PhD, Computer Science</div></div></article>
      <article class="card faculty-card reveal" data-delay="2"><img class="photo" src="https://images.pexels.com/photos/8961065/pexels-photo-8961065.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Dr. Abebe Mengistu"><div class="card-body"><h3>Dr. Abebe Mengistu</h3><div class="role">Vice President, Academic</div><div class="qual">PhD, Business Administration</div></div></article>
      <article class="card faculty-card reveal" data-delay="3"><img class="photo" src="https://images.pexels.com/photos/5212701/pexels-photo-5212701.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Ms. Almaz Worku"><div class="card-body"><h3>Ms. Almaz Worku</h3><div class="role">Registrar & Admissions</div><div class="qual">MA, Education Leadership</div></div></article>
      <article class="card faculty-card reveal" data-delay="4"><img class="photo" src="https://images.pexels.com/photos/5212695/pexels-photo-5212695.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Mr. Tewodros Alemu"><div class="card-body"><h3>Mr. Tewodros Alemu</h3><div class="role">Director of Operations</div><div class="qual">MBA, Operations Management</div></div></article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid" style="grid-template-columns:1fr 1fr;gap:2.5rem;align-items:center">
      <img class="reveal" src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Accreditation" style="border-radius:var(--r-xl);aspect-ratio:4/3;object-fit:cover;box-shadow:var(--shadow-lg)">
      <div class="reveal" data-delay="2">
        <span class="eyebrow"><?= icon('shield') ?> Accreditation</span>
        <h2>Recognized and accredited</h2>
        <p>Addis Future College is accredited by the Higher Education Strategic Center (HESC) for degree programs and by the Federal TVET Agency for diploma programs. Our qualifications are recognized across Ethiopia and accepted by partner universities abroad.</p>
        <ul style="list-style:none;display:grid;gap:.6rem;margin:1rem 0">
          <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> HESC degree accreditation (2011 E.C.)</li>
          <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Federal TVET Agency certification</li>
          <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> MoU with Addis Ababa Science & Technology University</li>
          <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Member, Ethiopian Private Higher Education Association</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?= render_cta_band('Want to learn more about AFC?', 'Visit our campus, meet our faculty, and see what makes Addis Future College different.', 'Book a Campus Tour', '/contact') ?>

<?php require __DIR__ . '/../includes/footer.php'; ?>
