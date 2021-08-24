<?php
    if (!empty($args)) {
      if (!empty($args['exclude'])) {
        $exclude = array(15, $args['exclude']);
      }
      if (isset($args['hideBtn'])) {
        $hideBtn = $args['hideBtn'];
      }
      if (isset($args['pagename'])) {
        $pageName = $args['pagename'];
      }
    }
    if (!empty($_POST['postsLen'])) {
      $postsLen = $_POST['postsLen'];
    }

    $postID = get_the_ID();

    if (!empty($_POST['maxPost']) && $_POST['maxPost'] == 'true') {
      $offset = $postsLen;
      if (isset($exclude)) {
        $countterms = wp_count_terms( 'appointment', array(
            // 'hide_empty' => true, // optional (see if ou need it)
            'exclude' => $exclude
        ) );
      } else {
        $countterms = null;
      }
    } else {
      $offset = 0;
      if (!empty($args['exclude'])) {
        $exclude = array(15, $args['exclude']);
      }
      $countterms = $args['number'];
      $termsLen = wp_count_terms( 'appointment', array(
          // 'hide_empty' => true, // optional (see if ou need it)
          'exclude' => (isset($exclude)) ? $exclude : ''
      ) );
    }


    // } else if (!empty($postLen)) {
    //   $offset = 0;
    //   $countterms = $postsLen;
    //   if ($pageName == 'main-page') {
    //     $hideBtn = false;
    //   } else {
    //     $hideBtn = false;
    //   }
    // } else {
    //   $offset = 0;
    //   $countterms = $default_posts_len;
    //   $hideBtn = false;
    // }
    if ($postID == 14991) {
      $default_posts_len = 6;
    } else {
      $default_posts_len = 7;
    }


    $number = $countterms - $offset;
    $terms = get_terms( 'appointment', array(
        'hide_empty'  => 0,
        'orderby'    => 'term_id',
        'parent'      => 0,
        'order'      => 'ASC',
        'offset'     => $offset,
        'exclude'    => (!empty($exclude)) ? $exclude : '',
        'number'     => $number
    ) );

    $terms_razdels = $terms;

    if ($countterms == $number - 1) {
      $hideBtn = true;
    }
  ?>
<?php if (isset($pageName) && $pageName != 'main-page'): ?>
  <div class="catalog__choice-wrap">
<?php endif; ?>
  <?php foreach ($terms_razdels as $key => $value): ?>
    <?php if ($key == 0 && (is_front_page() || is_page(9))): ?>
      <div class="col-grid-3 col-grid-gap-30 mr-b-30">
    <?php elseif ($key == 3 && (is_front_page() || is_page(9))): ?>
      <div class="col-grid-4 col-grid-gap-30">
    <?php endif ?>
    <div class="category">
      <?php $image_url = wp_get_attachment_image_url(get_term_meta( $value->term_id, 'izobrazhenie')[0], 'full'); ?>
      <a href="<?php echo get_term_link($value->term_id); ?>" class="category__link"></a>
      <?php if (!empty($image_url)): ?>
        <img src="<?php echo $image_url ?>" alt="" class="category__image">
      <?php endif; ?>
        <div class="category__overlay"></div>
        <div class="category__info">
          <div class="category__name"><?php echo $value->name ?></div>
        </div>
    </div>
    <?php if ($key == 2 && (is_front_page() || is_page(9))): ?>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>
<?php if (isset($hideBtn) && isset($termsLen) && !$hideBtn && $termsLen != $default_posts_len): ?>
  <div class="appointment__more-wrap">
    <button class="button catalog__button-more catalog__button-more--appointment" data-btn-type="appointment" data-post-len="<?php echo $default_posts_len; ?>">Показать еще</button>
  </div>
<?php endif; ?>

<?php if (isset($pageName) && $pageName != 'main-page'): ?>
  </div>
<?php endif; ?>
<?php if (is_front_page() || is_page(9)): ?>
  </div>
<?php endif; ?>
