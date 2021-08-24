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

	<div class="content-all_wrap not-found">
    <div class="container">
			<?php do_action('before_content'); ?>
    			<div class='breadcrumbs'>
    				<div class='breadcrumbs__wrap'>
    					<?php echo the_breadcrumb();?>
    				</div>
    			</div>
    	<div class="content_wrap">
    	<?php do_action('content_inner'); ?>
    			<?php if( !is_front_page() ) : ?>
    				<h1 class="not-found__title">404</h1>
    				<div class="not-found__text">Упс, кажется, такой страницы нет :(</div>
    		 <?php endif ?>
    	<?php do_action('content_after'); ?>
    		</div>
    	<?php do_action('after_content'); ?>
		</div>
    </div>

<?php
get_footer();
