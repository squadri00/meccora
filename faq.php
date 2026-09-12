<?php
require __DIR__ . '/partials/config.php';

/* ---- FAQ content (also used to build FAQPage structured data) ---- */
$faq = [
  'Getting started, trial & pricing' => [
    ['Can I try it before paying?',
     'Yes — a 14-day free trial with full access and no credit card. Every new account is seeded with demo customers, vehicles and services so you can explore safely before adding real ones. A one-click cleanup tool wipes the demo data when you\'re ready to go live.'],
    ['How much does it cost?',
     'Plans start at ' . PRICE_FROM . '/mo ' . PRICE_CURRENCY . '. There are three tiers — Starter, Professional and Enterprise — scaling with your customer count, staff logins and SMS allowance. Full current pricing is shown when you start your trial.'],
    ['Is there a contract, or can I leave anytime?',
     'No contract. Cancel anytime — you keep access until the end of your current billing period.'],
    ['Are there any hidden fees?',
     'No. Checkout shows subtotal, tax and total before you pay — nothing is added afterwards.'],
    ['Is there a money-back guarantee?',
     'There is no formal refund policy. The safety net is the 14-day free trial with no card required, so you can fully evaluate Meccora before paying anything.'],
    ['Whose name shows up on my card statement?',
     COMPANY . ' — the company behind Meccora — which processes payments via Stripe.'],
    ['Can I bring in my existing customer list?',
     'Yes. Import your current customers and their vehicles from a CSV file — no manual re-typing.'],
    ['What happens when my trial ends?',
     'You\'re locked out with an upgrade prompt, but your data is untouched. You get warning emails first, and your data is kept for a while in case you decide to subscribe.'],
  ],
  'Account & subscription' => [
    ['Can I upgrade my plan?',
     'Yes, self-serve through the billing portal — pick a new tier and the price difference is charged immediately.'],
    ['Can I cancel my account?',
     'Yes. Cancelling schedules your subscription to end at the period end and blocks login once it takes effect. Your data is kept for a grace period in case you come back.'],
    ['Can I pause my account?',
     'There is no self-serve pause today. Suspension (which stops billing while paused) is currently handled by support rather than a button in your account.'],
    ['Can I use more than one language?',
     'Yes — English and French are supported per customer, controlling which language their reminder emails and texts go out in.'],
    ['Will my customers\' data be safe if I stop using Meccora?',
     'Yes. If you cancel, your data is not deleted right away — it is kept for a grace period in case you return, then removed later. Nothing is wiped the moment you leave.'],
  ],
  'Customers, vehicles & reminders' => [
    ['Can I control the timing of reminders?',
     'Yes. Each service auto-creates three reminder touches — 30 days before, 15 days before, and on the due date. Staff can reschedule or cancel any individual reminder.'],
    ['What is QR registration?',
     'A QR code you print and place at the counter. Customers scan it, land on a self-registration page for your shop, and enter themselves and their vehicle directly — no staff data entry. It also counts as a valid consent method for texting them.'],
    ['Can I create and send invoices?',
     'Yes. You can generate an invoice from a service record (line items, cost, tax) and print it or email it to the customer on file. Meccora is not a payment processor — you still take payment on your own terminal or gateway.'],
    ['Are the reminder emails and texts compliant?',
     'SMS: yes — built with documented consent methods (verbal, web form, QR registration), STOP/START opt-out handling, and formal carrier campaign registration with a live privacy policy and terms page. Email: reminders are transactional (service due dates), not marketing, so the strict marketing rules mostly don\'t apply — though there is no unsubscribe link in reminder emails yet.'],
  ],
  'Growing your business' => [
    ['How does Meccora actually make me more money?',
     'Three ways: automated reminders bring lapsed customers back before they go to a competitor; the deferred-work tracker resurfaces declined jobs (real money customers said "not today" to); and it surfaces customers who haven\'t returned in 6–12 months so you can reach out before they\'re gone.'],
    ['What is "deferred work"?',
     'When a customer declines recommended work — say $400 of brakes — staff flag it with an estimated value. It stays on your dashboard until you follow up, often with a small discount to close it. It\'s revenue sitting on the table, and the system won\'t let you forget it.'],
    ['How is pipeline revenue calculated?',
     'Every service record has an estimated price (expected future job value) and an actual cost (what was charged). The dashboard rolls these up into a pipeline figure — projected income from upcoming due services and deferred work.'],
    ['Does this replace me calling customers?',
     'No. Reminders are automatic, but the follow-up call on declined work is still you or your staff. Meccora makes sure it never falls through the cracks; the human call is what closes the job.'],
  ],
];

/* Build FAQPage schema from the same data */
$faqEntities = [];
foreach ($faq as $group) {
  foreach ($group as [$q, $a]) {
    $faqEntities[] = [
      '@type' => 'Question',
      'name'  => $q,
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($a)],
    ];
  }
}

$meta = [
    'slug'        => 'faq',
    'title'       => 'Meccora FAQ — Trial, Pricing, SMS & Setup',
    'description' => 'Answers on Meccora\'s free trial, pricing and plans, contracts, CSV import, reminder timing, SMS consent and compliance, and deferred-work recovery.',
    'body_class'  => 'has-page-header',
    'jsonld'      => json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'FAQPage',
        'mainEntity' => $faqEntities,
    ], JSON_UNESCAPED_SLASHES),
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
$ph = [
    'title'    => 'Frequently asked questions',
    'subtitle' => 'Everything shop owners ask before starting a trial. Still stuck? Call ' . PHONE_DISPLAY . '.',
    'crumb'    => 'FAQ',
];
require __DIR__ . '/partials/page-header.php';
?>

<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <?php $gi = 0; foreach ($faq as $groupName => $items): $gi++; ?>
          <div class="faq-group reveal">
            <div class="faq-group__label"><?= e($groupName) ?></div>
            <div class="accordion accordion-custom" id="faqGroup<?= $gi ?>">
              <?php foreach ($items as $ii => [$q, $a]): $id = "faq{$gi}_{$ii}"; $open = ($gi === 1 && $ii === 0); ?>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button<?= $open ? '' : ' collapsed' ?>" type="button"
                            data-bs-toggle="collapse" data-bs-target="#<?= $id ?>"
                            aria-expanded="<?= $open ? 'true' : 'false' ?>" aria-controls="<?= $id ?>">
                      <?= e($q) ?>
                    </button>
                  </h2>
                  <div id="<?= $id ?>" class="accordion-collapse collapse<?= $open ? ' show' : '' ?>" data-bs-parent="#faqGroup<?= $gi ?>">
                    <div class="accordion-body"><?= $a ?></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>

        <div class="card-premium text-center mt-5 reveal">
          <h2 class="section-title">Still have a question?</h2>
          <p class="mb-4">Call us at <a href="tel:<?= e(PHONE_E164) ?>" class="text-primary-custom fw-semibold"><?= e(PHONE_DISPLAY) ?></a>
             or send a message and we'll get back to you.</p>
          <div class="d-flex flex-wrap gap-3 justify-content-center">
            <a href="<?= e(u('contact')) ?>" class="btn btn-light-custom btn-lg-custom">Contact us</a>
            <a href="<?= e(SIGNUP_URL) ?>" class="btn btn-primary btn-lg-custom">Start free trial</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
