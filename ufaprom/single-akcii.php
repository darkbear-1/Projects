<?php
/*
Template Name: Шаблон акций
Template Post Type: akcii
*/
get_header();
$postMeta = get_post_meta(get_the_ID());
?>

	<div class="single-all_wrap">
    <?php do_action('before_content'); ?>
    <div class="content_wrap">
    <?php do_action('content_inner'); ?>
	  <section class="projects-single__main-screen" style="background-image: linear-gradient(180deg, #00A4E5 15.04%, rgba(0, 215, 229, 0.51) 87.5%), url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>)">
      <div class="container">
        <h1 class="projects-single__title"><?php echo the_title(); ?></h1>
        <p class="akcii_sub"><?php echo $postMeta['podzagolovok'][0] ?></p>
      </div>
    </section>
    <section class="breadcrumbs__wrap">
      <div class="container">
        <div class="breadcrumbs"><?php the_breadcrumb() ?></div>
      </div>
    </section>
    <section class="projects-single__content projects-single__content--akcii">
      <div class="container">
        <div class="projects-single__content-row">
          <div class="akcii__image-wrap"><?php echo get_the_post_thumbnail(get_the_ID(), 'full') ?></div>
        </div>
        <div class="projects-single__content-row">
          <div class="projects-single__content-text"><?php echo the_content() ?></div>
          <button class="button akcii__btn cons-pu">Принять участие в акции</button>
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
    <section class="projects-single__another akcii">
      <div class="container">
        <h2 class="projects-single__another-title">Другие акции:</h2>
        <div id="akcii__slider" class="akcii__list owl-carousel">
          <?php get_template_part( 'template-parts/loop-akcii', 'akcii' ); ?>
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
