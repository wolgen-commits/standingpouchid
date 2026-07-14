<?php
/**
 * Template Name: Panduan
 */
get_header();

$paged = get_query_var('paged') ?: 1;

$articles = new WP_Query([
  'post_type'      => 'post',
  'post_status'    => 'publish',
  'posts_per_page' => 12,
  'paged'          => $paged,
  'orderby'        => 'date',
  'order'          => 'DESC',
]);
?>

<div class="sp-page-header">
  <div class="page-wrap">
    <div class="sp-page-header__eyebrow">Panduan</div>
    <h1 class="sp-page-header__title"><?php echo esc_html( get_theme_mod( 'sp_panduan_judul', 'Panduan & Tips Kemasan' ) ); ?></h1>
    <p class="sp-page-header__desc"><?php echo esc_html( get_theme_mod( 'sp_panduan_sub', 'Referensi lengkap seputar standing pouch, bahan kemasan, dan cara custom kemasan teh.' ) ); ?></p>
  </div>
</div>

<main id="main-content" style="padding-block:56px 80px">
  <div class="page-wrap">

    <?php if ( $articles->have_posts() ) : ?>

      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:24px">
        <?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="card-article" style="text-decoration:none;color:inherit;display:flex;flex-direction:column">
            <div class="card-article__img">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('sp-product', ['style' => 'width:100%;height:160px;object-fit:cover;display:block']); ?>
              <?php else : ?>
                <div style="height:160px;background:var(--color-primary-light);display:flex;align-items:center;justify-content:center">
                  <span style="font-size:36px">📦</span>
                </div>
              <?php endif; ?>
            </div>
            <div class="card-article__body" style="flex:1;display:flex;flex-direction:column">
              <?php
              $cats = get_the_category();
              if ( $cats ) :
              ?>
                <div class="card-article__category"><?php echo esc_html( $cats[0]->name ); ?></div>
              <?php endif; ?>
              <h3 class="card-article__title" style="margin:8px 0 12px"><?php the_title(); ?></h3>
              <p style="font-size:13px;color:var(--color-text-light);flex:1;margin:0 0 12px;line-height:1.5">
                <?php echo wp_trim_words( get_the_excerpt() ?: get_the_content(), 20, '…' ); ?>
              </p>
              <div class="card-article__meta"><?php echo get_the_date('j M Y'); ?> &middot; <?php echo ceil( str_word_count( strip_tags( get_the_content() ) ) / 200 ); ?> menit baca</div>
            </div>
          </a>
        <?php endwhile; ?>
      </div>

      <?php
      $big = 999999;
      $pagination = paginate_links([
        'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link($big) ) ),
        'format'  => '?paged=%#%',
        'current' => $paged,
        'total'   => $articles->max_num_pages,
        'type'    => 'array',
        'prev_text' => '← Sebelumnya',
        'next_text' => 'Berikutnya →',
      ]);

      if ( $pagination ) :
      ?>
        <div style="margin-top:48px;display:flex;gap:8px;justify-content:center;flex-wrap:wrap">
          <?php foreach ( $pagination as $link ) : ?>
            <span style="font-size:14px"><?php echo $link; ?></span>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p style="text-align:center;color:var(--color-text-light);padding:48px 0">Belum ada artikel. Tambahkan lewat WP Admin → Tulisan → Tambah Baru.</p>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>
