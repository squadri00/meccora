<?php /* Sticky navbar. Relies on $NAV (from config.php) and $meta['slug']. */ ?>
<nav class="navbar navbar-expand-lg navbar-nexora fixed-top" aria-label="Primary">
  <div class="container">
    <a class="navbar-brand navbar-brand-custom d-flex align-items-center" href="<?= e(u('')) ?>">
      <img src="<?= e(asset('img/logo.png')) ?>" alt="Meccora" width="150" height="53" class="brand-logo">
    </a>
    <button class="navbar-toggler navbar-toggler-custom" type="button" data-bs-toggle="collapse"
            data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="bar"></span><span class="bar"></span><span class="bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-1 mt-3 mt-lg-0">
        <?php foreach ($NAV as $s => $label): ?>
          <li class="nav-item">
            <a class="nav-link nav2<?= ($meta['slug'] ?? '') === $s ? ' active' : '' ?>"
               href="<?= e(u($s)) ?>"<?= ($meta['slug'] ?? '') === $s ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
          </li>
        <?php endforeach; ?>
        <li class="nav-item">
          <a class="nav-link nav2" href="<?= e(LOGIN_URL) ?>">Log in</a>
        </li>
        <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
          <a href="<?= e(SIGNUP_URL) ?>" class="btn btn-primary btn-sm-custom w-100">Start free trial</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main id="main">
