<?php
  $terms_razdels = get_terms( array(
  'hide_empty'  => 0,
  'orderby'     => 'date',
  'order'       => 'ASC',
  'taxonomy'    => 'brands',
  'pad_counts'  => 1
  ) );
// получим ID картинки из метаполя термина
// $image_id = get_term_meta( $value->term_id, '_thumbnail_id', 1 );
//
// // ссылка на полный размер картинки по ID вложения
// $image_url = wp_get_attachment_image_url( $image_id, 'full' );

// выводим картинку на экран
?>
<?php foreach ($terms_razdels as $key => $value): ?>
  <div class="brand-arc">
    <?php $image_url = wp_get_attachment_image_url(get_term_meta( $value->term_id, 'izobrazhenie')[0], 'full'); ?>
    <div class="brand-arc__column"><img src="<?php echo $image_url ?>" alt="" class="brand__image"></div>
    <div class="brand-arc__column">
      <div class="brand__text"><?php echo term_description($value->term_id, 'brands') ?></div>
      <a href="<?php echo get_term_link($value->term_id); ?>" class="brands__link">перейти к товарам бренда</a>
    </div>
  </div>
<?php endforeach; ?>
