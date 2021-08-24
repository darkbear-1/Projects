<?php
  global $wp_query;
  $args2 = array(
      'posts_per_page' => -1,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type'   => 'agenty',
      'post__not_in' => array(get_the_ID())

  );
  $wp_query = new WP_Query($args2);
?>
<div class="akcii__list">
  <?php while( have_posts() ): ?>
    <?php the_post() ?>
    <?php global $post; ?>
    <?php $postMeta = get_post_meta($post->ID); ?>
    <div class="akciya__wrap">
      <div class="akciya__col">
        <a href="<?php echo get_permalink() ?>" class="akciya__wrap-link"></a>
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
  <?php endwhile ?>
</div>
<?php wp_reset_query(); ?>
