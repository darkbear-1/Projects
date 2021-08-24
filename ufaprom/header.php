<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
	<?php do_action('wp_head_custom'); ?>
	<?php wp_head(); ?>
</head>
<body>
<?php do_action('start_body'); ?>
<?php do_action('before_header'); ?>
<header>
<?php do_action('top_header'); ?>
<?php
 $cityArr = array(
	 "г. Уфа"						=> 	"ул. Заводская 15/1",
	 "г. Казань"				=> 	"ул. Энгельса, д. 14",
	 "г. Оренбург"			=> 	"Загородное шоссе, 1/1",
	 "г. Малоярославец"	=>	"ул. Кирова, 1",
	 "г. Нур-Султан"				=>	"ул. Жансугурова 8/2"
 );
?>
<div class="header-wrap">
    	<div class="header__top">
			    <div class="container">
						<div class="header__col">
							<a href="/" class="header__logo-link"><img src="/wp-content/uploads/images/logo.png" alt="" class="header__logo"></a>
						</div>
						<div class="header__col">
							<div class="header__search"><?php echo do_shortcode('[wcas-search-form]'); ?></div>
						</div>
						<div class="header__col">
							<div class="header__city-wrap">
								<select class="header__city-select" style="display: none;">
			    		  	<option value="all" disabled="" selected=""><?php echo (!empty(do_shortcode('[cityName id=22]'))) ? do_shortcode('[cityName id=22]') : "г. Уфа" ?></option>
			    		    <option value="ул. Заводская 15/1">г. Уфа</option>
			    		    <option value="ул. Энгельса, д. 14">г. Казань</option>
			    		    <option value="Загородное шоссе, 1/1">г. Оренбург</option>
			    		    <option value="ул. Кирова, 1">г. Малоярославец</option>
			    		    <option value="ул. Жансугурова 8/2">г. Нур-Султан</option>
				    		</select>
								<div class="header__city-name"><?php echo (!empty(do_shortcode('[cityName id=22]'))) ? $cityArr[do_shortcode('[cityName id=22]')] : "ул. Заводская 15/1" ?></div>
							</div>
						</div>
						<div class="header__col">
							<div class="header__phone">
								<?php if (!empty(do_shortcode('[tel_number id=17]'))): ?>
									<?php echo do_shortcode('[tel_number id=17]') ?>
								<?php else: ?>
									<a href="tel:+73472008463" class="mgo-number-12072">+7 (347) 200-84-63</a>
								<?php endif; ?>
							</div>
						</div>
						<div class="header__col">
							<a href="mailto:zakaz@ufaprom.ru" class="header__mail">zakaz@ufaprom.ru</a>
						</div>
						<div class="header__col">
							<a href="<?php echo wc_get_cart_url() ?>" class="header__cart basket-btn basket-btn_fixed-xs">
								<?php if (!empty((WC()->cart->cart_contents))): ?>
									<span class="header__cart-indicator"></span>
								<?php endif; ?>
								<img src="/wp-content/uploads/images/cart.svg" alt="" class="header__cart-icon">
								<img src="/wp-content/uploads/images/cart-mobile.svg" alt="" class="header__cart-icon header__cart-icon--mobile">
					    </a>
						</div>
		  		</div>
			</div>
			<div class="header__bottom">
		    <div class="container">
					<?php
						wp_nav_menu( [
					'theme_location'  => '',
					'menu'            => 'Меню',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu__list',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => new subMenu,
					] );
				?>
	    	</div>
  	</div>
		<div class="header__bottom header__bottom--mobile">
			<div class="container">
				<div class="mobileMenu"><div class="bar1"></div><div class="bar2"></div><div class="bar3"></div></div>
				<div class="header__phone header__phone--mobile">
					<?php if (!empty(do_shortcode('[tel_number id=17]'))): ?>
						<?php echo do_shortcode('[tel_number id=17]') ?>
					<?php else: ?>
						<a href="tel:+73472008463" class="mgo-number-12072">+7 (347) 200-84-63</a>
					<?php endif; ?>
				</div>
				<div class="header__bottom-icons">
					<button class="header__search-trigger--mobile"></button>
					<a href="https://api.whatsapp.com/send?phone=79378339350&text=<?php  echo nowUrl(); ?> | Здравствуйте, " class="header__whatsapp" target="_blank"></a>
					<a href="<?php echo wc_get_cart_url() ?>" class="header__cart basket-btn basket-btn_fixed-xs">
						<?php if (!empty((WC()->cart->cart_contents))): ?>
							<span class="header__cart-indicator"></span>
						<?php endif; ?>
						<img src="/wp-content/uploads/images/cart.svg" alt="" class="header__cart-icon">
						<img src="/wp-content/uploads/images/cart-mobile.svg" alt="" class="header__cart-icon header__cart-icon--mobile">
					</a>
				</div>
				<?php
					wp_nav_menu( [
				'theme_location'  => '',
				'menu'            => 'Меню',
				'container'       => 'div',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu__list menu__list--mobile',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => new subMenu,
				] );
			?>
			<div class="header__search header__search--mobile"><?php echo do_shortcode('[wcas-search-form]'); ?></div>
			</div>
	</div>
</div>
<?php do_action('bottom_header'); ?>
</header>
<?php do_action('after_header'); ?>
