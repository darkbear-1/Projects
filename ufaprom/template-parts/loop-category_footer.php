<?php
  $terms_razdels = get_terms( array(
  'hide_empty'  => 0,
  'orderby'     => 'term_id',
  'parent'      => 0,
  'order'       => 'ASC',
  'taxonomy'    => 'product_cat',
  'pad_counts'  => 1,
  'exclude' => array(15),
  'hide_empty' => true
  ) );
?>
<?php foreach ($terms_razdels as $key => $value): ?>
  <div class="footer__category-item">
    <a href="<?php echo get_term_link($value->term_id); ?>" class="footer__category-link"><?php echo $value->name ?></a>
  </div>
<?php endforeach; ?>
