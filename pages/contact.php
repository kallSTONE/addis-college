<?php
$pageTitle = 'Contact — Addis Future College';
$pageDesc = 'Get in touch with Addis Future College. Visit our campus, email admissions, or send us a message.';
require_once __DIR__ . '/../config/db.php';
require __DIR__ . '/../includes/header.php';

$submitted = false;
$error = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {
        insert_record('contact_messages', [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'message' => $message,
            'ip' => $_SERVER['REMOTE_ADDR'] ?? '',
        ]);
        $submitted = true;
    } else {
        $error = true;
    }
}
?>
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?= url('') ?>">Home</a><span>/</span> Contact</div>
    <span class="eyebrow"><?= icon('mail') ?> Get in Touch</span>
    <h1>We'd love to hear from you</h1>
    <p>Questions about admissions, programs, campus visits, or partnerships? Our team is ready to help.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid" style="grid-template-columns:1fr 1.3fr;gap:2.5rem;align-items:start">
      <div class="reveal">
        <h2>Contact information</h2>
        <p class="text-mute">Reach out by phone, email, or visit us in person. Office hours are Monday to Friday, 8:30 AM to 5:00 PM EAT.</p>
        <div class="card mt-3" style="padding:1.5rem">
          <div class="flex items-center gap-2 mb-3">
            <span style="color:var(--brand-700)"><?= icon('map-pin') ?></span>
            <div><strong>Campus Address</strong><p style="margin:.25rem 0 0"><?= e(CONTACT_ADDRESS) ?></p></div>
          </div>
          <hr class="divider" style="margin:1rem 0">
          <div class="flex items-center gap-2 mb-3">
            <span style="color:var(--brand-700)"><?= icon('phone') ?></span>
            <div><strong>Phone</strong><p style="margin:.25rem 0 0"><?= e(CONTACT_PHONE) ?></p></div>
          </div>
          <hr class="divider" style="margin:1rem 0">
          <div class="flex items-center gap-2 mb-3">
            <span style="color:var(--brand-700)"><?= icon('mail') ?></span>
            <div><strong>Email</strong><p style="margin:.25rem 0 0"><?= e(CONTACT_EMAIL) ?></p></div>
          </div>
          <hr class="divider" style="margin:1rem 0">
          <div class="flex items-center gap-2">
            <span style="color:var(--brand-700)"><?= icon('clock') ?></span>
            <div><strong>Office Hours</strong><p style="margin:.25rem 0 0"><?= e(CONTACT_HOURS) ?></p></div>
          </div>
        </div>
        <div class="card mt-3" style="padding:1.5rem">
          <h3 style="font-size:1.05rem">Admissions Office</h3>
          <p class="text-mute" style="font-size:.92rem">For application questions, scholarships, and program information.</p>
          <p style="margin:0"><strong>Mr. Dawit Bekele</strong><br>admissions@addisfuture.edu.et<br>+251 11 234 5679</p>
        </div>
        <div class="social-row mt-3">
          <a href="<?= e(SOCIAL_FACEBOOK) ?>" aria-label="Facebook"><?= icon('facebook') ?></a>
          <a href="<?= e(SOCIAL_TWITTER) ?>" aria-label="Twitter"><?= icon('twitter') ?></a>
          <a href="<?= e(SOCIAL_LINKEDIN) ?>" aria-label="LinkedIn"><?= icon('linkedin') ?></a>
          <a href="<?= e(SOCIAL_YOUTUBE) ?>" aria-label="YouTube"><?= icon('youtube') ?></a>
          <a href="<?= e(SOCIAL_TELEGRAM) ?>" aria-label="Telegram"><?= icon('send') ?></a>
        </div>
      </div>

      <div class="reveal" data-delay="2">
        <div class="form-card">
          <h2>Send us a message</h2>
          <p class="text-mute">We typically respond within one business day.</p>
          <?php if ($submitted): ?>
            <div class="alert alert-success" data-auto-dismiss><?= icon('check-circle') ?> <div><strong>Thank you!</strong> Your message has been received. We'll be in touch shortly.</div></div>
          <?php elseif ($error): ?>
            <div class="alert alert-error"><?= icon('alert') ?> <div>Please complete all required fields with a valid email address.</div></div>
          <?php endif; ?>
          <form method="post" data-validate>
            <div class="form-grid">
              <div class="field">
                <label>Full name <span class="req">*</span></label>
                <input type="text" name="name" required>
                <span class="error-msg">Please enter your name.</span>
              </div>
              <div class="field">
                <label>Email <span class="req">*</span></label>
                <input type="email" name="email" required>
                <span class="error-msg">Please enter a valid email.</span>
              </div>
              <div class="field">
                <label>Phone</label>
                <input type="tel" name="phone">
              </div>
              <div class="field">
                <label>Subject</label>
                <select name="subject">
                  <option>Admissions inquiry</option>
                  <option>Program information</option>
                  <option>Campus visit</option>
                  <option>Partnership</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="field full">
                <label>Message <span class="req">*</span></label>
                <textarea name="message" rows="5" required></textarea>
                <span class="error-msg">Please enter a message.</span>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block mt-3"><?= icon('send') ?> Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= icon('map-pin') ?> Find Us</span>
      <h2>Our location</h2>
    </div>
    <div class="card" style="overflow:hidden">
      <iframe
        title="Addis Future College location"
        src="https://www.openstreetmap.org/export/embed.html?bbox=38.76%2C8.99%2C38.80%2C9.01&layer=mapnik&marker=9.0046,38.7821"
        style="width:100%;height:420px;border:0;display:block" loading="lazy"></iframe>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
