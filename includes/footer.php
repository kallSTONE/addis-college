</main>
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="<?= url('') ?>" class="brand">
          <img src="<?= asset('Images/Logo (2).png') ?>" alt="<?= e(SITE_NAME) ?>" class="brand-logo">
        </a>
        <p>A premier private college in Addis Ababa preparing Ethiopia's next generation of professionals, entrepreneurs, and leaders.</p>
        <div class="social-row">
          <a href="<?= e(SOCIAL_FACEBOOK) ?>" aria-label="Facebook"><?= icon('facebook') ?></a>
          <a href="<?= e(SOCIAL_TWITTER) ?>" aria-label="Twitter"><?= icon('twitter') ?></a>
          <a href="<?= e(SOCIAL_LINKEDIN) ?>" aria-label="LinkedIn"><?= icon('linkedin') ?></a>
          <a href="<?= e(SOCIAL_YOUTUBE) ?>" aria-label="YouTube"><?= icon('youtube') ?></a>
          <a href="<?= e(SOCIAL_TELEGRAM) ?>" aria-label="Telegram"><?= icon('send') ?></a>
        </div>
      </div>
      <div>
        <h4>Explore</h4>
        <ul class="footer-links">
          <li><a href="<?= url('about') ?>">About Us</a></li>
          <li><a href="<?= url('programs') ?>">Programs</a></li>
          <li><a href="<?= url('admissions') ?>">Admissions</a></li>
          <li><a href="<?= url('faculty') ?>">Faculty</a></li>
          <li><a href="<?= url('news') ?>">News & Events</a></li>
          <li><a href="<?= url('gallery') ?>">Gallery</a></li>
        </ul>
      </div>
      <div>
        <h4>Portals</h4>
        <ul class="footer-links">
          <li><a href="<?= url('portals/student') ?>">Student Portal</a></li>
          <li><a href="<?= url('portals/lecturer') ?>">Lecturer Portal</a></li>
          <li><a href="<?= url('portals/payments') ?>">Online Payments</a></li>
          <li><a href="<?= url('portals/lms') ?>">Learning Management</a></li>
          <li><a href="<?= url('portals/ai') ?>">AI Assistant</a></li>
          <li><a href="<?= url('portals/alumni') ?>">Alumni Portal</a></li>
          <li><a href="<?= url('portals/mobile') ?>">Mobile App</a></li>
        </ul>
      </div>
      <div>
        <h4>Contact</h4>
        <ul class="footer-contact">
          <li><?= icon('map-pin') ?><span><?= e(CONTACT_ADDRESS) ?></span></li>
          <li><?= icon('phone') ?><span><?= e(CONTACT_PHONE) ?></span></li>
          <li><?= icon('mail') ?><span><?= e(CONTACT_EMAIL) ?></span></li>
          <li><?= icon('clock') ?><span><?= e(CONTACT_HOURS) ?></span></li>
        </ul>
        <a href="<?= url('apply') ?>" class="btn btn-gold btn-block mt-2">Apply Online</a>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. All rights reserved.</span>
      <span>Accredited by the Higher Education Strategic Center (HESC) &amp; TVET Agency.</span>
    </div>
  </div>
</footer>
<div class="lightbox" aria-hidden="true">
  <button class="close" aria-label="Close">&times;</button>
  <img src="" alt="">
</div>
<script src="<?= asset('js/app.js') ?>"></script>
</body>
</html>
