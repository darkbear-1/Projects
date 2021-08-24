<?php

setPostViews(get_the_ID());
$postMeta = get_post_meta(get_the_ID());
// $statiMeta = get_post_meta(get_the_ID());
// $relationsArr = $statiMeta['relation_61fa74b21f3c818a8c8f0bffe47c1130'];
$posts_stati = get_posts( array(
	'post_type' => 'services',
	'posts_per_page' => 7,
	'orderby'     => 'rand',
	'order'       => 'ASC',
  'exclude'     => get_the_ID()
) );
?>
<div class="stati--page blanki--page services--page">
  <div class="container">
   <div class="stati__content">
     <h1 class="blanki-title"><?php echo the_title() ?></h1>
      <div class="stati__description"><?php echo the_content()?></div>
    </div>
  </div>
  <div class="stati__item-meta_wrap">
    <div class="stati__item-meta--page stati__item-meta--blanki stati__item-meta">
      <div class="stati__item-date"><?php echo get_the_date('j.m.Y', $post->ID) ?></div>
      <div class="stati__item-views"><svg class="stati__item-views--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M6 0C8.4474 0 10.4276 1.27405 12 4C10.4276 6.72595 8.4474 8 6 8C3.63699 8 1.7095 6.8123 0.164117 4.27682L0 4C1.57238 1.27405 3.5526 0 6 0ZM6 2C4.89543 2 4 2.89543 4 4C4 5.10457 4.89543 6 6 6C7.10457 6 8 5.10457 8 4C8 2.89543 7.10457 2 6 2Z" fill="#444444"/></svg><span class="stati__item-views--text"><?php echo getPostViews($post->ID); ?></span></div>
    </div>
    <hr class="stati__separate"></hr>
  </div>
    <div class="blanki__razdel-list blanki__razdel-list--services">
    <div class="container">
			<div class="blanki__razdel__title">Другие сервисы</div>
		  <div class="vozmoshnosti-list">
	        <?php get_template_part( 'template-parts/loop-services', get_post_format() ); ?>
	    </div>
      <a href="/services/" target="_blank" class="zapusk__form-more zapusk__form-more--blanki zapusk__form-more--services">Посмотреть полный список сервисов</a>
    </div>
    </div>
    <div class="main-page container">
      <div class="main-page__novosti-wrap">
        <div class="main-page__novosti-title">Новости</div>
        <div class="main-page__novosti-subtitle">Будьте в курсе событий</div>
          <?php get_template_part( 'template-parts/loop-novosti', get_post_format() ); ?>
          <div class="novosti__btn-main"><a class="more__btn" href="/novosti/">Все новости<svg xmlns="http://www.w3.org/2000/svg" width="18" height="11" viewBox="0 0 18 11" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.293 0.292969L17.7072 1.70718L9.00008 10.4143L0.292969 1.70718L1.70718 0.292969L9.00008 7.58586L16.293 0.292969Z" fill="#54BCE3"/></svg></a></div>
      </div>
      <div class="main-page__novosti-wrap">
        <div class="main-page__novosti-title">Статьи</div>
        <div class="main-page__novosti-subtitle">Полезная информация для владельцев бизнеса</div>
          <?php get_template_part( 'template-parts/loop-stati', get_post_format() ); ?>
          <div class="novosti__btn-main"><a class="more__btn" href="/stati/">Все статьи<svg xmlns="http://www.w3.org/2000/svg" width="18" height="11" viewBox="0 0 18 11" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.293 0.292969L17.7072 1.70718L9.00008 10.4143L0.292969 1.70718L1.70718 0.292969L9.00008 7.58586L16.293 0.292969Z" fill="#54BCE3"/></svg></a></div>
      </div>
    </div>
   </div>
  </div>
</div>
<?php
?>
