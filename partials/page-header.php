<?php
/**
 * Dark sub-page header. Set $ph before including:
 *   $ph = ['title' => 'Features', 'subtitle' => '...', 'crumb' => 'Features'];
 */
?>
<header class="page-header">
  <div class="container">
    <h1 class="mb-3"><?= e($ph['title'] ?? '') ?></h1>
    <?php if (!empty($ph['subtitle'])): ?>
      <p class="fs-5 mb-3" style="color:rgba(255,255,255,0.8); max-width:640px; margin-inline:auto;"><?= e($ph['subtitle']) ?></p>
    <?php endif; ?>
    <div class="breadcrumb-custom">
      <a href="<?= e(u('')) ?>">Home</a> <span>/</span> <span class="active"><?= e($ph['crumb'] ?? ($ph['title'] ?? '')) ?></span>
    </div>
  </div>
</header>
