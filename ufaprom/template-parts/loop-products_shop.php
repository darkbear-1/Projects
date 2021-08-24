<?php
global $wp_query;

$args = array(
    'numberposts' => -1,
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'offset' => 0,
    'meta_query' => array(
        array(
            'key' => '_price',
        )
    ),
    'post_type'   => 'product',
    'posts_per_page' => 20
);

$args['tax_query'] = array(
		'relation' => 'AND',
		$tax_query
	);

$wp_query = new WP_Query($args);
?>
  <?php while( have_posts() ): ?>
    <?php the_post() ?>
    <?php global $product; ?>
    <?php if (!$product->is_type( 'variable' )): ?>
      <div class="product product--shop product--simple">
    <?php else: ?>
      <div class="product product--shop">
    <?php endif ?>
        <a href="<?php echo get_permalink(); ?>" class="product__link">
          <div class="product__image-wrap">
            <span class="product__overlay"></span>
            <img src="<?php echo (has_post_thumbnail()) ? the_post_thumbnail_url() : "/wp-content/uploads/placeholder.jpg"; ?>" alt="<?php echo get_the_title() ?>" class="product__image">
          </div>
          <div class="product__info">
            <div class="product__content">
              <div class="product__name"><?php echo $product->get_title() ?></div>
              <div class="product__material"><?php echo $product->get_attribute('material') ?></div>
            </div>
            <div class="product__price"><?php echo woocommerce_template_loop_price() ?></div>
          </div>
        </a>
      </div>
  <?php endwhile ?>
