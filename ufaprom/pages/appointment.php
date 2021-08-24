<?php
/*
Template Name: Решения
*/
get_header();
?>
<div class="single-all_wrap">
  <?php do_action('before_contents'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    <section class="projects__main-screen" style="background-image: linear-gradient(180deg, #00A4E5 15.04%, rgba(0, 215, 229, 0.51) 87.5%), url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>)">
      <div class="container">
        <div class="projects__content"><?php echo the_content(); ?></div>
      </div>
    </section>
    <section class="projects__all">
      <div class="container">
        <div class="breadcrumbs"><?php the_breadcrumb() ?></div>
        <div class="appointment__list projects__list">
          <?php get_template_part( 'template-parts/loop-appointment', 'appointment', array('number' => 6, 'hideBtn' => false) ); ?>
        </div>
      </div>
    </section>
 </div>
</div>
<?php
get_footer();
?>
