<?php

add_action('after_setup_theme', function() {
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
  add_theme_support('js_composer'); // WPBakery

  add_image_size('sp-product',  600,  450, true);
  add_image_size('sp-article', 1200,  630, true);

  register_nav_menus(['primary' => 'Menu Utama']);
});

add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('sp-fonts',
    'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=JetBrains+Mono:wght@400;500&display=swap',
    [], null
  );

  $v = wp_get_theme()->get('Version');
  wp_enqueue_style('sp-tokens',     get_template_directory_uri() . '/assets/css/tokens.css',     ['sp-fonts'],      $v);
  wp_enqueue_style('sp-components', get_template_directory_uri() . '/assets/css/components.css', ['sp-tokens'],     $v);
  wp_enqueue_style('sp-pages',      get_template_directory_uri() . '/assets/css/pages.css',      ['sp-components'], $v);
  wp_enqueue_style('sp-style',      get_stylesheet_uri(),                                         ['sp-pages'],      $v);

  wp_enqueue_script('sp-main',      get_template_directory_uri() . '/assets/js/main.js',      [], $v, true);
  wp_enqueue_script('sp-whatsapp',  get_template_directory_uri() . '/assets/js/whatsapp.js',  [], $v, true);

  wp_localize_script('sp-whatsapp', 'SP_CONFIG', [
    'waNumbers' => array_filter([
      get_theme_mod('sp_wa_1', ''),
      get_theme_mod('sp_wa_2', ''),
    ]),
  ]);
});

add_action('customize_register', function($wp_customize) {
  $wp_customize->add_panel('sp_panel', ['title' => 'StandingPouch', 'priority' => 30]);

  // Section: Informasi Bisnis
  $wp_customize->add_section('sp_bisnis', ['title' => 'Informasi Bisnis', 'panel' => 'sp_panel']);

  $fields = [
    'sp_wa_1'            => ['label' => 'WhatsApp CS 1',   'type' => 'text',     'default' => '6281234567890'],
    'sp_wa_2'            => ['label' => 'WhatsApp CS 2',   'type' => 'text',     'default' => '6281234567891'],
    'sp_alamat'          => ['label' => 'Alamat Lengkap',  'type' => 'textarea', 'default' => '[Isi alamat]'],
    'sp_jam_seninjumat'  => ['label' => 'Jam Senin–Jumat', 'type' => 'text',     'default' => '08.00–17.00 WIB'],
    'sp_jam_sabtu'       => ['label' => 'Jam Sabtu',       'type' => 'text',     'default' => '08.00–14.00 WIB'],
    'sp_email'           => ['label' => 'Email',           'type' => 'text',     'default' => 'order@standingpouch.id'],
    'sp_instagram'       => ['label' => 'Instagram URL',   'type' => 'url',      'default' => 'https://www.instagram.com/standingpouch.id'],
    'sp_moq'             => ['label' => 'MOQ (pcs)',        'type' => 'text',     'default' => '100'],
  ];

  foreach ($fields as $id => $args) {
    $san = $args['type'] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field';
    $wp_customize->add_setting($id, ['default' => $args['default'], 'sanitize_callback' => $san]);
    $wp_customize->add_control($id, ['label' => $args['label'], 'section' => 'sp_bisnis', 'type' => $args['type']]);
  }
});
