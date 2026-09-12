<?php
/**
 * Long-form legal page renderer. Before including, set:
 *   $legal = [
 *     'effective' => 'July 8, 2026',
 *     'intro'     => 'Lead paragraph...',
 *     'sections'  => [
 *        ['h' => '1. Introduction', 'p' => ['para one', 'para two'], 'ul' => ['item', 'item']],
 *        ...
 *     ],
 *   ];
 * And $ph (page-header) + $meta as usual.
 */
require __DIR__ . '/page-header.php';
?>
<section class="section">
  <div class="container">
    <div class="legal-content mx-auto reveal">
      <?php if (!empty($legal['effective'])): ?>
        <p class="lead-meta mb-4">Effective date: <?= e($legal['effective']) ?></p>
      <?php endif; ?>
      <?php if (!empty($legal['intro'])): ?>
        <p class="fs-5"><?= e($legal['intro']) ?></p>
      <?php endif; ?>

      <?php foreach ($legal['sections'] as $s): ?>
        <h2><?= e($s['h']) ?></h2>
        <?php foreach (($s['p'] ?? []) as $para): ?>
          <p><?= e($para) ?></p>
        <?php endforeach; ?>
        <?php if (!empty($s['ul'])): ?>
          <ul>
            <?php foreach ($s['ul'] as $li): ?><li><?= e($li) ?></li><?php endforeach; ?>
          </ul>
        <?php endif; ?>
      <?php endforeach; ?>

      <h2>Contact</h2>
      <p>
        Meccora, by <?= e(COMPANY) ?><br>
        Email: <a href="mailto:<?= e(EMAIL) ?>"><?= e(EMAIL) ?></a><br>
        Web: <a href="<?= e(COMPANY_SITE) ?>" target="_blank" rel="noopener"><?= e(COMPANY_SITE) ?></a>
      </p>

      <hr class="my-4">
      <p class="lead-meta">
        Related:
        <a href="<?= e(u('privacy')) ?>">Privacy Policy</a> &middot;
        <a href="<?= e(u('terms')) ?>">Terms of Use</a> &middot;
        <a href="<?= e(u('sms-policy')) ?>">SMS Policy</a> &middot;
        <a href="<?= e(u('sms-consent')) ?>">SMS Consent Process</a>
      </p>
    </div>
  </div>
</section>
<?php
$meta['hide_cta'] = true;
require __DIR__ . '/footer.php';
