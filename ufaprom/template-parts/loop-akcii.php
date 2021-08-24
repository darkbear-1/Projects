<?php
global $wp_query;

$args = array(
    'numberposts' => 5,
    'orderby' => 'date',
    'order' => 'ASC',
    'offset' => 0,
    'post_type'   => 'akcii',
    'post__not_in' => array(get_the_ID())

);
$wp_query = new WP_Query($args);
?>
  <?php while( have_posts() ): ?>
    <?php the_post() ?>
      <div class="akcii__item">
        <a href="<?php echo get_permalink(); ?>" class="akcii__link"></a>
          <div class="akcii__column akcii__image-wrap">
            <img class="akcii__image" src="<?php echo the_post_thumbnail_url() ?>" alt="">
          </div>
          <div class="akcii__column akcii__info">
              <div class="akcii__name"><?php echo the_title() ?></div>
              <div class="akcii__text-wrap">
                <div class="akcii__text"><?php echo the_excerpt_max_charlength(250) ?></div>
              </div>
          </div>
      </div>
  <?php endwhile ?>
<?php wp_reset_query() ?>
