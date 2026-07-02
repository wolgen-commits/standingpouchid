<?php get_header(); ?>
<main id="main-content" style="padding-block:56px 80px">
  <div class="page-wrap">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
