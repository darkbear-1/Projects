<?php
/*
Template Name: Шаблон акции
Template Post Type: agenty
*/
?>
<?php get_header(); ?>
<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    <section class="akciya">
      <div class="container">
          <?php $postMeta = get_post_meta(get_the_ID()); ?>
          <div class="akciya__wrap">
            <div class="akciya__col">
              <?php if ($postMeta['aktsiia-mesiatsa'][0] == 'true'): ?>
                <div class="akciya__suptitle">Акция месяца</div>
              <?php endif; ?>
              <div class="akciya__title"><?php echo the_title() ?></div>
              <div class="akciya__srok"><?php echo $postMeta['agenty_period'][0] ?></div>
              <div class="akciya__text"><?php echo the_content() ?></div>
            </div>
            <div class="akciya__col">
              <img src="<?php echo wp_get_attachment_image_url($postMeta['preview'][0], 'full') ?>" alt="">
            </div>
          </div>
      </div>
    </section>
    <section class="all-agenty">
      <div class="container">
        <h2 class="h2-title">Все акции</h2>
        <?php get_template_part( 'template-parts/loop-akcii', 'agenty'); ?>
      </div>
    </section>
    <section id="quiz" class="quiz">
      <div class="container">
        <div class="quiz__title">Выберите интересующее направление</div>
        <div class="quiz__text">Ответьте на несколько вопросов и мы рассчитаем стоимость услуги за 3 минуты! <br>В конце вас ждет приятный бонус!</div>
        <div class="quiz-container"></div>
      </div>
    </section>
    <section class="akcii__seo">
      <div class="container">
        <div class="comfort__seo">
          <?php echo the_content(); ?>
        </div>
      </div>
    </section>
  </div>
</div>

<?php
get_footer();
?>
