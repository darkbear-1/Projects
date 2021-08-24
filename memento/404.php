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

	<div class="content-area">
    <?php do_action('before_content'); ?>
    <div class="content-area-row">
	    <?php do_action('content_inner'); ?>
			<section class="thank">
			  <div class="container mpt-20">
			    <div class="wrapper flex row-wrap fw-800 jc-sb ai-c">
			      <div class="center w100">
			        <h1 class="pb-40 center thank__title">404</h1>
			        <p class="fs-22 fw-400 thank__subtitle pb-20">
			         Этой страницы не существует, вы попали сюда по ошибке.
			        </p>
			        <hr>
							<a href="/" class="not-found__link">На Главную</a>
			      </div>
			    </div>
			</div>
			</section>
    <?php do_action('content_after'); ?>
	</div>
    <?php do_action('after_content'); ?>

    </div>

<?php
get_footer();
