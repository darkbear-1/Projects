<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php do_action('wp_head_custom'); ?>
	<?php wp_head(); ?>
</head>
<body>
<?php do_action('start_body'); ?>
<?php do_action('before_header'); ?>
<header>
<?php do_action('top_header'); ?>
<div class="header-wrap">
	<div class="container">
		<div class="header__row">
			<ul class="header__list header__list--left">
				<li class="header__list-item"><a href="/punkti-vydachi/" class="header__list-link"><img src="/wp-content/uploads/images/place.svg" alt="" class="header__list-icon"><span class="phone__work-text">г. Уфа, проспект октября, 6</a></li>
				<li class="header__list-item"><a href="tel:83472238388" class="header__list-link"><img src="/wp-content/uploads/images/phone.svg" alt="" class="header__list-icon"><span class="phone__work-text">+7 (347)223‒83‒88<br><span class="phone__work">Пн.-Пт. 10.00 - 20.00</span></a></li>
				<li class="header__list-item"><button type="button" class="header__list-link header__list-link--search"><img src="/wp-content/uploads/images/search.svg" alt="" class="header__list-icon"><?php echo do_shortcode('[wcas-search-form]'); ?></button></li>
			</ul>
			<a href="/" class="header__logo-link"><img src="/wp-content/uploads/images/logo.svg" alt="" class="header__logo"></a>
			<ul class="header__list header__list--right">
				<li class="header__list-item header__list-item--wishlist">
					<!-- <a href="/wishlist/" class="header__list-link">
						<img src="/wp-content/uploads/images/liked.svg" alt="" class="header__list-icon">
					</a> -->
					<?php echo do_shortcode('[ti_wishlist_products_counter]') ?>
				</li>
				<li class="header__list-item"><a href="/my-account/" class="header__list-link"><img src="/wp-content/uploads/images/profile.svg" alt="" class="header__list-icon"></a></li>
				<li class="header__list-item">
				    <a href="<?php echo wc_get_cart_url() ?>" class="header__list-link header__list-link--cart basket-btn basket-btn_fixed-xs">
				        <span class="basket-counter"><?php echo sprintf(WC()->cart->get_cart_contents_count()); ?></span>
								<img src="/wp-content/uploads/images/cart.svg" alt="" class="header__list-icon">
				    </a>
				</li>
			</ul>
		</div>
		<div class="header__row">
			<ul class="header__list header__list--mobile">
				<li class="header__list-item"><a href="/punkti-vydachi/" class="header__list-link"><img src="/wp-content/uploads/images/place.svg" alt="" class="header__list-icon"><span class="phone__work-text">г. Уфа, проспект октября, 6</a></li>
				<li class="header__list-item"><a href="tel:83472238388" class="header__list-link"><img src="/wp-content/uploads/images/phone.svg" alt="" class="header__list-icon"><span class="phone__work-text">+7 (347)223‒83‒88<br><span class="phone__work">Пн.-Пт. 10.00 - 20.00</span></a></li>
				<li class="header__list-item">
					<button type="button" class="header__list-link header__list-link--search">
						<span class="header__list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M1.32648 17.1039L8.25987 10.1705" stroke="#3881AE"/><circle cx="12.1117" cy="6.31858" r="5.27783" stroke="#3881AE"/></svg>
						</span>
						<?php echo do_shortcode('[wcas-search-form]'); ?>
					</button>
				</li>
				<li class="header__list-item header__list-item--tablet"><a href="/" class="header__logo-link"><img src="/wp-content/uploads/images/logo.svg" alt="" class="header__logo"></a></li>
				<li class="header__list-item"><a href="/wishlist/" class="header__list-link"><img src="/wp-content/uploads/images/liked.svg" alt="" class="header__list-icon"></a></li>
				<li class="header__list-item"><a href="/my-account/" class="header__list-link"><img src="/wp-content/uploads/images/profile.svg" alt="" class="header__list-icon"></a></li>
				<li class="header__list-item">
				    <a href="<?php echo wc_get_cart_url() ?>" class="header__list-link header__list-link--cart basket-btn basket-btn_fixed-xs">
				        <span class="basket-counter"><?php echo sprintf(WC()->cart->get_cart_contents_count()); ?></span>
								<img src="/wp-content/uploads/images/cart.svg" alt="" class="header__list-icon">
				    </a>
				</li>
				<li class="header__list-item">
					<div class="mobileMenu"><div class="bar1"></div><div class="bar2"></div><div class="bar3"></div></div>
					<div class="header__menu header__menu--mobile">
					  <div class="header__menu-item header__menu-item--premium"><a href="/product-category/premium/" class="header__menu-item">PREMIUM</a></div>
					  <div class="header__menu-item"><a href="/product-category/novinki/" class="header__menu-item">Новинки</a></div>
					  <div class="header__menu-item">
					    <a href="/product-category/juvelirnye-izdeliya/" class="header__menu-item header__menu-item--accardeon">Ювелирные изделия</a>
					    <div class='cat-menu' style="display: none">
					      <div class="container">
					        <?php echo do_shortcode('[menu_cat_mobile term_id="21"]') ?>
					      </div>
					    </div>
					  </div>
					  <div class="header__menu-item">
					    <a href="/product-category/pomolvka-i-svadba/" class="header__menu-item header__menu-item--accardeon">Помолвка и свадьба</a>
					    <div class='cat-menu' style="display: none">
					      <div class="container">
					        <?php echo do_shortcode('[menu_cat_mobile term_id="22"]') ?>
					      </div>
					    </div>
					  </div>
					  <div class="header__menu-item">
					    <a href="/product-category/dlya-detej/" class="header__menu-item header__menu-item--accardeon">Для детей</a>
					    <div class='cat-menu' style="display: none">
					      <div class="container">
					        <?php echo do_shortcode('[menu_cat_mobile term_id="23"]') ?>
					      </div>
					    </div>
					  </div>
					  <div class="header__menu-item">
					    <a href="/product-category/dlya-muzhchin/" class="header__menu-item header__menu-item--accardeon">Для мужчин</a>
					    <div class='cat-menu' style="display: none">
					      <div class="container">
					        <?php echo do_shortcode('[menu_cat_mobile term_id="24"]') ?>
					      </div>
					    </div>
					  </div>
					  <div class="header__menu-item">
					    <a href="/product-category/chasy/" class="header__menu-item header__menu-item--accardeon">Часы</a>
					    <div class='cat-menu' style="display: none">
					      <div class="container">
					        <?php echo do_shortcode('[menu_cat_mobile term_id="25"]') ?>
					      </div>
					    </div>
					  </div>
					  <div class="header__menu-item">
					    <a href="/product-category/dom-i-aksessuary/" class="header__menu-item header__menu-item--accardeon">Дом и Аксессуары</a>
					    <div class='cat-menu' style="display: none">
					      <div class="container">
					        <?php echo do_shortcode('[menu_cat_mobile term_id="26"]') ?>
					      </div>
					    </div>
					  </div>
					  <div class="header__menu-item"><a href="/product-category/sale/" class="header__menu-item">SALE</a></div>
					  <div class="header__menu-item">
					    <a href="/product-category/drugoe/" class="header__menu-item header__menu-item--accardeon">Другое</a>
					    <div class='cat-menu' style="display: none">
					      <div class="container">
					        <?php echo do_shortcode('[menu_cat_mobile term_id="43"]') ?>
					      </div>
					    </div>
					  </div>
					</div>
				</li>
			</ul>
			<ul class="header__menu">
				<li class="header__menu-item header__menu-item--premium"><a href="/product-category/premium/" class="header__menu-item">PREMIUM</a></li>
				<li class="header__menu-item"><a href="/product-category/novinki/" class="header__menu-item">Новинки</a></li>
				<li class="header__menu-item">
					<a href="/product-category/juvelirnye-izdeliya/" class="header__menu-item header__menu-item--juvelir">Ювелирные изделия</a>
			  	<div class='cat-menu'>
						<div class="container">
							<?php echo do_shortcode('[menuCat term_id="21"]') ?>
							<!-- <img src="/wp-content/uploads/images/Mask Group (5).jpg" alt=""> -->
						</div>
			  	</div>
				</li>
				<li class="header__menu-item">
					<a href="/product-category/pomolvka-i-svadba/" class="header__menu-item">Помолвка и свадьба</a>
			  	<div class='cat-menu'>
						<div class="container">
							<?php echo do_shortcode('[menuCat term_id="22"]') ?>
							<img src="/wp-content/uploads/images/Mask Group (5).jpg" alt="">
						</div>
			  	</div>
				</li>
				<li class="header__menu-item">
					<a href="/product-category/dlya-detej/" class="header__menu-item">Для детей</a>
					<div class='cat-menu'>
						<div class="container">
							<?php echo do_shortcode('[menuCat term_id="23"]') ?>
							<img src="/wp-content/uploads/images/Mask Group (5).jpg" alt="">
						</div>
					</div>
				</li>
				<li class="header__menu-item">
					<a href="/product-category/dlya-muzhchin/" class="header__menu-item">Для мужчин</a>
					<div class='cat-menu'>
						<div class="container">
							<?php echo do_shortcode('[menuCat term_id="24"]') ?>
							<img src="/wp-content/uploads/images/Mask Group (5).jpg" alt="">
						</div>
					</div>
				</li>
				<li class="header__menu-item">
					<a href="/product-category/chasy/" class="header__menu-item">Часы</a>
					<div class='cat-menu'>
						<div class="container">
							<?php echo do_shortcode('[menuCat term_id="25"]') ?>
							<img src="/wp-content/uploads/images/Mask Group (5).jpg" alt="">
						</div>
					</div>
				</li>
				<li class="header__menu-item">
					<a href="/product-category/dom-i-aksessuary/" class="header__menu-item">Дом и Аксессуары</a>
					<div class='cat-menu'>
						<div class="container">
							<?php echo do_shortcode('[menuCat term_id="26"]') ?>
							<img src="/wp-content/uploads/images/Mask Group (5).jpg" alt="">
						</div>
					</div>
				</li>
				<li class="header__menu-item"><a href="/product-category/sale/" class="header__menu-item">SALE</a></li>
				<li class="header__menu-item">
					<a href="/product-category/drugoe/" class="header__menu-item">Другое</a>
					<div class='cat-menu'>
						<div class="container">
							<?php echo do_shortcode('[menuCat term_id="43"]') ?>
							<img src="/wp-content/uploads/images/Mask Group (5).jpg" alt="">
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="header__search-mobile"><?php echo do_shortcode('[wcas-search-form]'); ?></div>
<?php do_action('bottom_header'); ?>
</header>
<?php do_action('after_header'); ?>
