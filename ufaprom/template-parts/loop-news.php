<?php
global $wp_query;
if (!empty($_POST) && $_POST['maxPost'] == 'true' && $args['numberposts'] == "-1") {
  $offset = 6;
  $hideBtn = false;
  $countPosts = wp_count_posts("posts")->publish;
} else if ($args['numberposts'] == "-1") {
  $offset = 0;
  $countPosts = 6;
  $hideBtn = false;
} else {
  $offset = 0;
  $countPosts = 3;
  $hideBtn = true;
}

$number = $countPosts - $offset;

$args = array(
    'posts_per_page' => $args['numberposts'],
    'orderby' => 'date',
    'order' => 'ASC',
    'offset' => $offset,
    'posts_per_page' => $number,
    'post_type'   => 'posts',
    'post__not_in' => array(get_the_ID())
);
$wp_query = new WP_Query($args);

$foundPosts = $wp_query->found_posts;
if ($foundPosts <= $number - 1) {
  $hideBtn = true;
}
?>
  <?php while( have_posts() ): ?>
    <?php the_post() ?>
      <div class="projects__item">
        <a href="<?php echo get_permalink(); ?>" class="category__link"></a>
        <div class="projects__column projects__image-wrap">
          <img class="projects__image" src="<?php echo the_post_thumbnail_url() ?>" alt="">
        </div>
      <div class="projects__info">
          <div class="projects__name"><?php echo the_title() ?></div>
          <div class="projects__text"><?php the_excerpt_max_charlength(200); ?></div>
          <div class="projects__link-fake">Подробнее</div>
      </div>
        <div class="category__overlay"></div>
      </div>
  <?php endwhile ?>
<?php if (!$hideBtn): ?>
  <div class="projects__more-wrap">
    <button class="button projects__more">Показать еще</button>
  </div>
<?php endif; ?>
<?php wp_reset_query() ?>
