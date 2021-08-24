<?php
global $wp_query;
$args = array(
    'numberposts' => -1,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'vozmoshnosti',
    'posts_per_page' => -1,
    'paged' => get_query_var('paged') ?: 1
);
$wp_query = new WP_Query($args);
$counter = 0;
?>
  <?php while( have_posts() ): ?>
    <?php the_post() ?>
    <?php $postMeta = get_post_meta(get_the_ID()); ?>
<div class="vozmoshnosti__item">
  <a class="vozmoshnosti__item-link" href=<?php echo the_permalink( get_the_ID()) ?>>
    <div class="vozmoshnosti__item-image"><?php echo file_get_contents(wp_get_attachment_image_url($postMeta['vozmoshnosti_icon'][0], 'full')) ?></div>
    <div class="vozmoshnosti__item-info">
      <div class="vozmoshnosti__item-title"><?php echo the_title() ?></div>
      <hr class="vozmoshnosti__item-separator">
      <div class="vozmoshnosti__item-subtitle"><?php echo $postMeta['subtitle'][0] ?></div>
    </div>
  </a>
</div>
<?php endwhile ?>
