<?php get_header(); ?>

<main id="main-content">
  <?php while ( have_posts() ) : the_post(); ?>

    <div class="sp-page-header">
      <div class="page-wrap">
        <div class="sp-page-header__eyebrow">
          <?php
          $cats = get_the_category();
          if ( $cats ) echo esc_html( $cats[0]->name );
          else echo 'Artikel';
          ?>
        </div>
        <h1 class="sp-page-header__title"><?php the_title(); ?></h1>
        <div class="sp-page-header__desc">
          <?php echo get_the_date('j F Y'); ?> &middot; <?php echo esc_html( ceil( str_word_count( strip_tags( get_the_content() ) ) / 200 ) ); ?> menit baca
        </div>
      </div>
    </div>

    <article class="sp-single">

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="sp-single__featured-img">
          <?php the_post_thumbnail('sp-article'); ?>
        </div>
      <?php endif; ?>

      <div class="sp-single__content">
        <?php the_content(); ?>
      </div>

      <div style="margin-top:48px;padding-top:28px;border-top:1px solid var(--color-border);display:flex;align-items:center;gap:12px;flex-wrap:wrap">
        <a href="<?php echo esc_url( home_url('/panduan/') ); ?>" class="btn btn--sm btn--secondary"><?php echo esc_html( get_theme_mod( 'sp_cta_kembali', '← Kembali ke Panduan' ) ); ?></a>
        <a href="https://wa.me/<?php echo esc_html( get_theme_mod('sp_wa_1', '6281234567890') ); ?>?text=Halo%2C+saya+ingin+konsultasi+custom+standing+pouch"
           class="btn btn--sm btn--primary" target="_blank" rel="noopener"><?php echo esc_html( get_theme_mod( 'sp_cta_tombol', 'Konsultasi via WA →' ) ); ?></a>
      </div>

    </article>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
