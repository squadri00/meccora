<?php
require __DIR__ . '/partials/config.php';
$meta = [
    'slug'        => 'how-it-works',
    'title'       => 'How Meccora Works — Setup to First Reminder',
    'description' => 'Add your shop, import customers by CSV, log a service — then automated reminders at 30, 15 and 0 days bring customers back. Live the same day, no integration.',
    'body_class'  => 'has-page-header',
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
$ph = [
    'title'    => 'From sign-up to first reminder in an afternoon',
    'subtitle' => 'Meccora runs alongside whatever you use now. There is nothing to install and no integration to build.',
    'crumb'    => 'How it works',
];
require __DIR__ . '/partials/page-header.php';
?>

<!-- STEPS -->
<section class="section">
  <div class="container">

    <div class="row align-items-center gy-5 mb-5 pb-lg-4">
      <div class="col-lg-6 reveal">
        <span class="process-number">01</span>
        <h2 class="section-title">Add your shop</h2>
        <p class="section-subtitle mb-4">
          Create your account and enter your business details, the services you offer, and how
          far ahead you want reminders to go out. Set default service intervals once and Meccora
          applies them from then on.
        </p>
        <ul class="list-check">
          <li><i class="bi bi-check"></i><div>Add staff logins with the right level of access.</div></li>
          <li><i class="bi bi-check"></i><div>Brand your reminder emails with your shop name and wording.</div></li>
          <li><i class="bi bi-check"></i><div>Choose English or French per customer.</div></li>
        </ul>
      </div>
      <div class="col-lg-6 reveal">
        <div class="shot-frame">
          <div class="shot-frame__bar"><span></span><span></span><span></span></div>
          <img src="<?= e(asset('img/screenshots/customers.png')) ?>" width="2880" height="1920"
               alt="Meccora customers list for a shop, ready for import or manual entry">
        </div>
      </div>
    </div>

    <div class="row align-items-center gy-5 mb-5 pb-lg-4">
      <div class="col-lg-6 reveal order-lg-2">
        <span class="process-number">02</span>
        <h2 class="section-title">Bring your customers in</h2>
        <p class="section-subtitle mb-4">
          Import your existing customer list and their vehicles from a CSV file — no manual
          re-typing. Prefer to let customers do it? Print your shop's QR code for the counter and
          they register themselves and their vehicle directly.
        </p>
        <ul class="list-check">
          <li><i class="bi bi-check"></i><div>Every new account starts with demo data so you can practise safely.</div></li>
          <li><i class="bi bi-check"></i><div>A one-click cleanup wipes the demo records when you're ready to go live.</div></li>
          <li><i class="bi bi-check"></i><div>QR registration doubles as a documented SMS consent method.</div></li>
        </ul>
      </div>
      <div class="col-lg-6 reveal order-lg-1">
        <div class="shot-frame">
          <div class="shot-frame__bar"><span></span><span></span><span></span></div>
          <img src="<?= e(asset('img/screenshots/vehicles.png')) ?>" width="2880" height="1920"
               alt="Meccora vehicles list populated after a CSV import">
        </div>
      </div>
    </div>

    <div class="row align-items-center gy-5 mb-5 pb-lg-4">
      <div class="col-lg-6 reveal">
        <span class="process-number">03</span>
        <h2 class="section-title">Log each service</h2>
        <p class="section-subtitle mb-4">
          After a job, record the work, the cost, and the next service date. If the customer
          declined recommended work, flag it with an estimated value so it lands on your
          deferred-work list instead of being forgotten.
        </p>
        <ul class="list-check">
          <li><i class="bi bi-check"></i><div>Each service auto-creates its reminder sequence: 30 days, 15 days, day-of.</div></li>
          <li><i class="bi bi-check"></i><div>Estimated price vs. actual cost keeps your pipeline projection realistic.</div></li>
          <li><i class="bi bi-check"></i><div>Generate an invoice straight from the service record when you need one.</div></li>
        </ul>
      </div>
      <div class="col-lg-6 reveal">
        <div class="shot-frame">
          <div class="shot-frame__bar"><span></span><span></span><span></span></div>
          <img src="<?= e(asset('img/screenshots/deferred-work.png')) ?>" width="2880" height="1920"
               alt="Deferred work captured from logged services, with estimated values">
        </div>
      </div>
    </div>

    <div class="row align-items-center gy-5">
      <div class="col-lg-6 reveal order-lg-2">
        <span class="process-number">04</span>
        <h2 class="section-title">Meccora does the follow-up</h2>
        <p class="section-subtitle mb-4">
          Reminders go out automatically on schedule, in each customer's language, by email or
          SMS. You watch bookings, deferred work and pipeline revenue on the dashboard — and see
          exactly which messages were delivered.
        </p>
        <ul class="list-check">
          <li><i class="bi bi-check"></i><div>Real-time SMS delivery status; failed messages are flagged for you.</div></li>
          <li><i class="bi bi-check"></i><div>Staff can reschedule or cancel any individual reminder.</div></li>
          <li><i class="bi bi-check"></i><div>The follow-up call on big deferred jobs is still your team — Meccora just makes sure it happens.</div></li>
        </ul>
      </div>
      <div class="col-lg-6 reveal order-lg-1">
        <div class="shot-frame">
          <div class="shot-frame__bar"><span></span><span></span><span></span></div>
          <img src="<?= e(asset('img/screenshots/dashboard.png')) ?>" width="2880" height="1920"
               alt="Meccora dashboard with reminders due, deferred work and pipeline revenue">
        </div>
      </div>
    </div>

  </div>
</section>

<!-- VIDEO -->
<section class="section bg-soft">
  <div class="container">
    <div class="row section-header justify-content-center text-center">
      <div class="col-lg-7 reveal">
        <span class="eyebrow">Watch it</span>
        <h2 class="section-title">The same flow, in two minutes</h2>
      </div>
    </div>
    <div class="row justify-content-center reveal">
      <div class="col-lg-9">
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/I3OTcjoSRm0?rel=0&showinfo=0"
                  title="Meccora Workshop Manager overview" loading="lazy"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHAT IT ISN'T -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9 reveal">
        <div class="card-premium">
          <h2 class="section-title">A few honest limits</h2>
          <ul class="list-check mb-0">
            <li><i class="bi bi-check"></i><div><strong class="text-navy">It's not a payment processor.</strong> Invoices are for your records; you take payment on your own terminal or gateway.</div></li>
            <li><i class="bi bi-check"></i><div><strong class="text-navy">It doesn't make the calls for you.</strong> Reminders are automatic; the follow-up call on declined work is your team's.</div></li>
            <li><i class="bi bi-check"></i><div><strong class="text-navy">Reminder emails have no unsubscribe link yet.</strong> They're transactional service notices; SMS has full STOP/START opt-out.</div></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
