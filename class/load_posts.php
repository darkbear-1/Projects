<?php
  $posts_stati= get_posts( array(
      'numberposts' => 13,
      'orderby'     => 'date',
      'order'       => 'DESC',
      'post_type'   => 'stati',
  ) );
?>
