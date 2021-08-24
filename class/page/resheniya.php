<?php
/*
Template Name: Решения
*/
get_header();
 ?>
<div class="archive-all_wrap resheniya-arc">
  <div class="container">
    <?php if( !is_front_page() ) : ?>
   	  <div class='breadcrumbs'>
     	 	<div class='breadcrumbs__wrap'>
     	 		<?php echo the_breadcrumb();?>
     	 	</div>
      </div>
   <?php endif ?>
    <?php do_action('before_content'); ?>
    <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    <h1 class="resheniya-arc__title"><?php echo get_post_meta(get_the_ID(), 'custom_h1')[0] != '' ? get_post_meta(get_the_ID(), 'custom_h1')[0] : the_title() ?></h1>
    <div class="resheniya-arc__subtitle">Автоматизация вашего бизнеса в одной удобной программе</div>
    <div class="resheniya-arc__text"><?php echo the_content(); ?></div>
    </div>
    <div class="resheniya__list">
        <?php get_template_part( 'template-parts/loop-resheniya', get_post_format() ); ?>
    </div>
    <?php do_action('content_after'); ?>
  </div>
    <?php do_action('after_content'); ?>
</div>
<div class="callback-btn">
    <span class="link-text">Заказать<br>звонок!</span>
    <img class="phone-icon" src="/wp-content/uploads/2020/11/Calling2.svg">
</div>
<a href="#" class="mlp-btn"><div class="mlp-icon__wrap"><img data-src="/wp-content/uploads/2020/11/Vector.svg" class="mlp-icon lazyloaded" src="/wp-content/uploads/2020/11/Vector.svg"><noscript><img class="mlp-icon" src="/wp-content/uploads/2020/11/Vector.svg" /></noscript></div>
Подойдет ли мне сервис?</a>
<?php
get_footer();
