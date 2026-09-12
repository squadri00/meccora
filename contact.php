<?php
require __DIR__ . '/partials/config.php';
$meta = [
    'slug'        => 'contact',
    'title'       => 'Contact Meccora — Support & Sales',
    'description' => 'Get in touch with the Meccora team — call ' . PHONE_DISPLAY . ', email ' . EMAIL . ', or send a message. Built and supported by Eformics Systems in Mississauga, Ontario.',
    'body_class'  => 'has-page-header',
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
$ph = [
    'title'    => 'Get in touch',
    'subtitle' => 'Questions about Meccora, want a walkthrough, or need a hand getting set up? We\'re happy to help.',
    'crumb'    => 'Contact',
];
require __DIR__ . '/partials/page-header.php';
?>

<!-- CONTACT CARDS -->
<section class="section pb-0">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4 reveal">
        <div class="card-premium text-center h-100">
          <div class="icon-box icon-box-primary mx-auto mb-3"><i class="bi bi-telephone"></i></div>
          <h3 class="card-title">Call us</h3>
          <p class="mb-0">Mon–Fri<br>
            <a href="tel:<?= e(PHONE_E164) ?>" class="text-primary-custom fw-semibold"><?= e(PHONE_DISPLAY) ?></a></p>
        </div>
      </div>
      <div class="col-md-4 reveal">
        <div class="card-premium text-center h-100">
          <div class="icon-box icon-box-secondary mx-auto mb-3"><i class="bi bi-envelope"></i></div>
          <h3 class="card-title">Email us</h3>
          <p class="mb-0">General &amp; support<br>
            <a href="mailto:<?= e(EMAIL) ?>" class="text-primary-custom fw-semibold"><?= e(EMAIL) ?></a></p>
        </div>
      </div>
      <div class="col-md-4 reveal">
        <div class="card-premium text-center h-100">
          <div class="icon-box icon-box-success mx-auto mb-3"><i class="bi bi-geo-alt"></i></div>
          <h3 class="card-title">Where we are</h3>
          <p class="mb-0"><?= e(COMPANY) ?><br><?= e(COMPANY_CITY) ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FORM -->
<section class="section">
  <div class="container">
    <div class="row gy-5 justify-content-center">
      <div class="col-lg-8 reveal">
        <span class="eyebrow">Send a message</span>
        <h2 class="section-title mb-2">Tell us about your shop</h2>
        <p class="section-subtitle mb-4">
          Fill this in and it will open in your email app, addressed to <?= e(EMAIL) ?>.
          Prefer to type it yourself? Just email us directly — we reply to every message.
        </p>
        <form action="mailto:<?= e(EMAIL) ?>" method="post" enctype="text/plain">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label" for="cName">Your name</label>
              <input type="text" class="form-control" id="cName" name="Name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="cShop">Shop name</label>
              <input type="text" class="form-control" id="cShop" name="Shop">
            </div>
            <div class="col-md-6">
              <label class="form-label" for="cEmail">Email</label>
              <input type="email" class="form-control" id="cEmail" name="Email" required>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="cPhone">Phone</label>
              <input type="tel" class="form-control" id="cPhone" name="Phone">
            </div>
            <div class="col-12">
              <label class="form-label" for="cTopic">How can we help?</label>
              <select class="form-select" id="cTopic" name="Topic">
                <option>I have a question about Meccora</option>
                <option>I'd like a walkthrough / demo</option>
                <option>I need help getting set up</option>
                <option>Billing or account</option>
                <option>Something else</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label" for="cMsg">Message</label>
              <textarea class="form-control" id="cMsg" name="Message" rows="5"
                        placeholder="A sentence or two about your shop and what you're looking for." required></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-lg-custom">Open in email <i class="bi bi-send ms-1"></i></button>
              <span class="ms-3 small text-slate">or write to
                <a href="mailto:<?= e(EMAIL) ?>" class="text-primary-custom fw-semibold"><?= e(EMAIL) ?></a></span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- MINI FAQ -->
<section class="section bg-soft">
  <div class="container">
    <div class="row section-header justify-content-center text-center">
      <div class="col-lg-7 reveal">
        <span class="eyebrow">Before you reach out</span>
        <h2 class="section-title">Quick answers</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8 reveal">
        <div class="accordion accordion-custom" id="contactFaq">
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cf1">Do I need to book a demo to try Meccora?</button></h2>
            <div id="cf1" class="accordion-collapse collapse show" data-bs-parent="#contactFaq"><div class="accordion-body">No. Start the 14-day free trial and explore it yourself with the demo data. If you'd like a guided walkthrough, mention it here and we'll set one up.</div></div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf2">Can you help me import my customers?</button></h2>
            <div id="cf2" class="accordion-collapse collapse" data-bs-parent="#contactFaq"><div class="accordion-body">Yes. Import is a CSV upload you can do yourself, and we're glad to help you format the file if you get stuck.</div></div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf3">How fast will I hear back?</button></h2>
            <div id="cf3" class="accordion-collapse collapse" data-bs-parent="#contactFaq"><div class="accordion-body">We aim to reply to every message within one business day.</div></div>
          </div>
        </div>
        <p class="text-center mt-4 mb-0"><a href="<?= e(u('faq')) ?>" class="card-link-arrow">See the full FAQ <i class="bi bi-arrow-right"></i></a></p>
      </div>
    </div>
  </div>
</section>

<?php
$meta['hide_cta'] = true;
require __DIR__ . '/partials/footer.php';
?>
