<?php
/*
Template Name: Главная страница
*/
get_header();
?>

	<div class="main-page">
    <?php do_action('before_content'); ?>
    <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    <div class="main-page__mainscreen">
      <h1 class="main-page__title">Портал по автоматизации<br>малого бизнеса</h1>
      <div class="main-page__subtitle">Программы и решения по автоматизации бизнеса.<br>Экспертные статьи, новости и законодательство о торговле и бизнесе!</div>
    </div>
    <div class="main-page__content">
      <div class="container">
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
				<?php echo do_shortcode('[wbcr_php_snippet id="5924"]') ?>
				<div class="resheniya-main">
					<div class="resheniya-main__title">Готовые решения по автоматизации<br> учета товаров и услуг</div>
					<div class="resheniya-main__subtitle">Автоматизация вашего бизнеса в одной удобной программе</div>
					<div class="resheniya__list resheniya__list--unfold resheniya__list--overlay">
		        <?php get_template_part( 'template-parts/loop-resheniya', get_post_format() ); ?>
			    </div>
					<div class="resheniya__btn-main"><button type="button" class="more__btn" href="/novosti/"><span class="more__btn-text">Все решения</span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="11" viewBox="0 0 18 11" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.293 0.292969L17.7072 1.70718L9.00008 10.4143L0.292969 1.70718L1.70718 0.292969L9.00008 7.58586L16.293 0.292969Z" fill="#54BCE3"/></svg></button></div>
				</div>
      </div>
			<?php echo do_shortcode('[wbcr_php_snippet id="5918"]') ?>
				<div class="main-page__vozmoshnosti-wrap">
      		<div class="container">
						<div class="vozmoshnosti-main__title">Программы автоматизации учета товаров и услуг</div>
						<div class="vozmoshnosti-main__subtitle">Программы для учета товаров и услуг, в розничной и оптовой торговле, на складах и в магазинах.</div>
						<div class="vozmoshnosti-list">
							<?php get_template_part( 'template-parts/loop-vozmoshnosti', get_post_format() ); ?>
						</div>
						<div class="vozmoshnosti__btn-main"><a class="more__btn" href="/programs/"><span class="more__btn-text">Показать все</span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="11" viewBox="0 0 18 11" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.293 0.292969L17.7072 1.70718L9.00008 10.4143L0.292969 1.70718L1.70718 0.292969L9.00008 7.58586L16.293 0.292969Z" fill="#54BCE3"/></svg></a></div>
					</div>
				</div>
    </div>
	<?php
	?>
    <?php do_action('content_after'); ?>
	</div>
    <?php do_action('after_content'); ?>
    </div>
    <a href="#" class="mlp-btn"><div class="mlp-icon__wrap"><img data-src="/wp-content/uploads/2020/11/Vector.svg" class="mlp-icon lazyloaded" src="/wp-content/uploads/2020/11/Vector.svg"><noscript><img class="mlp-icon" src="/wp-content/uploads/2020/11/Vector.svg" /></noscript></div>
Подойдет ли мне сервис?</a>

<?php
get_footer();
