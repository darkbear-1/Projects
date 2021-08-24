<?php
/**
 * MyTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MyTheme
 */

if ( ! function_exists( 'mytheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

endif;

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


/**
 * Enqueue scripts and styles.
 */
function mytheme_scripts() {
	wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

add_action('after_setup_theme', function() {
    add_theme_support('menus');
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
});

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {

    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
}

function custStyles() {
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'custStyles' );

function owlCss() {
		wp_enqueue_style( 'owl_css', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css' );
		wp_enqueue_style( 'owl_theme_css', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css' );
}
add_action( 'wp_enqueue_scripts', 'owlCss' );

if (file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/rg_hooks/includes/hooks.php') != "") {
    include ($_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/rg_hooks/includes/hooks.php');
}

function custJs() {
        wp_enqueue_script( 'custJs', get_stylesheet_directory_uri() . '/js/cust.js', array('jquery'), null, true );
    }
    add_action( 'wp_enqueue_scripts', 'custJs' );

function uiSlider() {
    wp_enqueue_script( 'uiSlider', get_stylesheet_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'uiSlider' );

function uiFix() {
    wp_enqueue_script( 'uiFix', get_stylesheet_directory_uri() . '/js/jquery.ui.touch-punch.min.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'uiFix' );

function owlJs() {
        wp_enqueue_script( 'owlJs', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true );
    }
    add_action( 'wp_enqueue_scripts', 'owlJs' );

function imaskfunc() {
        wp_enqueue_script( 'imask', get_stylesheet_directory_uri() . '/js/jquery.inputmask.bundle.min.js' );
        wp_enqueue_script( 'jqimask', get_stylesheet_directory_uri() . '/js/jquery.inputmask.js' );
    }
    add_action( 'wp_enqueue_scripts', 'imaskfunc' );



function woocommerce_support() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );
define('WOOCOMMERCE_USE_CSS', false);


function menuCat( $atts ) {
  $termId = $atts['term_id'];
  $terms = get_terms( array(
  	'taxonomy'      => array( 'product_cat' ),
  	'orderby'       => 'id',
  	'order'         => 'ASC',
  	'hide_empty'    => false,
  	'parent'         => $termId,
  	'hierarchical'  => true,
  	'child_of'      => '',
  ) );
  $emptyArr = array();
  foreach( $terms as $term ){
          $idsTerm  = get_term_children($term->term_id, 'product_cat');
          if (!empty($idsTerm)) {
          echo "<div class='cat-menu__wrap'>";
              echo "<div class='cat-menu__title'><a href='".get_term_link($term->term_id)."' class='cat-menu__title-link'>".$term->name."</a></div>";
              echo "<ul class='cat-menu__list'>";
                  foreach ($idsTerm as $item=>$value) {
                      $param = get_term_by( 'id', $value, 'product_cat' );
											if (get_queried_object()->term_id == $param->term_id) {
												echo "<li class='cat-menu__item'><a href='".get_term_link($param->term_id)."' class='cat-menu__link cat-menu__link--active'>".$param->name."</a></li>";
											} else {
												echo "<li class='cat-menu__item'><a href='".get_term_link($param->term_id)."' class='cat-menu__link'>".$param->name."</a></li>";
											}
                  }
              echo "</ul>";
      echo "</div>";
          } else {
              $emptyArr[$term->term_id] = $term->name;
          }
  }
	$imageUrl = wp_get_attachment_image_url(get_woocommerce_term_meta( $termId, 'thumbnail_id', true ), 'full');
	if (!empty($emptyArr)) {
		echo "<div class='cat-menu__wrap'>";
	      foreach( $emptyArr as $link=>$name ){
	          echo "<div class='cat-menu__title'><a href='".get_term_link($link)."' class='cat-menu__title-link'>".$name."</a></div>";
	      }
	  echo "</div>";
	}

}
add_shortcode( 'menuCat', 'menuCat' );

function menu_cat_mobile( $atts ) {
  $termId = $atts['term_id'];
  $terms = get_terms( array(
  	'taxonomy'      => array( 'product_cat' ),
  	'orderby'       => 'id',
  	'order'         => 'ASC',
  	'hide_empty'    => false,
  	'parent'         => $termId,
  	'hierarchical'  => true,
  	'child_of'      => '',
  ) );
  $emptyArr = array();
  foreach( $terms as $term ){
          $idsTerm  = get_term_children($term->term_id, 'product_cat');
          if (!empty($idsTerm)) {
          echo "<div class='cat-menu__wrap'>";
              echo "<div class='cat-menu__title'><a href='".get_term_link($term->term_id)."' class='cat-menu__title-link cat-menu__title-link--accordion'>".$term->name."</a></div>";
              echo "<ul class='cat-menu__list' style='display: none'>";
                  foreach ($idsTerm as $item=>$value) {
                      $param = get_term_by( 'id', $value, 'product_cat' );
											if (get_queried_object()->term_id == $param->term_id) {
												echo "<li class='cat-menu__item'><a href='".get_term_link($param->term_id)."' class='cat-menu__link cat-menu__link--active'>".$param->name."</a></li>";
											} else {
												echo "<li class='cat-menu__item'><a href='".get_term_link($param->term_id)."' class='cat-menu__link'>".$param->name."</a></li>";
											}
                  }
              echo "</ul>";
      echo "</div>";
          } else {
              $emptyArr[$term->term_id] = $term->name;
          }
  }
	$imageUrl = wp_get_attachment_image_url(get_woocommerce_term_meta( $termId, 'thumbnail_id', true ), 'full');
	if (!empty($emptyArr)) {
		echo "<div class='cat-menu__wrap'>";
	      foreach( $emptyArr as $link=>$name ){
	          echo "<div class='cat-menu__title'><a href='".get_term_link($link)."' class='cat-menu__title-link'>".$name."</a></div>";
	      }
	  echo "</div>";
	}

}
add_shortcode( 'menu_cat_mobile', 'menu_cat_mobile' );

// Change 'add to cart' text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'custom_add_to_cart_text' );
function custom_add_to_cart_text() {
        return __( 'Добавить в корзину', 'rgtheme' );
}

add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});

function the_breadcrumb(){

	// получаем номер текущей страницы
	$pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

	$separator = ' <i class="breadcrumbs__sep">/</i> '; //  »

	// если главная страница сайта
	if( is_front_page() ){

		if( $pageNum > 1 ) {
			echo '<a href="' . site_url() . '">Главная</a>' . $separator . $pageNum . '-я страница';
		} else {
			echo 'Вы находитесь на главной странице';
		}

	} else { // не главная

		echo '<a href="' . site_url() . '">Главная</a>' . $separator;

		if (is_singular('product') ) {
		 $taxonomy_name = 'product_cat';
		 $post_terms = get_the_terms( get_the_ID(), $taxonomy_name );
		 if( !empty( $post_terms[0]->term_id ) ) {
			 echo get_term_parents_list( $post_terms[0]->term_id, $taxonomy_name, array( 'separator' => $separator ) );
		 }
	 	} else if (is_shop()) {
			the_archive_title();
		} else if (is_tax('product_cat') || is_tax('brands')) {
		     echo get_term_parents_list( get_queried_object()->term_id, get_queried_object()->taxonomy, array( 'separator' => $separator ) );
		}

		if( is_single() &&  !is_singular('product')){ // записи

			the_category(', '); echo $separator; the_title();

		} elseif ( is_page() ){ // страницы WordPress
			the_title();

		} elseif ( is_category() ) {

			single_cat_title();

		} elseif( is_tag() ) {

			single_tag_title();

		} elseif ( is_day() ) { // архивы (по дням)

			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
			echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $separator;
			echo get_the_time('d');

		} elseif ( is_month() ) { // архивы (по месяцам)

			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
			echo get_the_time('F');

		} elseif ( is_year() ) { // архивы (по годам)

			echo get_the_time('Y');

		} elseif ( is_author() ) { // архивы по авторам

			global $author;
			$userdata = get_userdata($author);
			echo 'Опубликовал(а) ' . $userdata->display_name;

		} elseif ( is_404() ) { // если страницы не существует

			echo 'Ошибка 404';

		}

		if ( $pageNum > 1 ) { // номер текущей страницы
			echo ' (' . $pageNum . '-я страница)';
		}

	}

}

add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function( $size ) {
    return array(
        'width' => 152,
        'height' => 152,
        'crop' => 0,
    );
} );

add_filter('woocommerce_variable_price_html', 'my_woocommerce_variable_price_html', 10, 2);

function my_woocommerce_variable_price_html( $price, $product ) {
     return '<span class="price__sale">'. wc_price($product->get_variation_sale_price( "min" )). '</span><span class="price__regular">'. wc_price($product->get_variation_regular_price( "max" )). '</span>';
}

add_filter( 'woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment', 30, 1 );
function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;

    ob_start();

    ?>
		<a href="<?php echo wc_get_cart_url() ?>" class="header__list-link header__list-link--cart basket-btn basket-btn_fixed-xs">
				<span class="basket-counter"><?php echo sprintf(WC()->cart->get_cart_contents_count()); ?></span>
				<img src="/wp-content/uploads/images/cart.svg" alt="" class="header__list-icon">
		</a>
    <?php
    $fragments['a.header__list-link--cart'] = ob_get_clean();

    return $fragments;
}

function product_added() {
  ?>
  <div class="product-added">
    <div class="product-added__wrap">
        <div class="product-added__title">Товар добален в корзину</div>
        <div class="product-added__buttons">
          <a href="/korzina/" class="product-added__cart-link">Перейти в корзину</a>
          <button class="product-added__contine">Продолжить покупки</button>
        </div>
        <div class="product-added__title">Вам может понадобиться</div>
      <button type="button" class="product-added__close"></button>
	    <div class="product-added__ponadobitsya">
	      <?php get_template_part( 'template-parts/loop-ponadobitsya', 'product' ); ?>
	    </div>
		</div>
		<div class="product-added__overlay"></div>
  </div>
  <?php
  die();
}

add_action('wp_ajax_productadded', 'product_added');
add_action('wp_ajax_nopriv_productadded', 'product_added');

function dco_pre_get_posts($query) {
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_search) {
            $query->set('post_type', 'product');
        }
    }
}

add_action('pre_get_posts', 'dco_pre_get_posts');

function min_max_prices() {
    $termId = get_queried_object()->term_id;
	$args = array(
			 'posts_per_page' => -1,
			 'post_type' => 'product',
			 'orderby' => 'meta_value_num',
			 'order' => 'DESC',
			 'meta_query' => array(
					 array(
							 'key' => '_price',
					 )
			 )
	 );

    if ($termId != '') {
			$tax_query[] =
			array(
				'taxonomy' => get_queried_object()->taxonomy,
				'field'    => 'id',
				'terms'    => array($termId),
				'operator' => 'IN'
			);
		}

    $args['tax_query'] = array(
			'relation' => 'AND',
			$tax_query
		);

	 $loop = new WP_Query($args);


	 $delArr = array(
		 "max" => get_post_meta($loop->posts[0]->ID, '_price', true),
		 "min" => get_post_meta($loop->posts[count($loop->posts)-1]->ID, '_price', true)
	 );
	return $delArr;
}

function products_brand_filter() {
  ?>
	<?php
	global $wp_query;
	$navLen = ceil(wp_count_posts('product')->publish/$_POST['perPage']);
	if ($_POST['offsetNum'] >= wp_count_posts('product')->publish && $_POST['perPage'] != -1) {
		$offset = ceil(wp_count_posts('product')->publish/$_POST['perPage'] + $_POST['perPage']);
	} else if ($_POST['perPage'] != -1) {
		$offset = $_POST['offsetNum'];
	}
	$args = array(
	    'numberposts' => -1,
	    'offset'      => ($offset != '') ?  $offset : 0,

	    // 'order' => ($_POST['priceAsc'] != '' && $_POST['priceAsc'] == 'true' ) ? 'ASC' : 'DESC',
	    'post_type'   => 'product',
	    'posts_per_page' => ($_POST['perPage'] != '') ? $_POST['perPage'] : 20,

	);

		if ($_POST['brandId'] != '') {
			$tax_query[] =
				array(
					'taxonomy' => 'brands',
					'field'    => 'id',
					'terms'    => array($_POST['brandId']),
					'operator' => 'IN'
				);
		}

		if ($_POST['materialId'] != '') {
			$tax_query[] =
			array(
				'taxonomy' => 'pa_material',
				'field'    => 'id',
				'terms'    => array($_POST['materialId']),
				'operator' => 'IN'
			);
		}

		if ($_POST['vstavkaId'] != '') {
			$tax_query[] =
			array(
				'taxonomy' => 'pa_vstavka',
				'field'    => 'id',
				'terms'    => array($_POST['vstavkaId']),
				'operator' => 'IN'
			);
		}

		if ($_POST['termId'] != '' && $_POST['termSlug'] != '') {
			$tax_query[] =
			array(
				'taxonomy' => $_POST['termSlug'],
				'field'    => 'id',
				'terms'    => array($_POST['termId']),
				'operator' => 'IN'
			);
		}

		$meta_query = array(
				'relation' => 'AND',
				array(
				 'key'     => '_price',
				 'value'   => ($_POST['minPrice']!= '') ?  $_POST['minPrice'] : min_max_prices()['min'],
				 'type'    => 'numeric',
				 'compare' => '>=',
			 ),
			 array(
				'key'     => '_price',
				'value'   => ($_POST['maxPrice']!= '') ?  $_POST['maxPrice'] : min_max_prices()['max'],
				'type'    => 'numeric',
				'compare' => '<=',
			),
		);


if ($_POST['newsAsc'] == 'true') {
$args['orderby'] = [
		'meta_value_num' => ($_POST['priceAsc'] != '' && $_POST['priceAsc'] == 'true' ) ? 'ASC' : 'DESC',
		// 'date' => 'DESC'
	];

	$args['meta_query'] = $meta_query;
} else if ($_POST['newsAsc'] != 'false') {
	// print_r('s');
$args['orderby'] = [
		// 'meta_value_num' => ($_POST['priceAsc'] != '' && $_POST['priceAsc'] == 'true' ) ? 'ASC' : 'DESC',
		'date' => 'DESC'
	];
// $args['order'] = ($_POST['newsAsc'] != '' && $_POST['newsAsc'] == 'true' ) ? 'ASC' : 'DESC';

}


$args['meta_query'] = $meta_query;


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
  <?php
  die();
}

add_action('wp_ajax_products_brand_filter', 'products_brand_filter');
add_action('wp_ajax_nopriv_products_brand_filter', 'products_brand_filter');

function product_navigation() {
	global $wp_query;
	$navLen = ceil(wp_count_posts('product')->publish/$_POST['perPage']);
	if ($_POST['offsetNum'] >= wp_count_posts('product')->publish) {
		$activeIndex = ceil((wp_count_posts('product')->publish/$_POST['perPage']) - 1);
	} else if ($_POST['activeIndex'] >= $navLen) {
		$activeIndex = ceil((wp_count_posts('product')->publish/$_POST['perPage']) - 1);
	} else {
		$activeIndex = $_POST['activeIndex'];
	}
	$args = array(
	    'numberposts' => -1,
	    'orderby' => 'meta_value_num',
	    'order' => 'ASC',
	    'meta_query' => array(
	      'relation' => 'AND',
	      array(
	       'key'     => '_price',
	       'value'   => ($_POST['minPrice']!= '') ?  $_POST['minPrice'] : min_max_prices()['min'],
	       'type'    => 'numeric',
	       'compare' => '>=',
	     ),
	     array(
	      'key'     => '_price',
	      'value'   => ($_POST['maxPrice']!= '') ?  $_POST['maxPrice'] : min_max_prices()['max'],
	      'type'    => 'numeric',
	      'compare' => '<=',
	    ),
	 ),
	    'post_type'   => 'product'
	);

	if ($_POST['brandId'] != '') {
		$tax_query[] =
			array(
				'taxonomy' => 'brands',
				'field'    => 'id',
				'terms'    => array($_POST['brandId']),
				'operator' => 'IN'
			);
	}

	if ($_POST['materialId'] != '') {
		$tax_query[] =
		array(
			'taxonomy' => 'pa_material',
			'field'    => 'id',
			'terms'    => array($_POST['materialId']),
			'operator' => 'IN'
		);
	}

	if ($_POST['vstavkaId'] != '') {
		$tax_query[] =
		array(
			'taxonomy' => 'pa_vstavka',
			'field'    => 'id',
			'terms'    => array($_POST['vstavkaId']),
			'operator' => 'IN'
		);
	}

	if ($_POST['termId'] != '' && $_POST['termSlug'] != '') {
			$tax_query[] =
			array(
				'taxonomy' => $_POST['termSlug'],
				'field'    => 'id',
				'terms'    => array($_POST['termId']),
				'operator' => 'IN'
			);
		}

	$args['tax_query'] = array(
			'relation' => 'AND',
			$tax_query
		);

	$wp_query = new WP_Query($args);
  ?>
	<?php $postsPer = $wp_query->found_posts/$_POST['perPage']; ?>
	<?php if ($_POST['perPage'] != -1): ?>
		<div class="navigation__title">Страницы:</div>
		<div class="pagination" offset-count="<?php echo $_POST['perPage']; ?>">
		  <?php for ($i=0; $i < $postsPer; $i++) { ?>
				<?php if ($i == $activeIndex && $i == $postsPer-1): ?>
		      <button class="pagination__page pagination__page--active"><?php echo $i + 1 ?></button>
				<?php elseif (3 == $activeIndex && $i == $activeIndex + 1): ?>
		      <button class="pagination__page pagination__page--nextdot"><?php echo $i + 1 ?></button>
		    <?php elseif ($i == $activeIndex && $i != $postsPer-1): ?>
		      <button class="pagination__page pagination__page--active"><?php echo $i + 1 ?></button>
				<?php endif; ?>
		    <?php if ($i > 3 && $i != ($wp_query->found_posts - 1) && $i != $activeIndex + 1): ?>
		      <button class="pagination__page pagination__page--hidden"><?php echo $i + 1 ?></button>
		    <?php elseif ($i == 3 && $i != $activeIndex): ?>
		      <button class="pagination__page pagination__page--nextdot"><?php echo $i + 1 ?></button>
		    <?php elseif ($i < 4 && $i != $activeIndex): ?>
		      <button class="pagination__page"><?php echo $i + 1 ?></button>
		    <?php elseif ($i == ($wp_query->found_posts - 1) && $wp_query->found_posts != 1): ?>
		      <span class="pagination__dots"><?php echo "..." ?></span>
		      <button class="pagination__page"><?php echo $i + 1 ?></button>
		    <?php endif; ?>
		  <?php } ?>
		</div>
	<?php endif; ?>
  <?php
  die();
}

add_action('wp_ajax_productnav', 'product_navigation');
add_action('wp_ajax_nopriv_productnav', 'product_navigation');

function wc_track_product_view_always() {
    if ( ! is_singular( 'product' ) /* xnagyg: remove this condition to run: || ! is_active_widget( false, false, 'woocommerce_recently_viewed_products', true )*/ ) {
        return;
    }

    global $post;

    if ( empty( $_COOKIE['woocommerce_recently_viewed'] ) ) { // @codingStandardsIgnoreLine.
        $viewed_products = array();
    } else {
        $viewed_products = wp_parse_id_list( (array) explode( '|', wp_unslash( $_COOKIE['woocommerce_recently_viewed'] ) ) ); // @codingStandardsIgnoreLine.
    }

    // Unset if already in viewed products list.
    $keys = array_flip( $viewed_products );

    if ( isset( $keys[ $post->ID ] ) ) {
        unset( $viewed_products[ $keys[ $post->ID ] ] );
    }

    $viewed_products[] = $post->ID;

    if ( count( $viewed_products ) > 15 ) {
        array_shift( $viewed_products );
    }

    // Store for session only.
    wc_setcookie( 'woocommerce_recently_viewed', implode( '|', $viewed_products ) );
}

remove_action('template_redirect', 'wc_track_product_view', 20);
add_action( 'template_redirect', 'wc_track_product_view_always', 20 );

function getCat( $atts ){
    $terms = get_terms( array(
	'taxonomy'      => array( 'product_cat' ),
	'orderby'       => 'id',
	'order'         => 'ASC',
	'hide_empty'    => true,
	'parent'         => 0,
	'hierarchical'  => true,
	'child_of'      => 0,
	'exclude'       => 15
) );


echo '<div class="rotate-arrow rotate-left"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="23" viewBox="0 0 8 23" fill="none">
<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M2.78617 11.4312L7.73081 2.22865C7.90065 1.91256 7.90065 1.54275 7.73081 1.22666C7.27323 0.375048 5.9406 0.375048 5.48301 1.22666L0 11.4312L5.48301 21.6357C5.9406 22.4873 7.27323 22.4873 7.73081 21.6357C7.90065 21.3197 7.90065 20.9498 7.73081 20.6338L2.78617 11.4312Z" fill="#54BCE3"></path>
</svg></div>';
if (get_queried_object()->term_id != '') {
    $arr = get_term_children(get_queried_object()->term_id, 'product_cat');
    echo "<div class='product-category--wrap'>";
    foreach( $arr as $term ){
        $param = get_term_by( 'id', $term, 'product_cat' );
        echo "<div class='product-category'><a class='product-category-link' href='" . get_term_link($param->term_id) . "'>" . $param->name . "</a></div>";
    }
    echo "</div>";
} else {
    echo "<div class='product-category--wrap'>";
    foreach( $terms as $term ){
    	echo "<div class='product-category'><a class='product-category-link' href='" . get_term_link($term->term_id) . "'>" . $term->name . "</a></div>";
    }
    echo "</div>";
    }
		echo '<div class="rotate-arrow rotate-right"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="23" viewBox="0 0 8 23" fill="none">
<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M2.78617 11.4312L7.73081 2.22865C7.90065 1.91256 7.90065 1.54275 7.73081 1.22666C7.27323 0.375048 5.9406 0.375048 5.48301 1.22666L0 11.4312L5.48301 21.6357C5.9406 22.4873 7.27323 22.4873 7.73081 21.6357C7.90065 21.3197 7.90065 20.9498 7.73081 20.6338L2.78617 11.4312Z" fill="#54BCE3"></path>
</svg></div>';
}

add_shortcode( 'getCat', 'getCat' );

add_filter( 'dgwt/wcas/form/magnifier_ico', function ( $html ) {
    $html = '<svg class="dgwt-wcas-ico-magnifier" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
<path d="M1.32648 17.1039L8.25987 10.1705" stroke="#3881AE"/>
<circle cx="12.1117" cy="6.31858" r="5.27783" stroke="#3881AE"/>
</svg>';

    return $html;
} );

function my_woocommerce_available_variation($available_variation, $product, $variation) {
    $available_variation['weight'] = $variation->has_weight() ? "<span class='product-weight'>Вес товара: ".$variation->get_weight()." гр.</span>" : "";
    return $available_variation;
}
add_filter( 'woocommerce_available_variation', 'my_woocommerce_available_variation', 20, 3 );


// Display variation's price even if min and max prices are the same
add_filter('woocommerce_available_variation', function ($value, $object = null, $variation = null) {
  if ($value['price_html'] == '') {
    $value['price_html'] = '<span class="price">' . $variation->get_price_html() . '</span>';
  }
  return $value;
}, 10, 3);



add_filter('itglx_wc1c_set_product_variation_attribute_args', function ($guidArray) {
	$guidArray['is_visible'] = 1;
	$guidArray['is_variation'] = 0;
    if ($guidArray['name'] == 'pa_vessajt') {
		$guidArray['is_visible'] = 0;
	}

    if ($guidArray['name'] == 'pa_sale') {
		$guidArray['is_visible'] = 0;
	}

    if ($guidArray['name'] == 'pa_razmer') {
		$guidArray['is_visible'] = 0;
		$guidArray['is_variation'] = 1;
	}

    return $guidArray;
});

add_filter('itglx_wc1c_attribute_ignore_guid_array', function ($guidArray) {
    $guidArray[] = 'c518cc98-6eee-11eb-8680-305a3a792435';

    file_put_contents('res.json', json_encode($guidArray, true));
    return $guidArray;
});

function object_to_array($data)
	 {
		 if (is_array($data) || is_object($data))
		 {
			 $result = array();
			 foreach ($data as $key => $value)
			 {
				 $result[$key] = object_to_array($value);
			 }
			 return $result;
		 }
		 return $data;
	 }


add_action('itglx_wc1c_after_variation_offer_resolve', function ($varId, $prodId, $offerArr) {
 	$arr = $offerArr->ХарактеристикиТовара->ХарактеристикаТовара;
	foreach ($arr as $key => $item) {
		if ( $item->{'Наименование'} == 'ВесСайт') {
			$harWeight = (array) $item->{'Значение'};
		}

		if ( $item->{'Наименование'} == 'Sale' && $item->{'Значение'} == 'Да') {
			wp_set_object_terms( $prodId, 27, 'product_cat', true );
		}
	}

	$variation = new WC_Product_Variation( $varId );
    $variation->set_weight($harWeight[0]);
	$variation->save();
}, 10, 3);
