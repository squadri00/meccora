<?php
require __DIR__ . '/partials/config.php';
http_response_code(404);
$meta = [
    'slug'        => '404',
    'title'       => 'Page Not Found — Meccora',
    'description' => 'That page moved or does not exist. Head back to the Meccora homepage, or explore Features, How it works and the FAQ.',
    'robots'      => 'noindex, follow',
    'body_class'  => 'has-page-header',
    'hide_cta'    => true,
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<header class="page-header">
  <div class="container">
    <h1 class="mb-3">Page not found</h1>
    <p class="fs-5 mb-0" style="color:rgba(255,255,255,0.8);">That page moved or never existed.</p>
  </div>
</header>
<section class="section">
  <div class="container text-center reveal">
    <p class="section-subtitle mx-auto mb-4">Try one of these instead:</p>
    <div class="d-flex flex-wrap gap-3 justify-content-center">
      <a href="<?= e(u('')) ?>" class="btn btn-primary btn-lg-custom">Home</a>
      <a href="<?= e(u('features')) ?>" class="btn btn-light-custom btn-lg-custom">Features</a>
      <a href="<?= e(u('how-it-works')) ?>" class="btn btn-light-custom btn-lg-custom">How it works</a>
      <a href="<?= e(u('faq')) ?>" class="btn btn-light-custom btn-lg-custom">FAQ</a>
      <a href="<?= e(u('contact')) ?>" class="btn btn-light-custom btn-lg-custom">Contact</a>
    </div>
  </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
