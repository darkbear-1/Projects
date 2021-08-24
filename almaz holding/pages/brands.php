<?php
/*
Template Name: Бренды
*/
get_header();
?>
<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
      <section class="brands-arc">
        <h1 class="company__title">БРЕНДЫ</h1>
        <div class="container">
          <?php get_template_part( 'template-parts/loop-brands-arc', 'brands' ); ?>
        </div>
      </section>
    <?php do_action('content_after'); ?>
  </div>
  <?php do_action('after_content'); ?>
</div>

<?php
get_footer();
?>
