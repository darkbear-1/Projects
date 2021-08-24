<?php
$args2 = array(
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type'   => 'aktsii'

);

$wp_query = new WP_Query($args2);
?>
<div class="aktsii__list">
  <?php while( $wp_query->have_posts() ): ?>
    <?php $wp_query->the_post() ?>
    <?php global $post; ?>
    <?php $postMeta = get_post_meta($post->ID); ?>
    <div class="aktsii__item">
      <div class="aktsii__col">
        <div class="aktsii__image"><?php the_post_thumbnail() ?></div>
      </div>
      <div class="aktsii__col">
        <div class="aktsii__content">
          <div class="aktsii__title"><?php echo the_title() ?></div>
          <div class="aktsii__subtitle"><?php echo $postMeta['podzagolovok'][0] ?></div>
          <div class="aktsii__price"><?php echo $postMeta['tsena'][0] ?></div>
          <div class="aktsii__form-subtitle"><?php echo $postMeta['podzagolovok-formy'][0] ?></div>
          <form class="main-screen__form aktsii__form send-form" action="javascript: console.log('Форма отправлена')" method="post">
           <input type="tel" name="phone" value="" placeholder="Номер телефона" required>
           <input type="submit" class="main-screen__form-submit btn-style btn-hover" value="Заказать по акции *">
           <div class="main-screen__form-policy">* — Отправляя данные через эту форму вы даете согласие на обработку персональных данных,<br> согласно действующей <a href="/privacy-policy/" target="_blank">Политике конфиденциальности</a></div>
         </form>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
</div>
