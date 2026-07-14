<footer class="site-footer" role="contentinfo">
  <?php
  $footer_query = new WP_Query([
    'post_type'      => 'page',
    'post_status'    => 'any',
    'posts_per_page' => 1,
    'title'          => 'Footer Content',
    'no_found_rows'  => true,
  ]);
  $footer_posts = $footer_query->posts;

  if ( $footer_posts ) :
    echo apply_filters( 'the_content', $footer_posts[0]->post_content );
  else : ?>

  <div class="footer-inner page-wrap">
    <div class="footer-brand">
      <a class="footer-logo" href="<?php echo esc_url( home_url('/') ); ?>">
        <span class="footer-logo-dot"></span>
        standingpouch
      </a>
      <p class="footer-tagline"><?php echo esc_html( get_theme_mod( 'sp_footer_tagline', 'Platform custom standing pouch berbasis cetak offset. Melayani UMKM hingga brand menengah dengan MOQ rendah mulai 100 pcs.' ) ); ?></p>
      <div class="footer-socials">
        <a href="<?php echo esc_url( get_theme_mod('sp_instagram', 'https://www.instagram.com/standingpouch.id') ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">📷</a>
        <a href="https://wa.me/<?php echo esc_html( get_theme_mod('sp_wa_1', '6281234567890') ); ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">💬</a>
      </div>
    </div>

    <div class="footer-col">
      <h4 class="footer-col-title">Produk</h4>
      <ul>
        <li><a href="<?php echo esc_url( home_url('/produk/') ); ?>">Semua Produk</a></li>
        <li><a href="<?php echo esc_url( home_url('/produk/') ); ?>">Standing Pouch Kraft</a></li>
        <li><a href="<?php echo esc_url( home_url('/produk/') ); ?>">Standing Pouch Foil</a></li>
        <li><a href="<?php echo esc_url( home_url('/produk/') ); ?>">Standing Pouch BOPP</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4 class="footer-col-title">Panduan</h4>
      <ul>
        <li><a href="<?php echo esc_url( home_url('/cara-custom/') ); ?>">Cara Custom Order</a></li>
        <li><a href="<?php echo esc_url( home_url('/panduan/') ); ?>">Panduan Bahan</a></li>
        <li><a href="<?php echo esc_url( home_url('/panduan/') ); ?>">Tips Desain Artwork</a></li>
        <li><a href="<?php echo esc_url( home_url('/faq/') ); ?>">FAQ</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4 class="footer-col-title">Perusahaan</h4>
      <ul>
        <li><a href="<?php echo esc_url( home_url('/tentang/') ); ?>">Tentang Kami</a></li>
        <li><a href="<?php echo esc_url( home_url('/kontak/') ); ?>">Kontak</a></li>
        <li><a href="https://www.magentaindopack.com" target="_blank" rel="noopener noreferrer">Magenta Indopack ↗</a></li>
        <li><a href="https://kantongtehcelup.com" target="_blank" rel="noopener noreferrer">KantongTehCelup ↗</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="footer-bottom-inner page-wrap">
      <p class="footer-copy">© <?php echo date('Y'); ?> <?php echo esc_html( get_theme_mod( 'sp_nama_perusahaan', 'StandingPouch.id' ) ); ?> · Hak cipta dilindungi.</p>
      <div class="footer-parent">
        Bagian dari
        <span class="footer-parent-badge">Magenta Indopack Group</span>
      </div>
    </div>
  </div>

  <?php endif; ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>
