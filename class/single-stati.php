<?php
/*
Template Name: Шаблон статьи
Template Post Type: stati
*/
get_header();
$postMeta = get_post_meta(get_the_ID());
$siteSettings = get_option( 'site_settings', array() );
  ?>
  <div class="cat-wrap">
    <div class="container--cat">
		  <?php get_template_part( 'cat' ); ?>
    </div>
  </div>
  <div class="main main-stati">
    <div class="container">
      <?php if( !is_front_page() ) : ?>
     	  <div class='breadcrumbs'>
       	 	<div class='breadcrumbs__wrap'>
       	 		<?php echo the_breadcrumb();?>
       	 	</div>
        </div>
     <?php endif ?>
     <?php if (!empty($siteSettings['brendirovanie_variants']) && $siteSettings['brendirovanie_variants_checker'] == 'true'): ?>
        <?php $randAdvent = array_rand($siteSettings['brendirovanie_variants'], 1); ?>
        <?php $imageArr = explode(",", $siteSettings['brendirovanie_variants'][$randAdvent]['brendirovanie_image']) ?>
          <div class="krug-brand krug-brand--left"><div class="krug-brand__wrap krug-brand__wrap--left"><a href=<?php echo $siteSettings['brendirovanie_variants'][$randAdvent]['brendirovanie_link'] ?>><img src="<?php echo wp_get_attachment_url($imageArr[0]) ?>"></a></div></div>
          <div class="krug-brand krug-brand--right"><div class="krug-brand__wrap krug-brand__wrap--right"><a href=<?php echo $siteSettings['brendirovanie_variants'][$randAdvent]['brendirovanie_link'] ?>><img src="<?php echo wp_get_attachment_url($imageArr[1]) ?>"></a></div></div>
    <?php endif; ?>
    </div>
    <?php get_template_part( 'template-parts/content-stati', get_post_format() ); ?>
  <?php
  global $wp_query;
  $args = array(
      'numberposts' => -1,
      'orderby'     => 'date',
      'order'       => 'DESC',
      'post_type'   => 'stati',
      'posts_per_page' => 1,
      'post__not_in' => array(get_the_ID()),
      'paged' => get_query_var('paged') ?: 1
  );
  $wp_query = new WP_Query($args);
  ?>
  <?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <script>
    var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
    var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
    var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
    var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
    </script>
  <?php endif; ?>
  <div class="more--stati-page">
  </div>
</div>
<?php if (!check_mobile_device()): ?>
  <a href="#" class="mlp-btn"><div class="mlp-icon__wrap"><img data-src="/wp-content/uploads/2020/11/Vector.svg" class="mlp-icon lazyloaded" src="/wp-content/uploads/2020/11/Vector.svg"><noscript><img class="mlp-icon" src="/wp-content/uploads/2020/11/Vector.svg" /></noscript></div>Подойдет ли мне сервис?</a>
<?php endif; ?>

<?php
get_footer();
?>
