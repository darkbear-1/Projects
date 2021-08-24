<?php
/*
Template Name: Test
*/
global $wp_query;

$args = array(
    'numberposts' => -1,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'vozmoshnosti',
    'posts_per_page' => -1,
    'paged' => get_query_var('paged') ?: 1
);

$wp_query = new WP_Query($args);

$counter = 0;
$checker = 0;

get_header();
?>
<?php echo do_shortcode('[wbcr_php_snippet id="11317"]') ?>
<?php
get_footer();
?>
