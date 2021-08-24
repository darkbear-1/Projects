<?php

defined( 'ABSPATH' ) || exit;

get_header();
$termInfo = get_queried_object();
$postMeta = get_term_meta($termInfo->term_id);
$gallery = explode(',', $postMeta['kartinki-dlia-slaidera'][0]);
if (isset($_GET['rg']) && $_GET['rg'] != "" && !empty(do_shortcode('[tax_id id=21]'))) {
	$custom_tax_id = do_shortcode('[tax_id id=21]');
} else {
	$custom_tax_id = $termInfo->term_id;
}
?>
<div class="content_wrap">
	<?php echo get_template_part( 'pages/mlp/zima', '', array('termId' => 6534) ); ?>
	<?php if (!empty($postMeta['tekst'][0]) || !empty($gallery[0])): ?>
		<section class="projects-single__content">
			<div class="container">
				<div class="projects-single__content-row projects-single__content-row--appointment">
					<div id="projects-sinlge__slider-list" class="projects-sinlge__slider-list owl-carousel">
						<?php foreach ($gallery as $key => $value): ?>
							<div class="projects-sinlge__slider-image"><?php echo wp_get_attachment_image($value, 'full') ?></div>
						<?php endforeach; ?>
					</div>
					<div class="projects-single__content-text"><?php echo $postMeta['tekst'][0] ?></div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<section class="appointment__products-all">
		<div class="container">
			<h2 class="projects-single__use-title">Популярные товары <span class="appointment__name"><?php echo $termInfo->name ?></span>:</h2>
		</div>
	</section>
	<section class="katalog"  data-term-id="<?php echo $custom_tax_id ?>">
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
				<h1 class="katalog__title"><?php echo (isset($queryTerm)) ? $queryTerm->name : '' ?></h1>
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
	<?php get_template_part('template-parts/consult-section', 'page'); ?>
	<section class="appointment__another">
		<div class="container">
			<h2 class="projects-single__use-title">Другие решения:</h2>
			<div class="appointment__list">
				<div class="catalog__choice-wrap">
					<?php get_template_part( 'template-parts/loop-appointment', 'appointment', array('number' => '3', 'hideBtn' => true, 'exclude' => $termInfo->term_id)); ?>
				</div>
			</div>
		</div>
	</section>
</div>
<?php
get_footer();
