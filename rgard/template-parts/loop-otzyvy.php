<?php
$args = array(
    'posts_per_page' => -1,
    'orderby' => 'name',
    'order' => 'DESC',
    'post_type'   => 'otzyvy'

);
$wp_query = new WP_Query($args);

$videosArr = array();
$textsArr = array();
?>

<div class="otzyvy__column">
  <div id="otzyvy-text__slider" class="otzyvy__slider otzyvy-text__slider owl-carousel">
  <?php while( $wp_query->have_posts() ): ?>
    <?php $wp_query->the_post() ?>
    <?php global $post; ?>
    <?php $postMeta = get_post_meta($post->ID) ?>
    <?php
      $videosArr[get_the_post_thumbnail_url($post->ID, 'large')] = $postMeta['ssylka-na-youtube'][0];
    ?>
	<?php if (get_the_excerpt() != ''): ?>
		<div class="otzyvy-text__slider-item otzyvy__slider-item">
		  <a href="/otzyvy/" class="otzyvy__text-link"></a>
		  <div class="otzyvy-text__slider-text"><?php echo get_the_excerpt(); ?></div>
		  <div class="otzyvy-text__slider-info">
			<div class="otzyvy-text__slider-name"><?php echo the_title() ?></div>
			<?php if (!empty($postMeta['ssylka-na-sait'][0])): ?>
			  <a href="<?php echo $postMeta['ssylka-na-sait'][0] ?>" target="_blank" rel="nofollow" class="otzyvy-text__slider-link"><?php echo $postMeta['ssylka-na-sait'][0] ?></a>
			<?php endif; ?>
		  </div>
		</div>
	<?php endif ?>
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
</div>
</div>
<div class="otzyvy__column">
  <div id="otzyvy-video__slider" class="otzyvy__slider otzyvy-video__slider owl-carousel">
    <?php foreach ($videosArr as $key => $value): ?>
      <?php if (!empty($key) && !empty($value)): ?>
        <div class="otzyvy-video__slider-item otzyvy__slider-item">
          <button class="otzyvy-video__slider-play"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 966.381 678.662"><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><path d="M.005,260.461C1.794,219.2,4.711,178.029,11.267,137.207c3.3-20.575,7.155-41.046,18.067-59.317C47.3,47.8,72.494,26.544,107.06,19.107a460.032,460.032,0,0,1,67.178-9.2Q255.985,4.68,337.879,1.82C375.99.428,414.161.658,452.3.1c4.965-.073,51.8-.144,54.757-.069C576.132,1.8,645.217,3.14,714.271,5.4c42.914,1.4,85.769,4.375,128.262,11.053,19.737,3.1,38.6,8.661,55.466,19.868,30.7,20.392,47.133,49.709,54.04,85.223,7.163,36.831,10.642,74.071,13.03,111.451.624,9.774,1.416,183.207,1.3,184.676-2.46,31.365-4.487,62.77-7.449,94.087-2.178,23.031-5.461,46.054-12.874,68.056-14.1,41.841-42.894,69.094-85.732,79.343-22.213,5.315-45.287,8.047-68.128,9.516-54.837,3.524-109.749,6.117-164.666,8.109-38.619,1.4-77.295,1.178-115.945,1.74-4.465.065-46.98.155-48.779.139-88.636-.777-177.253-2.219-265.714-8.4-29.723-2.078-59.6-3.726-88.623-10.888-47.421-11.7-78.288-41.624-91.012-88.639C6.4,529.893,4.245,487.652,1.357,445.625.64,435.183-.065,262.082.005,260.461ZM386.309,485,639.267,339.6l-252.958-146Z" fill="red"/><path d="M386.309,485V193.6l252.958,146Z" fill="#fff"/></g></g></svg></button>
          <div class="otzyvy-video__slider-video" data-video-link="<?php echo $value ?>">
            <div class="otzyvy-video__image-wrap">
              <img src="<?php echo $key ?>" alt="" class="otzyvy-video__slider-image">
            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <div class="about__icon about__icon--plus"></div>
  <div class="about__icon about__icon--shevron"></div>
</div>
