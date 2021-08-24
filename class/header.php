<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500&family=Press+Start+2P&family=Poppins&family=Raleway:wght@700&family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">
	<?php //echo !is_user_logged_in() ? do_action('wp_head_custom') : "" ?>
	<?php echo do_action('wp_head_custom') ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action('start_body'); ?>
<?php do_action('before_header'); ?>
<header>
<?php do_action('top_header'); ?>
<div class="header-wrap">
<?php
// Elementor `header` location
// if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {

// 	get_template_part( 'template-parts/header' );
// }
 ?>
	<div class="top-menu">
		<div class="top-menu__container">
			<div class="top__menu-trigger">
				<div class="bar bar1"></div>
			  <div class="bar bar2"></div>
			  <div class="bar bar3"></div>
			</div>
			<div class="top-menu__menu">
		<?php
				wp_nav_menu( [
			'theme_location'  => '',
			'menu'            => 'Верхнее меню',
			'container'       => 'div',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'top-menu__list',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => '',
			] );
		?>
		</div>
		<div class="top-menu__phone">
			<a href="tel:88003336170"><img src="/wp-content/uploads/2020/08/Icon-5.svg" class="top-menu__phone-icon">8-800-333-61-70</a>
		</div>
		<div class="top-menu__action">
			<div id="container_id2" class="hidden-xs hidden-sm"></div>
		</div>
		</div>
	</div>
	<?php if (is_singular( 'resheniya' ) || is_singular( 'vozmoshnosti' )): ?>
		<div class="bottom-menu bottom-menu--resheniya">
	<?php elseif (is_front_page()) : ?>
		<div class="bottom-menu bottom-menu--mainpage">
	<?php else: ?>
		<div class="bottom-menu">
	<?php endif; ?>

		<div class="bottom-menu__container">
			<div class="top-menu__logo">
				<a href="/"><img class="top-menu__img" src="/wp-content/uploads/2020/08/logo.svg"><img class="top-menu__img top-menu__img--white" src="/wp-content/uploads/2020/08/LOGO-1.svg"></a>
			</div>
			<div class="bottom-menu__menu">
				<?php
				wp_nav_menu( [
					'theme_location'  => '',
					'menu'            => 'Меню',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'bottom-menu__list',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				] );
				?>
			</div>
			<div class="login btn-login"><a class="login__link--moblie" href="http://enter.business.ru/login"><span class="registration__icon"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 6C16 2.68629 13.3137 0 10 0C6.68629 0 4 2.68629 4 6C4 9.31371 6.68629 12 10 12C13.3137 12 16 9.31371 16 6ZM5 14H13C13.5523 14 14 14.4477 14 15C14 15.5523 13.5523 16 13 16H5C3.34315 16 2 17.3431 2 19C2 19.5523 1.55228 20 1 20C0.447715 20 0 19.5523 0 19C0 16.3112 2.12231 14.1182 4.78311 14.0046L5 14ZM10 2C7.79086 2 6 3.79086 6 6C6 8.20914 7.79086 10 10 10C12.2091 10 14 8.20914 14 6C14 3.79086 12.2091 2 10 2ZM18 14C18.5523 14 19 14.4477 19 15V16H20C20.5523 16 21 16.4477 21 17C21 17.5523 20.5523 18 20 18H19V19C19 19.5523 18.5523 20 18 20C17.4477 20 17 19.5523 17 19V18H16C15.4477 18 15 17.5523 15 17C15 16.4477 15.4477 16 16 16H17V15C17 14.4477 17.4477 14 18 14Z" fill="#015EB3"/></svg><span></a><a class="login__link" href="http://enter.business.ru/login">Вход</a></div>
			<a  href="#reg" class="registration"><span class="registration__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 14H15C17.7614 14 20 16.2386 20 19C20 19.5523 19.5523 20 19 20C18.4872 20 18.0645 19.614 18.0067 19.1166L17.9949 18.8237C17.907 17.3072 16.6928 16.093 15.1763 16.0051L15 16H5C3.34315 16 2 17.3431 2 19C2 19.5523 1.55228 20 1 20C0.447715 20 0 19.5523 0 19C0 16.3112 2.12231 14.1182 4.78311 14.0046L5 14H15H5ZM10 0C13.3137 0 16 2.68629 16 6C16 9.31371 13.3137 12 10 12C6.68629 12 4 9.31371 4 6C4 2.68629 6.68629 0 10 0ZM10 2C7.79086 2 6 3.79086 6 6C6 8.20914 7.79086 10 10 10C12.2091 10 14 8.20914 14 6C14 3.79086 12.2091 2 10 2Z" fill="#54BCE3"/></svg></span><span class="registration__text">Регистрация</span></a>
			<div class="bottom__menu-trigger">
				<div class="bar bar1"></div>
			  <div class="bar bar2"></div>
			  <div class="bar bar3"></div>
			</div>
		</div>
	</div>
</div>
<?php do_action('bottom_header'); ?>
</header>
<?php do_action('after_header'); ?>
