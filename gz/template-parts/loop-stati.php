<?php
global $wp_query;
$args2 = array(
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type'   => 'stati'

);
$wp_query = new WP_Query($args2);
$counter = 0;
?>
<div class="stati__list">
  <?php while( have_posts() ): ?>
    <?php the_post() ?>
    <?php global $post; ?>
    <?php $postMeta = get_post_meta($post->ID); ?>
    <div class="stati__item">
      <?php if ($counter != 0): ?>
        <div class="stati__item-title"><?php echo the_title(); ?></div>
      <?php endif; ?>
      <div class="stati__item-col">
        <div class="stati__item-image">
          <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>" alt="">
        </div>
      </div>
      <div class="stati__item-col">
        <?php if ($counter == 0): ?>
          <div class="stati__item-title"><?php echo the_title(); ?></div>
        <?php endif; ?>
        <div class="stati__item-date"><?php echo the_date('j.m.Y') ?></div>
        <div class="stati__item-text"><?php echo get_the_excerpt(); ?></div>
        <a href="<?php echo get_permalink() ?>" class="stati__item-link">Читать полностью</a>
      </div>
    </div>
    <?php $counter++; ?>
  <?php endwhile ?>
</div>
