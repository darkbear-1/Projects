<?php
/*
Template Name: Шаблон проектов
Template Post Type: projects
*/
get_header();
$postMeta = get_post_meta(get_the_ID());
$gallery = explode(',', $postMeta['kartinki-dlia-slaidera'][0]);
$query_str = parse_url($postMeta['video-s-obekta'][0], PHP_URL_QUERY);
parse_str($query_str, $query_params);
if (isset($query_params['v'])) {
	$video = $query_params['v'];
}
if (!empty($postMeta['postavlennoe-oborudovanie'][0])) {
	$sopTovars = unserialize($postMeta['postavlennoe-oborudovanie'][0]);
}

?>

	<div class="single-all_wrap">
    <?php do_action('before_content'); ?>
    <div class="content_wrap">
    <?php do_action('content_inner'); ?>
	  <section class="projects-single__main-screen" style="background-image: linear-gradient(180deg, #00A4E5 15.04%, rgba(0, 215, 229, 0.51) 87.5%), url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>)">
      <div class="container">
        <h1 class="projects-single__title"><?php echo the_title(); ?></h1>
      </div>
    </section>
    <section class="breadcrumbs__wrap">
      <div class="container">
        <div class="breadcrumbs"><?php the_breadcrumb() ?></div>
      </div>
    </section>
    <section class="projects-single__content">
      <div class="container">
        <div class="projects-single__content-row">
          <div id="projects-sinlge__slider-list" class="projects-sinlge__slider-list owl-carousel">
            <?php foreach ($gallery as $key => $value): ?>
               <div class="projects-sinlge__slider-image"><?php echo wp_get_attachment_image($value, 'full', false, array('class' => 'projects-sinlge__slider-img')) ?></div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="projects-single__content-row">
          <div class="projects-single__content-text"><?php echo the_content() ?></div>
        </div>
      </div>
    </section>
    <?php if (!empty($video)): ?>
    <section class="projects-single__video">
      <div class="container">
        <h2 class="projects-single__video-title">Видео с объекта:</h2>
				<div class="projects-single__video-container">
					<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="" class="projects-single__video-bg">
					<div class="about__btn about__btn--projects" data-video-id="<?php echo $video; ?>">
						<img src="/wp-content/uploads/images/about-btn.svg'" alt="">
					</div>
				</div>
      </div>
    </section>
    <?php endif; ?>
			<section class="projects-single__use">
			<?php if (!empty($sopTovars)): ?>
	      <div class="container">
	        <h2 class="projects-single__use-title">Поставленное оборудование:</h2>
					<div class="accompanying__list">
					<?php foreach ($sopTovars as $key => $value): ?>
						<?php $post = get_post($value) ?>
							<div class="product">
								<a href="<?php echo get_permalink(); ?>" class="product__link">
									<span class="product__overlay"></span>
									<img class="product__image" src="<?php echo the_post_thumbnail_url() ?>" alt="">
									<div class="product__info">
										<div class="product__content">
											<div class="product__name"><?php echo $post->post_title ?></div>
											<div class="product__btns">
												<button class="button product__view">Посмотреть</button>
												<div class="button product__comparison"><?php echo do_shortcode('[wooscp id="'.$post->ID.'"]') ?></div>
											</div>
										</div>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
						<?php wp_reset_query() ?>
		      </div>
	      </div>
			<?php endif; ?>
	    </section>
    <?php get_template_part('template-parts/consult-section', 'page'); ?>
    <section class="projects-single__another">
      <div class="container">
        <h2 class="projects-single__another-title">Другие проекты:</h2>
        <div class="projects__list">
          <?php get_template_part( 'template-parts/loop-projects', 'projects', array('numberposts' => '3') ); ?>
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
