<?php
if (!empty(get_queried_object())) {
  $queryTerm = get_queried_object()->term_id;
}


  $exclude = array(15);

  if (!empty($_POST['maxPost']) && $_POST['maxPost'] == 'true') {
    $offset = 7;
    $countterms = wp_count_terms( 'product_cat', array(
        // 'hide_empty' => true, // optional (see if ou need it)
        'exclude' => $exclude
    ) );
  } elseif ($queryTerm != '') {
    $offset = 0;
    $countterms = wp_count_terms( 'product_cat', array(
        // 'hide_empty' => true, // optional (see if ou need it)
        'exclude' => $exclude
    ) );
  } else {
    $offset = 0;
    $countterms = 7;
  }

  $number = $countterms - $offset;
  $terms = get_terms( 'product_cat', array(
      'hide_empty'  => 0,
      'orderby'    => 'term_id',
      'parent'      => (isset($queryTerm) && $queryTerm != '') ? $queryTerm : 0,
      'order'      => 'ASC',
      'offset'     => $offset,
      'exclude'    => $exclude,
      'number'     => $number,
      'hide_empty' => true
  ) );

  $terms_razdels = $terms;

  $hideBtn = false;
  if (count($terms_razdels) == $number - 1 || isset($queryTerm) && $queryTerm != '') {
    $hideBtn = true;
  }
?>
  <?php foreach ($terms_razdels as $key => $value): ?>
    <?php if ($key == 0 && (is_front_page() || is_page(9))): ?>
      <div class="col-grid-3 col-grid-gap-30 mr-b-30 category__three-wrap">
    <?php elseif ($key == 3 && (is_front_page() || is_page(9))): ?>
      <div class="col-grid-4 col-grid-gap-30">
    <?php endif ?>
      <div class="category">
        <?php
        $image_url = "";
         if (!empty(get_term_meta( $value->term_id, 'thumbnail_id')[0])) {
           $image_url = wp_get_attachment_image_url(get_term_meta( $value->term_id, 'thumbnail_id')[0], 'full');
         } else {
           $image_url = "/wp-content/uploads/placeholder.jpg";
         }
        ?>
        <a href="<?php echo get_term_link($value->term_id); ?>" class="category__link"></a>
        <?php if (!empty($image_url)): ?>
          <img src="<?php echo $image_url ?>" alt="" class="category__image">
        <?php endif; ?>
          <div class="category__overlay"></div>
          <div class="category__info">
            <div class="category__name"><?php echo $value->name ?></div>
            <?php
              $child_razdels = get_terms( array(
                'hide_empty'  => 0,
                'orderby'     => 'term_id',
                'parent'      => $value->term_id,
                'order'       => 'ASC',
                'taxonomy'    => 'product_cat',
                'pad_counts'  => 1,
                'exclude' => array(15),
                'hide_empty' => true
                ) );
              if (isset($queryTerm) && $queryTerm != "") {
                $childLen = 1;
              } else {
                $childLen = 5;
              }
            ?>
            <?php if (!empty($child_razdels)): ?>
              <ul class="category__children-list">
                <?php foreach ($child_razdels as $key2 => $child): ?>
                  <?php if ($key < 4 && $key2 < 5): ?>
                    <li class="category__children-item">
                      <a href="<?php echo get_term_link($child->term_id) ?>" class="category__children-link"><?php echo $child->name; ?></a>
                    </li>
                  <?php elseif ($key2 < 6  && $key < 4): ?>
                    <li class="category__children-item category__children-item--over">
                      <a href="<?php echo get_term_link($value->term_id); ?>" class="category__children-link"><?php echo $value->name; ?></a>
                    </li>
                  <?php endif; ?>
                  <?php if ($key2 < 3 && $key > 3): ?>
                    <li class="category__children-item">
                      <a href="<?php echo get_term_link($child->term_id) ?>" class="category__children-link"><?php echo $child->name; ?></a>
                    </li>
                  <?php elseif ($key2 > 3 && $key2 < 5 && $key > 3): ?>
                    <li class="category__children-item category__children-item--over">
                      <a href="<?php echo get_term_link($value->term_id); ?>" class="category__children-link"><?php echo $value->name; ?></a>
                    </li>
                  <?php endif; ?>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
      </div>
      <?php if ($key == 2 && (is_front_page() || is_page(9))): ?>
        </div>
      <?php endif; ?>
      <?php endforeach; ?>
<?php if (!$hideBtn): ?>
  <div class="category__more-wrap">
    <button class="button catalog__button-more catalog__button-more--type" data-btn-type="type">Показать еще</button>
  </div>
<?php endif; ?>
<?php if ((is_front_page() || is_page(9))): ?>
  </div>
<?php endif; ?>
