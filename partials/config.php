<?php
/**
 * Meccora marketing site — global configuration & helpers.
 * Every page includes this first, then sets $meta[] and includes head/header/footer.
 * When the site admin is built, this file becomes the bridge to the database.
 */

/* ---------------------------------------------------------------------------
 * Canonical / environment
 * ------------------------------------------------------------------------- */
const SITE_URL   = 'https://meccora.com';          // canonical host (no trailing slash)
const SITE_NAME  = 'Meccora';
const SITE_TAGLINE = 'Automated service reminders & customer records for auto repair shops';

/* App (separate product — NOT this marketing site) */
const APP_URL    = 'https://app.meccora.com';
const SIGNUP_URL = 'https://app.meccora.com/signup.php';   // "Get Started" target
const LOGIN_URL  = 'https://app.meccora.com/';

/* Company / contact */
const COMPANY      = 'Eformics Systems';
const COMPANY_SINCE = '2009';
const COMPANY_CITY = 'Mississauga, Ontario, Canada';
const EMAIL        = 'hello@meccora.com';
const PHONE_DISPLAY = '+1 (866) 798-7860';
const PHONE_E164    = '+18667987860';
const COMPANY_SITE  = 'https://eformics.com';

/* Pricing teaser (no pricing page — see FAQ / signup) */
const PRICE_FROM = '$60';
const PRICE_CURRENCY = 'CAD';

/* Analytics */
const GTM_ID = 'GTM-TCBDSF5B';
const GA4_ID = 'G-GMYW11JP0V';

/* ---------------------------------------------------------------------------
 * Primary navigation — slug => label. Slug '' is the home page.
 * ------------------------------------------------------------------------- */
$NAV = [
    'features'     => 'Features',
    'how-it-works' => 'How it works',
    'about'        => 'About',
    'faq'          => 'FAQ',
    'contact'      => 'Contact',
];

/* ---------------------------------------------------------------------------
 * Helpers
 * ------------------------------------------------------------------------- */

/** Runtime base path so links work both at /meccora/ (local) and / (live). */
function base_path(): string {
    static $b = null;
    if ($b === null) {
        $dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
        $b = ($dir === '/' || $dir === '.') ? '/' : rtrim($dir, '/') . '/';
    }
    return $b;
}

/**
 * Link to an internal page by slug ('' => home).
 * Emits extensionless URLs; .htaccess maps them to the .php file.
 */
function u(string $slug = ''): string {
    return base_path() . $slug;
}

/** Link to an asset under assets/. CSS/JS get a ?v=mtime cache-buster. */
function asset(string $path): string {
    $path = ltrim($path, '/');
    $rel  = base_path() . 'assets/' . $path;
    if (preg_match('/\.(css|js)$/', $path)) {
        $file = __DIR__ . '/../assets/' . $path;
        if (is_file($file)) {
            $rel .= '?v=' . filemtime($file);
        }
    }
    return $rel;
}

/** Absolute canonical URL for a slug. */
function canonical(string $slug = ''): string {
    return SITE_URL . ($slug === '' ? '/' : '/' . $slug);
}

/** HTML-escape. */
function e(?string $s): string {
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
}
