<?php
/*
Template Name: Услуги и цены
*/
get_header();
?>
<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
	  <section class="activity uslugi-arc">
		  <div class="container">
			  <h2 class="activity__title h2-title">НАПРАВЛЕНИЯ ДЕЯТЕЛЬНОСТИ<span>В ЧЁМ МЫ ХОРОШИ</span></h2>
			  <div class="activity__list">
				  <?php get_template_part('template-parts/loop-categories') ?>
			  </div>
		  </div>
	  </section>
  </div>
</div>
<?php get_footer() ?>
