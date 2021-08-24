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
    	<section class="not-found">
    		<div class="container">
    			<div class="not-found__col">
    				<h1 class="not-found__title">404</h1>
						<div class="not-found__text">Увы, здесь пусто...</div>
						<div class="not-found__link-wrap">
							<a href="/" class="not-found__link">На главную</a>
						</div>
    			</div>
    			<div class="not-found__col">
    				<div class="not-found__image">
    					
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
