<?php
/*
Template Name: Главная страница
*/
get_header();
$projectsTerms = get_terms([
	'taxonomy' => 'site-cat',
	'hide_empty' => false,
  'orderby' => 'id'
]);

$projects_args = array(
		 'posts_per_page' => -1,
		 'post_type' => 'projects',
		 'orderby' => 'date',
		 'order' => 'DESC'
 );

$projects_wp_query = new WP_Query($projects_args);

$uslugi_terms = get_terms( array(
	'taxonomy'      => 'usl-kategorii', // название таксономии с WP 4.5
	'orderby'       => 'id',
	'order'         => 'ASC',
	'hide_empty'    => false
) );

$uslugi_price_args = array(
		 'posts_per_page' => -1,
		 'post_type' => 'uslugi',
		 'orderby' => 'date',
		 'order' => 'ASC'
);

$tax_query[] =
array(
	'taxonomy' => 'usl-kategorii',
	'field'    => 'id',
	'terms'    => array($uslugi_terms[0]->term_id),
	'operator' => 'IN'
);

$uslugi_price_args['tax_query'] = array(
	'relation' => 'AND',
	$tax_query
);

$uslugi_args = array(
		 'posts_per_page' => -1,
		 'post_type' => 'uslugi',
		 'orderby' => 'date',
		 'order' => 'ASC'
);

$uslugi_wp_query = new WP_Query($uslugi_args);

$uslugi_price_wp_query = new WP_Query($uslugi_price_args);
?>
<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    <section class="main-screen">
			<div class="animate-bg"><?php get_template_part('template-parts/content-mainscreen') ?></div>
      <div class="container">
        <div class="social-list">
          <div class="social-list__item"><a href="https://vk.com/rguardrussia" target="_blank" class="social-list__link">Vkontakte</a></div>
          <div class="social-list__item"><a href="https://www.instagram.com/rguard_studio/" target="_blank" class="social-list__link">Instagram</a></div>
        </div>
      </div>
    </section>
    <section class="complete">
      <div class="container">
         <div class="complete-list">
          <div class="complete-list__item">
            <div class="complete-list__title">Средний ROI</div>
            <div class="complete-list__subtitle">265%</div>
            <div class="complete-list__text">у постоянных клиентов</div>
          </div>
          <div class="complete-list__item">
            <div class="complete-list__title">Разработано</div>
            <div class="complete-list__subtitle">БОЛЬШЕ 10</div>
            <div class="complete-list__text">инструментов автоматизации</div>
          </div>
          <div class="complete-list__item">
            <div class="complete-list__title">Упаковано</div>
            <div class="complete-list__subtitle">БОЛЕЕ 20</div>
            <div class="complete-list__text">компаний</div>
          </div>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="container">
        <div class="about__col">
          <h2 class="about__title h2-title">О компании<br><span>Красная Гвардия</span></h2>
          <div class="about__text">
            <p>В первую очередь мы друзья, близкие по духу и убеждениям.<br> В нашей компании нет места лени и прокрастинации.<br> Если мы беремся за дело, то доводим до конца.<br>Не даем обещаний, которые не можем выполнить. </p>
            <p><b>В 2014 году</b> мы распахнули двери для наших клиентов и<br> все никак не можем закрыть.</p>
            <p>Нас знают в Санкт-Петербурге, Уфе и Москве<br> работаем по всей России.</p>
          </div>
        </div>
        <div class="about__col">
          <div class="about__gallery">
            <div class="about__gallery-item"><div class="about__icon about__icon--plus"></div></div>
            <div class="about__gallery-item"><img src="/wp-content/uploads/2021/03/Rectangle-61.jpg" alt="" class="about__gallery-img"></div>
            <div class="about__gallery-item"><img src="/wp-content/uploads/2021/03/Rectangle-60.jpg" alt="" class="about__gallery-img"></div>
            <div class="about__gallery-item"><img src="/wp-content/uploads/2021/03/Rectangle-62.jpg" alt="" class="about__gallery-img"></div>
            <div class="about__gallery-item"><img src="/wp-content/uploads/2021/03/Rectangle-59.jpg" alt="" class="about__gallery-img"></div>
            <div class="about__gallery-item"><img src="/wp-content/uploads/2021/03/Rectangle-63.jpg" alt="" class="about__gallery-img"></div>
            <div class="about__gallery-item"><div class="about__icon about__icon--shevron"></div></div>
          </div>
        </div>
      </div>
    </section>
    <section class="family">
      <div class="container">
        <h2 class="family__title h2-title">Наша семья<br><span>КОМАНДА КГ</span></h2>
        <?php get_template_part('template-parts/loop-family', 'sotrudniki') ?>
      </div>
    </section>
    <section class="partners">
      <div class="container">
        <h2 class="partners__title h2-title">Наши партнеры</h2>
        <?php get_template_part('template-parts/loop-partners', 'partnery') ?>
      </div>
    </section>
    <section class="projects">
      <div class="container">
        <div class="projects__col">
          <h2 class="projects__title h2-title">Проекты<span>Наша<br>гордость</span></h2>
          <div class="projects__text">
            <p>Мы не продвигаем сайты, мы продвигаем бизнес.</p>
            <p>Наши инструменты помогают<br>зарабатывать деньги и продвигать <br>бизнес в интернете и офлайн</p>
            <p>Почему?<br>Потому что мы вникаем в ваше дело,<br>изучаем нишу, исследуем конкурентов,<br>анализируем данные и считаем цифры.</p>
          </div>
					<div class="projects__airplane">
				    <canvas id="ship" width="640" height="640"></canvas>
					</div>
        </div>
        <div class="projects__col">
          <div class="projects__tabs-buttons tabs-buttons">
            <div class="projects__tabs-item tabs-item">
              <button type="button" class="projects__tabs-btn projects__tabs-btn--active tabs-btn tabs-btn--active">Все (<?php echo $projects_wp_query->found_posts ?>)</button>
            </div>
						<?php while( $uslugi_wp_query->have_posts() ): ?>
							<?php $uslugi_wp_query->the_post() ?>
							<?php global $post; ?>
							<?php $postMeta = get_post_meta($post->ID); ?>
							<?php if (array_key_exists('relation_145645526bf6173d7d332ec43fc8cd37', $postMeta)) : ?>
								<div class="projects__tabs-item">
	                <button type="button" class="projects__tabs-btn tabs-btn" data-post-id="<?php echo $post->ID ?>"><?php echo the_title() . " (" . count($postMeta['relation_145645526bf6173d7d332ec43fc8cd37']) . ")" ?></button>
	              </div>
							<?php endif; ?>
						<?php endwhile; ?>
            <!-- <?php //foreach ($projectsTerms as $key => $value): ?>
              <div class="projects__tabs-item">
                <button type="button" class="projects__tabs-btn tabs-btn" data-term-id="<?php //echo $value->term_id ?>"><?php //echo $value->name . " (".$value->count.")" ?></button>
              </div>
            <?php //endforeach; ?> -->
        </div>
        <div class="projects__tabs-content tabs-content">
					<div id="projects__slider" class="projects__slider owl-carousel">
						<?php while( $projects_wp_query->have_posts() ): ?>
				      <?php $projects_wp_query->the_post() ?>
				      <?php global $post; ?>
				      <?php $postMeta = get_post_meta($post->ID) ?>
				      <div class="projects__slider-item">
					      <a href="<?php echo get_permalink() ?>" class="projects__link"></a>
				        <div class="projects__slider-logo">
				          <img src="<?php echo wp_get_attachment_url($postMeta['case_logo'][0]) ?>" alt="">
				        </div>
				        <div class="projects__slider-wrap">
				          <div class="projects__slider-title"><?php echo the_title() ?></div>
									<?php if (!empty($postMeta['url_site'][0])): ?>
										<a href="<?php echo (!empty($postMeta['url_site'][0])) ? $postMeta['url_site'][0] : '#' ?>" target="_blank" rel="nofollow" class="projects__slider-link">Перейти на сайт</a>
									<?php endif; ?>
				        </div>
				        <div class="projects__slider-excerpt"><?php echo (!empty($postMeta['kratkoe-opisanie'][0])) ? $postMeta['kratkoe-opisanie'][0] : '' ?></div>
				      </div>
				    <?php endwhile; ?>
						<?php wp_reset_query(); ?>
				  </div>
        </div>
        </div>
      </div>
    </section>
		<section class="activity">
			<div class="container">
				<h2 class="activity__title h2-title">НАПРАВЛЕНИЯ ДЕЯТЕЛЬНОСТИ<span>В ЧЁМ МЫ ХОРОШИ</span></h2>
				<div class="activity__list">
					<?php get_template_part('template-parts/loop-categories') ?>
				</div>
			</div>
		</section>
		<section class="prices">
			<div class="container">
				<div class="prices__column">
					<div class="prices__tabs-buttons tabs-buttons">
						<?php foreach ($uslugi_terms as $key => $value): ?>
							<div class="prices__tabs-item tabs-item">
                <button type="button" class="prices__tabs-btn tabs-btn <?php echo ($key == 0) ? "tabs-btn--active" : "" ?>" data-term-id="<?php echo $value->term_id ?>"><?php echo $value->name ?></button>
								<?php $key++ ?>
		        	</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="prices__column">
					<h2 class="prices__title h2-title">Услуги и цены<span>Наш прайс</span></h2>
	        <div class="prices__tabs-content tabs-content">
						<div class="prices__list">
							<?php while( $uslugi_price_wp_query->have_posts() ): ?>
					      <?php $uslugi_price_wp_query->the_post() ?>
					      <?php global $post; ?>
								<?php $uslugiMeta = get_post_meta($post->ID) ?>
								<a href="<?php echo get_permalink(); ?>" class="prices__item-link">
									<div class="prices__item">
										<div class="prices__item-title"><?php echo the_title() ?></div>
										<div class="prices__item-value"><?php echo (!empty($uslugiMeta['tsena'][0])) ? $uslugiMeta['tsena'][0] : '' ?></div>
									</div>
								</a>
					    <?php endwhile; ?>
						</div>
	        </div>
				</div>
			</div>
		</section>
		<section class="otzyvy">
			<div class="container">
				<h2 class="otzyvy__title h2-title">Отзывы<span>о нас говорят так</span></h2>
				<div class="otzyvy__list-wrap">
					<?php get_template_part('template-parts/loop-otzyvy') ?>
				</div>
			</div>
		</section>
  </div>
</div>
<?php
get_footer();
?>
