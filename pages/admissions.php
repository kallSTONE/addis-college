<?php
$pageTitle = 'Admissions — Addis Future College';
$pageDesc = 'How to apply to Addis Future College: requirements, deadlines, tuition, scholarships, and the step-by-step admissions process.';
require __DIR__ . '/../includes/header.php';
?>   
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?= url('') ?>">Home</a><span>/</span> Admissions</div>
    <span class="eyebrow"><?= icon('check-circle') ?> Admissions</span>
    <h1>Your journey to AFC starts here</h1>
    <p>Whether you're a recent high school graduate or a working professional, we make admissions straightforward — with clear requirements, helpful advisors, and scholarships for those who need them.</p>
    <div class="flex gap-2 wrap mt-3">
      <a href="<?= url('apply') ?>" class="btn btn-gold btn-lg"><?= icon('arrow-right') ?> Apply Online</a>
      <a href="#process" class="btn btn-outline-light btn-lg">See the process</a>
    </div>
  </div>    
</section>
  
<section class="section" id="process">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('compass') ?> The Process </span>
      <h2>Four simple steps to enrollment</h2>
    </div>
    <div class="grid grid-4">
      <div class="feature reveal" data-delay="1"><span class="icon" style="font-family:var(--font-display);font-weight:800;font-size:1.4rem">01</span><h3>Submit Application</h3><p>Complete the online application form with your details, program of choice, and academic history.</p></div>
      <div class="feature reveal" data-delay="2"><span class="icon" style="font-family:var(--font-display);font-weight:800;font-size:1.4rem">02</span><h3>Submit Documents</h3><p>Provide transcripts, ID, and any required test scores. Our team reviews within 5 business days.</p></div>
      <div class="feature reveal" data-delay="3"><span class="icon" style="font-family:var(--font-display);font-weight:800;font-size:1.4rem">03</span><h3>Interview & Offer</h3><p>Some programs require a short interview. Qualified applicants receive an admission offer.</p></div>
      <div class="feature reveal" data-delay="4"><span class="icon" style="font-family:var(--font-display);font-weight:800;font-size:1.4rem">04</span><h3>Enroll & Register</h3><p>Accept your offer, pay the enrollment deposit, register for courses, and join orientation week.</p></div>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container">
    <div class="grid" style="grid-template-columns:1fr 1fr;gap:2.5rem;align-items:start">
      <div class="reveal">
        <span class="eyebrow"><?= icon('check') ?> Requirements</span>
        <h2>Entry requirements</h2>
        <div class="card mt-3" style="padding:1.5rem">
          <h3 style="font-size:1.05rem">Degree programs</h3>
          <ul style="list-style:none;display:grid;gap:.5rem;margin-top:.75rem">
            <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Ethiopian University Entrance Examination pass</li>
            <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Minimum GPA 2.0 (or equivalent)</li>
            <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Grade 12 transcript & certificate</li>
            <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Valid ID or passport</li>
            <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Two recent passport photos</li>
          </ul>
        </div>
        <div class="card mt-2" style="padding:1.5rem">
          <h3 style="font-size:1.05rem">TVET diploma programs</h3>
          <ul style="list-style:none;display:grid;gap:.5rem;margin-top:.75rem">
            <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Grade 10 completion (EGECE)</li>
            <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Minimum overall grade "C"</li>
            <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Valid ID or passport</li>
            <li class="flex items-center gap-2"><?= icon('check-circle','text-brand') ?> Two recent passport photos</li>
          </ul>
        </div>
      </div>
      <div class="reveal" data-delay="2">
        <span class="eyebrow"><?= icon('calendar') ?> Key Dates</span>
        <h2>2025/26 E.C. admissions calendar</h2>
        <div class="timeline mt-3">
          <div class="timeline-item"><div class="when">Now open</div><h3>Applications open</h3><p>Online applications for all programs are being accepted on a rolling basis.</p></div>
          <div class="timeline-item"><div class="when">Aug 9, 2026</div><h3>Open Day</h3><p>Campus tours, faculty meet-and-greet, and sample lectures for prospective students.</p></div>
          <div class="timeline-item"><div class="when">Sep 1, 2026</div><h3>Early decision deadline</h3><p>Apply by this date for priority scholarship consideration.</p></div>
          <div class="timeline-item"><div class="when">Sep 21, 2026</div><h3>Fall semester begins</h3><p>Orientation week for all new and returning students.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('award') ?> Tuition & Aid</span>
      <h2>Affordable, transparent tuition</h2>
      <p>We invest in scholarships and flexible payment plans so finances don't stand between you and your degree.</p>
    </div>
    <div class="grid grid-3">
      <div class="card reveal" data-delay="1"><div class="card-body"><h3>Merit Scholarships</h3><p class="text-brand fw-700" style="font-size:1.8rem">25–100%</p><p>Tuition coverage for top applicants based on academic performance.</p></div></div>
      <div class="card reveal" data-delay="2"><div class="card-body"><h3>Need-Based Aid</h3><p class="text-brand fw-700" style="font-size:1.8rem">10–75%</p><p>Grants for students demonstrating financial need, with simple documentation.</p></div></div>
      <div class="card reveal" data-delay="3"><div class="card-body"><h3>Payment Plans</h3><p class="text-brand fw-700" style="font-size:1.8rem">3–4×</p><p>Split tuition across the semester with no interest. Online payments coming soon.</p></div></div>
    </div>
    <div class="card mt-4 reveal" style="padding:1.5rem;background:var(--brand-50);border-color:var(--brand-200)">
      <div class="flex items-center gap-2">
        <span style="color:var(--brand-700)"><?= icon('info') ?></span>
        <p style="margin:0;color:var(--brand-800)">Tuition varies by program. See each <a href="<?= url('programs') ?>" style="color:var(--brand-700);text-decoration:underline">program page</a> for annual tuition figures, or contact our admissions office for a personalized quote.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container narrow">
    <div class="section-head">
      <span class="eyebrow"><?= icon('info') ?> FAQ</span>
      <h2>Admissions questions</h2>
    </div>
    <div class="accordion">
      <div class="accordion-item"><button class="accordion-head">When should I apply? <span class="chev"><?= icon('chevron-down') ?></span></button><div class="accordion-body"><div class="inner">Applications are reviewed on a rolling basis. We recommend applying at least three months before your intended start date to allow time for document review, scholarship decisions, and enrollment.</div></div></div>
      <div class="accordion-item"><button class="accordion-head">Is there an application fee? <span class="chev"><?= icon('chevron-down') ?></span></button><div class="accordion-body"><div class="inner">Yes, a non-refundable application fee of ETB 500 is payable when you submit your application. It is waived for applicants from partner schools and scholarship programs.</div></div></div>
      <div class="accordion-item"><button class="accordion-head">Do you accept international students? <span class="chev"><?= icon('chevron-down') ?></span></button><div class="accordion-body"><div class="inner">Yes. International applicants should provide equivalent qualifications and a valid passport. Contact admissions@addisfuture.edu.et for guidance on equivalency and visa support.</div></div></div>
      <div class="accordion-item"><button class="accordion-head">Can I defer my admission? <span class="chev"><?= icon('chevron-down') ?></span></button><div class="accordion-body"><div class="inner">Admitted students may defer enrollment for up to one academic year without reapplying. Notify the Registrar's Office in writing to confirm your deferral.</div></div></div>
    </div>
  </div>
</section>

<?= render_cta_band('Ready to apply?', 'Start your online application today — it takes about 15 minutes.', 'Apply Online', '/apply') ?>

<?php require __DIR__ . '/../includes/footer.php'; ?>
