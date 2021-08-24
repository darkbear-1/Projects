<?php
global $wp_query;
$productCat = get_the_terms( $post->ID, 'product_cat' );
$args = array(
    'tax_query' => array(
    		array(
    			'taxonomy' => 'product_cat',
    			'field'    => 'id',
    			'terms'    => $productCat[0],
    			'operator' => 'IN'
    		)
    	),
    'post__not_in' => array(get_the_ID()),
    'numberposts' => -1,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'product',
    'posts_per_page' => 8
);
$interest = new WP_Query($args);
?>
  <?php while( $interest->have_posts() ): ?>
    <?php $interest->the_post() ?>
    <?php global $product; ?>
    <?php if (!$product->is_type( 'variable' )): ?>
      <div class="product product--simple">
    <?php else: ?>
      <div class="product">
    <?php endif ?>
      <a href="<?php echo get_permalink(); ?>" class="product__link">
        <span class="product__overlay"></span>
        <img class="product__image" src="<?php echo (!empty(get_the_post_thumbnail_url($product->ID, 'medium'))) ? get_the_post_thumbnail_url($product->ID, 'medium') : '/wp-content/uploads/images/product_placeholder.png' ?>" alt="">
        <div class="product__info">
          <div class="product__content">
            <div class="product__name"><?php echo $post->post_title ?></div>
            <div class="product__material"><?php echo $product->get_attribute('material') ?></div>
          </div>
          <div class="product__price"><?php echo woocommerce_template_loop_price() ?></div>
        </div>
      </a>
    </div>
  <?php endwhile ?>
<?php wp_reset_postdata(); ?>
