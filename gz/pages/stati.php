<?php
/*
Template Name: Статьи
*/

$args2 = array(
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type'   => 'stati'

);
$wp_query2 = new WP_Query($args2);

$markaTerms = get_terms( [
  'taxonomy' => 'marka-avto',
  'hide_empty' => true,
] );
?>
<?php get_header(); ?>
<div class="single-all_wrap stati-page">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
      <section class="breadcrumbs-inner">
        <div class="container">
          <div class="breadcrumbs">
            <?php echo the_breadcrumb(); ?>
          </div>
        </div>
      </section>
      <section class="stati">
        <div class="container">
          <h2 class="h2-title worksdone__title">Статьи и полезные материалы</h2>
          <?php get_template_part( 'template-parts/loop-stati', 'stati'); ?>
          <div class="olbako">
            <h2 class="oblako__title">Теперь мы делаем ремонт ходовой, двигателя,<br> трансмиссии, ТО и электрику!</h2>
            <div class="oblako__text">
              <p>Делать хорошо с первого раза, восстанавливать восстановимые автомобили, соблюдать<br> технологию, четко разграничивать зоны ответственности, идти в ногу со временем,<br> устанавливать адекватные цены — наши Золотые правила.</p>
              <p>Восстановим заводской вид или создадим новый образ вашего автомобиля с помощью<br> аэрографии в нашем современном автотехцентре Автоплюс.</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
<?php get_footer(); ?>
