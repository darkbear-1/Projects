<?php
$queryTerm = get_queried_object();
if (isset($_POST['termId'])) {
  $nowTax = get_term($_POST['termId'])->taxonomy;
}
global $wp_query;
$custom_tax_id = do_shortcode('[tax_id id=21]');
$custom_taxonomy = do_shortcode('[atributeName id=24]');

if (isset($_POST['offsetNum']) && isset($_POST['perPage']) && $_POST['offsetNum'] >= wp_count_posts('product')->publish && $_POST['perPage'] != -1) {
  $navLen = ceil(wp_count_posts('product')->publish/$_POST['perPage']);
  $offset = ceil(wp_count_posts('product')->publish/$_POST['perPage'] + $_POST['perPage']);
} else if (isset($_POST['perPage']) && $_POST['perPage'] != -1) {
  $offset = $_POST['offsetNum'];
}


$args = array(
    'meta_query' => array(
      'relation' => 'AND',
      array(
       'key'     => '_price',
       'value'   => (isset($_POST['minPrice']) && $_POST['minPrice']!= '') ?  floor($_POST['minPrice']) : floor(min_max_prices()['min']),
       'type'    => 'decimal',
       'compare' => '>=',
     ),
     array(
      'key'     => '_price',
      'value'   => (isset($_POST['minPrice']) && $_POST['maxPrice']!= '') ?  floor($_POST['maxPrice']) + 1 : floor(min_max_prices()['max']) + 1,
      'type'    => 'decimal',
      'compare' => '<=',
    ),
 ),
    'numberposts' => -1,
    'offset'      => (isset($offset) && $offset != '') ?  $offset : 0,
    'orderby' => 'meta_value_num',
    'order' => (isset($_POST['priceAsc']) && $_POST['priceAsc'] != '' && $_POST['priceAsc'] == 'true' ) ? 'ASC' : 'ASC',
    'post_type'   => 'product',
    'posts_per_page' => (isset($_POST['perPage']) && $_POST['perPage'] != '') ? $_POST['perPage'] : 12,

);

if (!empty($_POST['widgetKeys']) && !empty($_POST['widgetValues'])) {
  foreach ($_POST['widgetKeys'] as $key => $value) {
      $tax_query[] =
        array(
          'taxonomy' => $value,
          'field'    => 'id',
          'terms'    => $_POST['widgetValues'][$key],
          'operator' => 'IN'
        );
    }
}


  if (isset($queryTerm) && $queryTerm->taxonomy != "" && empty($custom_tax_id)) {
    $tax_query[] =
    array(
      'taxonomy' => $queryTerm->taxonomy,
      'field'    => 'id',
      'terms'    => array($queryTerm->term_id),
      'operator' => 'IN'
    );
  } elseif (!empty($custom_tax_id) && isset($_GET['rg']) && $_GET['rg'] != "") {
    $tax_query[] =
    array(
      'taxonomy' => (!empty($custom_taxonomy)) ? $custom_taxonomy : 'product_cat',
      'field'    => 'id',
      'terms'    => explode(",", $custom_tax_id),
      'operator' => 'IN'
    );
  }

  if (isset($_POST['termId']) && $_POST['termId'] != '') {
    $tax_query[] =
    array(
      'taxonomy' => (isset($_GET['rg']) && $_GET['rg'] != "" && !empty($custom_tax_id)) ? 'product_cat' : $nowTax,
      'field'    => 'id',
      'terms'    => explode(",", $_POST['termId']),
      'operator' => 'IN'
    );
  }

$args['tax_query'] = array(
    'relation' => 'AND',
    $tax_query
  );



$wp_query = new WP_Query($args);
// $args = array(
//     'numberposts' => -1,
//     'orderby' => 'meta_value_num',
//     'order' => 'ASC',
//     'offset' => 0,
//     'meta_query' => array(
//         array(
//             'key' => '_price',
//         )
//     ),
//     'post_type'   => 'product',
//     'posts_per_page' => 20
// );
//
// if ($queryTerm->term_id != '') {
// 		$tax_query[] =
// 		array(
// 			'taxonomy' => $queryTerm->taxonomy,
// 			'field'    => 'id',
// 			'terms'    => array($queryTerm->term_id),
// 			'operator' => 'IN'
// 		);
// 	}
//
// 	$args['tax_query'] = array(
// 			'relation' => 'AND',
// 			$tax_query
// 		);
// $wp_query = new WP_Query($args);
?>
  <?php while( have_posts() ): ?>
    <?php the_post() ?>
    <?php global $product; ?>
      <div class="product-wrap">
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
        <?php if ($product->get_price() != 0): ?>
          <?php echo do_shortcode('[add_to_cart id='. $post->ID .' button_classes="test777"]') ?>
        <?php else: ?>
          <?php echo $product->get_price_html() ?>
        <?php endif; ?>
      </div>
  <?php endwhile ?>
