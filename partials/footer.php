</main>

<!-- Pre-footer CTA (shared) -->
<?php if (empty($meta['hide_cta'])): ?>
<section class="section">
  <div class="container">
    <div class="cta-section reveal">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="mb-2">Bring more customers back — automatically</h2>
          <p class="mb-0 fs-5">Start a 14-day free trial. No credit card, no contract, cancel anytime.
            Plans from <?= e(PRICE_FROM) ?>/mo <?= e(PRICE_CURRENCY) ?>.</p>
        </div>
        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
          <a href="<?= e(SIGNUP_URL) ?>" class="btn btn-primary btn-lg-custom">Start free trial <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<footer class="footer-nexora">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6">
        <img src="<?= e(asset('img/logo.png')) ?>" alt="Meccora" width="150" height="53" class="brand-logo brand-logo--invert mb-3">
        <p class="text-white-50 mb-4" style="max-width:340px;">
          Meccora keeps independent auto repair shops connected to every customer —
          automated service reminders, full vehicle history, and the follow-ups that turn
          one visit into a lasting relationship.
        </p>
        <p class="text-white-50 small mb-1"><i class="bi bi-telephone me-2"></i><a href="tel:<?= e(PHONE_E164) ?>"><?= e(PHONE_DISPLAY) ?></a></p>
        <p class="text-white-50 small mb-0"><i class="bi bi-envelope me-2"></i><a href="mailto:<?= e(EMAIL) ?>"><?= e(EMAIL) ?></a></p>
      </div>
      <div class="col-lg-2 col-md-6 col-6">
        <h6>Product</h6>
        <a href="<?= e(u('features')) ?>">Features</a>
        <a href="<?= e(u('how-it-works')) ?>">How it works</a>
        <a href="<?= e(u('faq')) ?>">FAQ</a>
        <a href="<?= e(SIGNUP_URL) ?>">Start free trial</a>
        <a href="<?= e(LOGIN_URL) ?>">Log in</a>
      </div>
      <div class="col-lg-2 col-md-6 col-6">
        <h6>Company</h6>
        <a href="<?= e(u('about')) ?>">About</a>
        <a href="<?= e(u('contact')) ?>">Contact</a>
        <a href="<?= e(COMPANY_SITE) ?>" target="_blank" rel="noopener"><?= e(COMPANY) ?></a>
      </div>
      <div class="col-lg-4 col-md-6">
        <h6>Legal &amp; messaging</h6>
        <a href="<?= e(u('privacy')) ?>">Privacy Policy</a>
        <a href="<?= e(u('terms')) ?>">Terms of Use</a>
        <a href="<?= e(u('sms-policy')) ?>">SMS Policy</a>
        <a href="<?= e(u('sms-consent')) ?>">SMS Consent Process</a>
      </div>
    </div>
    <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 text-center text-md-start">
      <p class="mb-0">&copy; <?= COMPANY_SINCE ?>&ndash;<?= date('Y') ?> Meccora by <?= e(COMPANY) ?>. All rights reserved.</p>
      <p class="mb-0 text-white-50 small"><?= e(COMPANY_CITY) ?></p>
    </div>
  </div>
</footer>

<button class="back-to-top" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= e(asset('js/main.js')) ?>"></script>
</body>
</html>
