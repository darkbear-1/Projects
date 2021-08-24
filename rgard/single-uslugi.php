<?php
/*
Template Name: Шаблон услугм
Template Post Type: uslugi
*/
get_header();
$postMeta = get_post_meta(get_the_ID());

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

$uslugi_price_wp_query = new WP_Query($uslugi_price_args);
?>
<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    <section class="usluga__main-screen">
      <div class="container">
        <div class="usluga-cat__col">
          <h1 class="usluga-cat__title"><?php echo the_title(); ?></h1>
          <div class="usluga-cat__description"><?php echo the_content() ?></div>
        </div>
      </div>
      <div class="usluga-cat__images-wrap">
        <div class="usluga__ship-wrap">
				    <canvas id="ship2" width="780" height="780"></canvas>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1439.89 110.03"><defs><style>.cls-1{fill:#e50303;fill-rule:evenodd;}</style></defs><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><path class="cls-1" d="M1439.89,71.82V110H0V72.72l6.28-2.26,26.21-1.32,34-3.76,14.93-1.11,24.08-4.1,20-6.36,29.11-1.16,25-.91,15.28-3.15,17.47-.86,28.39-7.82,28.41-1.37L289,35l21.24-4.55,15.88-.12s27.73-8.54,30.12-9.3v-.24l20.3-5,26.2,1.41L436.88,17l15,.45,24.37-1.57,20.61-4.24,29.08,1.87,24.91,1.69,15.53-1.54,17.46,1,29-4.83,28.4,1.59L661.32,10l21.61-2.31,15.8,1.52s29.58-5.83,31-6.13l.06.1,0-.1L750.56,0l26,3.85,34,3L825.42,8.7l24.41.71,20.91-2.29,28.78,4.59,24.64,4,15.61-.08,17.3,2.6,29.36-2.09,28.13,4.25,20.13.44,21.72-.27,15.59,3,11.92-1.2.06-.42,9.81-.59,9.69-1,0,.41,1.39-.08,25.52,6.09L1164,32.72l14.65,3.13,24.25,2.83,21-.47,28.27,7.07,24.2,6.14L1292,52.69l17,4.09,29.44.46,27.65,6.68,20,2.18,21.66,1.61L1423,72.05Z"/></g></g></svg>
    </div>
    </section>
    <section class="usluga-advantages">
      <div class="container">
        <div class="usluga-advantages__title">Какие преимущества?</div>
        <div class="usluga-advantages__list">
          <?php foreach (unserialize($postMeta['preimushchestva'][0]) as $key => $value): ?>
            <div class="usluga-advantages__item">
              <?php echo $value['nazvanie-uslugi'] ?>
            </div>
          <?php endforeach; ?>
        </div>
					<?php if (!empty($postMeta['relation_145645526bf6173d7d332ec43fc8cd37'])): ?>
		        <div class="usluga-advantages__price h2-title">ПРОЕКТЫ <span>НАША ГОРДОСТЬ</span></div>
						<div class="cases-usl__list projects__tabs-content--tasks">
						<?php foreach ($postMeta['relation_145645526bf6173d7d332ec43fc8cd37'] as $key => $value): ?>
							<?php $casePostMeta = get_post_meta($value); ?>
							<div class="projects__slider-item projects__slider-item--tasks">
								<a href="<?php echo get_permalink($value) ?>" class="tasks__link"></a>
								<div class="tasks__slider-img tasks__slider-img--projects">
									 <img src="<?php echo wp_get_attachment_url($casePostMeta['case_logo'][0], 'full') ?>" alt="">
								</div>
								<div class="projects__slider-wrap projects__slider-wrap--tasks">
									<div class="projects__slider-title projects__slider-title--tasks"><?php echo get_the_title($value) ?></div>
									<div class="projects__slider-excerpt projects__slider-excerpt--tasks">
										<?php echo (!empty($casePostMeta['kratkoe-opisanie'][0])) ? $casePostMeta['kratkoe-opisanie'][0] : '' ?>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
      </div>
    </section>
    <?php if (!empty($postMeta['etapy-sozdaniia'][0])): ?>
      <section class="usluga-advantages__etaps">
        <div class="container">
          <div class="usluga-advantages__etaps-list">
						<?php $index = 0; ?>
            <?php foreach (unserialize($postMeta['etapy-sozdaniia'][0]) as $key => $value): ?>
              <div class="usluga-advantages__etaps-item">
                <div class="usluga-advantages__etaps-col">
                  <?php if ($index == 0): ?>
                    <div class="usluga-advantages__etaps-title h2-title">Этапы создания <span><?php echo (!empty($value['nazvanie-etapa'])) ? $value['nazvanie-etapa'] : '' ?></span></div>
                  <?php else: ?>
                    <div class="usluga-advantages__etaps-title h2-title"><span><?php echo (!empty($value['nazvanie-etapa'])) ? $value['nazvanie-etapa'] : '' ?></span></div>
                  <?php endif; ?>
                  <div class="usluga-advantages__etaps-text"><?php echo $value['opisanie-etapa'] ?></div>
                </div>
                <div class="usluga-advantages__etaps-col">
                  <?php if (!empty($value['kartinka-etapa'])): ?>
                    <div class="usluga-advantages__etaps-image">
                      <img src="<?php echo wp_get_attachment_url($value['kartinka-etapa'], 'full') ?>" alt="">
                    </div>
                  <?php endif; ?>
                </div>
              </div>
							<?php $index++; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
    <?php endif; ?>
    <?php get_template_part('template-parts/template-questions') ?>
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

<?php get_footer() ?>
