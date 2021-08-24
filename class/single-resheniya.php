<?php
/*
Template Name: Шаблон Решения
Template Post Type: resheniya
*/
get_header();
?>
<div class="main main-resheniya">
  <?php get_template_part( 'template-parts/content-resheniya', get_post_format() ); ?>
</div>
<div class="callback-btn">
    <span class="link-text">Заказать<br>звонок!</span>
    <img class="phone-icon" src="/wp-content/uploads/2020/11/Calling2.svg">
</div>
<a href="#" class="mlp-btn"><div class="mlp-icon__wrap"><img data-src="/wp-content/uploads/2020/11/Vector.svg" class="mlp-icon lazyloaded" src="/wp-content/uploads/2020/11/Vector.svg"><noscript><img class="mlp-icon" src="/wp-content/uploads/2020/11/Vector.svg" /></noscript></div>
Подойдет ли мне сервис?</a>
<?php
get_footer();
?>
