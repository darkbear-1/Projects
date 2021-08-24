<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyTheme
 */

?>

<div class="content-all_wrap">
    <?php do_action('before_content'); ?>
    <div class="content_wrap">
    <?php do_action('content_inner'); ?>
	<?php
// Elementor `archive` location
//print_r($wp_query);
//query_posts( $args );
// если посты есть
?>
<?php if (have_posts()): ?>
<div class="container search-container">
  <div class="search__list">
    <?php while( have_posts() ): ?>
      <?php the_post() ?>
        <div class="search__item">
          <div class="search__item-title all-akcii__item-title"><?php echo $post->post_title ?></div>
          <div class="search__item-excerpt all-akcii__kratko"><?php echo get_the_excerpt($post->ID) ?></div>
          <a class="akcii__link" href="<?php echo get_post_meta( $item->ID)['proizvolnaia-ssylka'][0] != "" ? get_post_meta( $item->ID, 'proizvolnaia-ssylka')[0] : the_permalink( $item->ID ) ?>">Узнать больше</a>
        </div>
    <?php endwhile ?>
  </div>
</div>
<?php endif; ?>
    <?php do_action('content_after'); ?>
	</div>
    <?php do_action('after_content'); ?>
    </div>
