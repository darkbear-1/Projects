<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MyTheme
 */

get_header();
?>

	<div class="content-all_wrap">
    <?php do_action('before_content'); ?>
    <div class="content_wrap">
    <?php do_action('content_inner'); ?>
			<div class="container pad-t-40-imp pad-b-40-imp text-align-center">
				<div class="catalog__title">СТРАНИЦА НЕ НАЙДЕНА</div>
				<div class="projects-single__content-text text-align-center mr-b-30">Этой страницы не существует.<br>Попробуйте еще раз или воспользуйтесь поиском!</div>
				<a href="/" class="single-product__program-button button">Вернуться на главную</a>
			</div>
    <?php do_action('content_after'); ?>
	</div>
    <?php do_action('after_content'); ?>
    </div>

<?php
get_footer();
