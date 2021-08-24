<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MyTheme
 */

get_header();
?>

	<div class="single-all_wrap">
    <?php do_action('before_content'); ?>
    <div class="content_wrap">
    <?php do_action('content_inner'); ?>
	<?php 
	get_template_part( 'template-parts/content', get_post_type() );
	// Elementor `single` location
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
	get_template_part( 'template-parts/single' );
}
	?>
    <?php do_action('content_after'); ?>
	</div>
    <?php do_action('after_content'); ?>
    </div>

<?php
get_footer();
