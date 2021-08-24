<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
$allAtrr = wc_get_attribute_taxonomies();
ksort($allAtrr);
$queryTerm = get_queried_object();
$termId = $queryTerm->term_id;

?>
<div class="content_wrap">
	<section class="search__output pad-t-b-40">
		<div class="container">
		<?php if ( have_posts() ) : ?>
				<h1 class="catalog__title">
					<?php
					printf( esc_html__( 'Результаты поиска для: %s', 'mytheme' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			<?php
			/* Start the Loop */
			if ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endif;

			the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div><!-- #main -->
	</section><!-- #primary -->
	<section class="consultation">
		<div class="container">
			<div class="consultation__column">
				<div class="consultation__image-wrap">
					<img src="/wp-content/uploads/images/phone.png" alt="" class="consultation__image">
					<a href="tel:82312223123" class="consultation__tel">+7 (231) 222 31 23</a>
				</div>
			</div>
			<div class="consultation__column">
				<h2 class="consultation__title">Бесплатная консультация по телефону</h2>
				<div class="consultation__subtitle">Оставьте свой номер телефона и мы вам перезвоним.</div>
				<div class="consultation__form">
					<form class="form-consultation" method="post" action="javascript: console.log('Форма отправлена')" enctype="multipart/form-data" name="Бесплатная консультация по телефону">
						<div class="consultation__input-wrap">
							<input class="form-consultation__phone" type="tel" name="phone" pattern="[0-9()#&+*-=.]+" title="Принимаются только цифры и телефонные символы (#, -, * и т. д.)." placeholder="Номер телефона" id="phone" value="" required>
							<input class="form-consultation__name" type="text" name="name" placeholder="Ваше имя" value="">
							<input type="checkbox" name="anticheck" id="anticheck" class="anticheck" style="display: none !important;" value="true" checked="checked">
							<input type="text" name="submitted" id="submitted" value="" style="display: none !important;">
						</div>
						<div class="consultation__policy">Нажимая на кнопку, Вы принимаете условия <a href="/zayavlenie-o-konfidentsialnosti/" target="_blank" class="consultation__policy-link">политики конфиденциальности</a> компании и даете согласие на обработку персональных данных.</div>
						<input class="consultation__form-send button" type="submit" value="Заказать консультацию">
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
<?php
get_footer( 'shop' );
