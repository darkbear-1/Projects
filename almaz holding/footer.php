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
<?php do_action('footer_inner'); ?>
	<div class="container">
		<div class="footer__column">
			<p class="footer__adress">Центральный офис-салон: <br>г. Уфа, Проспект Октября, 6</p>
			<p class="footer__phone">Единая справочная:<br><a href="tel:83472238388" class="footer__phone-link">+7 (347)223-83-88</a></p>
			<p class="footer__cons">Оnline- консультант:<br><a href="tel:89371688168" class="footer__phone-link">+7 937 168 8 168</a></p>
			<ul class="footer__info-list">
				<li class="footer__info-item"><a class="footer__uslugi anchor" href="#map">Наши услуги</a></li>
				<li class="footer__info-item"><a href="/garantiya-kachestva/">Сервис и гарантия</a></li>
				<li class="footer__info-item"><a href="">Условия оплаты и доставки</a></li>
			</ul>
			<a href="/privacy-policy/" class="footer__policy-link">Политика конфиденциальности</a>
		</div>
		<div class="footer__column">
			<form action="#" class="footer__form">
				<div class="footer__form-title">Есть вопросы?<br>Заполните форму и мы ответим по телефону</div>
				<input class="footer__form-name" type="text" name="name" placeholder="Ваше имя">
				<input class="footer__form-phone" type="tel" name="phone" placeholder="Номер телефона">
				<textarea class="footer__form-question" name="textarea" rows="2" cols="80" placeholder="Ваш вопрос..."></textarea>
				<label for="soglasie">
					<input id="soglasie" type="checkbox" name="soglasie">
					<span>Даю согласие на обработку персональных данных согласно действующей<br><a href="/privacy-policy/">Политике конфиденциальности</a></span>
				</label>
				<input class="footer__form-submit" type="submit" name="submit" placeholder="Отправить">
			</form>
			<div class="footer__wrap">
				<div class="footer__cards">
					<img src="/wp-content/uploads/images/kartioplati.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
<?php do_action('footer_after'); ?>
<button class="to-top"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="16" viewBox="0 0 26 16" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.0002 5.82828L3.82858 14.9998C3.04753 15.7809 1.7812 15.7809 1.00015 14.9998C0.219102 14.2188 0.219102 12.9525 1.00015 12.1714L13.0001 0.17142L25.0002 12.1714C25.7812 12.9525 25.7812 14.2188 25.0002 14.9998C24.2191 15.7809 22.9528 15.7809 22.1717 14.9998L13.0002 5.82828Z" fill="#fff"/></svg></button>
</footer>
<?php do_action('after_footer'); ?>
<?php wp_footer(); ?>

</body>
</html>
