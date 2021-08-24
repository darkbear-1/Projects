<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyTheme
 */
// Elementor `footer` location

global $wp_query;
$args = array(
		'posts_per_page' =>  -1,
		'orderby' => 'date',
		'order' => 'DESC',
		'offset' => 0,
		'post_parent' => 0,
		'post_type'   => 'nashi-uslugi'

);
$wp_query = new WP_Query($args);
?>


<?php wp_footer(); ?>
<footer>
  <section class="instagram">
    <div class="container">
      <div class="uslugi__zag-wrap h2-wrap">
        <h2 class="uslugi__zag h2-title">Подписывайтесь на Instagram</h2>
        <a href="https://www.instagram.com/avtoplus.ufa/" class="uslugi__all h2-link">Перейти в профиль</a>
      </div>
      <div class="instagram__list-wrap">

      </div>
    </div>
  </section>
  <section class="map">
    <div id="map"></div>
    <div class="map__wrap">
      <div class="map__title">Выберите ближайший<br>к вам сервис</div>
      <div class="map__select-wrap">
        <div class="map__icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="22" viewBox="0 0 15 22" fill="none"><path d="M14.5 7.5625C14.5 8.83652 14.0622 10.3521 13.3699 11.9387C12.6811 13.5172 11.7585 15.1256 10.8292 16.5737C9.90083 18.0204 8.97155 19.2983 8.274 20.2148C7.96242 20.6241 7.69747 20.9609 7.5 21.2078C7.30253 20.9609 7.03758 20.6241 6.726 20.2148C6.02845 19.2983 5.09917 18.0204 4.17081 16.5737C3.24151 15.1256 2.31893 13.5172 1.63014 11.9387C0.937829 10.3521 0.5 8.83652 0.5 7.5625C0.5 3.65807 3.63791 0.5 7.5 0.5C11.3621 0.5 14.5 3.65807 14.5 7.5625Z" stroke="#DF1F1A"></path><circle cx="7.5" cy="8.5" r="1.5" fill="#DF1F1A"></circle></svg>
        </div>
        <select class="map__place-select">
          <option place-index="0" value="г. Уфа, Цветочная, 38 А">г. Уфа, Цветочная, 38 А</option>
          <option place-index="1" value="г. Уфа, проспект Октября 71 к.1.">г. Уфа, проспект Октября 71 к.1.</option>
        </select>
        <div class="map__select-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none"><path d="M1 1L7.5 8L14 1" stroke="#000"/></svg></div>
      </div>
      <a href="tel:83472589178" class="map__phone">8 (347) 258-91-78</a>
      <div class="map__worktime">9:00-21:00 без выходных</div>
      <div class="map__social-title">Напишите нам!</div>
      <div class="map__social-list">
        <div class="map__social-item"><a href="https://api.whatsapp.com/send?phone=79272363106" target="_blank" class="map__social-link"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none"><g clip-path="url(#clip0)"><path d="M0 22L1.26811 15.7635C0.524884 14.2595 0.141747 12.6029 0.149559 10.9252C0.149559 4.90343 5.05299 0 11.0748 0C17.0967 0 22 4.90343 22 10.9252C22 16.947 17.0967 21.8504 11.0748 21.8504C9.39876 21.8552 7.74447 21.47 6.24298 20.7254L0 22ZM6.39254 19.633L6.55505 19.7174C7.95195 20.4396 9.50241 20.8144 11.0748 20.81C16.5244 20.81 20.9596 16.3749 20.9596 10.9252C20.9596 5.47556 16.5244 1.04043 11.0748 1.04043C5.62512 1.04043 1.18999 5.47556 1.18999 10.9252C1.18561 12.4978 1.56036 14.048 2.28263 15.4449L2.36722 15.6074L1.33307 20.6669L6.39254 19.633Z" fill="#DF1F1A"/><path d="M14.1572 17.1682H13.6759C8.79862 17.1682 4.83179 13.2014 4.83179 8.32403V7.84278C4.83103 7.01497 5.1612 6.22126 5.74876 5.63826L6.17801 5.20902C6.84769 4.53915 8.01825 4.53915 8.68812 5.20902L10.0343 6.54857C10.3685 6.88065 10.5558 7.33256 10.5545 7.80372C10.5529 8.27431 10.366 8.72527 10.0343 9.05887L9.91069 9.18233C9.65596 9.43782 9.51326 9.78399 9.51402 10.1448C9.51536 10.5051 9.65787 10.8507 9.91069 11.1073L10.8862 12.0828C11.3935 12.59 12.3038 12.59 12.8177 12.0828L12.9411 11.9592C13.611 11.2893 14.7815 11.2893 15.4514 11.9592L16.7974 13.3119C17.4906 14.0052 17.4906 15.1289 16.7974 15.822L16.3684 16.2512C15.7837 16.8405 14.9873 17.1707 14.1572 17.1682ZM7.43297 5.72267C7.23806 5.72247 7.05078 5.79964 6.91285 5.93738L6.4836 6.36662C6.09189 6.75529 5.87184 7.28436 5.87222 7.8363V8.32403C5.87584 12.6323 9.3677 16.1241 13.6759 16.1278H14.1572C14.7091 16.1281 15.2382 15.9081 15.6269 15.5164L16.0561 15.0871C16.1944 14.9494 16.272 14.7621 16.272 14.567C16.272 14.3717 16.1944 14.1846 16.0561 14.0467L14.7166 12.7005C14.4253 12.4231 13.9674 12.4231 13.6759 12.7005L13.5525 12.8241C12.613 13.7626 11.0908 13.7626 10.1513 12.8241L9.17585 11.8487C8.72622 11.3956 8.47359 10.7833 8.47359 10.1448C8.47264 9.50812 8.72527 8.89731 9.17585 8.44749L9.2995 8.32403C9.43648 8.18552 9.51364 7.99862 9.51402 7.80372C9.5144 7.60863 9.43724 7.42154 9.2995 7.28341L7.95328 5.93738C7.81515 5.79964 7.62806 5.72247 7.43297 5.72267Z" fill="#DF1F1A"/></g><defs><clipPath id="clip0"><rect width="22" height="22" fill="white"/></clipPath></defs></svg></a></div>
        <div class="map__social-item"><a href="https://www.instagram.com/avtoplus.ufa/" target="_blank" class="map__social-link"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none"><rect x="1.38049" y="1.452" width="20.7657" height="20.7657" rx="3.5" stroke="#DF1F1A"/><path d="M16.4183 11.8348C16.4183 14.4057 14.3342 16.4899 11.7633 16.4899C9.1924 16.4899 7.10828 14.4057 7.10828 11.8348C7.10828 9.26393 9.1924 7.17981 11.7633 7.17981C14.3342 7.17981 16.4183 9.26393 16.4183 11.8348Z" stroke="#DF1F1A"/><circle cx="18.0639" cy="5.53425" r="1.14556" fill="#DF1F1A"/></svg></a></div>
      </div>
      <button class="map__btn btn-style btn-hover">Записаться на ремонт</button>
    </div>
  </section>
  <section class="footer">
    <div class="container">
      <div class="footer__wrap">
        <div class="footer__wrap-col">
          <div class="footer__adress-list">
            <div class="footer__adress-item"><div class="footer__adress-icon"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="22" viewBox="0 0 15 22" fill="none"><path d="M14.5 7.5625C14.5 8.83652 14.0622 10.3521 13.3699 11.9387C12.6811 13.5172 11.7585 15.1256 10.8292 16.5737C9.90083 18.0204 8.97155 19.2983 8.274 20.2148C7.96242 20.6241 7.69747 20.9609 7.5 21.2078C7.30253 20.9609 7.03758 20.6241 6.726 20.2148C6.02845 19.2983 5.09917 18.0204 4.17081 16.5737C3.24151 15.1256 2.31893 13.5172 1.63014 11.9387C0.937829 10.3521 0.5 8.83652 0.5 7.5625C0.5 3.65807 3.63791 0.5 7.5 0.5C11.3621 0.5 14.5 3.65807 14.5 7.5625Z" stroke="#DF1F1A"></path><circle cx="7.5" cy="8.5" r="1.5" fill="#DF1F1A"></circle></svg></div>г. Уфа, Цветочная, 38А</div>
            <div class="footer__adress-item"><div class="footer__adress-icon"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="22" viewBox="0 0 15 22" fill="none"><path d="M14.5 7.5625C14.5 8.83652 14.0622 10.3521 13.3699 11.9387C12.6811 13.5172 11.7585 15.1256 10.8292 16.5737C9.90083 18.0204 8.97155 19.2983 8.274 20.2148C7.96242 20.6241 7.69747 20.9609 7.5 21.2078C7.30253 20.9609 7.03758 20.6241 6.726 20.2148C6.02845 19.2983 5.09917 18.0204 4.17081 16.5737C3.24151 15.1256 2.31893 13.5172 1.63014 11.9387C0.937829 10.3521 0.5 8.83652 0.5 7.5625C0.5 3.65807 3.63791 0.5 7.5 0.5C11.3621 0.5 14.5 3.65807 14.5 7.5625Z" stroke="#DF1F1A"></path><circle cx="7.5" cy="8.5" r="1.5" fill="#DF1F1A"></circle></svg></div>г. Уфа, проспект Октября 71 к.1.</div>
          </div>
        </div>
        <div class="footer__wrap-col">
          <a href="tel:83472589178" class="footer__phone">8 (347) 258-91-78</a>
          <div class="footer__worktime">9:00-21:00 без выходных</div>
        </div>
        <div class="footer__wrap-col">
          <div class="footer__social-list">
            <div class="footer__social-item"><a href="https://api.whatsapp.com/send?phone=79272363106" target="_blank" class="footer__social-link"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none"><g clip-path="url(#clip0)"><path d="M0 22L1.26811 15.7635C0.524884 14.2595 0.141747 12.6029 0.149559 10.9252C0.149559 4.90343 5.05299 0 11.0748 0C17.0967 0 22 4.90343 22 10.9252C22 16.947 17.0967 21.8504 11.0748 21.8504C9.39876 21.8552 7.74447 21.47 6.24298 20.7254L0 22ZM6.39254 19.633L6.55505 19.7174C7.95195 20.4396 9.50241 20.8144 11.0748 20.81C16.5244 20.81 20.9596 16.3749 20.9596 10.9252C20.9596 5.47556 16.5244 1.04043 11.0748 1.04043C5.62512 1.04043 1.18999 5.47556 1.18999 10.9252C1.18561 12.4978 1.56036 14.048 2.28263 15.4449L2.36722 15.6074L1.33307 20.6669L6.39254 19.633Z" fill="#fff"/><path d="M14.1572 17.1682H13.6759C8.79862 17.1682 4.83179 13.2014 4.83179 8.32403V7.84278C4.83103 7.01497 5.1612 6.22126 5.74876 5.63826L6.17801 5.20902C6.84769 4.53915 8.01825 4.53915 8.68812 5.20902L10.0343 6.54857C10.3685 6.88065 10.5558 7.33256 10.5545 7.80372C10.5529 8.27431 10.366 8.72527 10.0343 9.05887L9.91069 9.18233C9.65596 9.43782 9.51326 9.78399 9.51402 10.1448C9.51536 10.5051 9.65787 10.8507 9.91069 11.1073L10.8862 12.0828C11.3935 12.59 12.3038 12.59 12.8177 12.0828L12.9411 11.9592C13.611 11.2893 14.7815 11.2893 15.4514 11.9592L16.7974 13.3119C17.4906 14.0052 17.4906 15.1289 16.7974 15.822L16.3684 16.2512C15.7837 16.8405 14.9873 17.1707 14.1572 17.1682ZM7.43297 5.72267C7.23806 5.72247 7.05078 5.79964 6.91285 5.93738L6.4836 6.36662C6.09189 6.75529 5.87184 7.28436 5.87222 7.8363V8.32403C5.87584 12.6323 9.3677 16.1241 13.6759 16.1278H14.1572C14.7091 16.1281 15.2382 15.9081 15.6269 15.5164L16.0561 15.0871C16.1944 14.9494 16.272 14.7621 16.272 14.567C16.272 14.3717 16.1944 14.1846 16.0561 14.0467L14.7166 12.7005C14.4253 12.4231 13.9674 12.4231 13.6759 12.7005L13.5525 12.8241C12.613 13.7626 11.0908 13.7626 10.1513 12.8241L9.17585 11.8487C8.72622 11.3956 8.47359 10.7833 8.47359 10.1448C8.47264 9.50812 8.72527 8.89731 9.17585 8.44749L9.2995 8.32403C9.43648 8.18552 9.51364 7.99862 9.51402 7.80372C9.5144 7.60863 9.43724 7.42154 9.2995 7.28341L7.95328 5.93738C7.81515 5.79964 7.62806 5.72247 7.43297 5.72267Z" fill="#fff"/></g><defs><clipPath id="clip0"><rect width="22" height="22" fill="white"/></clipPath></defs></svg></a></div>
            <div class="footer__social-item"><a href="https://www.instagram.com/avtoplus.ufa/" target="_blank" class="footer__social-link"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none"><rect x="1.38049" y="1.452" width="20.7657" height="20.7657" rx="3.5" stroke="#fff"/><path d="M16.4183 11.8348C16.4183 14.4057 14.3342 16.4899 11.7633 16.4899C9.1924 16.4899 7.10828 14.4057 7.10828 11.8348C7.10828 9.26393 9.1924 7.17981 11.7633 7.17981C14.3342 7.17981 16.4183 9.26393 16.4183 11.8348Z" stroke="#fff"/><circle cx="18.0639" cy="5.53425" r="1.14556" fill="#fff"/></svg></a></div>
          </div>
            <div class="footer__social-title">Напишите нам!</div>
        </div>

      </div>
      <div class="footer__menu">
        <div class="footer__menu-wrap">
						<?php while( have_posts() ): ?>
							<?php the_post() ?>
							<?php global $post; ?>
							<div class="footer__menu-col">
	              <div class="footer__cat-title"><?php echo the_title() ?></div>
	              <?php
	                $posts = get_posts([
	                  'posts_per_page' => -1,
	                  'post_type' => 'nashi-uslugi',
	                  'post_parent' => $post->ID,
	                ]);
	              ?>
	              <?php foreach ($posts as $key2 => $value2): ?>
	                <div class="footer__menu-item"><a href="<?php echo get_permalink($value2->ID) ?>" class="footer__menu-link"><?php echo $value2->post_title ?></a></div>
	              <?php endforeach; ?>
	            </div>
						<?php endwhile ?>
        </div>
        <div class="footer__menu-another">
          <div class="footer__menu-col">
            <div class="footer__cat-title">Воспользуйтесь</div>
            <?php
              wp_nav_menu( [
              'theme_location'  => '',
              'menu'            => "Меню Воспользуйтесь",
              'container'       => 'div',
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => (check_mobile_device()) ? 'footer__menu--another footer__menu--another--mobile' : 'footer__menu--another',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '<span class="top-menu__arrow"></span>',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '',
              ] );
            ?>
          </div>
          <div class="footer__menu-col">
            <div class="footer__cat-title">Ознакомьтесь</div>
            <?php
              wp_nav_menu( [
              'theme_location'  => '',
              'menu'            => "Меню Ознакомьтесь",
              'container'       => 'div',
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => (check_mobile_device()) ? 'footer__menu--another footer__menu--another--mobile' : 'footer__menu--another',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '<span class="top-menu__arrow"></span>',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '',
              ] );
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
      
</footer>
</body>
</html>
