<?php
require __DIR__ . '/partials/config.php';
$meta = [
    'slug'        => 'features',
    'title'       => 'Meccora Features — Reminders, Records & Revenue Tools',
    'description' => 'Every Meccora feature: 3-touch email & SMS service reminders, deferred-work recovery, customer & vehicle history, invoices, QR sign-up and a revenue pipeline dashboard.',
    'body_class'  => 'has-page-header',
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
$ph = [
    'title'    => 'Everything you need to keep customers coming back',
    'subtitle' => 'Meccora is one simple dashboard for customer records, automated follow-up and the revenue most shops leave on the table.',
    'crumb'    => 'Features',
];
require __DIR__ . '/partials/page-header.php';
?>

<!-- 1. REMINDERS -->
<section class="section">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 reveal">
        <span class="eyebrow">Automated reminders</span>
        <h2 class="section-title">Three reminders per service, sent for you</h2>
        <p class="section-subtitle mb-4">
          Every service you log schedules its own reminder sequence — 30 days before, 15 days
          before, and on the due date. Email is included on every plan; SMS is available on
          higher tiers. Each customer's messages go out in their language, English or French.
        </p>
        <ul class="list-check">
          <li><i class="bi bi-check"></i><div>Staff can reschedule or cancel any individual reminder.</div></li>
          <li><i class="bi bi-check"></i><div>Real-time SMS delivery status, with failed messages flagged on the dashboard.</div></li>
          <li><i class="bi bi-check"></i><div>Reminder emails are transactional — tied to a real service due date, not a marketing blast.</div></li>
          <li><i class="bi bi-check"></i><div>Customisable email templates so the wording sounds like your shop.</div></li>
        </ul>
      </div>
      <div class="col-lg-6 reveal">
        <div class="shot-frame">
          <div class="shot-frame__bar"><span></span><span></span><span></span></div>
          <img src="<?= e(asset('img/screenshots/reminders.png')) ?>" width="2880" height="1920"
               alt="Meccora reminders list with customer, vehicle, service, due date and delivery status columns">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2. DEFERRED WORK -->
<section class="section bg-soft">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 reveal order-lg-2">
        <span class="eyebrow">Deferred-work recovery</span>
        <h2 class="section-title">Declined jobs stay on the radar</h2>
        <p class="section-subtitle mb-4">
          When a customer says "not today" to recommended work, your tech flags it in the
          service record with an estimated value. Meccora keeps that job on your dashboard
          until someone follows up — so real money doesn't slip away in a paper note.
        </p>
        <ul class="list-check">
          <li><i class="bi bi-check"></i><div>Each deferred job shows the vehicle, what's needed, when it was flagged and its estimated value.</div></li>
          <li><i class="bi bi-check"></i><div>Values roll up into your pipeline number alongside upcoming due services.</div></li>
          <li><i class="bi bi-check"></i><div>Surface customers who haven't returned in 6–12 months before they're gone for good.</div></li>
        </ul>
      </div>
      <div class="col-lg-6 reveal order-lg-1">
        <div class="shot-frame">
          <div class="shot-frame__bar"><span></span><span></span><span></span></div>
          <img src="<?= e(asset('img/screenshots/deferred-work.png')) ?>" width="2880" height="1920"
               alt="Meccora deferred work list showing declined jobs, flagged dates and estimated values">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 3. HISTORY -->
<section class="section">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 reveal">
        <span class="eyebrow">Customer &amp; vehicle history</span>
        <h2 class="section-title">Every customer, vehicle and repair in one place</h2>
        <p class="section-subtitle mb-4">
          Store contact details, vehicles, VINs and the full service record for each car.
          Pull up a complete history in seconds — at the counter, on the phone, or in the bay.
        </p>
        <ul class="list-check">
          <li><i class="bi bi-check"></i><div>Import your existing customers and vehicles from a CSV — no re-typing.</div></li>
          <li><i class="bi bi-check"></i><div>VIN decoding to fill in vehicle details quickly.</div></li>
          <li><i class="bi bi-check"></i><div>Each service carries an estimated price and an actual cost, so your pipeline stays honest.</div></li>
        </ul>
      </div>
      <div class="col-lg-6 reveal">
        <div class="shot-frame">
          <div class="shot-frame__bar"><span></span><span></span><span></span></div>
          <img src="<?= e(asset('img/screenshots/vehicles.png')) ?>" width="2880" height="1920"
               alt="Meccora vehicles list with make, model, year, customer and last service">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4. DASHBOARD -->
<section class="section bg-soft">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 reveal order-lg-2">
        <span class="eyebrow">Revenue &amp; pipeline dashboard</span>
        <h2 class="section-title">Know what's coming, not just what happened</h2>
        <p class="section-subtitle mb-4">
          The dashboard rolls up total customers, registered vehicles, services this month,
          billed revenue and a projected pipeline figure — expected income from upcoming due
          services and deferred work.
        </p>
        <ul class="list-check">
          <li><i class="bi bi-check"></i><div>Reports for revenue, service completion, customer growth, retention and messaging engagement.</div></li>
          <li><i class="bi bi-check"></i><div>Alerts when reminder emails or texts fail to send.</div></li>
          <li><i class="bi bi-check"></i><div>Clear, printable summaries you can actually read at a glance.</div></li>
        </ul>
      </div>
      <div class="col-lg-6 reveal order-lg-1">
        <div class="shot-frame">
          <div class="shot-frame__bar"><span></span><span></span><span></span></div>
          <img src="<?= e(asset('img/screenshots/reports-pipeline.png')) ?>" width="2880" height="1920"
               alt="Meccora pipeline report showing projected revenue from due services and deferred work">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5 + 6. INVOICES + QR -->
<section class="section">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-6 reveal">
        <div class="card-premium h-100">
          <div class="icon-box icon-box-secondary mb-4"><i class="bi bi-receipt"></i></div>
          <h3 class="card-title">Invoices</h3>
          <p>Generate an invoice from any service record — line items, cost and tax — then print it
             or email it to the customer on file. Meccora keeps the record; you still take payment
             on your own terminal or gateway. It isn't a payment processor, and doesn't pretend to be.</p>
        </div>
      </div>
      <div class="col-lg-6 reveal">
        <div class="card-premium h-100">
          <div class="icon-box icon-box-success mb-4"><i class="bi bi-qr-code"></i></div>
          <h3 class="card-title">QR self-registration</h3>
          <p>Print one QR code for the front counter. Customers scan it, land on a registration page
             for your shop, and enter themselves and their vehicle directly — no staff data entry.
             It also counts as a documented SMS consent method, with method, timestamp and staff ID recorded.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PLANS -->
<section class="section bg-soft">
  <div class="container">
    <div class="row section-header justify-content-center text-center">
      <div class="col-lg-7 reveal">
        <span class="eyebrow">Plans</span>
        <h2 class="section-title">Three tiers, scaling with your shop</h2>
        <p class="section-subtitle mx-auto">Plans from <?= e(PRICE_FROM) ?>/mo <?= e(PRICE_CURRENCY) ?>. Full details and current pricing are shown when you start your free trial.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 reveal">
        <div class="pricing-card h-100">
          <h3 class="mb-1">Starter</h3>
          <p class="text-slate small mb-3">Solo mechanic or one-person shop.</p>
          <ul class="feature-list">
            <li><i class="bi bi-check-circle-fill"></i> Up to 500 customers</li>
            <li><i class="bi bi-check-circle-fill"></i> 1 staff login</li>
            <li><i class="bi bi-check-circle-fill"></i> Automated email reminders</li>
            <li><i class="bi bi-check-circle-fill"></i> Customer &amp; vehicle history, invoices, reports</li>
            <li class="disabled"><i class="bi bi-x-circle"></i> SMS reminders</li>
          </ul>
          <a href="<?= e(SIGNUP_URL) ?>" class="btn btn-light-custom w-100 mt-4">Get started</a>
        </div>
      </div>
      <div class="col-lg-4 reveal">
        <div class="pricing-card featured h-100">
          <span class="pricing-badge">Most popular</span>
          <h3 class="mb-1">Professional</h3>
          <p class="text-slate small mb-3">Small shop with reception staff.</p>
          <ul class="feature-list">
            <li><i class="bi bi-check-circle-fill"></i> Up to 1,000 customers</li>
            <li><i class="bi bi-check-circle-fill"></i> Up to 12 staff logins</li>
            <li><i class="bi bi-check-circle-fill"></i> Email reminders + 600 SMS / month</li>
            <li><i class="bi bi-check-circle-fill"></i> Everything in Starter</li>
          </ul>
          <a href="<?= e(SIGNUP_URL) ?>" class="btn btn-primary w-100 mt-4">Get started</a>
        </div>
      </div>
      <div class="col-lg-4 reveal">
        <div class="pricing-card h-100">
          <h3 class="mb-1">Enterprise</h3>
          <p class="text-slate small mb-3">Multi-bay shop with a full team.</p>
          <ul class="feature-list">
            <li><i class="bi bi-check-circle-fill"></i> Unlimited customers &amp; staff</li>
            <li><i class="bi bi-check-circle-fill"></i> Unlimited email + SMS reminders</li>
            <li><i class="bi bi-check-circle-fill"></i> Appointments, Marketing &amp; Inventory modules</li>
            <li><i class="bi bi-check-circle-fill"></i> Priority support</li>
          </ul>
          <a href="<?= e(u('contact')) ?>" class="btn btn-light-custom w-100 mt-4">Talk to us</a>
        </div>
      </div>
    </div>
    <p class="text-center text-slate small mt-4 reveal">Every plan starts with a 14-day free trial — no credit card. Checkout shows subtotal, tax and total before you pay.</p>
  </div>
</section>

<!-- ALSO INCLUDED -->
<section class="section">
  <div class="container">
    <div class="row section-header justify-content-center text-center">
      <div class="col-lg-7 reveal">
        <span class="eyebrow">Also included</span>
        <h2 class="section-title">The details that make it usable day one</h2>
      </div>
    </div>
    <div class="row g-4">
      <?php
      $extras = [
        ['bi-translate', 'English &amp; French', 'Per-customer language controls which language every reminder is sent in.'],
        ['bi-filetype-csv', 'CSV import', 'Bring your existing customers and vehicles across without manual entry.'],
        ['bi-database-check', 'Safe demo data', 'New accounts are seeded with demo customers and vehicles; a one-click cleanup wipes them when you go live.'],
        ['bi-envelope-paper', 'Email templates', 'Edit the wording of automated emails so they match your shop\'s voice.'],
        ['bi-shield-check', 'Audit logging', 'Key actions are logged, with role-based access for staff and owners.'],
        ['bi-bell-slash', 'Failure alerts', 'The dashboard tells you when a reminder email or SMS did not get through.'],
      ];
      foreach ($extras as [$icon, $t, $d]): ?>
        <div class="col-md-6 col-lg-4 reveal">
          <div class="feature-grid-item">
            <div class="benefit-icon"><i class="bi <?= $icon ?>"></i></div>
            <div><h3 class="card-title mb-1"><?= $t ?></h3><p class="mb-0 small"><?= $d ?></p></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-5 reveal">
      <a href="<?= e(SIGNUP_URL) ?>" class="btn btn-primary btn-lg-custom">Start your free trial <i class="bi bi-arrow-right ms-1"></i></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
