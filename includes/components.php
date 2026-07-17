<?php
require_once __DIR__ . '/icons.php';

function render_portal_card(array $p): string {
    return '<article class="card portal-card reveal" data-delay="' . rand(1,4) . '">'
        . '<span class="ribbon">SOON</span>'
        . '<div class="card-body">'
        . '<span class="icon">' . icon($p['icon']) . '</span>'
        . '<h3>' . e($p['title']) . '</h3>'
        . '<p>' . e($p['desc']) . '</p>'
        . '<span class="soon">' . icon('clock') . ' Coming soon</span>'
        . '<form class="notify" data-validate onsubmit="return false;">'
        . '<div class="field"><input type="email" required placeholder="Your email for updates" aria-label="Email"></div>'
        . '<button type="submit" class="btn btn-ghost btn-block mt-2">Notify me</button>'
        . '</form>'
        . '</div></article>';
}

function render_cta_band(string $title, string $text, string $btnLabel = 'Apply Online', string $btnHref = '/apply'): string {
    return '<section class="section">'
        . '<div class="container">'
        . '<div class="cta-band">'
        . '<div class="container-rel grid" style="grid-template-columns:1.4fr auto;align-items:center;gap:2rem">'
        . '<div><h2>' . e($title) . '</h2><p style="max-width:560px">' . e($text) . '</p></div>'
        . '<div class="flex gap-2 wrap"><a href="' . url($btnHref) . '" class="btn btn-gold btn-lg">' . e($btnLabel) . '</a>'
        . '<a href="' . url('contact') . '" class="btn btn-outline-light btn-lg">Talk to us</a></div>'
        . '</div></div></div></section>';
}
