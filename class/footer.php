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
?>
<?php do_action('before_footer'); ?>
<footer class="site-footer">
	<div class="container">
		<div class="footer__column">
			<a href="/resheniya/" class="footer__column-link footer__column-link--sub">Решения по автоматизации</a>
			<div class="footer__link-list">
				<?php foreach (get_posts('post_type=resheniya&posts_per_page=-1&meta_key=cart_title&orderby=cart_title&order=ASC') as $key => $value): ?>
					<a href="<?php echo the_permalink( $value->ID) ?>" class="footer__link-item"><?php echo get_post_meta($value->ID, 'cart_title')[0] != '' ? strip_tags(get_post_meta($value->ID, 'cart_title')[0]) : $value->post_title ?></a>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="footer__column">
			<a href="/programs/" class="footer__column-link footer__column-link--sub">Программы по автоматизации</a>
			<div class="footer__link-list">
				<?php foreach (get_posts('post_type=vozmoshnosti&posts_per_page=-1&orderby=title&order=ASC') as $key => $value): ?>
					<a href="<?php echo the_permalink( $value->ID) ?>" class="footer__link-item"><?php echo get_post_meta($value->ID, 'titlle_for_footer')[0] != '' ? str_replace('\\', '', get_post_meta($value->ID, 'titlle_for_footer')[0]) : $value->post_title ?></a>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="footer__column">
			<a href="/novosti/" class="footer__column-link">Новости</a>
			<a href="/stati/" class="footer__column-link footer__column-link--sub">Статьи</a>
			<div class="footer__link-list">
				<?php foreach (get_terms('taxonomy=stati_rubriki&posts_per_page=-1') as $key => $value): ?>
					<a href="<?php echo get_term_link($value->term_id, $value->taxonomy); ?>" class="footer__link-item"><?php echo $value->name ?></a>
				<?php endforeach; ?>
			</div>
			<a href="/services/" class="footer__column-link footer__column-link--sub">Бесплатные сервисы</a>
			<div class="footer__link-list">
				<?php foreach (get_posts('post_type=services&posts_per_page=-1&orderby=title&order=ASC') as $key => $value): ?>
					<a href="<?php echo the_permalink( $value->ID) ?>" class="footer__link-item"><?php echo get_post_meta($value->ID, 'custom_title_serv')[0] != '' ? strip_tags(get_post_meta($value->ID, 'custom_title_serv')[0]) : $value->post_title ?></a>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="footer__column">
<!-- 			<a href="/o-nas/" class="footer__link-item">О нас</a> -->
			<a href="/crm/" class="footer__link-item">CRM-система</a>
			<a href="/uchet-tovarov-uslug/" class="footer__link-item">Торговый учет</a>
			<a href="/skladskoi-uchet/" class="footer__link-item">Складской учет</a>
			<a href="/finansovyi-uchet/" class="footer__link-item">Финансовый учет</a>
			<a href="/upravlenie-proektami-i-zadachami/" class="footer__link-item">Проекты и задачи</a>
			<a href="/help/" class="footer__link-item">Справка и поддержка</a>
			<a href="/blanki-dokumentov/" class="footer__link-item">Бланки документов</a>
			<a href="/blog/" class="footer__link-item">Блог</a>
			<a href="/novosti/" class="footer__link-item">Новости</a>
			<a href="/online-kassa-54-fz/" class="footer__link-item">Статьи по онлайн-кассам</a>
			<a href="/podderzhka/" class="footer__link-item">Техническая поддержка</a>
			<a target="_blank" href="https://support.business.ru/" class="footer__link-item">Форум пользователей</a>
			<a href="/dogovor_oferty/" class="footer__link-item">Договор оферты</a>
			<a href="tel:88003336170" class="footer__column-phone">8 (800) 333-61-70<span>Россия</span></a>
			<hr class="footer__column-separator">
			<div class="footer__column-text">Подписывайтесь на нас, будьте в курсе!</div>
			<div class="footer__social-list">
				<a href="https://vk.com/public199514248/" class="footer__social-item"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.1277 0H22.8723C32.6782 0 35 2.32181 35 12.1277V22.8723C35 32.6782 32.6782 35 22.8723 35H12.1277C2.32181 35 0 32.6782 0 22.8723V12.1277C0 2.32181 2.32181 0 12.1277 0ZM28.4352 11.9715C28.6132 11.4235 28.4352 11.0249 27.6473 11.0249H25.0292C24.3684 11.0249 24.0634 11.3737 23.8854 11.7473C23.8854 11.7473 22.5383 14.9359 20.6574 17.0036C20.0474 17.6014 19.7678 17.8007 19.4373 17.8007C19.2594 17.8007 19.0306 17.6014 19.0306 17.0534V11.9466C19.0306 11.2989 18.8273 11 18.2681 11H14.1504C13.7437 11 13.4896 11.2989 13.4896 11.5979C13.4896 12.2206 14.43 12.3701 14.5317 14.1139V17.9004C14.5317 18.7224 14.3792 18.8719 14.0487 18.8719C13.1591 18.8719 10.9986 15.6584 9.7023 11.9964C9.44812 11.274 9.19394 11 8.53308 11H5.88962C5.12709 11 5 11.3488 5 11.7224C5 12.395 5.88962 15.7829 9.14311 20.2669C11.3036 23.331 14.3792 24.9751 17.1497 24.9751C18.8273 24.9751 19.0306 24.6014 19.0306 23.9786V21.6619C19.0306 20.9146 19.1831 20.79 19.7169 20.79C20.0982 20.79 20.7845 20.9893 22.335 22.4591C24.1142 24.2028 24.4192 25 25.4105 25H28.0286C28.7911 25 29.1469 24.6263 28.9436 23.9039C28.7148 23.1815 27.8506 22.1352 26.7322 20.8897C26.1222 20.1922 25.2072 19.4199 24.9276 19.0463C24.5463 18.548 24.648 18.3488 24.9276 17.9004C24.9022 17.9004 28.1048 13.4662 28.4352 11.9715Z" fill="#F3F3F3"/>
</svg></a>
				<a href="https://t.me/busru/" class="footer__social-item"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.8723 0H12.1277C2.32181 0 0 2.32181 0 12.1277V22.8723C0 32.6782 2.32181 35 12.1277 35H22.8723C32.6782 35 35 32.6782 35 22.8723V12.1277C35 2.32181 32.6782 0 22.8723 0ZM14.9472 21.4234L21.5077 26.2704C22.3125 26.7144 22.8933 26.4845 23.0938 25.5232L25.9645 11.9952C26.2584 10.8169 25.5153 10.2824 24.7454 10.632L7.88853 17.1319C6.7379 17.5934 6.74461 18.2354 7.6788 18.5214L11.5638 19.734C11.8435 19.8213 12.1474 19.7815 12.3953 19.6251L22.0195 13.5533C22.4922 13.2666 22.9262 13.4208 22.57 13.7369L14.9093 20.65C14.6746 20.8618 14.6929 21.2355 14.9472 21.4234Z" fill="#F3F3F3"/>
</svg></a>
				<a href="https://www.facebook.com/groups/646503629371121/" class="footer__social-item"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.8723 0H12.1277C2.3218 0 0 2.32181 0 12.1277V22.8723C0 32.6782 2.3218 35 12.1277 35H14.68V21.4655H10V16.1665H14.68V12.2675C14.68 7.749 17.5204 5.285 21.6676 5.285C23.0673 5.2792 24.4663 5.34931 25.858 5.495V10.22H22.9996C20.7424 10.22 20.3032 11.27 20.3032 12.7925V16.1665H25.6888L24.9688 21.4655H20.2888V35H22.8723C32.6782 35 35 32.6782 35 22.8723V12.1277C35 2.32181 32.6782 0 22.8723 0Z" fill="#F3F3F3"/>
</svg></a>
				<a href="https://www.youtube.com/user/class365ru" class="footer__social-item"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.8723 0H12.1277C2.3218 0 0 2.32181 0 12.1277V22.8723C0 32.6782 2.3218 35 12.1277 35H22.8723C32.6782 35 35 32.6782 35 22.8723V12.1277C35 2.32181 32.6782 0 22.8723 0ZM6 17C6 13.2288 6 11.3431 7.17157 10.1716C8.34314 9 10.2288 9 14 9H21C24.7712 9 26.6569 9 27.8284 10.1716C29 11.3431 29 13.2288 29 17V18C29 21.7712 29 23.6569 27.8284 24.8284C26.6569 26 24.7712 26 21 26H14C10.2288 26 8.34314 26 7.17157 24.8284C6 23.6569 6 21.7712 6 18V17ZM15 21.4641L21 18L15 14.5359V21.4641Z" fill="#F3F3F3"/>
</svg></a>
<!--				<a href="" class="footer__social-item"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">-->
<!--<path d="M17.4999 23.4128C14.2394 23.4128 11.5866 20.7604 11.5866 17.5C11.5866 14.2393 14.2392 11.5868 17.4999 11.5868C20.7605 11.5868 23.4131 14.2393 23.4131 17.5C23.4131 20.7604 20.7603 23.4128 17.4999 23.4128Z" fill="white"/>-->
<!--<path fill-rule="evenodd" clip-rule="evenodd" d="M25.3409 0H9.65847C4.33279 0 0 4.333 0 9.65868V25.3411C0 30.667 4.33279 34.9998 9.65847 34.9998H25.3409C30.667 34.9998 34.9998 30.6668 34.9998 25.3411V9.65868C35 4.333 30.667 0 25.3409 0ZM17.4999 8.48161C12.5269 8.48161 8.48129 12.5273 8.48129 17.5002C8.48129 22.4729 12.5269 26.5183 17.4999 26.5183C22.4728 26.5183 26.5184 22.4729 26.5184 17.5002C26.5184 12.5273 22.4728 8.48161 17.4999 8.48161ZM11.5866 17.5C11.5866 20.7604 14.2394 23.4128 17.4999 23.4128C20.7603 23.4128 23.4131 20.7604 23.4131 17.5C23.4131 14.2393 20.7605 11.5868 17.4999 11.5868C14.2392 11.5868 11.5866 14.2393 11.5866 17.5ZM25.2881 6.51518C25.7106 6.09078 26.2984 5.84856 26.8967 5.84856C27.497 5.84856 28.085 6.09078 28.5073 6.51518C28.9317 6.93751 29.1739 7.52545 29.1739 8.12582C29.1739 8.72412 28.9317 9.31206 28.5073 9.73646C28.0829 10.1588 27.497 10.4031 26.8967 10.4031C26.2984 10.4031 25.7104 10.1588 25.2881 9.73646C24.8637 9.31206 24.6194 8.72432 24.6194 8.12582C24.6194 7.52545 24.8635 6.93751 25.2881 6.51518Z" fill="white"/>-->
<!--</svg></a>-->
			</div>
		</div>
		<div class="footer__column">
			<hr class="footer__column-separator">
			<a href="/"><img class="footer__column-img" src="/wp-content/uploads/2020/08/LOGO-1.svg"></a>
			<div class="footer__column-copyright">© Класс 365,  2011–<?php echo date('Y') ?></div>
		</div>
	</div>
<?php do_action('footer_inner'); ?>
<?php

// if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
// 	get_template_part( 'template-parts/footer' );
// }
?>
<?php echo !is_user_logged_in() ? do_action('footer_after') : "" ?>
</footer>
<?php echo !is_user_logged_in() ? do_action('after_footer') : "" ?>
<?php wp_footer(); ?>
</body>
</html>
