<?php
require __DIR__ . '/partials/config.php';
$meta = [
    'slug'        => 'about',
    'title'       => 'About Meccora — Built by Eformics Systems',
    'description' => 'Meccora is made by Eformics Systems, a Mississauga, Ontario software company founded in 2009 that builds simple, reliable tools for small and mid-sized businesses.',
    'body_class'  => 'has-page-header',
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
$ph = [
    'title'    => 'Practical software for shops that keep the lights on',
    'subtitle' => 'Meccora is made by Eformics Systems — a small Canadian software company that builds tools businesses actually use.',
    'crumb'    => 'About',
];
require __DIR__ . '/partials/page-header.php';
?>

<section class="section">
  <div class="container">
    <div class="row gy-5">
      <div class="col-lg-7 reveal">
        <span class="eyebrow">Who we are</span>
        <h2 class="section-title">Eformics Systems</h2>
        <p>
          Established in <?= COMPANY_SINCE ?> in <?= e(COMPANY_CITY) ?>, Eformics Systems develops
          practical digital tools that help businesses run smoother and present themselves
          professionally. Our approach is straightforward: build reliable software, keep it simple,
          and help businesses work more effectively.
        </p>
        <p>
          Meccora is our flagship product — a software-as-a-service platform for independent auto
          repair shops. Alongside it we design and build websites and custom tools for businesses
          that need no-fuss, dependable software.
        </p>
        <p class="mb-0">
          <a href="<?= e(COMPANY_SITE) ?>" target="_blank" rel="noopener" class="card-link-arrow">
            Visit eformics.com <i class="bi bi-box-arrow-up-right"></i></a>
        </p>
      </div>
      <div class="col-lg-5 reveal">
        <div class="card-premium h-100">
          <div class="icon-box icon-box-primary mb-4"><i class="bi bi-compass"></i></div>
          <h3 class="card-title">Our mission</h3>
          <p class="mb-0">
            To build simple, reliable and effective digital tools that help small and medium
            businesses — without the bloat, lock-in or jargon.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="stats-strip py-5 bg-white">
  <div class="container">
    <div class="row text-center g-4">
      <div class="col-6 col-md-3 stat-item reveal">
        <div class="stat-number gradient"><?= COMPANY_SINCE ?></div>
        <div class="stat-label">Year Eformics Systems<br>was established</div>
      </div>
      <div class="col-6 col-md-3 stat-item reveal">
        <div class="stat-number gradient">CA</div>
        <div class="stat-label">Based in Mississauga,<br>Ontario, Canada</div>
      </div>
      <div class="col-6 col-md-3 stat-item reveal">
        <div class="stat-number gradient">PIPEDA</div>
        <div class="stat-label">Privacy practices aligned<br>with Canadian law</div>
      </div>
      <div class="col-6 col-md-3 stat-item reveal">
        <div class="stat-number gradient">Stripe</div>
        <div class="stat-label">Billing handled securely<br>by <?= e(COMPANY) ?></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 reveal">
        <span class="eyebrow">Why we built Meccora</span>
        <h2 class="section-title">Repair shops had no affordable way to keep in touch</h2>
        <p>
          Independent shops do great work, then lose customers to silence. There's no time in the
          day to call everyone whose next service is due, and the customers who slip away rarely
          announce it — they just book somewhere else next time.
        </p>
        <p class="mb-0">
          Meccora exists to close that gap: track the customer and vehicle history, automate the
          reminders, and resurface the declined work and the customers who've gone quiet — so a
          small shop can compete on relationships, not just walk-ins.
        </p>
      </div>
      <div class="col-lg-6 reveal">
        <ul class="list-check mb-0">
          <li><i class="bi bi-check"></i><div><strong class="text-navy">Focused, not bloated.</strong> Two roles, one dashboard, the features a small shop actually uses.</div></li>
          <li><i class="bi bi-check"></i><div><strong class="text-navy">Honest billing.</strong> 14-day free trial with no card, no contract, and tax shown before you pay.</div></li>
          <li><i class="bi bi-check"></i><div><strong class="text-navy">Compliance built in.</strong> Documented SMS consent, STOP/START opt-out and carrier registration.</div></li>
          <li><i class="bi bi-check"></i><div><strong class="text-navy">Your data stays yours.</strong> Export any time; cancelled accounts are kept for a grace period, not wiped instantly.</div></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section bg-soft">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 reveal">
        <span class="eyebrow">Talk to a person</span>
        <h2 class="section-title">Questions about your shop?</h2>
        <p class="section-subtitle mx-auto mb-4">
          We're a small team and happy to help you work out whether Meccora fits.
        </p>
        <div class="d-flex flex-wrap gap-3 justify-content-center">
          <a href="tel:<?= e(PHONE_E164) ?>" class="btn btn-light-custom btn-lg-custom"><i class="bi bi-telephone me-2"></i><?= e(PHONE_DISPLAY) ?></a>
          <a href="<?= e(u('contact')) ?>" class="btn btn-primary btn-lg-custom">Contact us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
