<?php
/*
Template Name: Шаблон решений
Template Post Type: solutions
*/
get_header();
$postMeta = get_post_meta(get_the_ID());
$gallery = explode(',', $postMeta['kartinki-dlia-slaidera'][0]);
$sopTovars = unserialize($postMeta['postavlennoe-oborudovanie'][0]);

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
    <section class="projects-single__use">
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
    </section>
    <section class="consultation">
      <div class="container">
        <div class="consultation__column">
          <div class="consultation__image-wrap">
            <img src="/wp-content/uploads/images/phone.png" alt="" class="consultation__image">
            <a href="tel:82312223123" class="consultation__tel">+7 (231) 222 31 23</a>
          </div>
        </div>
        <div class="consultation__column">
          <h2 class="consultation__title">Бесплатная консультация по телефону</h2>
          <div class="consultation__subtitle">Оставьте свой номер телефона и мы вам перезвоним.</div>
          <div class="consultation__form">
            <form class="form-consultation" method="post" action="javascript: console.log('Форма отправлена')" enctype="multipart/form-data" name="Бесплатная консультация по телефону">
              <div class="consultation__input-wrap">
                <input class="form-consultation__phone" type="tel" name="phone" pattern="[0-9()#&+*-=.]+" title="Принимаются только цифры и телефонные символы (#, -, * и т. д.)." placeholder="Номер телефона" id="phone" value="" required>
                <input class="form-consultation__name" type="text" name="name" placeholder="Ваше имя" value="">
                <input type="checkbox" name="anticheck" id="anticheck" class="anticheck" style="display: none !important;" value="true" checked="checked">
                <input type="text" name="submitted" id="submitted" value="" style="display: none !important;">
              </div>
              <div class="consultation__policy">Нажимая на кнопку, Вы принимаете условия <a href="#" target="_blank" class="consultation__policy-link">политики конфиденциальности</a> компании и даете согласие на обработку персональных данных.</div>
              <input class="consultation__form-send button" type="submit" value="Заказать консультацию">
            </form>
          </div>
        </div>
      </div>
    </section>
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
