<?php
$queryTerm = get_queried_object();
global $wp_query;

$args = array(
    'numberposts' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type'   => 'product',
    'posts_per_page' => -1,

);
$tax_query[] =
  array(
    'taxonomy' => $queryTerm->taxonomy,
    'field'    => 'id',
    'terms'    => array($queryTerm->term_id),
    'operator' => 'IN'
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
      </div>
  <?php endwhile ?>
