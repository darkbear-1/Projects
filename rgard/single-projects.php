<?php
/*
Template Name: Шаблон проекта
Template Post Type: projects
*/
get_header();
$postMeta = get_post_meta(get_the_ID());
?>
<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
    <section class="project__main-screen" style="background-image: <?php echo (!empty($postMeta['gradient'][0])) ? 'radial-gradient(circle at calc(40% - 400px), ' . $postMeta['gradient'][0] . ' 0%, rgba(22, 22, 22, 0) 45%), linear-gradient(257.31deg, #292929 22.59%, #000000 77.43%)' : '' ?>">
      <div class="container">
        <div class="project__main-image">
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="">
        </div>
        <?php if (!empty($postMeta['case_logo_inner'][0])): ?>
          <div class="project__logo">
            <img src="<?php echo wp_get_attachment_url($postMeta['case_logo_inner'][0]) ?>" alt="">
          </div>
        <?php endif; ?>
        <div class="project__suptitle"><?php echo (!empty($postMeta['nadzagolovok'][0])) ? $postMeta['nadzagolovok'][0] : "" ?></div>
        <h1 class="project__title"><?php echo the_title() ?></h1>
        <div class="project__subtitle"><?php echo (!empty($postMeta['h2_sub'][0])) ? $postMeta['h2_sub'][0] : "" ?></div>
        <?php if (!empty($postMeta['url_site'][0])): ?>
          <a href="<?php echo $postMeta['url_site'][0] ?>" class="project__screen-gallery_link" target="_blank" rel="nofollow">Перейти на сайт</a>
        <?php endif; ?>
      </div>
    </section>
    <section class="project__info">
      <div class="container">
        <div class="project__info-row">
          <div class="project__info-col">
            <h2 class="project__info-title h2-title">КТО КЛИЕНТ?<span><?php echo (!empty($postMeta['zagolovok-kto-klient'][0])) ? $postMeta['zagolovok-kto-klient'][0] : "" ?></span></h2>
          </div>
          <div class="project__info-col">
            <div class="project__info-text"><?php echo (!empty($postMeta['zakazchik'][0])) ? $postMeta['zakazchik'][0] : "" ?></div>
          </div>
        </div>
        <div class="project__info-row">
          <div class="project__info-col">
            <h2 class="project__info-title h2-title">ПОСТАВЛЕННАЯ ЗАДАЧА<span><?php echo (!empty($postMeta['zagolovok-postavlennaia-zadacha'][0])) ? $postMeta['zagolovok-postavlennaia-zadacha'][0] : "" ?></span></h2>
          </div>
          <div class="project__info-col">
            <div class="project__info-text"><?php echo (!empty($postMeta['postav_zadach'][0])) ? $postMeta['postav_zadach'][0] : "" ?></div>
          </div>
        </div>
        <div class="project__info-row">
          <div class="project__info-col">
            <h2 class="project__info-title h2-title">Как сделали?<span><?php echo (!empty($postMeta['zagolovok-reshenie'][0])) ? $postMeta['zagolovok-reshenie'][0] : "" ?></span></h2>
          </div>
          <div class="project__info-col">
            <div class="project__info-text"><?php echo (!empty($postMeta['resh'][0])) ? $postMeta['resh'][0] : "" ?></div>
          </div>
        </div>
      </div>
    </section>
    <?php if (!empty($postMeta['info_blocks'][0])): ?>
      <section class="project__etaps">
        <?php $index = 1 ?>
        <div class="project__etaps-list">
          <?php foreach (unserialize($postMeta['info_blocks'][0]) as $key => $value): ?>
            <div class="project__etaps-item">
              <div class="container">
                <div class="project__etaps-col">
                  <div class="project__etaps-title h2-title"><?php echo (!empty($value['info_zag'])) ? $value['info_zag'] : 'Этапы работы<span>Этап '.$index.'</span>' ?></div>
                  <div class="project__etaps-text"><?php echo $value['info_text'] ?></div>
                </div>
                <?php if (!empty($value['info_img1'])): ?>
                  <div class="project__etaps-col">
                    <div class="family__slider project__etaps-gallery owl-carousel">
                      <?php foreach (explode(",", $value['info_img1']) as $key2 => $value2): ?>
                        <div class="project__etaps-gallery_item">
                          <img src="<?php echo wp_get_attachment_url($value2, 'full') ?>" alt="">
                        </div>
                      <?php endforeach; ?>
                    </div>
                  </div>
                <?php elseif (!empty($value['info_blocks_frame'])): ?>
                  <div class="project__etaps-col">
                    <div class="project__etaps-video">
                      <button class="otzyvy-video__slider-play"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 966.381 678.662"><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><path d="M.005,260.461C1.794,219.2,4.711,178.029,11.267,137.207c3.3-20.575,7.155-41.046,18.067-59.317C47.3,47.8,72.494,26.544,107.06,19.107a460.032,460.032,0,0,1,67.178-9.2Q255.985,4.68,337.879,1.82C375.99.428,414.161.658,452.3.1c4.965-.073,51.8-.144,54.757-.069C576.132,1.8,645.217,3.14,714.271,5.4c42.914,1.4,85.769,4.375,128.262,11.053,19.737,3.1,38.6,8.661,55.466,19.868,30.7,20.392,47.133,49.709,54.04,85.223,7.163,36.831,10.642,74.071,13.03,111.451.624,9.774,1.416,183.207,1.3,184.676-2.46,31.365-4.487,62.77-7.449,94.087-2.178,23.031-5.461,46.054-12.874,68.056-14.1,41.841-42.894,69.094-85.732,79.343-22.213,5.315-45.287,8.047-68.128,9.516-54.837,3.524-109.749,6.117-164.666,8.109-38.619,1.4-77.295,1.178-115.945,1.74-4.465.065-46.98.155-48.779.139-88.636-.777-177.253-2.219-265.714-8.4-29.723-2.078-59.6-3.726-88.623-10.888-47.421-11.7-78.288-41.624-91.012-88.639C6.4,529.893,4.245,487.652,1.357,445.625.64,435.183-.065,262.082.005,260.461ZM386.309,485,639.267,339.6l-252.958-146Z" fill="red"/><path d="M386.309,485V193.6l252.958,146Z" fill="#fff"/></g></g></svg></button>
                      <div class="otzyvy-video__slider-video" data-video-link="<?php echo $value['info_blocks_frame'] ?>">
                        <div class="otzyvy-video__image-wrap">
                          <img src="<?php echo wp_get_attachment_url($value['info_blocks_frame_preview'], 'full') ?>" alt="" class="otzyvy-video__slider-image">
                        </div>
                      </div>
                    </div>
                  </div>
                <?php elseif (!empty($value['video-iz-mediabiblioteki'])): ?>
                  <div class="project__etaps-col">
                    <div class="project__etaps-video">
                      <video src="<?php echo wp_get_attachment_url($value['video-iz-mediabiblioteki']) ?>" controls></video>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
            <?php $index++; ?>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>
    <?php if (!empty($postMeta['img_for_video1'][0])): ?>
      <section class="project__screen-gallery">
        <div class="container">
            <div class="about__col">
              <h2 class="project__screen-title h2-title">СКРИНШОТЫ<br><span>ГАЛЕРЕЯ ПРОЕКТА</span></h2>
              <div class="about__text">Перейти на сайт проекта</div>
              <?php if (!empty($postMeta['url_site'][0])): ?>
                <a href="<?php echo $postMeta['url_site'][0] ?>" class="project__screen-gallery_link" target="_blank" rel="nofollow"><?php echo $postMeta['url_site'][0] ?></a>
              <?php endif; ?>
            </div>
              <div class="about__col">
                <div class="about__gallery">
                  <?php $imageArr = explode(",", $postMeta['img_for_video1'][0]) ?>
                    <?php $chunk = array_chunk($imageArr, 2) ?>
                  <?php foreach ($chunk as $key => $value): ?>
                    <?php if ($key == 0): ?>
                      <div class="about__gallery-item">
                        <div class="about__icon-wrap">
                          <div class="about__icon about__icon--plus"></div>
                        </div>
                        <?php if (!empty($value[0])): ?>
                          <img src="<?php echo wp_get_attachment_url($value[0], 'full') ?>" alt="" class="about__gallery-img">
                        <?php endif; ?>
                        <?php if (!empty($value[1])): ?>
                          <img src="<?php echo wp_get_attachment_url($value[1], 'full') ?>" alt="" class="about__gallery-img">
                        <?php endif; ?>
                      </div>
                    <?php elseif ($key == count($chunk) - 1): ?>
                      <div class="about__gallery-item">
                        <?php if (!empty($value[0])): ?>
                          <img src="<?php echo wp_get_attachment_url($value[0], 'full') ?>" alt="" class="about__gallery-img">
                        <?php endif; ?>
                        <?php if (!empty($value[1])): ?>
                          <img src="<?php echo wp_get_attachment_url($value[1], 'full') ?>" alt="" class="about__gallery-img">
                        <?php endif; ?>
                        <?php if (empty($value[0]) || empty($value[1])): ?>
                          <div class="about__icon-wrap">
                            <div class="about__icon about__icon--shevron"></div>
                          </div>
                        <?php endif; ?>
                      </div>
                    <?php else: ?>
                      <div class="about__gallery-item">
                        <?php if (!empty($value[0])): ?>
                          <img src="<?php echo wp_get_attachment_url($value[0], 'full') ?>" alt="" class="about__gallery-img">
                        <?php endif; ?>
                        <?php if (!empty($value[1])): ?>
                          <img src="<?php echo wp_get_attachment_url($value[1], 'full') ?>" alt="" class="about__gallery-img">
                        <?php endif; ?>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              </div>
        </div>
      </section>
      <?php endif; ?>
  		<section class="otzyvy">
  			<div class="container">
          <?php if (!empty($postMeta['otzyv'][0])): ?>
    				<h2 class="otzyvy__title h2-title"><span>ОТЗЫВ ЗАКАЗЧИКА</span></h2>
    				<div class="otzyvy__list-wrap otzyvy__list-wrap--project">
              <div class="otzyvy__col">
                <?php $getPost = get_post($postMeta['otzyv'][0]); ?>
                <?php $getPostMetas = get_post_meta($getPost->ID) ?>
                  <div class="otzyvy__text-wrap">
                    <div class="otzyvy-text__slider-text"><?php echo nl2br($getPost->post_content, false); ?></div>
                    <div class="otzyvy-text__slider-info">
                      <div class="otzyvy-text__slider-name"><?php echo get_the_title($getPost->ID) ?></div>
                      <?php if (!empty($getPostMetas['ssylka-na-sait'][0])): ?>
                        <a href="<?php echo $getPostMetas['ssylka-na-sait'][0] ?>" target="_blank" rel="nofollow" class="otzyvy-text__slider-link"><?php echo $getPostMetas['ssylka-na-sait'][0] ?></a>
                      <?php endif; ?>
                    </div>
                  </div>
              </div>
              <div class="otzyvy__col">
                <div class="otzyvy__image">
                  <?php echo get_the_post_thumbnail($getPost->ID, 'full') ?>
                </div>
              </div>
  				  </div>
          <?php endif; ?>
  			</div>
  		</section>
  </div>
</div>

<?php get_footer() ?>
