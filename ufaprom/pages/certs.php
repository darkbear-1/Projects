<?php
/*
Template Name: Сертификаты
*/
get_header();
$gallery= explode(",", get_post_meta(get_the_ID(), 'izobrazheniia-dlia-galerei')[0]);
?>
<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>



    <section class="certs pad-t-b-40">
        <div class="container">
            <h2 class="catalog__title">Сертификаты</h2>
        <div class="col-flex">
			<?php foreach ($gallery as $key => $value): ?>
				<div class="col_3 pad-10"><img src="<?php echo wp_get_attachment_url($value, 'full') ?>" alt=""></div>
			<?php endforeach; ?>
        </div>
        </div>
    </section>






 </div>
</div>
<?php
get_footer();
?>
