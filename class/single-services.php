<?php
/*
Template Name: Шаблон сервисов
Template Post Type: services
*/
get_header();
$postMeta = get_post_meta(get_the_ID());
$siteSettings = get_option( 'site_settings', array() );
  ?>
  <div class="main main-stati main-stati--blanki">
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
    <?php get_template_part( 'template-parts/content-services', get_post_format() ); ?>
</div>
<a href="#" class="mlp-btn"><div class="mlp-icon__wrap"><img data-src="/wp-content/uploads/2020/11/Vector.svg" class="mlp-icon lazyloaded" src="/wp-content/uploads/2020/11/Vector.svg"><noscript><img class="mlp-icon" src="/wp-content/uploads/2020/11/Vector.svg" /></noscript></div>
Подойдет ли мне сервис?</a>
<?php
get_footer();
?>
