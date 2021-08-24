<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyTheme
 */

?>

<div class="content-all_wrap">
    <?php do_action('before_content'); ?>
    <div class="content_wrap">
    <?php do_action('content_inner'); ?>
      <div class="products__wrap products__wrap--search">
        <?php
          global $query_string;
          wp_parse_str( $query_string, $search_query );
          $search = new WP_Query( $search_query );
        ?>
        <?php while( $search->have_posts() ): ?>
         <?php $search->the_post() ?>
         <?php global $product; ?>
         <div class="product product--shop">
           <a href="<?php echo get_permalink(); ?>" class="product__link">
             <div class="product__image-wrap">
               <span class="product__overlay"></span>
               <img class="product__image" src="<?php echo the_post_thumbnail_url() ?>" alt="">
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
    </div>
    <?php do_action('content_after'); ?>
	</div>
    <?php do_action('after_content'); ?>
    </div>
