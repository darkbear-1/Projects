<?php
  global $wp_query;
  $offset = (!empty($_POST['offset'])) ? $_POST['offset'] : 0;
  if (!empty($_POST['perPage'])) {
    $perPage = $_POST['perPage'];
  } else if(!empty($args['perPage'])) {
    $perPage = $args['perPage'];
  } else {
    $perPage = 4;
  }
  $args2 = array(
      'posts_per_page' => $perPage,
      'orderby' => 'date',
      'order' => 'DESC',
      'offset' => $offset,
      'post_type'   => 'worksdone'

  );
  if (!empty($_POST['postId'])) {
    $args2['meta_query'] = [
      'relation' => 'OR',
        [
          'key' => 'relation_5fc34cd38f08e18f1463d02b7533c460',
          'value' => $_POST['postId'],
          'compare' => '=',
        ]
    ];
  }
  if (!empty($_POST['termId'])) {
    $args2['tax_query'] = array(
      'relation' => 'OR',
      [
			'taxonomy' => 'marka-avto',
			'field'    => 'id',
			'terms'    => array($_POST['termId']),
			'operator' => 'IN',
      ]
		);
  }

  $wp_query = new WP_Query($args2);
  $counter = 0;
  ?>
  <?php if (have_posts()): ?>
    <div class="cases__list">
      <?php while( have_posts() ): ?>
        <?php the_post() ?>
        <?php global $post; ?>
        <?php $postMeta = get_post_meta($post->ID); ?>
        <div class="cases__list-item">
          <div class="cases__list-overlay"></div>
          <a href="<?php echo get_permalink(); ?>" class="cases__list-link"></a>
          <div class="cases__list-name"><?php echo $post->post_title ?></div>
          <div class="cases__btns-wrap">
            <div class="cases__switcher">
              <div class="cases__switcher-wrap">
                <label for="cases__switcher-before-<?php echo $counter; ?>">До</label>
                <label for="cases__switcher-after-<?php echo $counter; ?>">После</label>
                <div class="cases__switcher-indicate" data-pos="after"></div>
              </div>
                <input type="radio" name="cases__switcher-<?php echo $counter; ?>" class="cases__switcher-radio" id="cases__switcher-before-<?php echo $counter; ?>" value="before">
                <img src="<?php echo (!empty($postMeta['izob-do'][0])) ? wp_get_attachment_image_url($postMeta['izob-do'][0], 'full') : ""; ?>" alt="" class="cases__list-image cases__list-image--before">
                <input type="radio" name="cases__switcher-<?php echo $counter; ?>" class="cases__switcher-radio" id="cases__switcher-after-<?php echo $counter; ?>" value="after" checked>
                <img src="<?php echo (!empty($postMeta['izob-posle'][0])) ? wp_get_attachment_image_url($postMeta['izob-posle'][0], 'full') : ""; ?>" alt="" class="cases__list-image cases__list-image--after">
            </div>
            <?php if (!empty($postMeta['video-link'][0])): ?>
              <div class="cases__video"><span class="cases__video-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" fill="none">
  <path d="M13.5 8.6659C13.5 9.15306 13.2559 9.60782 12.85 9.87709L2.82911 16.5236C1.83205 17.1849 0.500003 16.47 0.500003 15.2735L0.500005 2.56957C0.500005 1.39762 1.78374 0.678352 2.78324 1.29029L12.8055 7.42637C13.2369 7.69052 13.5 8.16001 13.5 8.6659Z" stroke="white"/>
  </svg></span>Есть видео</div>
            <?php endif; ?>
          </div>
        </div>
        <?php $counter++; ?>
      <?php endwhile ?>
    </div>
    <?php if ((!empty($_POST['nav']) && $_POST['nav']) || (!empty($args['nav']) && $args['nav'])): ?>
      <div class="cases__nav nav-wrap" offset-count="<?php echo $wp_query->query['posts_per_page']; ?>">
        <?php $postsPer = ceil($wp_query->found_posts/$wp_query->query['posts_per_page']); ?>
          <?php for ($i=0; $i < $postsPer; $i++) { ?>
            <?php if ($i == $offset): ?>
              <button class="cases__nav-btn nav-btn nav-btn--active" offset="<?php echo $i ?>"><?php echo $i + 1 ?></button>
              <?php else: ?>
              <button class="nav-btn" offset="<?php echo $i ?>"><?php echo $i + 1 ?></button>
            <?php endif; ?>
          <?php } ?>
      </div>
    <?php endif; ?>
<?php else: ?>
  <div class='products__not-found'>Не найдено</div>
<?php endif; ?>
