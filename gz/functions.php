<?php
/**
 * MyTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MyTheme
 */

if (!function_exists('mytheme_setup')): /**
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
function mytheme_scripts()
{
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');

add_action('after_setup_theme', function()
{
    add_theme_support('menus');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
});

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/rg_hooks/includes/hooks.php') != "") {
    include($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/rg_hooks/includes/hooks.php');
}

add_action('wp_enqueue_scripts', 'enqueue_load_fa');
function enqueue_load_fa()
{
    wp_enqueue_style('load-fa', get_stylesheet_directory_uri() . '/css/fa-all.min.css');
}

function owlCss() {
        wp_enqueue_style( 'owl_css', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css' );
        wp_enqueue_style( 'owl_theme_css', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css' );
}
add_action( 'wp_enqueue_scripts', 'owlCss' );

function custom_styles()
{

    //подключаем стили
    wp_enqueue_style('allCss', get_stylesheet_directory_uri() . '/css/all.css');
    //отключаем стили
    wp_dequeue_style('template');

    wp_enqueue_script('custJs', get_stylesheet_directory_uri() . '/js/cust.js', array(
        'jquery'
    ), null, true);
	
	
    wp_enqueue_script('cookieJs', 'https://class365.ru/wp-content/themes/rgtheme/js/jquery.cookie.js', array(
        'jquery'
    ), null, true);
    // wp_enqueue_script( 'modernJs', get_stylesheet_directory_uri() . '/js/modernizr-custom.js', array('jquery'), null, true );
}
add_action('wp_enqueue_scripts', 'custom_styles');


function owl_js() {
        wp_enqueue_script( 'owl_js', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true );
    }
add_action( 'wp_enqueue_scripts', 'owl_js' );

function imaskfunc()
{
    wp_enqueue_script('imask', get_stylesheet_directory_uri() . '/js/jquery.inputmask.bundle.min.js', array(
        'jquery'
    ), null, true);
    wp_enqueue_script('jqimask', get_stylesheet_directory_uri() . '/js/jquery.inputmask.js', array(
        'jquery'
    ), null, true);
}
add_action('wp_enqueue_scripts', 'imaskfunc');

// add_filter('wp_enqueue_scripts', 'replace_default_jquery_with_fallback');
// function replace_default_jquery_with_fallback()
// {
//     $ver = '1.12.4';
//     wp_dequeue_script('jquery');
//     wp_deregister_script('jquery');
//     wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/$ver/jquery.min.js", '', $ver, false);
//     wp_enqueue_script('jquery');
// }

add_filter('get_the_archive_title', function($title)
{
    return preg_replace('~^[^:]+: ~', '', $title);
});

add_theme_support('html5', array(
    'script',
    'style'
));

function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style');
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);

function the_breadcrumb()
{

    // получаем номер текущей страницы
    $pageNum = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $separator = ' <i class="fas fa-angle-right"></i> '; //  »
    echo '<ol class="custom-breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">';
    // если главная страница сайта
    if (is_front_page()) {
        if ($pageNum > 1) {
            echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
            echo '<a itemprop="item" href="' . site_url() . '"><span itemprop="name">Главная</span></a>' . $separator . $pageNum . '-я страница';
            echo '<meta itemprop="position" content="1" /></li>';
        } else {
            echo 'Вы находитесь на главной странице';
        }
    } else { // не главная
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        echo '<a itemprop="item" href="' . site_url() . '"><span itemprop="name">Главная</span></a>' . $separator;
        echo '<meta itemprop="position" content="1" /></li>';
        if (get_post_type() == 'nashi-uslugi') {
          // the_category(', ');
          echo "<li><a href='/uslugi/'>Услуги</a>";
          echo $separator;
          echo "</li>";
          echo "<li>".get_the_title()."</li>";
        } else if (get_post_type() == 'preimushchestva') {
          // the_category(', ');
          echo "<li>".get_the_title()."</li>";
        }  else if (get_post_type() == 'stati') {
          echo "<li><a href='/stati/'>Статьи</a>";
          echo $separator;
          echo "</li>";
          echo "<li>".get_the_title()."</li>";
        } else if (is_single()) { // записи
            the_category(', ');
            echo $separator;
            echo "<li>".the_title()."</li>";
        } else if (is_archive()) {
          echo "<li>".the_archive_title()."</li>";
        } elseif (is_page()) { // страницы WordPress
          echo "<li>".get_the_title()."</li>";
        } elseif (is_category()) {
          echo "<li>".single_cat_title()."</li>";
        } elseif (is_tag()) {
          echo "<li>".single_tag_title()."</li>";
        } elseif (is_404()) { // если страницы не существует
          echo "<li>Ошибка 404</li>";
        }
        if ($pageNum > 1) { // номер текущей страницы
            echo ' (' . $pageNum . '-я страница)';
        }
    }

    echo '</ol>';
}

function organizationScheme() {
  ob_start();
	$orgMail = 'Mail';
	$orgCity = 'Ufa';
	$orgAdress = 'Ufa';
	$orgPhone = "Ufa";
?>
  <div itemscope itemtype="https://schema.org/Organization" style="display:none;">
      <meta itemprop="name" content="Госзайм.рф" />
      <link itemprop="url" href="https://xn--80afmjpiv.xn--p1ai/" />
      <link itemprop="logo" href="https://xn--80afmjpiv.xn--p1ai/wp-content/uploads/2020/06/favicon.png" />
      <meta itemprop="description" content='Займы под залог в <?php echo $orgCity ?> — "ГОСЗАЙМ.РФ" ✅ Обслуживание 24/7 💸 Срочная выдача и онлайн-консультация ✔️ Заходите!' /><meta itemprop="email" content="<?php echo $orgMail ?>" />
      <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
          <meta itemprop="addressLocality" content="<?php echo $orgCity ?>" />
          <meta itemprop="postalCode" content="012345" />
          <meta itemprop="streetAddress" content="<?php echo $orgAdress ?>" />
      </div>
      <meta itemprop="telephone" content="<?php echo $orgPhone ?>" />
  </div>
<?php
  $content = ob_get_contents();
  ob_end_clean();

  if ($_SERVER['REQUEST_URI']=="/") {
      return;
  } else {
     echo $content;
  }
}

add_shortcode('organizationScheme', 'organizationScheme');

function articlesScheme() {
    ob_start();
    ?>
    <script>
        {
          "@context": "https://schema.org",
          "@type": "Article",
          "mainEntityOfPage": {
        	"@type": "WebPage",
        	"@id": "<?php echo get_permalink(get_the_ID()) ?>"
          },
          "headline": "<?php echo (!empty(get_post_meta(get_the_ID(), "_yoast_wpseo_title")[0])) ? do_shortcode(str_replace("%%citycase%%", '[nowCity]' , get_post_meta(get_the_ID(), "_yoast_wpseo_title")[0])) : get_the_title()." – ГОСЗАЙМ.РФ" ?>",
          "description": "<?php echo (!empty(get_post_meta(get_the_ID(), "_yoast_wpseo_metadesc")[0])) ? do_shortcode(str_replace("%%citycase%%", '[nowCity]' , get_post_meta(get_the_ID(), "_yoast_wpseo_metadesc")[0])) : "" ?>",
          "image": "<?php echo get_the_post_thumbnail_url() ?>",
          "author": {
        	"@type": "Organization",
        	"name": "Госзайм.рф"
          },
          "publisher": {
        	"@type": "Organization",
        	"name": "Госзайм.рф",
        	"logo": {
          	"@type": "ImageObject",
          	"url": "https://xn--80afmjpiv.xn--p1ai/wp-content/uploads/2020/06/favicon.png/",
          	"width": 16,
          	"height": 16
        	}
          },
          "datePublished": "<?php echo get_the_date('Y-n-j'); ?>"
        }
</script>

    <?php
    $content = ob_get_contents();
    ob_end_clean();
    if (is_singular('blog')) {
       echo $content;
    } else {
       return;
    }
}

add_shortcode('articlesScheme', 'articlesScheme');

function imageobjectScheme() {
    ob_start();
    $imageMeta = get_post_meta(get_the_ID());
    ?>
    <?php if (!empty($imageMeta['imageobject_image'][0])) : ?>
        <div itemscope itemtype="http://schema.org/ImageObject" style="display: none">
          <div itemprop="name"><?php echo do_shortcode($imageMeta['imageobject_title'][0]) ?></div>
          <img src="<?php echo wp_get_attachment_url( $imageMeta['imageobject_image'][0], 'full') ?>" itemprop="contentUrl" alt="" />
          <span itemprop="description"><?php echo do_shortcode($imageMeta['imageobject_desc'][0]) ?></span>
        </div>
    <?php else: ?>
        <div itemscope itemtype="http://schema.org/ImageObject" style="display: none">
          <div itemprop="name"><?php echo (!empty($imageMeta['_yoast_wpseo_title'][0])) ? wpseo_replace_vars($imageMeta['_yoast_wpseo_title'][0], get_the_ID()) : get_the_title() ?></div>
          <img src="<?php echo (!empty(get_the_post_thumbnail_url(get_the_ID(), 'full'))) ? get_the_post_thumbnail_url(get_the_ID(), 'full') : "https://xn--80afmjpiv.xn--p1ai/wp-content/uploads/2020/06/favicon.png"?>" itemprop="contentUrl" alt="" />
          <span itemprop="description"><?php echo (!empty($imageMeta['_yoast_wpseo_metadesc'][0])) ? do_shortcode(str_replace("%%citycase%%", '[nowCity]' , $imageMeta['_yoast_wpseo_metadesc'][0])) : "" ?></span>
        </div>
    <?php endif; ?>
    <?php
    $content = ob_get_contents();
    ob_end_clean();
    echo $content;
}

add_shortcode('imageobjectScheme', 'imageobjectScheme');

add_filter('excerpt_more', function($more) {
	return '...';
});

function changeCity() {
?>
<?php
  $protocol = "https://";
  $domain = 'no-covid.ru';
  $cityInfos = array();


    $args = array(
        'posts_per_page' => -1,
        'orderby' => 'name',
        'order' => 'DESC',
        'post_type'   => 'region'

    );
    $wp_query = new WP_Query($args);

    foreach ($wp_query->posts as $key => $value) {
      if ($value->post_status == 'publish') {
        $first_letter = mb_strtoupper(mb_substr($value->post_title, 0, 1, "UTF-8"));
        // добавляем в массив список городов на букву $first_letter
        $output[$first_letter][$value->post_name] = $value->post_title;
        ksort($output,SORT_LOCALE_STRING);
      }
    }
    wp_reset_query();
?>
<script type="text/javascript">
  if (document.querySelector('#city-find') !== null) {
    document.querySelector('#city-find').oninput = function () {
      let inputVal = this.value.trim();
      let val = inputVal.toLowerCase();
      let elasticItems = document.querySelectorAll('.all-city a');
      if (val !== '') {
        var booleanArr = [];
        elasticItems.forEach(function (elem) {
          if (elem.innerText.toLowerCase().search(val) == -1) {
                elem.classList.add('hide');
                elem.innerHTML = elem.innerText;
              }
              if (elem.innerText.toLowerCase().search(val) != -1) {
                elem.classList.remove('hide');
                elem.closest('.alf-wrap').classList.remove('hide');
                let str = elem.innerText
                elem.innerHTML = insertMark(str, elem.innerText.toLowerCase().search(val), val.length);
            booleanArr.push(true);
              }
        });
        jQuery(".alf-wrap").each(function(e) {
          if (jQuery(this).find('a').length == jQuery(this).find('.hide').length) {
                jQuery(this).addClass('hide');
          }
        });

      } else {
        elasticItems.forEach(function (elem) {
            elem.classList.remove('hide');
            elem.closest('.alf-wrap').classList.remove('hide');
            elem.innerHTML = elem.innerText;
        });
      }
    }
  }

  function insertMark(string, pos, len) {
    return string.slice(0, pos) + '<mark>' + string.slice(pos, pos + len) + '</mark>' + string.slice(pos + len);
  }
</script>
<div class="modal">
  <div class="modal__container">
    <div class="modal__title">Выберите ближайший к вам город:</div>
    <input type="text" id="city-find">
    <div class="main-city">
      <a href="<?php echo $protocol.'ufa'.'.'.$domain.$_POST['nowUrl'] ?>" class="modal__main-citys_name">Уфа</a>
      <a href="<?php echo $protocol.'moskva'.'.'.$domain.$_POST['nowUrl'] ?>" class="modal__main-citys_name">Москва</a>
      <a href="<?php echo $protocol.'sankt-peterburg'.'.'.$domain.$_POST['nowUrl'] ?>" class="modal__main-citys_name">Санкт-Петербург </a>
    </div>
    <div class="all-city">
      <?php foreach ($output as $key => $value): ?>
        <div class='alf-wrap'>
          <span class='word-title'><?php echo $key ?></span>
          <?php foreach ($value as $city_slug => $city): ?>
            <a href="<?php echo $protocol.$city_slug.'.'.$domain.$_POST['nowUrl'] ?>" class="all-city__link"><?php echo $city ?></a>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
     </div>
    <button class="modal__close"></button>
  </div>
  <div class="modal__overlay"></div>
</div>


<?php
	die();
}

add_action('wp_ajax_change_city', 'changeCity');
add_action('wp_ajax_nopriv_change_city', 'changeCity');

function worksdoneList() {
  get_template_part( 'template-parts/loop-cases', 'worksdone');
  die();
}

add_action('wp_ajax_worksdone', 'worksdoneList');
add_action('wp_ajax_nopriv_worksdone', 'worksdoneList');

function otzyvyList() {
  get_template_part( 'template-parts/loop-otzyvy', 'reviews');
  die();
}

add_action('wp_ajax_otzyvy', 'otzyvyList');
add_action('wp_ajax_nopriv_otzyvy', 'otzyvyList');

// определение мобильного устройства
function check_mobile_device() {
    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    foreach ($mobile_agent_array as $value) {
        if (strpos($agent, $value) !== false) return true;
    }
    return false;
}

function projectsFilter() {
  if (!empty($_POST['postId'])) {
    $postMetas = get_post_meta($_POST['postId']);
    if (array_key_exists('relation_145645526bf6173d7d332ec43fc8cd37', $postMetas)) {
      $args = array(
         'posts_per_page' => -1,
         'post_type' => 'projects',
         'orderby' => 'date',
         'order' => 'DESC'
       );
      $args['post__in'] = get_post_meta($_POST['postId'], 'relation_145645526bf6173d7d332ec43fc8cd37');
    }
  } else {
    $args = array(
       'posts_per_page' => -1,
       'post_type' => 'projects',
       'orderby' => 'date',
       'order' => 'DESC'
     );
  }

    // if (!empty($termId)) {
		// 	$tax_query[] =
    // 	array(
	  //     'taxonomy' => 'site-cat',
	  //     'field'    => 'id',
	  //     'terms'    => array($postId),
	  //     'operator' => 'IN'
	  //   );
    //
    //   $args['tax_query'] = array(
  	// 		'relation' => 'AND',
  	// 		$tax_query
  	// 	);
		// }



	 $wp_query = new WP_Query($args);
?>
<script type="text/javascript">
  if (jQuery("#projects__slider").length != 0) {
    jQuery('#projects__slider').owlCarousel({
      items: 1,
      slideSpeed: 500,
      loop: true,
      nav: true,
      dots: false,
      margin: 17,
      navText: [
        '<div class="slider__arrows slider__arrows--prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#fff"/></svg></div>',
        '<div class="slider__arrows slider__arrows--next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="177" height="34" viewBox="0 0 177 34" fill="none"><path d="M177 17L1 17M1 17L17 0.999986M1 17L17 33" stroke="#fff"/></svg></div>'
      ],
      autoplay: true,
      autoplayTimeout: 6000,
      paginationSpeed : 6000,
      rewindSpeed : 6000,
      stopOnHover : true,
      responsive: {
       1024: {
         items: 1
       },
       768: {
          items: 1
        },
       100: {
         items: 1
       }
      }
    });
  }
</script>
<?php if ($wp_query->have_posts()): ?>
  <div id="projects__slider" class="projects__slider owl-carousel">
    <?php while( $wp_query->have_posts() ): ?>
      <?php $wp_query->the_post() ?>
      <?php global $post; ?>
      <?php $postMeta = get_post_meta($post->ID) ?>
      <div class="projects__slider-item">
        <div class="projects__slider-logo">
          <img src="<?php echo wp_get_attachment_url($postMeta['case_logo'][0]) ?>" alt="">
        </div>
        <div class="projects__slider-wrap">
          <div class="projects__slider-title"><?php echo the_title() ?></div>
          <a href="<?php echo (!empty($postMeta['url_site'][0])) ? $postMeta['url_site'][0] : '#' ?>" target="_blank" rel="nofollow" class="projects__slider-link">Перейти на сайт</a>
        </div>
        <div class="projects__slider-excerpt"><?php echo (!empty($postMeta['kratkoe-opisanie'][0])) ? $postMeta['kratkoe-opisanie'][0] : '' ?></div>
      </div>
    <?php endwhile; ?>
  </div>
  <?php wp_reset_query(); ?>
<?php else: ?>
  <div class="projects__none">Не найдено</div>
<?php endif; ?>

<?php
	die();
}

add_action('wp_ajax_projects_filter', 'projectsFilter');
add_action('wp_ajax_nopriv_projects_filter', 'projectsFilter');

function priceFilter() {
  $args = array(
      'posts_per_page' => -1,
      'orderby' => 'name',
      'order' => 'ASC',
      'post_type'   => 'uslugi'

  );

  if (isset($_POST['termId']) && $_POST['termId'] != '') {
    $tax_query[] =
    array(
      'taxonomy' => 'usl-kategorii',
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
  <?php if ($wp_query->have_posts()): ?>
    <div class="prices__list">
      <?php while( $wp_query->have_posts() ): ?>
        <?php $wp_query->the_post() ?>
        <?php global $post; ?>
        <?php $uslugiMeta = get_post_meta($post->ID) ?>
        <a href="<?php echo get_permalink(); ?>" class="prices__item-link">
          <div class="prices__item">
            <div class="prices__item-title"><?php echo the_title() ?></div>
            <div class="prices__item-value"><?php echo (!empty($uslugiMeta['tsena'][0])) ? $uslugiMeta['tsena'][0] : '' ?></div>
          </div>
        </a>
      <?php endwhile; ?>
    </div>
  <?php else: ?>
    <div class="projects__none">Не найдено</div>
  <?php endif; ?>
<?php
	die();
}

add_action('wp_ajax_price_filter', 'priceFilter');
add_action('wp_ajax_nopriv_price_filter', 'priceFilter');

function improved_trim_excerpt($text) {
	global $post;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		$text = str_replace('\]\]\>', ']]&gt;', $text);
		$text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
		$text = strip_tags($text, '<p>');
		$excerpt_length = 19;
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words)> $excerpt_length) {
			array_pop($words);
			array_push($words, '...');
			$text = implode(' ', $words);
		}
	}
	return $text;
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');
