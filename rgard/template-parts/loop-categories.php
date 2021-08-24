<?php
$terms = get_terms( 'usl-kategorii', array(
		'hide_empty'  => 0,
) );
?>
<?php foreach ($terms as $key => $value): ?>
  <?php $termMeta = get_term_meta($value->term_id); ?>
  <div class="activity__item">
    <a href="<?php echo get_term_link($value->term_id, 'usl-kategorii'); ?>" class="activity__item-link"></a>
    <div class="activity__item-image">
      <img src="<?php echo wp_get_attachment_url($termMeta['kartochka-na-glavnom-ekrane'][0]); ?>" alt="">
    </div>
    <div class="activity__item-title"><?php echo (!empty($termMeta['proizvolnyi-zagolovok-v-kartochke-na-glavnom-ekrane'][0])) ? $termMeta['proizvolnyi-zagolovok-v-kartochke-na-glavnom-ekrane'][0] : $value->name ?></div>
  </div>
<?php endforeach; ?>
