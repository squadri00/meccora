<?php
require __DIR__ . '/partials/config.php';
$meta = [
    'slug'        => '',
    'title'       => 'Meccora — Service Reminder Software for Auto Repair Shops',
    'description' => 'Service-reminder software and a simple CRM for independent auto repair shops: automated email & SMS reminders, vehicle history and a revenue dashboard. Free 14-day trial.',
    'jsonld'      => json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'SoftwareApplication',
        'name'     => 'Meccora Workshop Manager',
        'applicationCategory' => 'BusinessApplication',
        'operatingSystem'     => 'Web',
        'description' => 'Customer records and automated service reminders for independent auto repair shops.',
        'offers' => [
            '@type' => 'Offer',
            'price' => '60',
            'priceCurrency' => 'CAD',
            'description' => 'Starter plan, billed monthly. 14-day free trial, no credit card required.',
            'url' => SIGNUP_URL,
        ],
        'publisher' => ['@type' => 'Organization', 'name' => COMPANY],
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT),
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>

<!-- HERO -->
<header class="hero">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 hero-content">
        <span class="eyebrow">For independent auto repair shops</span>
        <h1 class="mb-4">Your customers don't forget your shop.<br>
          <span class="text-primary-custom">They forget their next service.</span></h1>
        <p class="fs-5 mb-4" style="max-width: 560px;">
          Meccora keeps every customer connected to your shop with automated email and SMS
          reminders, complete vehicle history, and follow-ups for the work they put off —
          so more of them come back to you instead of the shop down the road.
        </p>
        <div class="d-flex flex-wrap gap-3 mb-4 justify-content-lg-start justify-content-center">
          <a href="<?= e(SIGNUP_URL) ?>" class="btn btn-primary btn-lg-custom">Start your 14-day free trial <i class="bi bi-arrow-right ms-1"></i></a>
          <a href="<?= e(u('how-it-works')) ?>" class="btn btn-light-custom btn-lg-custom">See how it works</a>
        </div>
        <div class="trust-inline justify-content-lg-start justify-content-center">
          <span><i class="bi bi-check-circle-fill"></i> No credit card required</span>
          <span><i class="bi bi-check-circle-fill"></i> No contract — cancel anytime</span>
          <span><i class="bi bi-check-circle-fill"></i> Plans from <?= e(PRICE_FROM) ?>/mo <?= e(PRICE_CURRENCY) ?></span>
        </div>
      </div>
      <div class="col-lg-6">
        <!-- No .reveal here: this is the hero screenshot, visible the
             instant the page loads -- animating it in only delayed LCP.
             Also swapped to a resized WebP (2880x1920 PNG -> 1600x1067
             WebP, 517 KB -> 110 KB): the column renders it at well under
             1600px wide, so the original was ~5x more pixels than any
             browser could use. -->
        <div class="shot-frame">
          <div class="shot-frame__bar"><span></span><span></span><span></span></div>
          <img src="<?= e(asset('img/screenshots/dashboard.webp')) ?>" width="1600" height="1067"
               alt="Meccora dashboard showing customer count, registered vehicles, estimated pipeline revenue, reminders due and deferred work">
        </div>
      </div>
    </div>
  </div>
</header>

<!-- VIDEOS -->
<section class="section-sm bg-white border-bottom">
  <div class="container">
    <div class="row g-4 g-lg-5 justify-content-center">
      <!-- Click-to-load facades, not live iframes: a real YouTube embed
           boots its player script on every pageview whether anyone
           watches or not. assets/js/main.js swaps in the real iframe
           (autoplay) only when the button is clicked. -->
      <div class="col-md-6 reveal">
        <div class="ratio ratio-16x9 mb-3">
          <button type="button" class="video-facade" data-video-id="I3OTcjoSRm0"
                  aria-label="Play Meccora Introduction"
                  style="background-image:url('https://i.ytimg.com/vi/I3OTcjoSRm0/hqdefault.jpg')">
            <span class="play-btn" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
            </span>
          </button>
        </div>
        <h2 class="h5 mb-0">Meccora Introduction</h2>
        <p class="mb-0 small text-slate">A two-minute overview of how the platform works.</p>
      </div>
      <div class="col-md-6 reveal">
        <div class="ratio ratio-16x9 mb-3">
          <button type="button" class="video-facade" data-video-id="Yz0Z60RmdWw"
                  aria-label="Play Meccora QR Registration"
                  style="background-image:url('https://i.ytimg.com/vi/Yz0Z60RmdWw/hqdefault.jpg')">
            <span class="play-btn" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
            </span>
          </button>
        </div>
        <h2 class="h5 mb-0">QR Self-Registration</h2>
        <p class="mb-0 small text-slate">How customers add themselves and their vehicle at the counter.</p>
      </div>
    </div>
  </div>
</section>

<!-- PROBLEM / SOLUTION -->
<section class="section">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 reveal">
        <div class="shot-frame">
          <div class="shot-frame__bar"><span></span><span></span><span></span></div>
          <img src="<?= e(asset('img/screenshots/reminders.webp')) ?>" width="1600" height="1067"
               alt="Meccora reminders screen listing upcoming service reminders with due dates and delivery status">
        </div>
      </div>
      <div class="col-lg-6 reveal">
        <span class="eyebrow">The problem</span>
        <h2 class="section-title">Follow-up is the first thing to slip on a busy day</h2>
        <p class="section-subtitle mb-4">
          Most independent shops are focused on today's cars. There's rarely time to call
          customers when their next oil change, brake service or inspection is due — so they
          drift, forget, and eventually book somewhere else.
        </p>
        <ul class="list-check mb-4">
          <li><i class="bi bi-check"></i><div><strong class="text-navy">Every logged service schedules its own reminders</strong> — 30 days before, 15 days before, and on the due date.</div></li>
          <li><i class="bi bi-check"></i><div><strong class="text-navy">Declined work doesn't disappear.</strong> Flag it once and Meccora keeps it on your dashboard until you follow up.</div></li>
          <li><i class="bi bi-check"></i><div><strong class="text-navy">Lapsed customers resurface.</strong> See who hasn't been in for 6–12 months before they're gone for good.</div></li>
        </ul>
        <a href="<?= e(u('how-it-works')) ?>" class="card-link-arrow">See how it works <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES OVERVIEW -->
<section class="section bg-soft">
  <div class="container">
    <div class="row section-header align-items-end">
      <div class="col-lg-7 reveal">
        <span class="eyebrow">What you get</span>
        <h2 class="section-title">Everything a small shop needs to keep customers — and nothing it doesn't</h2>
        <p class="section-subtitle">One simple dashboard for records, reminders and the revenue you're leaving on the table.</p>
      </div>
      <div class="col-lg-5 text-lg-end mt-3 mt-lg-0 reveal">
        <a href="<?= e(u('features')) ?>" class="card-link-arrow">Explore all features <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4 reveal">
        <div class="card-premium h-100">
          <div class="icon-box icon-box-primary mb-4"><i class="bi bi-bell"></i></div>
          <h3 class="card-title">Automated reminders</h3>
          <p class="mb-0">Email on every plan, SMS on higher tiers. Three touches per service, sent in English or French, with real-time delivery status and failure alerts.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 reveal">
        <div class="card-premium h-100">
          <div class="icon-box icon-box-secondary mb-4"><i class="bi bi-arrow-counterclockwise"></i></div>
          <h3 class="card-title">Deferred-work recovery</h3>
          <p class="mb-0">When a customer declines recommended work, staff flag it with an estimated value. It stays on the dashboard as real money to win back — not a note that gets lost.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 reveal">
        <div class="card-premium h-100">
          <div class="icon-box icon-box-success mb-4"><i class="bi bi-clock-history"></i></div>
          <h3 class="card-title">Customer &amp; vehicle history</h3>
          <p class="mb-0">Every customer, vehicle, VIN and past service in one place. Pull up a full history in seconds at the counter or on the phone.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 reveal">
        <div class="card-premium h-100">
          <div class="icon-box icon-box-primary mb-4"><i class="bi bi-graph-up-arrow"></i></div>
          <h3 class="card-title">Revenue &amp; pipeline dashboard</h3>
          <p class="mb-0">See customers, vehicles, services this month, billed revenue and projected income from upcoming due services and deferred work — at a glance.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 reveal">
        <div class="card-premium h-100">
          <div class="icon-box icon-box-secondary mb-4"><i class="bi bi-receipt"></i></div>
          <h3 class="card-title">Invoices</h3>
          <p class="mb-0">Generate, print or email an invoice from any service record — line items, cost and tax. You still take payment on your own terminal; Meccora keeps the record.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 reveal">
        <div class="card-premium h-100">
          <div class="icon-box icon-box-success mb-4"><i class="bi bi-qr-code"></i></div>
          <h3 class="card-title">QR self-registration</h3>
          <p class="mb-0">Print one QR code for the counter. Customers scan it and enter themselves and their vehicle — no staff data entry, and it counts as a valid SMS consent method.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DEEPER LOOK -->
<section class="section">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 reveal order-lg-2">
        <div class="shot-frame">
          <div class="shot-frame__bar"><span></span><span></span><span></span></div>
          <img src="<?= e(asset('img/screenshots/deferred-work.webp')) ?>" width="1600" height="1067"
               alt="Meccora deferred work list showing declined jobs, the vehicle, when it was flagged and its estimated value">
        </div>
      </div>
      <div class="col-lg-6 reveal order-lg-1">
        <span class="eyebrow">Revenue you already earned</span>
        <h2 class="section-title">Turn "not today" into next month's booking</h2>
        <p class="section-subtitle mb-4">
          A customer declines $400 of brake work. Your tech flags it in the service record with an
          estimated value. Meccora keeps it visible until someone calls them back — often with a
          small discount to close it. It's revenue sitting on the table, and the system won't let
          you forget it.
        </p>
        <ul class="list-check">
          <li><i class="bi bi-check"></i><div>Every deferred job carries an estimated value that rolls into your pipeline number.</div></li>
          <li><i class="bi bi-check"></i><div>Reminders are automatic; the follow-up call is still your team — Meccora just makes sure it happens.</div></li>
          <li><i class="bi bi-check"></i><div>Works alongside your existing tools — nothing to rip out, no workflow to relearn.</div></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="section bg-soft">
  <div class="container">
    <div class="row section-header justify-content-center text-center">
      <div class="col-lg-7 reveal">
        <span class="eyebrow">How it works</span>
        <h2 class="section-title">Up and running the same day</h2>
        <p class="section-subtitle mx-auto">No installation, no integration project. Meccora works alongside whatever you use now.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3 reveal">
        <div class="process-step">
          <span class="process-number">01</span>
          <h3 class="card-title">Add your shop</h3>
          <p>Set your business details, services and reminder timing. Import your existing customers and vehicles from a CSV — no re-typing.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal">
        <div class="process-step">
          <span class="process-number">02</span>
          <h3 class="card-title">Log a service</h3>
          <p>Record the work, the cost, and the next service date. Flag anything the customer declined so it doesn't get lost.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal">
        <div class="process-step">
          <span class="process-number">03</span>
          <h3 class="card-title">Meccora follows up</h3>
          <p>Reminders go out automatically at 30 days, 15 days and on the due date — in the customer's language, by email or SMS.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 reveal">
        <div class="process-step">
          <span class="process-number">04</span>
          <h3 class="card-title">They come back</h3>
          <p>Watch bookings, deferred work and pipeline revenue on your dashboard — and see exactly which reminders landed.</p>
        </div>
      </div>
    </div>
    <div class="text-center mt-5 reveal">
      <a href="<?= e(u('how-it-works')) ?>" class="btn btn-light-custom btn-lg-custom">Walk through it step by step</a>
    </div>
  </div>
</section>

<!-- COMPLIANCE / TRUST -->
<section class="section bg-soft">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-5 reveal">
        <span class="eyebrow">Messaging done right</span>
        <h2 class="section-title">Texting your customers, without the compliance headache</h2>
        <p class="section-subtitle">
          Meccora's SMS is built for transactional service notifications — not mass marketing —
          with the consent records and opt-out handling regulators expect.
        </p>
      </div>
      <div class="col-lg-7 reveal">
        <div class="row g-4">
          <div class="col-sm-6">
            <div class="d-flex gap-3">
              <div class="benefit-icon"><i class="bi bi-clipboard-check"></i></div>
              <div><h3 class="card-title mb-1">Documented consent</h3><p class="mb-0 small">Verbal, web form or QR registration — each with method, timestamp and the staff member who recorded it.</p></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex gap-3">
              <div class="benefit-icon"><i class="bi bi-hand-index-thumb"></i></div>
              <div><h3 class="card-title mb-1">STOP / START opt-out</h3><p class="mb-0 small">Customers can opt out any time by reply; staff can log in-person or phone opt-outs too.</p></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex gap-3">
              <div class="benefit-icon"><i class="bi bi-translate"></i></div>
              <div><h3 class="card-title mb-1">English &amp; French</h3><p class="mb-0 small">Each customer's reminders go out in their chosen language.</p></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex gap-3">
              <div class="benefit-icon"><i class="bi bi-shield-lock"></i></div>
              <div><h3 class="card-title mb-1">PIPEDA-aligned</h3><p class="mb-0 small">Designed for Canadian privacy law, with a published privacy policy and terms.</p></div>
            </div>
          </div>
        </div>
        <p class="mt-4 mb-0 small"><a href="<?= e(u('sms-policy')) ?>" class="card-link-arrow">Read the SMS policy <i class="bi bi-arrow-right"></i></a></p>
      </div>
    </div>
  </div>
</section>

<!-- PRICING TEASER -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 reveal">
        <span class="eyebrow">Simple pricing</span>
        <h2 class="section-title">Plans from <?= e(PRICE_FROM) ?>/mo <?= e(PRICE_CURRENCY) ?></h2>
        <p class="section-subtitle mx-auto mb-4">
          Three tiers — Starter, Professional and Enterprise — scaling with your customer count,
          staff logins and SMS. Every plan starts with a 14-day free trial. No credit card,
          no contract, and checkout shows subtotal, tax and total before you pay.
        </p>
        <a href="<?= e(SIGNUP_URL) ?>" class="btn btn-primary btn-lg-custom">Get started free <i class="bi bi-arrow-right ms-1"></i></a>
        <p class="mt-3 mb-0 small text-slate">See full plan details when you start your trial.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ PREVIEW -->
<section class="section bg-soft">
  <div class="container">
    <div class="row section-header justify-content-center text-center">
      <div class="col-lg-7 reveal">
        <span class="eyebrow">Common questions</span>
        <h2 class="section-title">Good to know before you start</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8 reveal">
        <div class="accordion accordion-custom" id="homeFaq">
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#hf1">Can I try it before paying?</button></h2>
            <div id="hf1" class="accordion-collapse collapse show" data-bs-parent="#homeFaq"><div class="accordion-body">Yes — a 14-day free trial with full access and no credit card. Every new account is seeded with demo customers and vehicles so you can explore safely, then a one-click cleanup wipes the demo data when you're ready to go live.</div></div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hf2">Is there a contract?</button></h2>
            <div id="hf2" class="accordion-collapse collapse" data-bs-parent="#homeFaq"><div class="accordion-body">No. Cancel anytime from the billing portal — you keep access until the end of your current billing period.</div></div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hf3">Can I bring my existing customer list?</button></h2>
            <div id="hf3" class="accordion-collapse collapse" data-bs-parent="#homeFaq"><div class="accordion-body">Yes. Import your current customers and their vehicles from a CSV file — no manual re-typing.</div></div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hf4">Does it replace my existing system?</button></h2>
            <div id="hf4" class="accordion-collapse collapse" data-bs-parent="#homeFaq"><div class="accordion-body">No — Meccora works alongside whatever you use now. Most shops use it as the layer that handles customer records and follow-up.</div></div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hf5">Whose name is on my card statement?</button></h2>
            <div id="hf5" class="accordion-collapse collapse" data-bs-parent="#homeFaq"><div class="accordion-body"><?= e(COMPANY) ?> — the company behind Meccora — processes payments via Stripe.</div></div>
          </div>
        </div>
        <div class="text-center mt-4"><a href="<?= e(u('faq')) ?>" class="card-link-arrow">Read the full FAQ <i class="bi bi-arrow-right"></i></a></div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
