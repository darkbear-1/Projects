<?php
$offset = (!empty($_POST['offset'])) ? $_POST['offset'] : 0;
if (!empty($_POST['perPage'])) {
  $perPage = $_POST['perPage'];
} else if(!empty($args['perPage'])) {
  $perPage = $args['perPage'];
} else {
  $perPage = 6;
}
$args2 = array(
    'posts_per_page' => $perPage,
    'orderby' => 'date',
    'order' => 'DESC',
    'offset' => $offset,
    'post_type'   => 'reviews'

);
$wp_query = new WP_Query($args2);
?>

<div class="otzyvy__list ">
  <?php while( $wp_query->have_posts() ): ?>
    <?php $wp_query->the_post() ?>
    <?php global $post; ?>
    <?php $postMeta = get_post_meta($post->ID) ?>
    <div class="otzyvy__item">
      <button class="otzyvy__video-play">
        <svg xmlns="http://www.w3.org/2000/svg" width="110" height="118" viewBox="0 0 110 118" fill="none"><g opacity="0.5" filter="url(#filter0_d)"><path d="M83 47.7965C88.3333 50.8757 88.3333 58.5738 83 61.653L35 89.3658C29.6667 92.445 23 88.596 23 82.4376L23 27.0119C23 20.8535 29.6667 17.0045 35 20.0837L83 47.7965Z" fill="white"/></g><defs><filter id="filter0_d" x="0" y="0" width="110" height="117.449" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="4"/><feGaussianBlur stdDeviation="11.5"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
      </button>
      <div class="otzyvy__video-link" data-video-link="<?php echo $postMeta['ssylka-na-video'][0] ?>">
        <div class="otzyvy__image-wrap">
          <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail() ?>
          <?php else: ?>
              <img src="#" alt="" class="otzyvy__image">
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>
<?php if ((!empty($_POST['nav']) && $_POST['nav']) || (!empty($args['nav']) && $args['nav'] == 'true')): ?>
  <div class="otzyvy__nav nav-wrap" offset-count="<?php echo $wp_query->query['posts_per_page']; ?>">
    <?php $postsPer = ceil($wp_query->found_posts/$wp_query->query['posts_per_page']); ?>
      <?php for ($i=0; $i < $postsPer; $i++) { ?>
        <?php if ($i == $offset): ?>
          <button class="otzyvy__nav-btn nav-btn nav-btn--active" offset="<?php echo $i ?>"><?php echo $i + 1 ?></button>
          <?php else: ?>
          <button class="otzyvy__nav-btn nav-btn" offset="<?php echo $i ?>"><?php echo $i + 1 ?></button>
        <?php endif; ?>
      <?php } ?>
  </div>
<?php endif; ?>
<?php wp_reset_query(); ?>
