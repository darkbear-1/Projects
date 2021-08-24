<?php
/*
Template Name: Шаблон услуги
Template Post Type: uslugi
*/
get_header();
$postMeta = get_post_meta(get_the_ID());
$gallery = unserialize($postMeta['kartinki-dlia-slaidera'][0]);

?>

	<div class="single-all_wrap">
    <?php do_action('before_content'); ?>
    <div class="content_wrap">
    <?php do_action('content_inner'); ?>
	  <section class="projects-single__main-screen" style="background-image: linear-gradient(180deg, #00A4E5 15.04%, rgba(0, 215, 229, 0.51) 87.5%), url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>)">
      <div class="container">
  			<div class="appointment__suptitle">Услуга</div>
        <h1 class="projects-single__title"><?php echo the_title(); ?></h1>
      </div>
    </section>
    <section class="breadcrumbs__wrap">
      <div class="container">
        <div class="breadcrumbs"><?php the_breadcrumb() ?></div>
      </div>
    </section>
    <section class="projects-single__content projects-single__content--akcii">
      <div class="container">
        <div class="projects-single__content-row projects-single__content-row--appointment">
  				<div id="projects-sinlge__slider-list" class="projects-sinlge__slider-list owl-carousel">
						<?php if (!empty($gallery)): ?>
							<?php foreach ($gallery as $key => $value): ?>
	  						<div class="uslugi__item-wrap">
	                <div class="projects-sinlge__slider-image"><?php echo wp_get_attachment_image($value['izobrazhenie'], 'full', false, array('class' => 'projects-sinlge__slider-img')) ?></div>
									<?php if (!empty($value['podpis'])): ?>
	                	<div class="uslugi__item-text"><?php echo $value['podpis'] ?></div>
									<?php endif; ?>
	              </div>
	  					<?php endforeach; ?>
						<?php endif; ?>
  				</div>
  				<div class="projects-single__content-text"><?php echo the_content() ?></div>
  			</div>
      </div>
    </section>
    <?php get_template_part('template-parts/consult-section', 'page'); ?>
    <section class="appointment__another">
      <div class="container">
        <h2 class="projects-single__another-title">Другие услуги:</h2>
        <div class="appointment__list">
  				<?php get_template_part( 'template-parts/loop-uslugi', 'uslugi', array('numberposts' => '3')); ?>
  			</div>
      </div>
    </section>
    <?php do_action('content_after'); ?>
	</div>
    <?php do_action('after_content'); ?>
    </div>

<?php
get_footer();
?>
