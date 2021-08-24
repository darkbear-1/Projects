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




function theme_prefix_register_elementor_locations( $elementor_theme_manager ) {

	$elementor_theme_manager->register_all_core_location();
	$elementor_theme_manager->register_location( 'archive' );

}
add_action( 'elementor/theme/register_locations', 'theme_prefix_register_elementor_locations' );

// function theme_prefix_register_elementor_locations( $elementor_theme_manager ) {

// 	$elementor_theme_manager->register_location( 'archive' );

// }
add_action( 'elementor/theme/register_locations', 'theme_prefix_register_elementor_locations' );

if (file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/rg_hooks/includes/hooks.php') != "") {
    include ($_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/rg_hooks/includes/hooks.php');
}

if (file_exists('../../../plugins/multilanding_rg/includes/css/img_setup.css')) {
    function img_css() {
        wp_enqueue_style( 'img_css', get_stylesheet_directory_uri() . '../../../plugins/multilanding_rg/includes/css/img_setup.css' );
    }
    add_action( 'wp_enqueue_scripts', 'img_css' );
}

function owlCss() {
		wp_enqueue_style( 'owl_css', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css' );
		wp_enqueue_style( 'owl_theme_css', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css' );
}
add_action( 'wp_enqueue_scripts', 'owlCss' );

function owl_js() {
        wp_enqueue_script( 'owl_js', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true );
    }
add_action( 'wp_enqueue_scripts', 'owl_js' );

function custJs() {
        wp_enqueue_script( 'imask', get_stylesheet_directory_uri() . '/js/jquery.inputmask.bundle.min.js', array('jquery'), null, true );
        wp_enqueue_script( 'jqimask', get_stylesheet_directory_uri() . '/js/jquery.inputmask.js', array('jquery'), null, true );
        wp_enqueue_script( 'custJs', get_stylesheet_directory_uri() . '/js/cust.js?'.time().'', array('jquery'), null, true );
        wp_enqueue_script( 'catJs', get_stylesheet_directory_uri() . '/js/cat.js', array('jquery'), null, true );
    }
    add_action( 'wp_enqueue_scripts', 'custJs' );

function sliderJs() {
        wp_enqueue_script( 'jqueryColorbox', get_stylesheet_directory_uri() . '../../../../js/colorbox/jquery.colorbox-min.js' );
        wp_enqueue_script( 'modernizer', get_stylesheet_directory_uri() . '../../../../js/cslider/modernizr.custom.js' );
        wp_enqueue_script( 'slider', get_stylesheet_directory_uri() . '../../../../js/cslider/jquery.cslider.min.js' );
    }
    add_action( 'wp_enqueue_scripts', 'sliderJs' );

function bootstrap() {
        wp_enqueue_script( 'popperJs', get_stylesheet_directory_uri() . '/js/popper.min.js', array('jquery'), null, true );
        wp_enqueue_script( 'boots', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
    }
    add_action( 'wp_enqueue_scripts', 'bootstrap' );

function custCss() {
        wp_enqueue_style( 'custCss', get_stylesheet_directory_uri() . '/css/custom_style.css' );
    }
    add_action( 'wp_enqueue_scripts', 'custCss' );

function allCss() {
        wp_enqueue_style( 'allCss', get_stylesheet_directory_uri() . '/css/all.css?'.time().'' );
    }
    add_action( 'wp_enqueue_scripts', 'allCss' );

function jqueryUi() {
        wp_enqueue_script( 'jqueryUi', get_stylesheet_directory_uri() . '../../../../js/jquery-ui-1.10.4.custom.min.js', array('jquery'), null, false );
				wp_enqueue_script( 'jqueryNew', get_stylesheet_directory_uri() . '../../../../js/jquery-1.11.0.min.js', array('jquery'), null, false );
    }
    add_action( 'wp_enqueue_scripts', 'jqueryUi' );

function business_popup() {
		wp_enqueue_script( 'business_popup', 'https://enter.business.ru/business.popup.js', array('jquery'), null, false );
    }
    add_action( 'wp_enqueue_scripts', 'business_popup' );







function styleSlider() {
        wp_enqueue_style( 'styleSlider', get_stylesheet_directory_uri() . '../../../../js/cslider/css/styleSlider.css' );
        wp_enqueue_style( 'colorbox', get_stylesheet_directory_uri() . '../../../../js/colorbox/colorbox.css' );
    }
    add_action( 'wp_enqueue_scripts', 'styleSlider' );


function jqCookie() {
        wp_enqueue_script( 'jqCookie', get_stylesheet_directory_uri() . '/js/jquery.cookie.js', array('jquery'), null, true );
    }
    add_action( 'wp_enqueue_scripts', 'jqCookie' );





function siteTime( $atts ){
		echo current_time('d.m.Y H.i.s');
	}
add_shortcode('siteTime', 'siteTime');

add_filter('get_the_archive_title', function( $title ){
			return preg_replace('~^[^:]+: ~', '', $title );
		});

function the_breadcrumb() {

		    $sep = ' > ';

		    if (!is_front_page()) {

			// Start the breadcrumb with a link to your homepage
		        echo '<div class="breadcrumbs-list">';
		        echo '<a class="home-link" href="';
		        echo get_option('home');
		        echo '">';
		        echo '<i class="home-icon"><svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 7.25H0.751353C0.0833083 7.25 -0.25125 6.44214 0.221129 5.96967L5.46978 0.71967C5.76261 0.426777 6.23739 0.426777 6.53022 0.71967L11.7789 5.96967C12.2512 6.44214 11.9167 7.25 11.2486 7.25H10V11.5C10 12.0523 9.55228 12.5 9 12.5H3C2.44772 12.5 2 12.0523 2 11.5V7.25Z" fill="#54BCE3"/></svg></i>';
		        echo '</a>' . $sep;

			// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
		        if (is_category() || is_single() ){
		            the_category('title_li=');
		        } elseif (is_archive() || is_single()){
		            if ( is_day() ) {
		                printf( __( '%s', 'text_domain' ), get_the_date() );
		            } elseif ( is_month() ) {
		                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
		            } elseif ( is_year() ) {
		                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
		            }
		        }

						if (is_404()) {
							echo "404";
						}

			// If the current page is a single post, show its title with the separator
							if( get_post_type() ==  'resheniya'  ) {
								echo ' <a class="link-item" href="/resheniya/">Решения</a> ' . $sep;
								the_title();
							}

							if( get_post_type() == 'vozmoshnosti' ) {
								echo ' <a class="link-item" href="/programs/">Программы</a> ' . $sep;
								the_title();
							}

							if( is_singular( 'stati' ) ) {
								$taxonomy_name = 'stati_rubriki';
								$post_terms = get_the_terms( get_the_ID(), $taxonomy_name );
								echo ' <a class="link-item" href="/stati/">Статьи</a> ' . $sep;
								if( !empty( $post_terms[0]->term_id ) ) {
									echo get_term_parents_list( $post_terms[0]->term_id, $taxonomy_name, array( 'separator' => $sep ) );
								}
								the_title();
							}

							if( is_singular( 'novosti' ) ) {
								$taxonomy_name = 'novosti_rubriki';
								$post_terms = get_the_terms( get_the_ID(), $taxonomy_name );
								echo ' <a class="link-item" href="/novosti/">Новости</a> ' . $sep;
								if( !empty( $post_terms[0]->term_id ) ) {
									echo get_term_parents_list( $post_terms[0]->term_id, $taxonomy_name, array( 'separator' => $sep ) );
								}
								the_title();
							}

							if( is_singular( 'blanki' ) ) {
								// $taxonomy_name = 'novosti_rubriki';
								// $post_terms = get_the_terms( get_the_ID(), $taxonomy_name );
								echo ' <a class="link-item" href="/blanki-dokumentov/">Бланки документов</a> ' . $sep;
								// if( !empty( $post_terms[0]->term_id ) ) {
								// 	echo get_term_parents_list( $post_terms[0]->term_id, $taxonomy_name, array( 'separator' => $sep ) );
								// }
								the_title();
							}

							if( is_singular( 'services' ) ) {
								// $taxonomy_name = 'novosti_rubriki';
								// $post_terms = get_the_terms( get_the_ID(), $taxonomy_name );
								echo ' <a class="link-item" href="/services/">Бесплатные сервисы</a> ' . $sep;
								// if( !empty( $post_terms[0]->term_id ) ) {
								// 	echo get_term_parents_list( $post_terms[0]->term_id, $taxonomy_name, array( 'separator' => $sep ) );
								// }
								the_title();
							}

			// If the current page is a static page, show its title.
		        if (is_page()) {
		            echo the_title();
		        }

						if (is_404()) {
							the_title();
						}


						if (is_tax('stati_rubriki')) {
							echo ' <a class="link-item" href="/stati/">Статьи</a> ' . $sep;
							$taxonomy_name = 'stati_rubriki';
							$current_term = get_queried_object();
							// если родительский элемент таксономии существует
							if( $current_term->parent ) {
								echo get_term_parents_list( $current_term->parent, $taxonomy_name, array( 'separator' => $sep ) );
							}
							single_term_title();
						}
						if (is_tax('novosti_rubriki')) {
							echo ' <a class="link-item" href="/novosti/">Новости</a> ' . $sep;
							$taxonomy_name = 'novosti_rubriki';
							$current_term = get_queried_object();
							// если родительский элемент таксономии существует
							if( $current_term->parent ) {
								echo get_term_parents_list( $current_term->parent, $taxonomy_name, array( 'separator' => $sep ) );
							}
							single_term_title();
						}
						if (is_tax('razdel_blanki')) {
							echo ' <a class="link-item" href="/blanki-dokumentov/">Бланки документов</a> ' . $sep;
							$taxonomy_name = 'novosti_rubriki';
							$current_term = get_queried_object();
							// если родительский элемент таксономии существует
							if( $current_term->parent ) {
								echo get_term_parents_list( $current_term->parent, $taxonomy_name, array( 'separator' => $sep ) );
							}
							single_term_title();
						}
			// If the current page is a tax page, show its title.
		        if (is_archive() && !is_tax()) {
		            echo get_the_archive_title();
		        }

			// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
		        if (is_home()){
		            global $post;
		            $page_for_posts_id = get_option('page_for_posts');
		            if ( $page_for_posts_id ) {
		                $post = get_page($page_for_posts_id);
		                setup_postdata($post);
		                the_title();
		                rewind_posts();
		            }
		        }

		        echo '</div>';
		    }
		}


//Вывод счетчика простотров записи
function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      return "0";
  }
  return $count;
}
//Init счетчика простотров записи
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//Вывод содержимого записи с указанием кол-ва символов
function postDesc($symbol_amount, $desc) {
	$text = strip_tags($desc);
    $text = @mb_substr($text, 0, $symbol_amount);
    $text = trim($text, "!,.- ");
    echo $text."...";
}

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';
}


function true_load_posts(){
	global $post;
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	query_posts( $args );
	// если посты есть
	if( have_posts() ) :
?>
	<?php while( have_posts() ): ?>
		<?php the_post() ?>
		<?php
			if (get_post_type() == 'stati') {
				$taxSlug = get_the_terms($post->ID, 'stati_rubriki')[0]->name;
			}
			if (get_post_type() == 'novosti') {
				$taxSlug = get_the_terms($post->ID, 'novosti_rubriki')[0]->name;
			}
		?>
		<div class="more__wrap">
				<div class="stati__item--old-line">
					<a href=<?php echo the_permalink( $post->ID) ?>></a>
					<div class="stati__column">
						<div class="stati__item-image"><?php echo get_the_post_thumbnail( $post->ID, 'full' ) ?></div>
					</div>
					<div class="stati__column">
						<div class="stati__item-rubrika"><?php echo $taxSlug ?></div>
						<div class="stati__item-title"><?php echo $post->post_title ?></div>
						<div class="stati__item-desc"><?php echo postDesc(160, $post->post_content) ?></div>
						<div class="stati__item-meta">
							<div class="stati__item-date"><?php echo get_the_date('j.m.Y', $post->ID) ?></div>
							<div class="stati__item-author"><svg class="stati__item-author--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 6H7C9.76142 6 12 8.23858 12 11C12 11.5128 11.614 11.9355 11.1166 11.9933L11 12H1C0.447715 12 0 11.5523 0 11C0 8.31124 2.12231 6.11818 4.78311 6.00462L5 6H7H5ZM6 0C7.65685 0 9 1.34315 9 3C9 4.65685 7.65685 6 6 6C4.34315 6 3 4.65685 3 3C3 1.34315 4.34315 0 6 0Z" fill="#8f8f8f"/></svg><span class="stati__item-author--text"><?php echo the_author_meta('user_firstname', $value->post_author) . " " . get_the_author_meta('user_lastname', $value->post_author)  ?></span></div>
							<div class="stati__item-views"><svg class="stati__item-views--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M6 0C8.4474 0 10.4276 1.27405 12 4C10.4276 6.72595 8.4474 8 6 8C3.63699 8 1.7095 6.8123 0.164117 4.27682L0 4C1.57238 1.27405 3.5526 0 6 0ZM6 2C4.89543 2 4 2.89543 4 4C4 5.10457 4.89543 6 6 6C7.10457 6 8 5.10457 8 4C8 2.89543 7.10457 2 6 2Z" fill="#444444"/></svg><span class="stati__item-views--text"><?php echo getPostViews($post->ID); ?></span></div>
						</div>
						<div class="stati__item-arrow"><img class="stati__item-arrow--icon" src="/wp-content/uploads/2020/08/CHEVRON.svg"></div>
					</div>
				</div>
		</div>
	<?php endwhile; ?>
<?php
	endif;
	die();
}

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

function next_post_load(){
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page']; // следующая страница
	$args['post_status'] = 'publish';
	// обычно лучше использовать WP_Query, но не здесь
	query_posts( $args );
	// если посты есть
	if( have_posts() ) :

		// запускаем цикл

		if ($args['post_type'] == 'stati') {
			while( have_posts() ): the_post();
				get_template_part( 'template-parts/content-stati', get_post_format() );
			endwhile;
		}

		if ($args['post_type'] == 'novosti') {
			while( have_posts() ): the_post();
				get_template_part( 'template-parts/content-novosti', get_post_format() );
			endwhile;
		}


	endif;
	die();
}

add_action('wp_ajax_loadpost', 'next_post_load');
add_action('wp_ajax_nopriv_loadpost', 'next_post_load');

function leave_popup(){
	?>
	<div class="leave-popup stati__form">
		<div class="leave-popup__overlay"></div>
		<div class="leave-popup__content">
			<div class="leave-popup__column">
        <img src="<?php echo $_POST['imgSrc']  ?>">
			</div>
			<div class="leave-popup__column">
				<div class="leave-popup__title">Получить предложение!</div>
				<form class="form-questions callback__form" method="post" action="" enctype="multipart/form-data" name="Получить предложение!">
					<input class="form-questions__phone callback__phone ym-record-keys" type="tel" name="phone" pattern="[0-9()#&+*-=.]+" title="Принимаются только цифры и телефонные символы (#, -, * и т. д.)." placeholder="+____-___-__-__" id="phone" value="" required>
					<input type="hidden" name="form_fields[time]" value="<?php echo do_shortcode('[siteTime]') ?>">
					<input type="hidden" name="form_fields[target]">
					<input type="hidden" name="form_fields[bpn]" value="<?php echo $_POST['imgAlt'] ?>">
					<input type="hidden" name="form_fields[enter_dot]">
					<input type="hidden" name="form_fields[utms]">
					<input type="hidden" name="form_fields[roi_id]">
					<input type="hidden" name="form_fields[yandex_metr]">
					<input type="hidden" name="form_fields[google_metr]">
					<input type="hidden" name="form_fields[another_phone]">
					<input type="hidden" name="form_fields[bitrix_id]">
					<input type="hidden" name="form_fields[publication_code]" value="581">
					<input type="checkbox" name="anticheck" id="anticheck" class="anticheck" style="display: none !important;" value="true" checked="checked">
					<input type="text" name="form-name" style="display: none !important;" value="questions">
					<input type="text" name="submitted" id="submitted" value="" style="display: none !important;">
					<input class="stati__form-send callback__submit form-questions__send" type="submit" value="Получить предложение!">
				</form>
			</div>
			<button type="button" class="leave-popup__close">&#215;</button>
		</div>


    </div>
    <?php
	die();
}

add_action('wp_ajax_leavepopup', 'leave_popup');
add_action('wp_ajax_nopriv_leavepopup', 'leave_popup');

function callback_popup(){
	?>
	<div class="callback stati__form">
        <div class="callback__wrapper">
          <button type="button" class="callback__close" aria-label="Close"></button>
          <div class="callback__title">Здравствуйте</div>
          <div class="callback__subtitle">Оставьте номер, и мы вам<br class="mobile-br"> перезвоним в течение 15 минут!</div>
          <form class="form-questions callback__form" method="post" action="" enctype="multipart/form-data" name="Оставьте номер, и мы вам перезвоним в течение 15 минут!">
        	<input class="form-questions__phone callback__phone ym-record-keys" type="tel" name="phone" pattern="[0-9()#&+*-=.]+" title="Принимаются только цифры и телефонные символы (#, -, * и т. д.)." placeholder="+____-___-__-__" id="phone" value="" required>
        	<input type="hidden" name="form_fields[time]" value="<?php echo do_shortcode('[siteTime]') ?>">
        	<input type="hidden" name="form_fields[target]">
        	<input type="hidden" name="form_fields[enter_dot]">
        	<input type="hidden" name="form_fields[utms]">
        	<input type="hidden" name="form_fields[roi_id]">
        	<input type="hidden" name="form_fields[yandex_metr]">
        	<input type="hidden" name="form_fields[google_metr]">
					<input type="hidden" name="form_fields[another_phone]">
					<input type="hidden" name="form_fields[bitrix_id]">
					<input type="hidden" name="form_fields[publication_code]" value="581">
        	<input type="checkbox" name="anticheck" id="anticheck" class="anticheck" style="display: none !important;" value="true" checked="checked">
        	<input type="text" name="form-name" style="display: none !important;" value="questions">
        	<input type="text" name="submitted" id="submitted" value="" style="display: none !important;">
        	<input class="stati__form-send callback__submit form-questions__send" type="submit" value="Заказать демонстрацию">
        </form>
        </div>
        <div class="callback__overlay"></div>
    </div>
    <?php
	die();
}

add_action('wp_ajax_callback', 'callback_popup');
add_action('wp_ajax_nopriv_callback', 'callback_popup');



function wpse33551_post_type_link( $link, $post = 0 ){
    if ( $post->post_type == 'stati' || $post->post_type == 'novosti'){
        return home_url(  '/' . $post->post_type . '/' . $post->ID .'-' . $post->post_name . '/' );
    } else {
        return $link;
    }
}
add_filter('post_type_link', 'wpse33551_post_type_link', 1, 3);


function stati_rewrites_init(){
	add_rewrite_rule(
			'^stati/([^/]+)-([^/]+)/?$',
			'index.php?post_type=stati&page_id=$matches[1]&name=$matches[2]',
			'top' );

}
add_action( 'init', 'stati_rewrites_init' );

function novosti_rewrites_init(){
	add_rewrite_rule(
			'^novosti/([^/]+)-([^/]+)/?$',
			'index.php?post_type=novosti&page_id=$matches[1]&name=$matches[2]',
			'top' );

}
add_action( 'init', 'novosti_rewrites_init' );

/**
 * Добавляет завершающий слэш в rel="canonical" в плагине Yoast SEO.
 *
 * @param string $canonical_url Канонический URL.
 */
function add_trailing_slash_to_canonical_yoast_seo( $canonical_url ) {
         return trailingslashit( $canonical_url );
}
add_filter( 'wpseo_canonical', 'add_trailing_slash_to_canonical_yoast_seo' );

if ( isset($_SERVER['QUERY_STRING']) && trim($_SERVER['QUERY_STRING']) != '' ) {
    $utm_source = trim($_SERVER['QUERY_STRING']);
    setcookie('utms',  $utm_source, time() + 60 * 60 * 24 * 365, "/", "class365.ru"); // срок действия ~ 1 год
}

add_action( 'save_post', 'guid_write', 100 );
function guid_write( $id ){
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false;

	if( $id = intval($id) ){
		global $wpdb;
		$wpdb->update( $wpdb->posts, ['guid'=>/*wp_make_link_relative*/( get_permalink($id) ) ], ['ID'=>$id] );
	}

	clean_post_cache( $post_id );
}

function mlp_popup(){
	?>

	<div class="mlp-popup">
	    <div class="mlp-popup__overlay"></div>
	    <div class="mlp-popup__content">
	        <?php echo do_shortcode('[quizOutput]'); ?>
            <button type="button" class="mlp-popup__close"></button>
	    </div>

    </div>
    <?php
	die();
}

add_action('wp_ajax_mlppopup', 'mlp_popup');
add_action('wp_ajax_nopriv_mlppopup', 'mlp_popup');

function blankiLic(){
	?>
	<?php $postMeta = get_post_meta($_POST['id']); ?>
	<div class="blanki__lightbox">
  <div class="blanki__lightbox-wrap">
		<div class="blanki__images-slider owl-carousel" id="blanki__images">
	    <?php if ($postMeta['blanki_images'][0] != ''): ?>
	      <?php $imageArr = explode(",", $postMeta['blanki_images'][0]) ?>
	      <?php foreach ($imageArr as $key => $value): ?>
	        <div class="preview_img"><img src="<?php echo wp_get_attachment_url($value) ?>"></div>
	      <?php endforeach; ?>
	    <?php endif ?>
	  </div>
    <button type="button" class="blanki__lightbox-close" aria-label="Close"></button>
  </div>
  <div class="blanki__lightbox-overlay"></div>
</div>


  <?php
	die();
}

add_action('wp_ajax_blanki', 'blankiLic');
add_action('wp_ajax_nopriv_blanki', 'blankiLic');

// определение мобильного устройства
function check_mobile_device() {
    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    // var_dump($agent);exit;
    foreach ($mobile_agent_array as $value) {
        if (strpos($agent, $value) !== false) return true;
    }
    return false;
}


