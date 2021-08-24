<?php
  global $wp_query;
  $args = array(
      'posts_per_page' =>  -1,
      'orderby' => 'date',
      'order' => 'DESC',
      'offset' => 0,
      'post_type'   => 'nashi-uslugi'

  );
  $wp_query = new WP_Query($args);
  ?>

  <div class="uslugi__list">
  <?php while( have_posts() ): ?>
    <?php the_post() ?>
    <?php global $post; ?>
    <div class="uslugi__list-item">
      <a href="<?php echo get_permalink(); ?>" class="uslugi__list-link"></a>
      <div class="uslugi__list-name"><?php echo $post->post_title ?></div>
      <img src="<?php echo (has_post_thumbnail()) ? the_post_thumbnail_url() : ""; ?>" alt="" class="uslugi__list-image">
    </div>
  <?php endwhile ?>
</div>
