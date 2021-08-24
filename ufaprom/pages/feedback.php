<?php
/*
Template Name: Обратная связь
*/
get_header();
?>
<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    <div class="container pad-t-40-imp pad-b-40-imp">
      <h1 class="catalog__title">КАК ВЫ ОЦЕНИВАЕТЕ РАБОТУ НАШЕЙ КОМПАНИИ?</h1>
      <div class="projects-single__content-text text-align-center">Если у вас есть претензии или пожелания относительно качества оказанных услуг или проданных товаров, просим оставить отзыв на этой странице. Все сообщения отправляются непосредственно руководителю компании. Мы тщательно разберем ситуацию, примем решение и свяжемся с вами в ближайшее время. Ваш отзыв поможет нам стать лучше.</div>
      <form enctype="multipart/form-data" class="zapros-scheta__form zapros-scheta__form--obratnaya pad-t-20 send-form" action="javascript: console.log('Форма отправлена')" method="post">
        <label>Общее впечатление о работе с нами?</label>
        <div class="zapros-scheta__nds-wrap">
          <label><input type="radio" name="ocenka" value="Отлично">Отлично</label>
          <label><input type="radio" name="ocenka" value="Хорошо">Хорошо</label>
          <label><input type="radio" name="ocenka" value="Плохо">Плохо</label>
          <label><input type="radio" name="ocenka" value="Ужасно">Ужасно</label>
        </div>
        <label for="">Ваш комментарий</label>
        <textarea id="zapros-scheta__requisites" class="zapros-scheta__requisites" name="requisites" rows="4" placeholder="Опишите ситуацию здесь. Также вы можете указать номер счета или ИНН организации."></textarea>
        <?php wp_nonce_field( 'obratnaya_file', 'fileup_nonce' ); ?>
        <input type="file" name="obratnaya_file" id="zapros-scheta__requisites-file" class="zapros-scheta__requisites-file" multiple>
        <label for="zapros-scheta__name">Как вас зовут?</label>
        <input id="zapros-scheta__name" class="zapros-scheta__phone" type="name" name="name" value="" placeholder="">
        <label for="zapros-scheta__phone">Контактный телефон</label>
        <input id="zapros-scheta__phone" class="zapros-scheta__phone" type="tel" name="phone" value="" placeholder="" required>
        <input class="zapros-scheta__submit button" type="submit" name="" value="Отправить">
      </form>
    </div>

    <?php get_footer(); ?>
