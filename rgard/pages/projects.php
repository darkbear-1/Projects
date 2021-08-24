<?php
/*
Template Name: Проекты
*/
$projects_args = array(
		 'posts_per_page' => -1,
		 'post_type' => 'projects',
		 'orderby' => 'date',
		 'order' => 'DESC'
 );

$projects_wp_query = new WP_Query($projects_args);

$uslugi_args = array(
		 'posts_per_page' => -1,
		 'post_type' => 'uslugi',
		 'orderby' => 'date',
		 'order' => 'ASC'
);

$uslugi_wp_query = new WP_Query($uslugi_args);
get_header();
?>
<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    <section class="projects projects-arc">
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
  </div>
</div>
<?php get_footer() ?>
