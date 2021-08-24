<?php

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

$brandsTerms = get_terms( 'brands', [
	'hide_empty' => false,
] );
$materialTerms = get_terms( 'pa_material', [
	'hide_empty' => false,
] );
$vstavkaTerms = get_terms( 'pa_vstavka', [
	'hide_empty' => false,
] );
$queryTerm = get_queried_object();
$termId = $queryTerm->term_id;
$backgroundUrl = wp_get_attachment_image_url(get_woocommerce_term_meta( $termId, 'thumbnail_id', true ), 'full');
?>
<div class="content_wrap">
	<section class="main-screen main-screen--shop" <?php echo ($backgroundUrl != '') ? 'style="background-image: linear-gradient(257.93deg, rgba(239, 247, 255, 0.16) 20.9%, rgba(255, 239, 242, 0.8) 60.53%, rgba(163, 208, 255, 0.8) 100.68%), url('. $backgroundUrl .')"' : '' ?>>
	  <div class="container">
	    <h1 class="main-screen__title"><?php echo $queryTerm->name ?></h1>
	    <span class="main-screen__subtitle">Подарки для самых любимых... </span>
			<div class="main-screen__description"><?php echo term_description() ?></div>

	  </div>
	</section>
	<section class="shop-links">
	  <div class="container">
			<div class="breadcrumbs breadcrumbs--shop"><?php the_breadcrumb() ?></div>
		</div>
	</section>
	<!-- <section class="shop-category">
		<div class="container">
			<?php //echo do_shortcode('[getCat]'); ?>
		</div>
	</section> -->
	<section class="filters">
	  <div class="container">
			<div class="filters__title">Фильтровать: </div>
	    <div class="filters__container">
	    	<div class="filter__wrap">
	    		<select class="filter filter--brands">
	    		  <option value="all" disabled selected>Бренд</option>
	    		  <?php foreach ($brandsTerms as $key => $value): ?>
	    		    <option value="<?php echo $value->term_id ?>"><?php echo $value->name ?></option>
	    		  <?php endforeach; ?>
	    		</select>
	    				<button class="filter__clear" type="button"></button>
	    	</div>
	    	<div class="filter__wrap">
	    		<select class="filter filter--material">
	    		  <option value="all" disabled selected>Материал</option>
	    		  <?php foreach ($materialTerms as $key => $value): ?>
	    		    <option value="<?php echo $value->term_id ?>"><?php echo $value->name ?></option>
	    		  <?php endforeach; ?>
	    		</select>
	    				<button class="filter__clear" type="button"></button>
	    	</div>
	    	<div class="filter__wrap">
	    		<select class="filter filter--vstavka">
	    		  <option value="all" disabled selected>Вставка</option>
	    		  <?php foreach ($vstavkaTerms as $key => $value): ?>
	    		    <option value="<?php echo $value->term_id ?>"><?php echo $value->name ?></option>
	    		  <?php endforeach; ?>
	    		</select>
	    				<button class="filter__clear" type="button"></button>
	    	</div>
		    <button class="products__range-trigger">Стоимость</button>
				<div class="products__range-popup">
		      <div class="product__range-title">Стоимость, ₽</div>
		      <div class="products__range-wrap">
				    <div class="product__inputs">
							<label><span>От</span><input type="number" class="range-input range-input--left"  min='<?php echo min_max_prices()['min'] ?>' max='<?php echo min_max_prices()['max'] ?>'></label>
				    	<label><span>До</span><input type="number" class="range-input range-input--right" min='<?php echo min_max_prices()['min'] ?>' max='<?php echo min_max_prices()['max'] ?>'></label>
						</div>
				    <div class="range"></div>
		      </div>
		    </div>
			</div>
	    <button class="product__price-sort">По убыванию цены</button>
	    <button class="product__new-sort">Сначало старые</button>
	  </div>
	</section>
	<section class="products" >
	  <div class="container">
	    <div class="products__wrap" <?php echo ($termId != '') ? 'data-term-id='.$termId : ''  ?>>
	      <?php get_template_part( 'template-parts/loop-products', 'page' ); ?>
	  	</div>
			<div class="navigation navigation--top">
				<div class="product-filter__view">
		      <div class="product-filter__view-title">Показать по:</div>
		      <label><input type="radio" name="view-radio-top" checked class="product-filter__view-radio product-filter__view-radio--twenty" value="1"><span>20</span></label>
		      <label><input type="radio" name="view-radio-top" class="product-filter__view-radio product-filter__view-radio--sixty" value="60"><span>60</span></label>
		      <label><input type="radio" name="view-radio-top" class="product-filter__view-radio product-filter__view-radio--all" value="-1"><span>Все</span></label>
		    </div>
				<div class="navigation__wrap">
					<div class="navigation__title">Страницы:</div>
					<?php $postsPer = $wp_query->found_posts/$wp_query->query['posts_per_page']; ?>
					<div class="pagination" offset-count="<?php echo $wp_query->query['posts_per_page']; ?>">
					  <?php for ($i=0; $i < $postsPer; $i++) { ?>
							<?php if ($i == 0): ?>
					      <button class="pagination__page pagination__page--active"><?php echo $i + 1 ?></button>
							<?php endif; ?>
					    <?php if ($i > 3 && $i != ($wp_query->found_posts - 1)): ?>
					      <button class="pagination__page pagination__page--hidden"><?php echo $i + 1 ?></button>
					    <?php elseif ($i == 3): ?>
					      <button class="pagination__page pagination__page--nextdot"><?php echo $i + 1 ?></button>
					    <?php elseif ($i < 4 && $i != 0): ?>
					      <button class="pagination__page"><?php echo $i + 1 ?></button>
					    <?php elseif ($i == ($wp_query->found_posts - 1)): ?>
					      <span class="pagination__dots"><?php echo "..." ?></span>
					      <button class="pagination__page"><?php echo $i + 1 ?></button>
					    <?php endif; ?>
					  <?php } ?>
					</div>
				</div>
			</div>
			<div class="navigation navigation--bottom">
				<div class="navigation__wrap">
					<div class="navigation__title">Страницы:</div>
					<?php $postsPer = $wp_query->found_posts/$wp_query->query['posts_per_page']; ?>
					<div class="pagination" offset-count="<?php echo $wp_query->query['posts_per_page']; ?>">
					  <?php for ($i=0; $i < $postsPer; $i++) { ?>
							<?php if ($i == 0): ?>
					      <button class="pagination__page pagination__page--active"><?php echo $i + 1 ?></button>
							<?php endif; ?>
					    <?php if ($i > 3 && $i != ($wp_query->found_posts - 1)): ?>
					      <button class="pagination__page pagination__page--hidden"><?php echo $i + 1 ?></button>
					    <?php elseif ($i == 3): ?>
					      <button class="pagination__page pagination__page--nextdot"><?php echo $i + 1 ?></button>
					    <?php elseif ($i < 4 && $i != 0): ?>
					      <button class="pagination__page"><?php echo $i + 1 ?></button>
					    <?php elseif ($i == ($wp_query->found_posts - 1)): ?>
					      <span class="pagination__dots"><?php echo "..." ?></span>
					      <button class="pagination__page"><?php echo $i + 1 ?></button>
					    <?php endif; ?>
					  <?php } ?>
					</div>
				</div>
			</div>
	  </div>
	</section>
	<section class="recently">
		<div class="container">
			<div class="recently__title">Недавно просмотренные</div>
			<div id="recently__list" class="owl-carousel products-owl"><?php echo do_shortcode("[woocommerce_recently_viewed_products per_page='4']"); ?></div>
		</div>
	</section>
	<section class="instagram">
		<div class="container">
			<div class="instagram__info">
				<span class="instagram__profile">ALMAZ.HOLDING.UFA</span>
				<a href="https://www.instagram.com/almaz.holding.ufa/" target="_blank" class="instagram__link">Перейти в Instagram</a>
			</div>
		</div>
	</section>
</div>
<?php
get_footer( 'shop' );
