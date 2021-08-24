<?php
global $wp_query;
$brands = get_the_terms( $post->ID, 'product_cat' );
$args = array(
    'tax_query' => array(
    		array(
    			'taxonomy' => 'product_cat',
    			'field'    => 'id',
    			'terms'    => $brands[0],
    			'operator' => 'IN'
    		)
    	),
    'post__not_in' => array(get_the_ID()),
    'numberposts' => -1,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'product',
    'posts_per_page' => 4
);
$dop = new WP_Query($args);
?>
<?php if ($dop->have_posts()): ?>
        <?php while( $dop->have_posts() ): ?>
          <?php $dop->the_post() ?>
          <?php global $product; ?>
            <div class="product">
              <a href="<?php echo get_permalink(); ?>" class="product__link">
                <span class="product__overlay"></span>
                <img src="<?php echo (has_post_thumbnail()) ? the_post_thumbnail_url() : "/wp-content/uploads/placeholder.jpg"; ?>" alt="<?php echo get_the_title() ?>" class="product__image">
                <div class="product__info">
                  <div class="product__content">
                    <div class="product__name"><?php echo $post->post_title ?></div>
                    <div class="product__btns">
                      <button class="button product__view">Посмотреть</button>
                      <div class="button product__comparison"><?php echo do_shortcode('[wooscp id="'.$post->ID.'"]') ?></div>
                    </div>
                  </div>
                </div>
              </a>
          </div>
        <?php endwhile ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
