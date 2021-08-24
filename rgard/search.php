<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package MyTheme
 */

get_header();
?>

	<section id="primary" class="content-area">

		<?php if ( have_posts() ) : ?>
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

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</section><!-- #primary -->

<?php
get_footer();
