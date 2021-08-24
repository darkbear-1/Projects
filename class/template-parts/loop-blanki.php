<?php foreach ($args['taxIds'] as $key => $value): ?>
  <div class="blanki__razdels-col">
    <?php
      $params = array(
          'orderby'     => 'date',
          'order'       => 'DESC',
          'post_type'   => 'blanki',
          'posts_per_page' => -1,
          'tax_query' => array(
            array(
              'taxonomy' => 'razdel_blanki',
              'field'    => 'id',
              'terms'    => array( $value )
            )
          ),
      );
      $wp_query = new WP_Query($params);
    ?>
    <?php if (!$args['termCheck']): ?>
      <div class="blanki__razdel-name"><?php echo get_term($value, 'razdel_blanki')->name ?></div>
    <?php endif; ?>
    <ul class="blanki__razdel-spisok">
      <?php while( have_posts() ): ?>
        <?php the_post() ?>
        <?php
          $postMeta = get_post_meta($post->ID);
        ?>
        <li class="blanki__razdel-item">
          <a href="<?php echo get_permalink() ?>" class="blanki__postname"><?php echo (!empty($postMeta['proizvolnyi-zagolovok-zapisi'][0])) ? $postMeta['proizvolnyi-zagolovok-zapisi'][0] : the_title() ?></a>
        </li>
      <?php endwhile ?>
    </ul>
  </div>
<?php endforeach; ?>
