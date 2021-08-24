<?php
  $terms_razdels = get_terms( array(
  'hide_empty'  => 0,
  'orderby'     => 'term_id',
  'parent'      => 0,
  'order'       => 'ASC',
  'taxonomy'    => 'product_cat',
  'pad_counts'  => 1,
  'exclude' => array(15,19,43)
  ) );
// получим ID картинки из метаполя термина
// $image_id = get_term_meta( $value->term_id, '_thumbnail_id', 1 );
//
// // ссылка на полный размер картинки по ID вложения
// $image_url = wp_get_attachment_image_url( $image_id, 'full' );

// выводим картинку на экран
?>
<?php foreach ($terms_razdels as $key => $value): ?>
  <div class="category">
    <?php $image_url = wp_get_attachment_image_url(get_term_meta( $value->term_id, 'thumbnail_id')[0], 'full'); ?>
    <a href="<?php echo get_term_link($value->term_id); ?>" class="category__link">
      <img src="<?php echo $image_url ?>" alt="" class="category__image">
      <div class="category__overlay"></div>
      <div class="category__name"><?php echo $value->name ?></div>
    </a>
  </div>
<?php endforeach; ?>
