<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <nav class="site-navbar" role="navigation" aria-label="Menu utama">
    <div class="navbar-inner page-wrap">

      <a class="navbar__logo" href="<?php echo esc_url( home_url('/') ); ?>" aria-label="standingpouch.id">
        <span class="navbar__logo-dot"></span>
        standingpouch
      </a>

      <div class="navbar__links">
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'fallback_cb'    => false,
        ]);
        ?>
      </div>

      <div class="navbar__actions">
        <a href="<?php echo esc_url( home_url('/cara-custom/') ); ?>" class="btn btn--sm btn--secondary">🧮 Hitung Harga</a>
        <a href="<?php echo esc_url( home_url('/cara-custom/') ); ?>" class="btn btn--sm btn--primary">Order Sekarang →</a>
      </div>

      <button class="navbar__hamburger" id="sp-hamburger" aria-label="Buka menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>
  </nav>

  <!-- Mobile Drawer -->
  <div class="mobile-drawer" id="sp-drawer" aria-hidden="true">
    <button class="mobile-drawer__close" id="sp-drawer-close" aria-label="Tutup menu">✕</button>
    <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container'      => false,
      'fallback_cb'    => false,
    ]);
    ?>
    <div style="display:flex;flex-direction:column;gap:10px;padding-top:8px">
      <a href="<?php echo esc_url( home_url('/cara-custom/') ); ?>" class="btn btn--md btn--secondary" style="justify-content:center">🧮 Hitung Harga</a>
      <a href="<?php echo esc_url( home_url('/cara-custom/') ); ?>" class="btn btn--md btn--primary" style="justify-content:center">Order Sekarang →</a>
    </div>
  </div>
  <div class="drawer-overlay" id="sp-overlay"></div>
</header>
