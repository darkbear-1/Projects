<?php
$queryTerm = get_queried_object();
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

if ($queryTerm->term_id != '') {
		$tax_query[] =
		array(
			'taxonomy' => $queryTerm->taxonomy,
			'field'    => 'id',
			'terms'    => array($queryTerm->term_id),
			'operator' => 'IN'
		);
	}

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
    <div class="single-product__liked"><?php echo do_shortcode('[ti_wishlists_addtowishlist]'); ?></div>
        <a href="<?php echo get_permalink(); ?>" class="product__link">
          <div class="product__image-wrap">
            <span class="product__overlay"></span>
            <img class="product__image" src="<?php echo (!empty(get_the_post_thumbnail_url($product->ID, 'medium'))) ? get_the_post_thumbnail_url($product->ID, 'medium') : '/wp-content/uploads/images/product_placeholder.png' ?>" alt="">
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
