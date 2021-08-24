<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta property="og:image" content="/wp-content/uploads/images/logo1_1.svg"/>
	<?php do_action('wp_head_custom'); ?>
	<?php wp_head(); ?>
	<!-- <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Open+Sans:wght@300;600&family=Rubik:wght@400;600;900&display=swap" rel="stylesheet"> -->
	<script src="/wp-content/themes/rgtheme/js/rive.js"></script>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(46972497, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46972497" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	
</head>
<body <?php body_class(); ?>>
<?php echo do_shortcode("[organizationScheme]"); ?>
<?php echo do_shortcode("[imageobjectScheme]"); ?>
<?php do_action('start_body'); ?>
<?php do_action('before_header'); ?>
<header>
<?php do_action('top_header'); ?>
	<div class="header-top">
		<div class="container">
			<div class="header-top__col">
				<div class="mobileMenu"><div class="bar1"></div><div class="bar2"></div><div class="bar3"></div></div>
				<?php
					wp_nav_menu( [
					'theme_location'  => '',
					'menu'            => 'Меню',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => (check_mobile_device()) ? 'top-menu top-menu--mobile' : 'top-menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '<span class="top-menu__arrow"></span>',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
					] );
					?>
			</div>
			<div class="header-top__col">
				<a href="tel:79177802782" class="header-top__phone-link">+7 917 780-27-82</a>
			</div>
		</div>
	</div>
<?php do_action('bottom_header'); ?>
</header>
<?php do_action('after_header'); ?>
