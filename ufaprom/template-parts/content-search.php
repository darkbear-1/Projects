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
      <div class="katalog__list">
        <?php
          global $query_string;
          wp_parse_str( $query_string, $search_query );
          $search_query['posts_per_page'] = 9;
          $search = new WP_Query( $search_query );
        ?>
        <?php while( $search->have_posts() ): ?>
         <?php $search->the_post() ?>
         <?php global $product; ?>
           <div class="product-wrap">
             <div class="product">
               <a href="<?php echo get_permalink(); ?>" class="product__link">
                 <span class="product__overlay"></span>
                 <img class="product__image" src="<?php echo the_post_thumbnail_url() ?>" alt="">
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
             <?php echo do_shortcode('[add_to_cart id='. $post->ID .']') ?>
           </div>
       <?php endwhile ?>
    </div>
    <?php do_action('content_after'); ?>
	</div>
    <?php do_action('after_content'); ?>
    </div>
