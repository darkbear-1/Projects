<?php
  global $wp_query;
  $args = array(
      'numberposts' => -1,
      'orderby'     => 'date',
      'order'       => 'DESC',
      'post_type'   => 'novosti',
      'posts_per_page' => 3,
      'paged' => get_query_var('paged') ?: 1
  );
  $wp_query = new WP_Query($args);
?>

<div class="main-page__stati-list">
<?php while( have_posts() ) :?>
  <?php the_post();?>
      <div class="stati__item">
        <a href=<?php echo the_permalink( $post->ID) ?>></a>
        <div class="stati__item-image"><?php echo get_the_post_thumbnail( $post->ID, 'full' ) ?></div>
        <div class="stati__item-rubrika"><?php echo get_the_terms($post->ID, 'novosti_rubriki')[0]->name ?></div>
        <div class="stati__item-title"><?php echo the_title() ?></div>
        <div class="stati__item-meta">
          <div class="stati__item-date"><?php echo get_the_date('j.m.Y', $post->ID) ?></div>
          <div class="stati__item-author"><svg class="stati__item-author--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 6H7C9.76142 6 12 8.23858 12 11C12 11.5128 11.614 11.9355 11.1166 11.9933L11 12H1C0.447715 12 0 11.5523 0 11C0 8.31124 2.12231 6.11818 4.78311 6.00462L5 6H7H5ZM6 0C7.65685 0 9 1.34315 9 3C9 4.65685 7.65685 6 6 6C4.34315 6 3 4.65685 3 3C3 1.34315 4.34315 0 6 0Z" fill="white"/></svg><span class="stati__item-author--text"><?php echo the_author_meta('user_firstname', $post->post_author) . " " . get_the_author_meta('user_lastname', $post->post_author)  ?></span></div>
          <div class="stati__item-views"><svg class="stati__item-views--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M6 0C8.4474 0 10.4276 1.27405 12 4C10.4276 6.72595 8.4474 8 6 8C3.63699 8 1.7095 6.8123 0.164117 4.27682L0 4C1.57238 1.27405 3.5526 0 6 0ZM6 2C4.89543 2 4 2.89543 4 4C4 5.10457 4.89543 6 6 6C7.10457 6 8 5.10457 8 4C8 2.89543 7.10457 2 6 2Z" fill="white"/></svg><span class="stati__item-views--text"><?php echo getPostViews($post->ID); ?></span></div>
        </div>
        <div class="stati__item-arrow"><img class="stati__item-arrow--icon" src="/wp-content/uploads/2020/08/CHEVRON.svg"></div>
      </div>
  <?php endwhile; ?>

</div>
