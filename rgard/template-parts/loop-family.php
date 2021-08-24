<?php
$args = array(
    'posts_per_page' => -1,
    'orderby' => 'name',
    'order' => 'DESC',
    'post_type'   => 'sotrudniki'

);
$wp_query = new WP_Query($args);
?>

<div id="family__slider" class="family__slider owl-carousel">
  <?php while( $wp_query->have_posts() ): ?>
    <?php $wp_query->the_post() ?>
    <?php global $post; ?>
      <div class="family__slider-item">
        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="family__slider-image">
        <div class="family__slider-overlay"></div>
        <div class="family__slider-info">
          <div class="family__slider-title"><?php echo the_title() ?></div>
          <div class="family__slider-subtitle"><?php echo get_post_meta($post->ID, 'dolzhnost')[0] ?></div>
        </div>
      </div>
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
</div>
