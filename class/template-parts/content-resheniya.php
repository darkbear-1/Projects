<?php
  $postMeta = get_post_meta(get_the_ID());
  $h2Id = 1;
  preg_match_all("~<(h[2-3])[^>]*>\\K.+?(?:<\/\\1>)~u", $post->post_content, $postContent);
  global $wp_query;

  $args = array(
      'numberposts' => -1,
      'orderby'     => 'date',
      'order'       => 'DESC',
      'post_type'   => 'vozmoshnosti',
      'posts_per_page' => -1,
      'paged' => get_query_var('paged') ?: 1
  );

  $wp_query = new WP_Query($args);

  $counter = 0;
  $checker = 0;
?>
<div class="resheniya-page">
  <div class="main-screen" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ) ?>)">
    <div class="container">
      <?php if( !is_front_page() ) : ?>
        <div class='breadcrumbs'>
          <div class='breadcrumbs__wrap'>
            <?php echo the_breadcrumb();?>
          </div>
        </div>
     <?php endif ?>
     <h1 class="resheniya__title"><?php the_title() ?></h1>
     <h2 class="resheniya__subtitle"><?php echo $postMeta['subtitle'][0] ?></h2>
     <ul class="resheniya__fast-links">
       <?php if (!empty(unserialize($postMeta['content_blocks'][0]))): ?>
         <?php foreach (unserialize($postMeta['content_blocks'][0]) as $key => $value): ?>
           <?php if ($value['content_blocks_anchor'] != ''): ?>
             <li class="resheniya__fast-item">
               <a rel="nofollow" href="#" class="h2Anchor" data-h2id="<?php echo $h2Id ?>" class="oglavlenie__link"><?php echo $value['content_blocks_anchor'] ?></a>
             </li>
           <?php endif; ?>
         <?php $h2Id++; endforeach; ?>
       <?php endif; ?>
     </ul>
     <?php if(is_singular('vozmoshnosti')) :?>
        <a href="#reg" class="resheniya__btn-zapusk">Начать работу</a>
     <?php else: ?>
         <a href="#reg" class="resheniya__btn-zapusk">Запустить учет</a>
     <?php endif ?>
    </div>
  </div>
    <div class="resheniya__content">
       <?php if (!empty(unserialize($postMeta['content_blocks'][0]))): ?>
        <?php foreach (unserialize($postMeta['content_blocks'][0]) as $key => $value): ?>
          <div class="resheniya__content-wrap">
            <div class="resheniya__content-item container">
              <h2 class="resheniya__content-title"><?php echo $value['content_blocks_title'] ?></h2>
              <?php if ($value['content_blocks_subtitle'] != ''): ?>
                <h3 class="resheniya__content-subtitle"><?php echo $value['content_blocks_subtitle'] ?></h3>
              <?php endif; ?>
              <div class="resheniya__content-block">
                <?php if($value['content_blocks_image'] != '') : ?>
                    <div class="resheniya__content-image"><?php echo wp_get_attachment_image($value['content_blocks_image'], 'full') ?></div>
                <?php endif; ?>
                <div class="resheniya__content-text"><?php echo $value['content_blocks_text'] ?></div>
              </div>
            </div>
          </div>
          <?php echo $value['content_blocks_short'] != '' ? do_shortcode($value['content_blocks_short']) : '' ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <?php echo do_shortcode('[wbcr_php_snippet id="5924"]') ?>
	<?php if (get_post_type() == 'vozmoshnosti' ): ?>
    <div class="main-page__vozmoshnosti-wrap">
      <div class="container" style="padding: 50px 0;">
        <div class="vozmoshnosti-main__title">Программы сервиса Класс365</div>
        <div class="vozmoshnosti-main__subtitle">Автоматизация вашего бизнеса в одной удобной программе</div>
        <div id="widget-slider" class="vozmoshnosti-list owl-carousel">
          <?php while( have_posts() ): ?>
            <?php the_post() ?>
            <?php $postMeta = get_post_meta(get_the_ID()); ?>
            <?php if ($counter == $checker): ?>
              <div class="vozmoshnosti__item--widget-wrap">
            <?php endif; ?>
            <div class="vozmoshnosti__item">
              <a class="vozmoshnosti__item-link" href=<?php echo the_permalink( get_the_ID()) ?>>
                <div class="vozmoshnosti__item-image"><?php echo file_get_contents(wp_get_attachment_image_url($postMeta['vozmoshnosti_icon'][0], 'full')) ?></div>
                <div class="vozmoshnosti__item-info">
                  <div class="vozmoshnosti__item-title"><?php echo the_title() ?></div>
                  <hr class="vozmoshnosti__item-separator">
                  <div class="vozmoshnosti__item-subtitle"><?php echo $postMeta['subtitle'][0] ?></div>
                </div>
              </a>
            </div>
            <?php if ($counter  == 3): ?>
              <?php $counter = 0; ?>
              </div>
            <?php else: ?>
              <?php $counter++ ?>
            <?php endif; ?>
          <?php endwhile ?>
        </div>
      </div>
    </div>
	<?php endif; ?>
</div>
