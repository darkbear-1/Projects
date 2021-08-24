<?php
/*
Template Name: Акции
*/
get_header();
?>
<div class="single-all_wrap">
  <?php do_action('before_contents'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    <section class="projects__main-screen" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>)">
      <div class="container">
        <div class="projects__content"><?php echo the_content(); ?></div>
      </div>
    </section>
    <section class="akcii__all">
      <div class="container">
        <div class="breadcrumbs"><?php the_breadcrumb() ?></div>
        <div class="appointment__list">
          <?php get_template_part( 'template-parts/loop-akcii', 'akcii' ); ?>
        </div>
      </div>
    </section>
 </div>
</div>
<?php
get_footer();
?>
