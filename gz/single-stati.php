<?php
/*
Template Name: Шаблон статей
Template Post Type: stati
*/
$postMeta = get_post_meta(get_the_ID());
get_header();
?>
<div class="single-all_wrap stati-template">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    <section class="stati-main">
      <div class="container">
        <div class="stati__image-wrap"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="" class="stati__image"></div>
        <div class="breadcrumbs"><?php echo the_breadcrumb() ?></div>
        <div class="stati-main__text comfort__seo">
          <?php echo the_content(); ?>
        </div>
      </div>
   </div>
</div>

<?php
get_footer();
?>
