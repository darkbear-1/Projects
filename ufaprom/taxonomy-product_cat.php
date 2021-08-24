<?php

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

$queryTerm = get_queried_object();
$allAtrr = wc_get_attribute_taxonomies();
ksort($allAtrr);
$termId = $queryTerm->term_id;
$backgroundUrl = wp_get_attachment_image_url(get_woocommerce_term_meta( $termId, 'thumbnail_id', true ), 'full');

$terms = get_terms( 'product_cat', array(
		'hide_empty'  => 0,
		'parent'      => $termId
) );
?>
<div class="content_wrap">
	<?php if (!empty($terms)): ?>
		<?php echo get_template_part( 'pages/mlp/opalubka', '', array('termId' => 7682) ); ?>
		<section class="product-cat">
		  <div class="container">
				<div class="breadcrumbs"><?php the_breadcrumb() ?></div>
				<h1 class="product-cat__title"><?php echo $queryTerm->name ?></h1>
				<div class="product-cat__list">
					<?php get_template_part( 'template-parts/loop-category', 'product_cat' ); ?>
				</div>
			</div>
		</section>
	<?php else: ?>
			<?php echo get_template_part( 'pages/mlp/lesa2', '', array('termId' => 7685) ); ?>
		<?php echo get_template_part( 'pages/mlp/vishki', '', array('termId' => 7680) ); ?>
		<?php echo get_template_part( 'pages/mlp/zlp', '', array('termId' => 7636) ); ?>
		<section class="katalog"  data-term-id="<?php echo $queryTerm->term_id ?>">
		  <div class="container">
				<div class="katalog__column">
					<div class="katalog__widget">
						<div class="katalog__widget-title">Cтоимость</div>
						<div class="products__range-wrap">
					    <div class="product__inputs">
								<?php
									$min_prices = min_max_prices()['min'];
									$max_prices = min_max_prices()['max'];
								?>
								<input type="hidden" class="range-input range-input--left"  min='<?php echo $min_prices ?>' max='<?php echo $max_prices ?>'>
					    	<input type="hidden" class="range-input range-input--right" min='<?php echo $min_prices ?>' max='<?php echo $max_prices ?>'>
							</div>
					    <div class="range"></div>
							<div class="product__inputs-labels">
								<div class="product__inputs-label product__inputs-label--left"><input type="text" value="<?php echo str_replace('.',',',$min_prices); ?>" size="<?php echo (strlen(str_replace('.',',', $min_prices)) > 2) ? strlen(str_replace('.',',', $min_prices)) - 2 : strlen(str_replace('.',',', $min_prices)); ?>"  maxlength="50">₽</div>
								<div class="product__inputs-label product__inputs-label--right"><input type="text" value="<?php echo str_replace('.',',',$max_prices); ?>" size="<?php echo strlen(str_replace('.',',', $max_prices)) - 2 ?>"  maxlength="50">₽</div>
							</div>
			      </div>
					</div>
					<button class="button-border button katalog__mobile-filters">Показать фильтры</button>
					<div class="katalog__widget-list">
						<button type="button" class="pu-close hide-modal"></button>
						<div class="katalog__widget-attr_wrap">
							<?php echo taxAttributes(); ?>
						<button class="button katalog__filters-apply hide-modal">Применить фильтр</button>
						</div>
					</div>
				</div>
				<div class="katalog__column">
					<div class="breadcrumbs"><?php the_breadcrumb() ?></div>
			    <h1 class="katalog__title"><?php echo $queryTerm->name ?></h1>
					<div class="katalog__list">
						<?php get_template_part( 'template-parts/loop-products', 'product' ); ?>
					</div>
					<div class="navigation__wrap">
						<div class="navigation__title">Страницы:</div>
						<?php $postsPer = ceil($wp_query->found_posts/$wp_query->query['posts_per_page']); ?>
						<div class="pagination" offset-count="<?php echo $wp_query->query['posts_per_page']; ?>">
						  <?php for ($i=0; $i < $postsPer; $i++) { ?>
								<?php if ($i == 0): ?>
						      <button class="pagination__page pagination__page--active"><?php echo $i + 1 ?></button>
								<?php endif; ?>
						    <?php if ($i > 3 && $i != ceil(($wp_query->found_posts)/$wp_query->query['posts_per_page']) - 2): ?>
						      <button class="pagination__page pagination__page--hidden"><?php echo $i + 1 ?></button>
						    <?php elseif ($i == 3): ?>
						      <button class="pagination__page pagination__page--nextdot"><?php echo $i + 1 ?></button>
						    <?php elseif ($i < 4 && $i != 0): ?>
						      <button class="pagination__page"><?php echo $i + 1 ?></button>
						    <?php elseif ($i != 0 && $i == ceil(($wp_query->found_posts)/$wp_query->query['posts_per_page']) - 2): ?>
						      <span class="pagination__dots"><?php echo "..." ?></span>
						      <button class="pagination__page"><?php echo $i + 1 ?></button>
						    <?php endif; ?>
						  <?php } ?>
						</div>
					</div>
					<div class="navigation__wrap navigation__wrap--bottom">
						<div class="navigation__title">Страницы:</div>
						<?php $postsPer = ceil($wp_query->found_posts/$wp_query->query['posts_per_page']); ?>
						<div class="pagination" offset-count="<?php echo $wp_query->query['posts_per_page']; ?>">
						  <?php for ($i=0; $i < $postsPer; $i++) { ?>
								<?php if ($i == 0): ?>
						      <button class="pagination__page pagination__page--active"><?php echo $i + 1 ?></button>
								<?php endif; ?>
						    <?php if ($i > 3 && $i != ceil(($wp_query->found_posts)/$wp_query->query['posts_per_page']) - 2): ?>
						      <button class="pagination__page pagination__page--hidden"><?php echo $i + 1 ?></button>
						    <?php elseif ($i == 3): ?>
						      <button class="pagination__page pagination__page--nextdot"><?php echo $i + 1 ?></button>
						    <?php elseif ($i < 4 && $i != 0): ?>
						      <button class="pagination__page"><?php echo $i + 1 ?></button>
						    <?php elseif ($i != 0 && $i == ceil(($wp_query->found_posts)/$wp_query->query['posts_per_page']) - 2): ?>
						      <span class="pagination__dots"><?php echo "..." ?></span>
						      <button class="pagination__page"><?php echo $i + 1 ?></button>
						    <?php endif; ?>
						  <?php } ?>
						</div>
					</div>
				</div>
		  </div>
		</section>
	<?php endif; ?>
	<?php get_template_part('template-parts/consult-section', 'page'); ?>
</div>
<?php
get_footer( 'shop' );
