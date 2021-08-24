<?php
/*
Template Name: Каталог
*/
get_header();
?>
<section class="catalog catalog--page">
  <div class="container">
    <div class="breadcrumbs"><?php the_breadcrumb() ?></div>
    <h1 class="catalog__title">Подобрать строительное оборудование</h1>
    <div class="catalog__choice-buttons">
      <button type="button" data-type="type" class="catalog__choice-btn catalog__choice-btn--active">По типу</button>
      <button type="button" data-type="appointment" class="catalog__choice-btn">По назначению</button>
    </div>
    <div class="catalog__choice catalog__choice--type catalog__choice--active">
      <div class="catalog__choice-wrap">
        <?php get_template_part( 'template-parts/loop-category', 'product_cat' ); ?>
      </div>
      <!-- <button class="button catalog__button-more catalog__button-more--type" data-btn-type="type">Показать еще</button> -->
    </div>
    <div class="catalog__choice catalog__choice--appointment">
      <div class="catalog__choice-wrap">
        <?php get_template_part( 'template-parts/loop-appointment', 'appointment', array('number' => 7, 'hideBtn' => false, 'pagename' => 'main-page') ); ?>
      </div>
      <!-- <button class="button catalog__button-more catalog__button-more--appointment" data-btn-type="appointment">Показать еще</button> -->
    </div>
  </div>
</section>
<?php get_footer(); ?>
