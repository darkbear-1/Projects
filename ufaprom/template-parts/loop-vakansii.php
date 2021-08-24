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
  <?php if (have_posts()): ?>
    <section class="appointment__another">
      <div class="container">
        <h2 class="projects-single__another-title">Другие вакансии компании СтройОборудование:</h2>
        <div class="appointment__list">
          <div class="catalog__choice-wrap">
          <?php while( have_posts() ): ?>
            <?php the_post() ?>
            <?php global $post; ?>
            <div class="category">
              <a href="<?php echo get_permalink(); ?>" class="category__link"></a>
                <img src="<?php echo (has_post_thumbnail()) ? the_post_thumbnail_url() : "/wp-content/uploads/placeholder.jpg"; ?>" alt="" class="category__image">
                <div class="category__overlay"></div>
                <div class="category__info">
                  <div class="category__name"><?php echo $post->post_title ?></div>
                </div>
            </div>
          <?php endwhile ?>
        </div>
      </div>
    </div>
    </section>
  <?php endif; ?>
