<?php
global $wp_query;
$args = array(
    'tax_query' => array(
    		array(
    			'taxonomy' => 'product_cat',
    			'field'    => 'id',
    			'terms'    => array(44),
    			'operator' => 'IN'
    		)
    	),
    'numberposts' => -1,
    'orderby'     => 'rand',
    'order'       => 'DESC',
    'post_type'   => 'product',
    'posts_per_page' => 3
);
$wp_query = new WP_Query($args);
?>
  <?php while( have_posts() ): ?>
    <?php the_post() ?>
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
          <?php if ($product->get_price() != 0): ?>
            <?php echo do_shortcode('[add_to_cart id='. $post->ID .' button_classes="test777"]') ?>
          <?php else: ?>
            <?php //echo $product->get_price_html() ?>
          <?php endif; ?>
        </div>
      </a>
    </div>
  <?php endwhile ?>
