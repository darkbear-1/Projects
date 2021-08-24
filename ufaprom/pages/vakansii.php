<?php
/*
Template Name: Вакансии
*/
get_header();
?>

<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
  <?php do_action('content_inner'); ?>
  <section class="projects__main-screen" style="background-image: linear-gradient(180deg, #00A4E5 15.04%, rgba(0, 215, 229, 0.51) 87.5%), url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>)">
    <div class="container">
      <h1 class="projects-single__title">Открытые вакансии в компании<br>СтройОборудование</h1>
      <div class="appointment__subtitle">Наш дружный коллектив насчитывает более 70 человек в 5 городах России и Казахстана.<br> Присоединившись к нам, вы получите бесценный опыт в сфере продажи строительного оборудования. </div>
      <div class="vakansii-single__appointment-list">
        <div class="vakansii-single__appointment-item">
          <div class="vakansii-single__appointment-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="21" viewBox="0 0 14 21" fill="none"><path d="M2 19L11 10.5L2 2" stroke="#FF8D24" stroke-width="3" stroke-linecap="round"/></svg></div>
          <div class="vakansii-single__appointment-text">Регулярное обучение сотрудников</div>
        </div>
        <div class="vakansii-single__appointment-item">
          <div class="vakansii-single__appointment-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="21" viewBox="0 0 14 21" fill="none"><path d="M2 19L11 10.5L2 2" stroke="#FF8D24" stroke-width="3" stroke-linecap="round"/></svg></div>
          <div class="vakansii-single__appointment-text">Развивающие корпоративы</div>
        </div>
        <div class="vakansii-single__appointment-item">
          <div class="vakansii-single__appointment-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="21" viewBox="0 0 14 21" fill="none"><path d="M2 19L11 10.5L2 2" stroke="#FF8D24" stroke-width="3" stroke-linecap="round"/></svg></div>
          <div class="vakansii-single__appointment-text">Премии и привилегии для лучших сотрудников</div>
        </div>
      </div>
    </div>
  </section>
  <section class="projects__all">
    <div class="container">
      <div class="breadcrumbs"><?php the_breadcrumb() ?></div>
      <div class="vakansii__list">
        <?php get_template_part( 'template-parts/loop-vakansii_all', 'vakansii', array('numberposts' => '-1') ); ?>
      </div>
    </div>
  </section>


  <?php do_action('content_after'); ?>
</div>
  <?php do_action('after_content'); ?>
  </div>

<?php get_footer() ?>
