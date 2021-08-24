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

	<section class="search__output">
		<div class="container">
		<?php if ( have_posts() ) : ?>
				<h1 class="search__title">
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

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
