<?php
  global $wp_query;
  $args = array(
      'posts_per_page' => $args['numberposts'],
      'orderby' => 'date',
      'order' => 'DESC',
      'offset' => 0,
      'post_type'   => 'vakansii',
      'post__not_in' => array(get_the_ID())

  );
  $wp_query = new WP_Query($args);
  ?>

  <div class="catalog__choice-wrap">
  <?php while( have_posts() ): ?>
    <?php the_post() ?>
    <?php global $post; ?>
    <?php
      $postMeta = get_post_meta(get_the_ID());
      $usloviya = unserialize($postMeta['usloviia'][0]);
    ?>
    <div class="category usloviia-arc__lopp">
      <a href="<?php echo get_permalink(); ?>" class="category__link"></a>
        <div class="category__info">
          <div class="category__name"><?php echo $post->post_title ?></div>
        </div>
        <div class="usloviia-arc">
          <?php if (!empty($usloviya)): ?>
            <?php foreach ($usloviya as $key => $value): ?>
              <?php if ($value['zagolovok'] == 'Город' || $value['zagolovok'] == 'Тип занятости' || $value['zagolovok'] == 'Уровень ЗП' || $value['zagolovok'] == 'Требуемый опыт'): ?>
                <div class="usloviia-arc__item-wrap">
                  <div class="usloviia-arc__item-title"><?php echo $value['zagolovok'] ?></div>
                  <div class="usloviia-arc__item-value"><?php echo $value['znachenie'] ?></div>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <img src="<?php echo (has_post_thumbnail()) ? the_post_thumbnail_url() : "/wp-content/uploads/placeholder.jpg"; ?>" alt="" class="category__image">
        <span class="usloviia__more">Подробнее</span>
    </div>
  <?php endwhile ?>
</div>
