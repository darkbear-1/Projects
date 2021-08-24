<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyThemeTest
 */

get_header();
?>

	<div class="content-all_wrap">
    <?php do_action('before_content'); ?>
    <div class="content_wrap">
    <?php do_action('content_inner'); ?>
	<?php the_content(); ?>
    <?php do_action('content_after'); ?>
	</div>
    <?php do_action('after_content'); ?>
    </div>
<?php
get_footer();?>
