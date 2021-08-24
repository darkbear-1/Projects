<?php
$brands = get_the_terms( $post->ID, 'brands' );
?>
<ul class="product__attributes-list product__attributes-list--names">
  <?php if (!empty($brands)): ?>
    <li class="product__attributes"><span class="product__attributes-name">Бренд: </span></li>
  <?php endif; ?>
  <?php foreach ($product_attributes as $key => $item): ?>
    <?php if ($item['label'] != 'Размер:' && $item['label'] != 'Вес'): ?>
      <li class="product__attributes"><span class="product__attributes-name"><?php echo $item['label']; ?></span></li>
    <?php endif; ?>
  <?php endforeach; ?>
</ul>
<ul class="product__attributes-list product__attributes-list--values">
  <?php if (!empty($brands)): ?>
    <li class="product__attributes"><span class="product__attributes-value"><?php echo $brands[0]->name ?></span></li>
  <?php endif; ?>
  <?php foreach ($product_attributes as $key => $item): ?>
    <?php if ($item['label'] != 'Размер:' && $item['label'] != 'Вес'): ?>
      <li class="product__attributes"><span class="product__attributes-value"><?php echo $item['value'] ?></span></li>
    <?php endif; ?>
  <?php endforeach; ?>
</ul>
