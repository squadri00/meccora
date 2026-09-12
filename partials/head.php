<?php
/**
 * <head> + opening <body>. Set $meta before including:
 *   $meta = [
 *     'slug'        => 'features',      // '' for home; drives canonical + active nav
 *     'title'       => 'Page title',    // without the " — Meccora" suffix
 *     'description' => 'Meta description, ~150 chars.',
 *     'og_image'    => 'img/og/features.png', // optional, relative to assets/
 *     'body_class'  => '',              // optional extra <body> class
 *   ];
 */
$slug = $meta['slug'] ?? '';
if (!empty($meta['title'])) {
    // Append " — Meccora" only when the title doesn't already carry the brand.
    $title = (stripos($meta['title'], SITE_NAME) !== false)
        ? $meta['title']
        : $meta['title'] . ' — ' . SITE_NAME;
} else {
    $title = SITE_NAME . ' — ' . SITE_TAGLINE;
}
$desc   = $meta['description'] ?? SITE_TAGLINE;
$robots = $meta['robots'] ?? 'index, follow, max-image-preview:large';
$ogImg  = SITE_URL . '/assets/' . ($meta['og_image'] ?? 'img/og-default.png');
$canon  = canonical($slug);
?><!DOCTYPE html>
<html lang="en">
<head>
<script>document.documentElement.className+=' js';</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($title) ?></title>
<meta name="description" content="<?= e($desc) ?>">
<link rel="canonical" href="<?= e($canon) ?>">
<meta name="robots" content="<?= e($robots) ?>">
<meta name="theme-color" content="#393193">

<!-- Open Graph -->
<meta property="og:type" content="<?= e($meta['og_type'] ?? 'website') ?>">
<meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
<meta property="og:locale" content="en_CA">
<meta property="og:title" content="<?= e($title) ?>">
<meta property="og:description" content="<?= e($desc) ?>">
<meta property="og:url" content="<?= e($canon) ?>">
<meta property="og:image" content="<?= e($ogImg) ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Meccora — service reminders for auto repair shops">
<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($title) ?>">
<meta name="twitter:description" content="<?= e($desc) ?>">
<meta name="twitter:image" content="<?= e($ogImg) ?>">

<!-- Icons -->
<link rel="icon" href="<?= e(asset('img/favicon.svg')) ?>" type="image/svg+xml">
<link rel="icon" href="<?= e(asset('img/favicon.png')) ?>" sizes="any">
<link rel="apple-touch-icon" href="<?= e(asset('img/apple-touch-icon.png')) ?>">
<link rel="manifest" href="<?= e(base_path() . 'site.webmanifest') ?>">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">

<!-- Bootstrap 5.3 + icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="<?= e(asset('css/theme.css')) ?>" rel="stylesheet">
<link href="<?= e(asset('css/meccora.css')) ?>" rel="stylesheet">

<!-- Organization / WebSite structured data (every page) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "<?= SITE_URL ?>/#organization",
      "name": "<?= e(SITE_NAME) ?>",
      "legalName": "<?= e(COMPANY) ?>",
      "url": "<?= SITE_URL ?>/",
      "logo": "<?= SITE_URL ?>/assets/img/logo.png",
      "foundingDate": "<?= COMPANY_SINCE ?>",
      "email": "<?= e(EMAIL) ?>",
      "telephone": "<?= e(PHONE_E164) ?>",
      "areaServed": "CA",
      "address": { "@type": "PostalAddress", "addressLocality": "Mississauga", "addressRegion": "ON", "addressCountry": "CA" },
      "sameAs": ["<?= e(COMPANY_SITE) ?>"]
    },
    {
      "@type": "WebSite",
      "@id": "<?= SITE_URL ?>/#website",
      "url": "<?= SITE_URL ?>/",
      "name": "<?= e(SITE_NAME) ?>",
      "publisher": { "@id": "<?= SITE_URL ?>/#organization" }
    }
  ]
}
</script>
<?php if (!empty($meta['jsonld'])): ?>
<script type="application/ld+json"><?= $meta['jsonld'] ?></script>
<?php endif; ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?= GTM_ID ?>');</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= GA4_ID ?>"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}
gtag('js',new Date());gtag('config','<?= GA4_ID ?>');</script>
</head>
<body class="<?= e($meta['body_class'] ?? '') ?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= GTM_ID ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<a href="#main" class="visually-hidden-focusable skip-link">Skip to main content</a>
