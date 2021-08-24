<?php
/*
Template Name: Акции
*/

$args2 = array(
      'posts_per_page' => -1,
      'orderby' => 'name',
      'order' => 'DESC',
      'post_type'   => 'agenty',
      'meta_query' => [
    		'relation' => 'OR',
    		[
    			'key' => 'aktsiia-mesiatsa',
    			'value' => 'true'
    		]
    	]
  );

  $wp_query = new WP_Query($args2);
?>
<?php get_header(); ?>
<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    <section class="akciya">
      <div class="container">
        <?php while( have_posts() ): ?>
          <?php the_post() ?>
          <?php global $post; ?>
          <?php $postMeta = get_post_meta($post->ID); ?>
          <div class="akciya__wrap">
            <div class="akciya__col">
              <div class="akciya__suptitle">Акция месяца</div>
              <div class="akciya__title"><?php echo the_title() ?></div>
              <div class="akciya__srok"><?php echo $postMeta['agenty_period'][0] ?></div>
              <div class="akciya__text"><?php echo the_content() ?></div>
            </div>
            <div class="akciya__col">
              <img src="<?php echo wp_get_attachment_image_url($postMeta['preview'][0], 'full') ?>" alt="">
            </div>
          </div>
        <?php endwhile ?>
        <?php wp_reset_query(); ?>
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
