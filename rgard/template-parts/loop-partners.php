<?php
$args = array(
    'posts_per_page' => -1,
    'orderby' => 'name',
    'order' => 'DESC',
    'post_type'   => 'partnery'

);
$wp_query = new WP_Query($args);
?>

  <div id="partners__list" class="partners__list owl-carousel">
  <?php while( $wp_query->have_posts() ): ?>
    <?php $wp_query->the_post() ?>
    <?php global $post; ?>
    <div class="partners__list-item">
      <div class="partners__icon">
        <?php echo get_post_meta($post->ID, 'svg-kartinka')[0] ?>
      </div>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
</div>
