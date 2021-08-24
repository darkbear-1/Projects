<?php
global $wp_query;
$args = array(
    'numberposts' => -1,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'resheniya',
    'posts_per_page' => -1,
    'paged' => get_query_var('paged') ?: 1
);
$wp_query = new WP_Query($args);
$counter = 0;
?>
  <?php while( have_posts() ): ?>
    <?php the_post() ?>
    <?php $postMeta = get_post_meta(get_the_ID()); ?>
<div class="resheniya__item">
  <a class="resheniya__item-link" href=<?php echo the_permalink( get_the_ID()) ?>>
    <div class="resheniya__item-image"><?php echo wp_get_attachment_image($postMeta['cart_image'][0], 'full') ?></div>
    <div class="resheniya__item-title"><?php echo $postMeta['cart_title'][0] ?></div>
    <div class="resheniya__item-text">Подробнее<span><svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" viewBox="0 0 9 14" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.58586 7.00008L1.00008 2.41429C0.609552 2.02377 0.609551 1.3906 1.00008 1.00008C1.3906 0.609551 2.02376 0.609551 2.41429 1.00008L8.41429 7.00008L2.41429 13.0001C2.02376 13.3906 1.3906 13.3906 1.00008 13.0001C0.609551 12.6096 0.609551 11.9764 1.00008 11.5859L5.58586 7.00008Z" fill="white"/></svg></div>
  </a>
</div>
<?php endwhile ?>
