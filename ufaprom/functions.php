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
		wp_enqueue_style( 'load-fa', get_stylesheet_directory_uri() . '/css/fa-all.min.css' );
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
				wp_enqueue_script( 'modernJs', get_stylesheet_directory_uri() . '/js/modernizr-custom.js', array('jquery'), null, true );
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

add_filter( 'wp_enqueue_scripts', 'replace_default_jquery_with_fallback');
function replace_default_jquery_with_fallback() {
    $ver = '1.12.4';
    wp_dequeue_script( 'jquery' );
    wp_deregister_script( 'jquery' );
    // Set last parameter to 'true' if you want to load it in footer
    wp_register_script( 'jquery', "//ajax.googleapis.com/ajax/libs/jquery/$ver/jquery.min.js", '', $ver, false );
    wp_enqueue_script ( 'jquery' );
}



function the_breadcrumb(){

	// получаем номер текущей страницы
	$pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

	$separator = ' <i class="fas fa-angle-right"></i> '; //  »

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
			 echo "<a href='/katalog/'>Каталог</a>".$separator.get_term_parents_list( $post_terms[0]->term_id, $taxonomy_name, array( 'separator' => $separator ) );
		 }
	 	} else if (is_shop()) {
			the_archive_title();
		} else if (is_tax('product_cat')) {
		     echo "<a href='/katalog/'>Каталог</a>".$separator.get_term_parents_list( get_queried_object()->term_id, get_queried_object()->taxonomy, array( 'separator' => $separator ) );
		} else if (is_tax('appointment')) {
		     echo "<a href='/resheniya/'>Решения</a>".$separator.get_term_parents_list( get_queried_object()->term_id, get_queried_object()->taxonomy, array( 'separator' => $separator ) );
		} else if (is_singular("projects")) {
			 echo "<a href='/projects/'>Проекты</a>".$separator.get_the_title();
		} else if (is_singular("akcii")) {
			 echo "<a href='/akcii/'>Акции</a>".$separator.get_the_title();
		} else if (is_singular("uslugi")) {
			 echo "<a href='/uslugi/'>Услуги</a>".$separator.get_the_title();
		} else if (is_singular("vakansii")) {
			 echo "<a href='/vakansii/'>Вакансии</a>".$separator.get_the_title();
		} else if( is_single() &&  !is_singular('product')){ // записи

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

function true_load_posts() {
	if ($_POST['type'] == 'type') {
		echo get_template_part( 'template-parts/loop-category', 'product_cat' );
	} else {
		echo get_template_part( 'template-parts/loop-appointment', 'appointment', array('number' => 5, 'pagename' => 'main-page') );
	}
?>

<?php
	die();
}

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

function checkout_for_tg() {
// 	 $pattern = '/\n[\s]+/i';
//       $replacement = "\n";
//       $bot_txt = preg_replace($pattern, $replacement, strip_tags($content));
//       $bot_txt = trim($bot_txt);

      $botToken="1654903742:AAHsvYP_V1McyeUW8t3lb8KdQ_pLh6As89I";
    
      $website="https://api.telegram.org/bot".$botToken;
      $chatId=-493884254;  //** ===>>>NOTE: this chatId MUST be the chat_id of a person, NOT another bot chatId !!!**
      $params=[
          'chat_id'=>$chatId, 
          'parse_mode' => 'HTML',
          'text'=> $_POST['content'],
      ];
      $ch = curl_init($website . '/sendMessage');
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close($ch);
?>

<?php
	die();
}

add_action('wp_ajax_checkout', 'checkout_for_tg');
add_action('wp_ajax_nopriv_checkout', 'checkout_for_tg');

function loadmoreProjects() {
	get_template_part( 'template-parts/loop-projects', 'projects', array('numberposts' => '-1') );
?>

<?php
	die();
}

add_action('wp_ajax_loadmore_project', 'loadmoreProjects');
add_action('wp_ajax_nopriv_loadmore_project', 'loadmoreProjects');


add_filter( 'woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment', 30, 1 );
function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;

    ob_start();
    ?>
		<a href="<?php echo wc_get_cart_url() ?>" class="header__cart header__cart--mobile basket-btn basket-btn_fixed-xs">
			<?php if (!empty((WC()->cart->cart_contents))): ?>
				<span class="header__cart-indicator"></span>
			<?php endif; ?>
			<img src="/wp-content/uploads/images/cart.svg" alt="" class="header__cart-icon">
			<img src="/wp-content/uploads/images/cart-mobile.svg" alt="" class="header__cart-icon header__cart-icon--mobile">
		</a>
    <?php
    $fragments['a.header__cart'] = ob_get_clean();

    return $fragments;
}

add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});

function min_max_prices() {
    $termId = get_queried_object()->term_id;
		$custom_tax_id = do_shortcode('[tax_id id=21]');
		$custom_taxonomy = do_shortcode('[atributeName id=24]');

		if (!empty($custom_taxonomy)) {
			$now_custom_tax = $custom_taxonomy;
		} else {
			$now_custom_tax =  'product_cat';
		}
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
	      'taxonomy' => (!empty($custom_tax_id) && isset($_GET['rg']) && $_GET['rg'] != "") ? $now_custom_tax : get_queried_object()->taxonomy,
	      'field'    => 'id',
	      'terms'    => (!empty($custom_tax_id) && isset($_GET['rg']) && $_GET['rg'] != "") ? explode(",", $custom_tax_id) : array($termId),
	      'operator' => 'IN'
	    );
		}

    $args['tax_query'] = array(
			'relation' => 'AND',
			$tax_query
		);

	 $loop = new WP_Query($args);
		if (!empty($loop->posts)) {
			$delArr = array(
	 		 "max" => get_post_meta($loop->posts[0]->ID, '_price', true),
	 		 "min" => get_post_meta($loop->posts[count($loop->posts)-1]->ID, '_price', true)
	 	 );
	 	return $delArr;
	}

}
function products_brand_filter() {
  ?>

	<?php get_template_part( 'template-parts/loop-products', 'product' ); ?>

  <?php
  die();
}

add_action('wp_ajax_filters', 'products_brand_filter');
add_action('wp_ajax_nopriv_filters', 'products_brand_filter');

function product_navigation() {
	global $wp_query;
	$queryTerm = get_queried_object();
	$navLen = ceil(wp_count_posts('product')->publish/$_POST['perPage']);
	$nowTax = get_term($_POST['termId'])->taxonomy;
	// if ($_POST['offsetNum'] >= wp_count_posts('product')->publish) {
	// 	$activeIndex = ceil((wp_count_posts('product')->publish/$_POST['perPage']) - 1);
	// } else if ($_POST['activeIndex'] >= $navLen) {
	// 	$activeIndex = ceil((wp_count_posts('product')->publish/$_POST['perPage']) - 1);
	// } else {
	// 	$activeIndex = $_POST['activeIndex'];
	// }
	$args = array(
	    'numberposts' => -1,
	    'orderby' => 'meta_value_num',
	    'order' => 'ASC',
	    'meta_query' => array(
	      'relation' => 'AND',
	      array(
	       'key'     => '_price',
	       'value'   => ($_POST['minPrice']!= '') ?  floor($_POST['minPrice']) : floor(min_max_prices()['min']),
	       'type'    => 'DECIMAL',
	       'compare' => '>=',
	     ),
	     array(
	      'key'     => '_price',
	      'value'   => ($_POST['maxPrice']!= '') ?  $_POST['maxPrice'] : min_max_prices()['max'],
	      'type'    => 'DECIMAL',
	      'compare' => '<=',
	    ),
	 ),
	    'post_type'   => 'product'
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


	  if ($_POST['termId'] != '') {
	    $tax_query[] =
	    array(
				'taxonomy' => (isset($_GET['rg']) && $_GET['rg'] != "") ? 'product_cat' : $nowTax,
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
  ?>
	<?php $postsPer = $wp_query->found_posts/$_POST['perPage']; ?>
	<?php ?>
	<?php if ($_POST['perPage'] != -1): ?>
		<div class="navigation__title">Страницы:</div>
		<?php $postsPer = ceil($wp_query->found_posts/$_POST['perPage']); ?>
		<div class="pagination" offset-count="<?php echo $_POST['perPage']; ?>">
			<?php for ($i=0; $i < $postsPer; $i++) { ?>
				<?php if ($i == 0): ?>
					<button class="pagination__page pagination__page--active"><?php echo $i + 1 ?></button>
				<?php endif; ?>
				<?php if ($i > 3 && $i != ceil($wp_query->found_posts/$_POST['perPage']) - 2): ?>
					<button class="pagination__page pagination__page--hidden"><?php echo $i + 1 ?></button>
				<?php elseif ($i == 3): ?>
					<button class="pagination__page pagination__page--nextdot"><?php echo $i + 1 ?></button>
				<?php elseif ($i < 4 && $i != 0): ?>
					<button class="pagination__page"><?php echo $i + 1 ?></button>
				<?php elseif ($i != 0 && $i == ceil($wp_query->found_posts/$_POST['perPage']) - 2): ?>
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

function taxAttributes() {
	$queryTerm = get_queried_object();
	global $wp_query;
	$custom_tax_id =  do_shortcode('[tax_id id=21]');
	$custom_taxonomy = do_shortcode('[atributeName id=24]');

	$args = array(
	    'posts_per_page' => -1,
	    'orderby' => 'date',
	    'order' => 'DESC',
	    'post_type'   => 'product'

	);

	  if ($queryTerm->taxonomy != "" && empty($custom_tax_id)) {
	    $tax_query[] =
	    array(
	      'taxonomy' => $queryTerm->taxonomy,
	      'field'    => 'id',
	      'terms'    => array($queryTerm->term_id),
	      'operator' => 'IN'
	    );
	  } else if (!empty($custom_tax_id) && isset($_GET['rg']) && $_GET['rg'] != "") {
	    $tax_query[] =
	    array(
	      'taxonomy' => (!empty($custom_taxonomy)) ? $custom_taxonomy : 'product_cat',
	      'field'    => 'id',
	      'terms'    => explode(",", $custom_tax_id),
	      'operator' => 'IN'
	    );
	  }

	$args['tax_query'] = array(
	    'relation' => 'AND',
	    $tax_query
	  );
	$wp_query2 = new WP_Query($args);
	$testAtt = array();
	$attrTerms = array();
	$tempArr = array();
	$i = 0;
?>
	<?php while( $wp_query2->have_posts() ): ?>
    <?php $wp_query2->the_post() ?>
    <?php global $product; ?>
			<?php foreach ($product->get_attributes() as $key => $value): ?>
					<?php if ($value['name'] != 'pa_komplektaciya' && $value['name'] != 'pa_komplektacija-m'): ?>
						<?php @$testAtt[$value['name']] .= $value['options'][0].","; ?>
					<?php endif; ?>
			<?php endforeach; ?>
  <?php endwhile ?>
	<?php foreach ($testAtt as $key => $value): ?>
	<?php
		$allAtrr = array_unique(array_filter(explode(',', $value)));
	?>
		<?php if ($i < 14): ?>
			<div class="katalog__widget">
				<div class="katalog__widget-title"><?php echo wc_attribute_label( $key ) ?></div>
				<div class="katalog__widget-wrap">
					<div class="katalog__widget-wrap_mobile">
						<?php foreach ($allAtrr as $key2 => $value2): ?>
							<label><input type="checkbox" class="katalog__widget-checkbox" name="<?php echo wc_attribute_taxonomy_slug($key) ?>" value="<?php echo $value2 ?>"><span class="katalog__widget-checkbox_indicator"></span><?php echo get_term_by('id', $value2, $key)->name ?></label>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php $i++; ?>
	<?php endforeach; ?>
	<?php if (count($testAtt) > 14): ?>
		<div class="katalog__more-wrap">
			<button type="button" class="katalog__more-btn">Показать все</button>
		</div>
	<?php endif; ?>
	<?php
}

function moreAttr() {
	$queryTerm = get_term($_POST['termId']);
	global $wp_query;
	$custom_tax_id =  do_shortcode('[tax_id id=21]');
	$custom_taxonomy = do_shortcode('[atributeName id=24]');

	$args = array(
			'posts_per_page' => -1,
			'orderby' => 'date',
			'order' => 'DESC',
			'post_type'   => 'product'

	);

		if ($queryTerm->taxonomy != "" && empty($custom_tax_id)) {
			$tax_query[] =
			array(
				'taxonomy' => $queryTerm->taxonomy,
				'field'    => 'id',
				'terms'    => array($queryTerm->term_id),
				'operator' => 'IN'
			);
		} else if (!empty($custom_tax_id) && isset($_GET['rg']) && $_GET['rg'] != "") {
			$tax_query[] =
			array(
				'taxonomy' => (!empty($custom_taxonomy)) ? $custom_taxonomy : 'product_cat',
				'field'    => 'id',
				'terms'    => explode(",", $custom_tax_id),
				'operator' => 'IN'
			);
		}

	$args['tax_query'] = array(
			'relation' => 'AND',
			$tax_query
		);
	$wp_query2 = new WP_Query($args);
	$testAtt = array();
	$attrTerms = array();
	$tempArr = array();
	$i = 0;
	?>
	<?php while( $wp_query2->have_posts() ): ?>
		<?php $wp_query2->the_post() ?>
		<?php global $product; ?>
			<?php foreach ($product->get_attributes() as $key => $value): ?>
				<?php if ($value['name'] != 'pa_komplektaciya'): ?>
					<?php @$testAtt[$value['name']] .= $value['options'][0].","; ?>
				<?php endif; ?>
			<?php endforeach; ?>
	<?php endwhile ?>
	<?php foreach ($testAtt as $key => $value): ?>
	<?php
		$allAtrr = array_unique(array_filter(explode(',', $value)));
	?>
		<?php if ($i > 14): ?>
		<div class="katalog__widget">
			<div class="katalog__widget-title"><?php echo wc_attribute_label( $key ) ?></div>
			<div class="katalog__widget-wrap">
				<div class="katalog__widget-wrap_mobile">
					<?php foreach ($allAtrr as $key2 => $value2): ?>
						<label><input type="checkbox" class="katalog__widget-checkbox" name="<?php echo wc_attribute_taxonomy_slug($key) ?>" value="<?php echo $value2 ?>"><span class="katalog__widget-checkbox_indicator"></span><?php echo get_term_by('id', $value2, $key)->name ?></label>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php $i++; ?>
	<?php endforeach; ?>
	<?php
		die();
}

add_action('wp_ajax_moreattr', 'moreAttr');
add_action('wp_ajax_nopriv_moreattr', 'moreAttr');

function the_excerpt_max_charlength( $charlength ){
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '...';
	} else {
		echo $excerpt;
	}
}

class subMenu extends Walker_Nav_Menu {
    function end_el(&$output, $item, $depth=0, $args=array()) {

    if( 'Каталог' == $item->title ){
			$terms = get_terms( 'product_cat', array(
			    'hide_empty'  => 0,
			    'orderby'    => 'term_id',
			    'parent'      => 0,
			    'order'      => 'ASC',
			    'exclude'    => array(15),
		      'hide_empty' => true
			) );

			$output .= '<ul class="sub-menu menu__list-category">';
			foreach ($terms as $key => $value) {
		  	$output .= '<li class="menu-item"><a href="'.get_term_link($value->term_id).'">'.$value->name.'</a></li>';
			}
			$output .= '</ul>';
	    $output .= "</li>\n";
    }

		if( 'Услуги' == $item->title ){
			  global $wp_query;
			  $args = array(
			      'orderby' => 'date',
			      'order' => 'DESC',
			      'post_type'   => 'uslugi'

			  );
			  $wp_query = new WP_Query($args);

		  	$output .= '<ul class="sub-menu menu__list-category">';
			  while( have_posts() ) {
			    the_post();
			    global $post;
			    $output .= '<li class="menu-item"><a href="'.get_permalink().'">'.$post->post_title.'</a></li>';
				}
				$output .= '</ul>';
		    $output .= "</li>\n";
				wp_reset_query();
    }

		if( 'Решения' == $item->title ){
			$terms2 = get_terms( 'appointment', array(
			    'hide_empty'  => 0,
			    'orderby'    => 'term_id',
			    'parent'      => 0,
			    'order'      => 'ASC',
			    'exclude'    => array(15)
			) );

			$output .= '<ul class="sub-menu menu__list-category">';
			foreach ($terms2 as $key => $value) {
		  	$output .= '<li class="menu-item"><a href="'.get_term_link($value->term_id).'">'.$value->name.'</a></li>';
			}
			$output .= '</ul>';
	    $output .= "</li>\n";
    }
    }
}

add_filter("woocommerce_checkout_fields", "order_fields");

function order_fields($fields) {

    $order = array(
        "billing_phone"
    );
    foreach($order as $field)
    {
        $ordered_fields[$field] = $fields["billing"][$field];
    }

    $fields["billing"] = $ordered_fields;
    return $fields;

}

function nowUrl() {
	$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$url = explode('?', $url);
	$url = $url[0];
	echo $url;
}

add_shortcode('nowUrl', 'nowUrl');

add_filter('woocommerce_variable_price_html', 'my_woocommerce_variable_price_html', 10, 2);

function my_woocommerce_variable_price_html( $price, $product ) {
     return '<span class="price__sale">'. wc_price($product->get_variation_sale_price( "min" )). '</span>';
}

// function my_price_replace($price, $_product) {
//     // if ($_product->get_price() == 0)  return __( 'Цена по запросу.' );
//     return $_product->get_price();
// }
// add_filter( 'woocommerce_empty_price_html', 'my_price_replace', 1, 2 );

add_filter( 'woocommerce_get_price_html', 'filter_function_name_2343', 10, 2 );
function filter_function_name_2343( $price, $product ){
	 if ($product->get_price() == 0) {
		 $price = __( '<div class="empty-price">Цена по запросу</div>' );
	 }
	return $price;
}

include 'pages/mlp/mlp-shortcodes.php';

add_filter('woocommerce_dropdown_variation_attribute_options_html', function ($html) {
    $xml = simplexml_load_string($html);

    $select = array('id'               => (string)$xml->attributes()['id'],
                    'name'             => (string)$xml->attributes()['name'],
                    'attribute_name'   => (string)$xml->attributes()['data-attribute_name'],
                    'show_option_none' => (string)$xml->attributes()['data-show_option_none']);

    $options = array();
    foreach($xml->option as $option) {
        $options[] = array('text'     => (string)$option,
                           'value'    => (string)$option->attributes()['value'],
                           'selected' => (string)$option->attributes()['selected'] === 'selected');
    }

    usort($options, function ($a, $b) {
        return strcmp($a['value'], $b['value']);
    });

    $xml = simplexml_load_string('<select/>');
    $xml->addAttribute("id", $select["id"]);
    $xml->addAttribute("name", $select["name"]);
    $xml->addAttribute("data-attribute_name", $select["attribute_name"]);
    $xml->addAttribute("data-show_option_none", $select["show_option_none"]);

    foreach ($options as $option) {
        $child = $xml->addChild('option');
        $child->value = $option['text'];
        $child->addAttribute('value', $option['value']);
        if ($option['selected']) {
            $child->addAttribute('selected', 'selected');
        }
    }

    return $xml->asXML();
});

/*add_action( 'phpmailer_init', 'setup_phpmailer_init' );
function setup_phpmailer_init( $phpmailer ) {
    $phpmailer->Host = 'mail.ufaprom.ru'; // for example, smtp.mailtrap.io
    $phpmailer->Port = 25; // set the appropriate port: 465, 2525, etc.
    $phpmailer->Username = 'email.ufaprom.ru'; // your SMTP username
    $phpmailer->Password = 'aquae#Ng&u0y'; // your SMTP password
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = 'tls'; // preferable but optional
    $phpmailer->IsSMTP();

}*/
