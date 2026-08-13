<?php
$pageTitle = 'Apply Online — Addis Future College';
$pageDesc = 'Apply online to Addis Future College. Choose your program, submit your details, and our admissions team will be in touch.';
require_once __DIR__ . '/../config/db.php';
$programs = programs_data();
require __DIR__ . '/../includes/header.php';
   
$submitted = false;
$error = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $f = [
        'first_name' => trim($_POST['first_name'] ?? ''),
        'last_name'  => trim($_POST['last_name'] ?? ''),
        'email'      => trim($_POST['email'] ?? ''),
        'phone'      => trim($_POST['phone'] ?? ''),
        'dob'        => trim($_POST['dob'] ?? ''),
        'gender'     => trim($_POST['gender'] ?? ''),
        'program'    => trim($_POST['program'] ?? ''),
        'intake'     => trim($_POST['intake'] ?? ''),
        'address'    => trim($_POST['address'] ?? ''),
        'city'       => trim($_POST['city'] ?? ''),
        'region'     => trim($_POST['region'] ?? ''),
        'school'     => trim($_POST['school'] ?? ''),
        'gpa'        => trim($_POST['gpa'] ?? ''),
        'notes'      => trim($_POST['notes'] ?? ''),
    ];
    if ($f['first_name'] && $f['last_name'] && filter_var($f['email'], FILTER_VALIDATE_EMAIL) && $f['phone'] && $f['program']) {
        insert_record('applications', $f + ['ip' => $_SERVER['REMOTE_ADDR'] ?? '']);
        $submitted = true;
    } else {
        $error = true;
    }
}
?>
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?= url('') ?>">Home</a><span>/</span> Apply Online</div>
    <span class="eyebrow"><?= icon('check-circle') ?> Admissions</span>
    <h1>Apply online in minutes</h1>
    <p>Complete the form below to start your application. Our admissions team will review and contact you within five business days.</p>
  </div>
</section>

<section class="section">
  <div class="container narrow">
    <?php if ($submitted): ?>
      <div class="form-card center reveal in">
        <span style="color:var(--brand-600);display:inline-flex;width:72px;height:72px;border-radius:50%;background:var(--brand-50);align-items:center;justify-content:center;margin-bottom:1rem"><?= icon('check-circle') ?></span>
        <h2>Application received!</h2>
        <p class="text-mute">Thank you for applying to Addis Future College. A confirmation email is on its way, and our admissions team will be in touch within five business days.</p>
        <div class="flex gap-2 wrap center mt-3">
          <a href="<?= url('') ?>" class="btn btn-primary">Back to home</a>
          <a href="<?= url('programs') ?>" class="btn btn-ghost">Browse programs</a>
        </div>
      </div>
    <?php else: ?>
      <div class="form-card reveal">
        <h2>Application form</h2>
        <p class="text-mute">Fields marked with <span style="color:var(--error)">*</span> are required.</p>
        <?php if ($error): ?>
          <div class="alert alert-error"><?= icon('alert') ?> <div>Please complete all required fields with a valid email and phone number.</div></div>
        <?php endif; ?>
        <form method="post" data-validate>
          <h3 style="font-size:1.05rem;margin-top:1.5rem;color:var(--brand-800)">Personal information</h3>
          <div class="form-grid">
            <div class="field"><label>First name <span class="req">*</span></label><input type="text" name="first_name" required><span class="error-msg">Required.</span></div>
            <div class="field"><label>Last name <span class="req">*</span></label><input type="text" name="last_name" required><span class="error-msg">Required.</span></div>
            <div class="field"><label>Email <span class="req">*</span></label><input type="email" name="email" required><span class="error-msg">Valid email required.</span></div>
            <div class="field"><label>Phone <span class="req">*</span></label><input type="tel" name="phone" required placeholder="+251 ..."><span class="error-msg">Valid phone required.</span></div>
            <div class="field"><label>Date of birth</label><input type="date" name="dob"></div>
            <div class="field"><label>Gender</label><select name="gender"><option value="">Prefer not to say</option><option>Female</option><option>Male</option><option>Other</option></select></div>
          </div>

          <h3 style="font-size:1.05rem;margin-top:1.5rem;color:var(--brand-800)">Program selection</h3>
          <div class="form-grid">
            <div class="field full">
              <label>Program of interest <span class="req">*</span></label>
              <select name="program" required>
                <option value="">Select a program</option>
                <?php foreach ($programs as $p): ?>
                  <option value="<?= e($p['title']) ?>"><?= e($p['title']) ?> — <?= e($p['level']) ?> (<?= e($p['duration']) ?>)</option>
                <?php endforeach; ?>
              </select>
              <span class="error-msg">Please choose a program.</span>
            </div>
            <div class="field full">
              <label>Intake</label>
              <select name="intake">
                <option>Fall 2026 (September)</option>
                <option>Spring 2027 (January)</option>
                <option>Summer 2027</option>
              </select>
            </div>
          </div>

          <h3 style="font-size:1.05rem;margin-top:1.5rem;color:var(--brand-800)">Address</h3>
          <div class="form-grid">
            <div class="field full"><label>Street address</label><input type="text" name="address"></div>
            <div class="field"><label>City</label><input type="text" name="city"></div>
            <div class="field"><label>Region</label><input type="text" name="region" placeholder="e.g. Addis Ababa"></div>
          </div>

          <h3 style="font-size:1.05rem;margin-top:1.5rem;color:var(--brand-800)">Academic background</h3>
          <div class="form-grid">
            <div class="field full"><label>Last school attended</label><input type="text" name="school" placeholder="High school or college"></div>
            <div class="field full"><label>GPA / Result</label><input type="text" name="gpa" placeholder="e.g. 3.4 or 350"></div>
            <div class="field full"><label>Additional notes</label><textarea name="notes" rows="4" placeholder="Anything else we should know?"></textarea></div>
          </div>

          <label class="flex items-center gap-2 mt-3" style="font-size:.9rem;color:var(--text-soft)">
            <input type="checkbox" required style="width:auto">
            <span>I confirm the information provided is accurate and I agree to be contacted by Addis Future College.</span>
          </label>

          <button type="submit" class="btn btn-primary btn-lg btn-block mt-3"><?= icon('check-circle') ?> Submit Application</button>
          <p class="hint mt-2 center">By submitting, you agree to our admissions policies. A non-refundable ETB 500 application fee is payable after review.</p>
        </form>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
