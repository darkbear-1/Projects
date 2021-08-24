<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyTheme
 */

get_header();
 ?>

<div class="archive-all_wrap resheniya-arc">
  <div class="container">
    <?php if( !is_front_page() ) : ?>
   	  <div class='breadcrumbs'>
     	 	<div class='breadcrumbs__wrap'>
     	 		<?php echo the_breadcrumb();?>
     	 	</div>
      </div>
   <?php endif ?>
    <?php do_action('before_content'); ?>
    <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    <h1 class="resheniya-arc__title">Готовые решения по автоматизации<br> учета товаров и услуг</h1>
    <div class="resheniya-arc__subtitle">Автоматизация вашего магазина в одной удобной
программе:</div>
    <div class="resheniya-arc__text">Augue elementum cras mauris sed. Lectus turpis natoque sapien in ut laoreet diam. Phasellus in nunc amet mauris aliquet porttitor volutpat phasellus. Pretium venenatis pellentesque massa pulvinar montes, tincidunt in. Fames ultricies et morbi risus lorem. Mauris eros nulla blandit amet duis et ut in ut. Id tincidunt id tristique viverra nisl ultricies enim. Integer commodo pellentesque amet tincidunt dignissim. Augue molestie cras sed habitant et id nunc cras. In viverra turpis ac quisque in lectus nullam enim in. Molestie euismod odio elit aliquam elit suspendisse mattis. Amet massa sagittis tempus nulla posuere.</div>
    </div>
    <div class="resheniya__list">
        <?php get_template_part( 'template-parts/loop-resheniya', get_post_format() ); ?>
    </div>
    <?php do_action('content_after'); ?>
  </div>
    <?php do_action('after_content'); ?>
</div>

<?php
get_footer();
