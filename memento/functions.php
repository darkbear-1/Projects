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

// function riveJS() {
//         wp_enqueue_script( 'rive', get_stylesheet_directory_uri() . '/js/rive.min.js' );
//     }
// add_action( 'wp_enqueue_scripts', 'riveJS' );


function lightboxJS() {
        wp_enqueue_script( 'lightbox', get_stylesheet_directory_uri() . '/js/lightbox.min.js' );
    }
add_action( 'wp_enqueue_scripts', 'lightboxJS' );

function lightboxCSS() {
	wp_enqueue_style( 'lightboxstyle', get_stylesheet_directory_uri() . '/css/lightbox.min.css' );
}
add_action( 'wp_enqueue_scripts', 'lightboxCSS' );

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
				// wp_enqueue_script( 'modernJs', get_stylesheet_directory_uri() . '/js/modernizr-custom.js', array('jquery'), null, true );
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


function kompleksyList() {
	get_template_part( 'template-parts/loop-complexs', 'kompleksy');
  die();
}

add_action('wp_ajax_kompleksy', 'kompleksyList');
add_action('wp_ajax_nopriv_kompleksy', 'kompleksyList');

function monumentsList() {
	get_template_part( 'template-parts/loop-monuments', 'monuments');
  die();
}

add_action('wp_ajax_monuments', 'monumentsList');
add_action('wp_ajax_nopriv_monuments', 'monumentsList');

function calcPu() {
	$post = get_post($_POST['postId']);
	$postMeta = get_post_meta($post->ID);
	$materialTerms = get_the_terms( $post->ID, 'material' );
	?>
	<div class="modal zayav-pu">
	  <div class="modal__container">
			<div class="map__form-wrap calc__form-wrap">
				<form class="send-form" action="javascript: console.log('Форма отправлена')" method="post">
					<div class="modal__col">
			    	<div class="calc__title"><?php echo $post->post_title ?> <?php echo $postMeta['artikul'][0] ?></div>
			    	<div class="calc__material"><?php echo $materialTerms[0]->name ?></div>
			    	<div class="calc__price"><span class="calc__price-val"><?php echo $postMeta['tsena'][0] ?></span> рублей</div>
			    	<div class="calc__image"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>" alt=""></div>
			    </div>
			    <div class="modal__col">
			    	<div class="calc__sizes">
			    		<div class="calc__sizes-title">Доступные размеры</div>
			    		<div class="calc__sizes-wrap">
								<?php if (!empty($postMeta['razmer-stely'][0])): ?>
									<?php foreach (unserialize($postMeta['razmer-stely'][0]) as $key => $value): ?>
										<input type="radio" name="calc__variant" id="calc__variant-<?php echo $key ?>" class="calc__variant" value="<?php echo $value['razmer'] ?>" data-value="<?php echo $value['tsena'] ?>" <?php echo ($key == 'item-0') ? 'checked' : '' ?>>
										<label for="calc__variant-<?php echo $key ?>"><?php echo $value['razmer'] ?></label>
									<?php endforeach; ?>
								<?php else: ?>
									<div class="calc__sizes-empty">Нет размеров</div>
								<?php endif; ?>
							</div>
						</div>
						<?php if (!empty($_POST['type']) && $_POST['type'] == 'complexs'): ?>
				    	<div class="calc__sizes">
				    		<div class="calc__sizes-title">Варианты размеров цветников:</div>
								<div class="calc__sizes-wrap calc__sizes-wrap--variants">
									<?php if (!empty($postMeta['varianty-razmerov-tsvetnikov'][0])): ?>
										<?php foreach (unserialize($postMeta['varianty-razmerov-tsvetnikov'][0]) as $key => $value): ?>
											<input type="radio" name="calc__cvet" id="calc__cvet-<?php echo $key ?>" class="calc__variant calc__variant--cvet" value="<?php echo $value['razmer'] ?>" data-value="<?php echo $value['tsena'] ?>" <?php echo ($key == 'item-0') ? 'checked' : '' ?>>
											<label for="calc__cvet-<?php echo $key ?>"><?php echo $value['razmer'] ?></label>
										<?php endforeach; ?>
									<?php else: ?>
										<div class="calc__sizes-empty">Нет размеров</div>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
						<div class="calc__box-wrap">
							<label for="portret" class="select-label">Портреты</label>
							<div class="select-wrap">
			        	<select name="portret" id="portret" class="filter-select">
			        	  <option selected="" data-value="0" value="Нет">Нет</option>
			      	    <option value="Портрет (25х30см) - 3 500 руб." data-value="3500">Портрет (25х30см) - 3 500 руб.</option>
			      	    <option value="Второй портрет (25х30см) - 3 500 руб." data-value="3500">Второй портрет (25х30см) - 3 500 руб.</option>
			      	    <option value="Портрет (30х40см) - 4 500 руб." data-value="4500">Портрет (30х40см) - 4 500 руб.</option>
			      	    <option value="Второй портрет (30х40см) - 4 500 руб." data-value="4500">Второй портрет (30х40см) - 4 500 руб.</option>
			      	</select>
			        </div>
						</div>
						<div class="calc__box-wrap">
							<label for="symbol" class="select-label">Символ веры</label>
							<div class="select-wrap">
			        	<select name="symbol" id="symbol" class="filter-select">
			        	  <option selected="" data-value="0" value="Нет">Нет</option>
			      	    <option value="Символ веры - 600 руб." data-value="600">Символ веры - 600 руб.</option>
			      	</select>
			        </div>
						</div>
						<div class="calc__box-wrap">
							<label for="fio-date" class="select-label">ФИО+даты жизни</label>
							<div class="select-wrap">
			        	<select name="fio-date" id="fio-date" class="filter-select">
			        	  <option selected="" value="Нет" data-value="0">Нет</option>
			      	    <option value="ФИО+даты жизни - 2 000 руб." data-value="2000">ФИО+даты жизни - 2 000 руб.</option>
			      	    <option value="Второе ФИО+даты жизни - 2 000 руб." data-value="2000">Второе ФИО+даты жизни - 2 000 руб.</option>
			      	</select>
			        </div>
						</div>
			    </div>
					<div class="form__inputs-wrap">
					 <input type="tel" name="phone" value="" placeholder="+7 (___) ___-__-__" required="">
					 <input type="submit" class="main-screen__form-submit btn-style btn-hover" value="Отправить заявку" <?php echo (empty($postMeta['razmer-stely'][0])) ? 'disabled' : '' ?>>
					 <input type="hidden" name="price-input" id="calc__price-input" value="<?php echo str_replace(" ", '', $postMeta['tsena'][0]); ?>">
					 <input type="hidden" name="price-basic" id="calc__price-basic" value="<?php echo str_replace(" ", '', $postMeta['tsena'][0]); ?>">
			 </form>
			</div>
	  </div>
		<button class="modal__close"></button>
	</div>
	<div class="modal__overlay"></div>
</div>

	<?php
  die();
}

add_action('wp_ajax_calc', 'calcPu');
add_action('wp_ajax_nopriv_calc', 'calcPu');

// определение мобильного устройства
function check_mobile_device() {
    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    foreach ($mobile_agent_array as $value) {
        if (strpos($agent, $value) !== false) return true;
    }
    return false;
}


//
// function nowUrl() {
// 	$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// 	return $url;
// }
//
// add_shortcode('nowUrl', 'nowUrl');








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


// function leave_popup(){
//
//   die();
// }

// add_action('wp_ajax_leavepopup', 'leave_popup');
// add_action('wp_ajax_nopriv_leavepopup', 'leave_popup');
