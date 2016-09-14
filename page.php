<?php get_header(); ?>

<div class="contentsWrap">
  <div class="mainContents">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
  ?>
  <!-- .entryを使いたいので配列使用 -->
   <!--  <?php
      $classes = array(
        'page',
        'entry',
      );
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class( $classes); ?> -->
    <article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
      <h1 class="type-A"><?php the_title(); ?></h1>
      <section class="content">
        <?php the_content(); ?>
      </section>
    </article><!-- /.page -->
  <?php
    endwhile;
  endif;
  ?>
  </div><!-- /.mainContents -->

  <aside class="subContents">
    <?php get_sidebar(); ?>
  </aside><!-- /.subContents -->
</div><!-- /.contentsWrap -->


<?php get_footer(); ?>