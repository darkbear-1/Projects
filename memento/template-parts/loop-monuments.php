<?php
$args2 = array(
    'posts_per_page' => (!empty($_POST['perPage'])) ? $_POST['perPage'] : 6,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type'   => 'monuments'

);

if (!empty($_POST['materialId'])) {
    $args2['tax_query'] = array(
      'relation' => 'OR',
      [
			'taxonomy' => 'material',
			'field'    => 'id',
			'terms'    => array($_POST['materialId']),
			'operator' => 'IN',
      ]
		);
  }

if (!empty($_POST['religiaId'])) {
    $args2['tax_query'] = array(
      'relation' => 'OR',
      [
			'taxonomy' => 'religia',
			'field'    => 'id',
			'terms'    => array($_POST['religiaId']),
			'operator' => 'IN',
      ]
		);
  }

if (!empty($_POST['priceOrder']) && $_POST['priceOrder'] == 'min') {
  $args2['orderby'] = 'meta_value';
  $args2['meta_key'] = 'tsena';
  $args2['order'] = 'ASC';
}

if (!empty($_POST['priceOrder']) && $_POST['priceOrder'] == 'max') {
  $args2['orderby'] = 'meta_value';
  $args2['meta_key'] = 'tsena';
  $args2['order'] = 'DESC';
}

if (!empty($_POST['oreientationId'])) {
    $args2['tax_query'] = array(
      'relation' => 'OR',
      [
			'taxonomy' => 'oreientation',
			'field'    => 'id',
			'terms'    => array($_POST['oreientationId']),
			'operator' => 'IN',
      ]
		);
  }

if (!empty($_POST['colorId'])) {
  $args2['tax_query'] = array(
    'relation' => 'OR',
    [
		'taxonomy' => 'color',
		'field'    => 'id',
		'terms'    => array($_POST['colorId']),
		'operator' => 'IN',
    ]
	);
}

$wp_query = new WP_Query($args2);
?>
<div class="monuments__list">
  <?php while( $wp_query->have_posts() ): ?>
    <?php $wp_query->the_post() ?>
    <?php global $post; ?>
    <?php $postMeta = get_post_meta($post->ID); ?>
    <?php $materialTerms = get_the_terms( $post->ID, 'material' ); ?>
    <div class="monuments__item" data-post-id="<?php echo $post->ID ?>">
      <div class="monuments__image"><?php the_post_thumbnail() ?></div>
      <div class="monuments__content">
        <div class="monuments__content-col">
          <div class="monuments__content-title"><?php the_title() ?></div>
          <div class="monuments__content-material"><?php echo $materialTerms[0]->name ?></div>
          <div class="monuments__content-price"><?php echo $postMeta['tsena'][0] ?> рублей</div>
        </div>
        <div class="monuments__content-col">
          <div class="monuments__content-artikul"><?php echo $postMeta['artikul'][0] ?></div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
</div>
