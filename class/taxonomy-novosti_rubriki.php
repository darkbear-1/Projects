<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyTheme
 */

get_header();
$terms_razdels = get_terms( array(
 'hide_empty'  => 1,
 'orderby'     => 'date',
 'order'       => 'ASC',
 'taxonomy'    => 'novosti_rubriki',
 'pad_counts'  => 1
) );
$terms_razdels_mobile = get_terms( array(
 'hide_empty'  => 1,
 'number'      => 0,
 'orderby'     => 'date',
 'order'       => 'ASC',
 'taxonomy'    => 'novosti_rubriki',
 'pad_counts'  => 1
) );
global $wp_query;
$args = array(
    'numberposts' => -1,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'novosti',
    'tax_query' => array(
  		array(
  			'taxonomy' => get_queried_object()->taxonomy,
  			'field'    => 'id',
  			'terms'    => array( get_queried_object()->term_id),
  			'operator' => 'IN'
  		)
  	),
    'paged' => get_query_var('paged') ?: 1
);
$wp_query = new WP_Query($args);
$adventagesSetting = get_term_meta(get_queried_object()->term_id);
// // Получение постов Статьи
$i = 0;
$middle = 0;
$old = 0;
$counter = 0;
 ?>

<div class="archive-all_wrap stati">
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
      <h1 class="stati__title"><?php echo get_the_archive_title(). ' рубрики "'. get_queried_object()->name .'"';?></h1>
      <div class="stati__rubriki--mobile">
        <div class="rotate-arrow rotate-left"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="23" viewBox="0 0 8 23" fill="none">
<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M2.78617 11.4312L7.73081 2.22865C7.90065 1.91256 7.90065 1.54275 7.73081 1.22666C7.27323 0.375048 5.9406 0.375048 5.48301 1.22666L0 11.4312L5.48301 21.6357C5.9406 22.4873 7.27323 22.4873 7.73081 21.6357C7.90065 21.3197 7.90065 20.9498 7.73081 20.6338L2.78617 11.4312Z" fill="#54BCE3"/>
</svg></div>
        <div class="stati__rubriki--mobile-wrap">
          <?php foreach ($terms_razdels_mobile as $key => $value): ?>
            <?php if ($value->name == get_queried_object()->name) : ?>
              <div class="stati__rubriki--mobile-item stati__rubriki--mobile-active">
            <?php else : ?>
              <div class="stati__rubriki--mobile-item">
            <?php endif ?>
              <a href=<?php echo get_term_link($value->term_id) ?> class="stati__rubriki-link"><?php echo $value->name; ?></a>
            </div>
          <?php endforeach; ?>
        </div>
          <div class="rotate-arrow rotate-right"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="23" viewBox="0 0 8 23" fill="none">
<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M2.78617 11.4312L7.73081 2.22865C7.90065 1.91256 7.90065 1.54275 7.73081 1.22666C7.27323 0.375048 5.9406 0.375048 5.48301 1.22666L0 11.4312L5.48301 21.6357C5.9406 22.4873 7.27323 22.4873 7.73081 21.6357C7.90065 21.3197 7.90065 20.9498 7.73081 20.6338L2.78617 11.4312Z" fill="#54BCE3"/>
</svg></div>
      </div>
      <div class="stati__items-wrap">
      <?php while( have_posts() ) :?>
        <?php the_post();?>
          <?php if ( $i < 3): ?>
            <div class="stati__item">
              <a href=<?php echo the_permalink( $post->ID) ?>></a>
              <div class="stati__item-image"><?php echo get_the_post_thumbnail( $post->ID, 'full' ) ?></div>
              <div class="stati__item-rubrika"><?php echo get_the_terms($post->ID, 'stati_rubriki')[0]->name ?></div>
              <div class="stati__item-title"><?php echo the_title() ?></div>
              <div class="stati__item-meta">
                <div class="stati__item-date"><?php echo get_the_date('j.m.Y', $post->ID) ?></div>
                <div class="stati__item-author"><svg class="stati__item-author--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 6H7C9.76142 6 12 8.23858 12 11C12 11.5128 11.614 11.9355 11.1166 11.9933L11 12H1C0.447715 12 0 11.5523 0 11C0 8.31124 2.12231 6.11818 4.78311 6.00462L5 6H7H5ZM6 0C7.65685 0 9 1.34315 9 3C9 4.65685 7.65685 6 6 6C4.34315 6 3 4.65685 3 3C3 1.34315 4.34315 0 6 0Z" fill="white"/></svg><span class="stati__item-author--text"><?php echo the_author_meta('user_firstname', $post->post_author) . " " . get_the_author_meta('user_lastname', $post->post_author)  ?></span></div>
                <div class="stati__item-views"><svg class="stati__item-views--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M6 0C8.4474 0 10.4276 1.27405 12 4C10.4276 6.72595 8.4474 8 6 8C3.63699 8 1.7095 6.8123 0.164117 4.27682L0 4C1.57238 1.27405 3.5526 0 6 0ZM6 2C4.89543 2 4 2.89543 4 4C4 5.10457 4.89543 6 6 6C7.10457 6 8 5.10457 8 4C8 2.89543 7.10457 2 6 2Z" fill="white"/></svg><span class="stati__item-views--text"><?php echo getPostViews($post->ID); ?></span></div>
              </div>
              <div class="stati__item-arrow"><img class="stati__item-arrow--icon" src="/wp-content/uploads/2020/08/CHEVRON.svg"></div>
            </div>
        <?php endif; ?>
        <?php if ( $i == 3): ?>
            <div class="stati__item">
              <a href=<?php echo the_permalink( $post->ID) ?>></a>
              <div class="stati__item-image"><?php echo get_the_post_thumbnail( $post->ID, 'full' ) ?></div>
              <div class="stati__item-rubrika"><?php echo get_the_terms($post->ID, 'stati_rubriki')[0]->name ?></div>
              <div class="stati__item-title"><?php echo the_title() ?></div>
              <div class="stati__item-meta">
                <div class="stati__item-date"><?php echo get_the_date('j.m.Y', $post->ID) ?></div>
                <div class="stati__item-author"><svg class="stati__item-author--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 6H7C9.76142 6 12 8.23858 12 11C12 11.5128 11.614 11.9355 11.1166 11.9933L11 12H1C0.447715 12 0 11.5523 0 11C0 8.31124 2.12231 6.11818 4.78311 6.00462L5 6H7H5ZM6 0C7.65685 0 9 1.34315 9 3C9 4.65685 7.65685 6 6 6C4.34315 6 3 4.65685 3 3C3 1.34315 4.34315 0 6 0Z" fill="white"/></svg><span class="stati__item-author--text"><?php echo the_author_meta('user_firstname', $post->post_author) . " " . get_the_author_meta('user_lastname', $post->post_author)  ?></span></div>
                <div class="stati__item-views"><svg class="stati__item-views--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M6 0C8.4474 0 10.4276 1.27405 12 4C10.4276 6.72595 8.4474 8 6 8C3.63699 8 1.7095 6.8123 0.164117 4.27682L0 4C1.57238 1.27405 3.5526 0 6 0ZM6 2C4.89543 2 4 2.89543 4 4C4 5.10457 4.89543 6 6 6C7.10457 6 8 5.10457 8 4C8 2.89543 7.10457 2 6 2Z" fill="white"/></svg><span class="stati__item-views--text"><?php echo getPostViews($post->ID); ?></span></div>
              </div>
              <div class="stati__item-arrow"><img class="stati__item-arrow--icon" src="/wp-content/uploads/2020/08/CHEVRON.svg"></div>
            </div>
        <?php endif; ?>
        <?php if ($i == 2 && $adventagesSetting['adventages_stati_archive_checker'][0] == 'true' ) : ?>
          <div class="advertising-mobile">
            <div class="advertising__wrap">
              <a target="_blank" href="<?php echo $adventagesSetting['adventages_stati_archive_link'][0]?>">
                <?php echo wp_get_attachment_image($adventagesSetting['adventages_stati_archive_mobile'][0], 'full') ?>
              </a>
            </div>
          </div>
        <?php endif ?>
        <?php if ( $i == 7): ?>
          <div class="stati__item stati__item--old-line">
            <a href=<?php echo the_permalink( $post->ID) ?>></a>
            <div class="stati__column">
              <div class="stati__item-image"><?php echo get_the_post_thumbnail( $post->ID, 'full' ) ?></div>
            </div>
            <div class="stati__column">
              <div class="stati__item-rubrika"><?php echo get_the_terms($post->ID, 'stati_rubriki')[0]->name ?></div>
              <div class="stati__item-title"><?php echo the_title() ?></div>
              <div class="stati__item-desc"><?php echo postDesc(160, $post->post_content) ?></div>
              <div class="stati__item-meta">
                <div class="stati__item-date"><?php echo get_the_date('j.m.Y', $post->ID) ?></div>
                <div class="stati__item-author"><svg class="stati__item-author--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 6H7C9.76142 6 12 8.23858 12 11C12 11.5128 11.614 11.9355 11.1166 11.9933L11 12H1C0.447715 12 0 11.5523 0 11C0 8.31124 2.12231 6.11818 4.78311 6.00462L5 6H7H5ZM6 0C7.65685 0 9 1.34315 9 3C9 4.65685 7.65685 6 6 6C4.34315 6 3 4.65685 3 3C3 1.34315 4.34315 0 6 0Z" fill="#8f8f8f"/></svg><span class="stati__item-author--text"><?php echo the_author_meta('user_firstname', $post->post_author) . " " . get_the_author_meta('user_lastname', $post->post_author)  ?></span></div>
                <div class="stati__item-views"><svg class="stati__item-views--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M6 0C8.4474 0 10.4276 1.27405 12 4C10.4276 6.72595 8.4474 8 6 8C3.63699 8 1.7095 6.8123 0.164117 4.27682L0 4C1.57238 1.27405 3.5526 0 6 0ZM6 2C4.89543 2 4 2.89543 4 4C4 5.10457 4.89543 6 6 6C7.10457 6 8 5.10457 8 4C8 2.89543 7.10457 2 6 2Z" fill="#444444"/></svg><span class="stati__item-views--text"><?php echo getPostViews($post->ID); ?></span></div>
              </div>
              <div class="stati__item-arrow"><img class="stati__item-arrow--icon" src="/wp-content/uploads/2020/08/CHEVRON.svg"></div>
            </div>
          </div>
        <?php endif; ?>
        <?php if ( $i >= 4 && $i < 7): ?>
          <div class="stati__item">
            <a href=<?php echo the_permalink( $post->ID) ?>></a>
            <div class="stati__item-image"><?php echo get_the_post_thumbnail( $post->ID, 'full' ) ?></div>
            <div class="stati__item-rubrika"><?php echo get_the_terms($post->ID, 'stati_rubriki')[0]->name ?></div>
            <div class="stati__item-title"><?php echo $post->post_title ?></div>
            <div class="stati__item-meta">
              <div class="stati__item-date"><?php echo get_the_date('j.m.Y', $post->ID) ?></div>
              <div class="stati__item-author"><svg class="stati__item-author--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 6H7C9.76142 6 12 8.23858 12 11C12 11.5128 11.614 11.9355 11.1166 11.9933L11 12H1C0.447715 12 0 11.5523 0 11C0 8.31124 2.12231 6.11818 4.78311 6.00462L5 6H7H5ZM6 0C7.65685 0 9 1.34315 9 3C9 4.65685 7.65685 6 6 6C4.34315 6 3 4.65685 3 3C3 1.34315 4.34315 0 6 0Z" fill="white"/></svg><span class="stati__item-author--text"><?php echo the_author_meta('user_firstname', $post->post_author) . " " . get_the_author_meta('user_lastname', $post->post_author)  ?></span></div>
              <div class="stati__item-views"><svg class="stati__item-views--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M6 0C8.4474 0 10.4276 1.27405 12 4C10.4276 6.72595 8.4474 8 6 8C3.63699 8 1.7095 6.8123 0.164117 4.27682L0 4C1.57238 1.27405 3.5526 0 6 0ZM6 2C4.89543 2 4 2.89543 4 4C4 5.10457 4.89543 6 6 6C7.10457 6 8 5.10457 8 4C8 2.89543 7.10457 2 6 2Z" fill="white"/></svg><span class="stati__item-views--text"><?php echo getPostViews($post->ID); ?></span></div>
            </div>
            <div class="stati__item-arrow"><img class="stati__item-arrow--icon" src="/wp-content/uploads/2020/08/CHEVRON.svg"></div>
          </div>
        <?php endif; ?>
        <?php $i++; ?>
      <?php $counter++; ?>
      <?php endwhile ?>
      <?php if (count($wp_query->posts) > 8): ?>
        <div class="stati__item stati__item--old-wrap">
          <?php while( have_posts()) :?>
            <?php the_post();?>
            <?php if ($old > 8) : ?>
              <div class="stati__item stati__item--old">
                <a href=<?php echo the_permalink( $post->ID) ?>></a>
                <div class="stati__item-rubrika"><?php echo get_the_terms($post->ID, 'stati_rubriki')[0]->name ?></div>
                <div class="stati__item-title"><?php echo the_title() ?></div>
                <div class="stati__item-desc"><?php echo postDesc(160, $post->post_content) ?></div>
                <div class="stati__item-meta">
                  <div class="stati__item-date"><?php echo get_the_date('j.m.Y', $post->ID) ?></div>
                  <div class="stati__item-author"><svg class="stati__item-author--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 6H7C9.76142 6 12 8.23858 12 11C12 11.5128 11.614 11.9355 11.1166 11.9933L11 12H1C0.447715 12 0 11.5523 0 11C0 8.31124 2.12231 6.11818 4.78311 6.00462L5 6H7H5ZM6 0C7.65685 0 9 1.34315 9 3C9 4.65685 7.65685 6 6 6C4.34315 6 3 4.65685 3 3C3 1.34315 4.34315 0 6 0Z" fill="#8f8f8f"/></svg><span class="stati__item-author--text"><?php echo the_author_meta('user_firstname', $post->post_author) . " " . get_the_author_meta('user_lastname', $post->post_author)  ?></span></div>
                  <div class="stati__item-views"><svg class="stati__item-views--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M6 0C8.4474 0 10.4276 1.27405 12 4C10.4276 6.72595 8.4474 8 6 8C3.63699 8 1.7095 6.8123 0.164117 4.27682L0 4C1.57238 1.27405 3.5526 0 6 0ZM6 2C4.89543 2 4 2.89543 4 4C4 5.10457 4.89543 6 6 6C7.10457 6 8 5.10457 8 4C8 2.89543 7.10457 2 6 2Z" fill="#444444"/></svg><span class="stati__item-views--text"><?php echo getPostViews($post->ID); ?></span></div>
                </div>
                <div class="stati__item-arrow"><img class="stati__item-arrow--icon" src="/wp-content/uploads/2020/08/CHEVRON.svg"></div>
              </div>
              <?php $counter++ ?>
            <?php endif ?>
            <?php $old++ ?>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
                <div class="stati__item stati__item--rubriki">
                  <div class="stati__rubriki-title">Рубрики</div>
                  <?php foreach ($terms_razdels as $key => $value): ?>
                    <?php if ($value->name == get_queried_object()->name) : ?>
                      <div class="stati__rubriki-item stati__rubriki-item--active">
                    <?php else : ?>
                      <div class="stati__rubriki-item">
                    <?php endif ?>
                      <a href=<?php echo get_term_link($value->term_id) ?> class="stati__rubriki-link"><?php echo $value->name; ?></a>
                    </div>
                  <?php endforeach; ?>
                  <!--<a href="/novosti/" class="stati__rubriki-all">Все рубрики</a>-->
                </div>
    </div>
    <?php if ($adventagesSetting['adventages_stati_archive_checker'][0] == 'true'): ?>
      <div class="advertising">
        <div class="advertising__wrap">
          <a target="_blank" href="<?php echo $adventagesSetting['adventages_stati_archive_link'][0]?>">
            <?php echo wp_get_attachment_image($adventagesSetting['adventages_stati_archive_desktop'][0], 'full') ?>
          </a>
        </div>
      </div>
    <?php endif; ?>
      <div class="more">
        <?php if (  $wp_query->max_num_pages > 1 && count($wp_query->posts) > ($wp_query->query_vars['posts_per_page'] - 1)) : ?>
      	<script>
      	var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
      	var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
      	var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
      	var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
      	</script>
        <button class="more__btn" id="true_loadmore" type="button" data-len="<?php echo $lenPosts; ?>" data-offset="<?php echo $key; ?>">Показать ещё</button>
      <?php endif; ?>
      </div>

      <?php
        $paginArgs = array(
        	'show_all'     => false, // показаны все страницы участвующие в пагинации
        	'end_size'     => 1,     // количество страниц на концах
        	'mid_size'     => 1,     // количество страниц вокруг текущей
        	'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
        	'prev_text'    => __('<svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" viewBox="0 0 9 14" fill="none">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.58579 7L1 2.41421C0.609476 2.02369 0.609475 1.39052 0.999999 0.999999C1.39052 0.609475 2.02369 0.609475 2.41421 0.999999L8.41421 7L2.41421 13C2.02369 13.3905 1.39052 13.3905 0.999999 13C0.609475 12.6095 0.609475 11.9763 0.999999 11.5858L5.58579 7Z" fill="#54BCE3"/>
</svg>'),
        	'next_text'    => __('<svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" viewBox="0 0 9 14" fill="none">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.58579 7L1 2.41421C0.609476 2.02369 0.609475 1.39052 0.999999 0.999999C1.39052 0.609475 2.02369 0.609475 2.41421 0.999999L8.41421 7L2.41421 13C2.02369 13.3905 1.39052 13.3905 0.999999 13C0.609475 12.6095 0.609475 11.9763 0.999999 11.5858L5.58579 7Z" fill="#54BCE3"/>
</svg>'),
        	'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
        	'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
          'before_page_number' => '',
          'after_page_number' => '',
        );
        the_posts_pagination($paginArgs); // пагинация - echo тут не надо
        wp_reset_query(); // сброс $wp_query
        ?>
    </div>
    <?php do_action('content_after'); ?>
  </div>
    <?php do_action('after_content'); ?>
</div>

<?php
get_footer();
