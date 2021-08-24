<?php
global $wp_query;
$args = array(
  'post_type' => 'services',
  'posts_per_page' => 7,
  'orderby'     => 'date',
  'order'       => 'DESC',
  'post__not_in'     => array(get_the_ID())
);
$wp_query = new WP_Query($args);
?>
  <?php while( have_posts() ): ?>
    <?php the_post() ?>
    <?php $postMeta = get_post_meta(get_the_ID()); ?>
    <div class="vozmoshnosti__item">
      <a class="services__item-link" href=<?php echo the_permalink( get_the_ID()) ?>>
        <div class="vozmoshnosti__item-info">
          <div class="vozmoshnosti__item-title"><?php echo the_title() ?></div>
          <hr class="vozmoshnosti__item-separator">
          <div class="vozmoshnosti__item-subtitle"><?php echo $postMeta['subtitle'][0] ?></div>
        </div>
      </a>
    </div>
<?php endwhile ?>
