<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/wp-load.php";
?>
<div class="modal zayav-pu">
  <div class="modal__container">
    <div class="modal__title">Регистрация</div>
    <div class="modal__subtitle">После регистрации вы получите доступ к своему Аккаунту. <br>
Также при необходимости мы можем назначить Вам специалиста<br>по автоматизации, который покажет и расскажет как все работает.</div>
    <form action="javascript: console.log('Форма отправлена')" class="modal__form reg-form" method="post" name="Регистрация">
      <input type="tel" name="phone" class="main-screen__form-phone ym-record-keys" value="" pattern="[0-9()#&+*-=.]+" placeholder="+7(___)___-__-__" required><input type="hidden" name="form_fields[time]" value="<?php echo do_shortcode('[siteTime]') ?>">
			<input type="hidden" name="form_fields[target]" value="Регистрация">
			<input type="hidden" name="form_fields[enter_dot]">
			<input type="hidden" name="form_fields[utms]">
			<input type="hidden" name="form_fields[roi_id]">
			<input type="hidden" name="form_fields[yandex_metr]">
			<input type="hidden" name="form_fields[google_metr]">
			<input type="hidden" name="form_fields[another_phone]">
			<input type="hidden" name="form_fields[bitrix_id]">
			<input type="hidden" name="form_fields[publication_code]" value="581">
			<input type="checkbox" name="anticheck" id="anticheck" class="anticheck" style="display: none !important;" value="true" checked="checked">
			<input type="text" name="form-name" style="display: none !important;" value="questions">
			<input type="text" name="submitted" id="submitted" value="" style="display: none !important;">
      <input type="submit" name="button" class="modal__form-send" value="Зарегистрироваться">
    </form>
    <div class="modal__policy">Введенный номер телефона будет привязан к вашему аккаунту в Класс365 и будет использоваться для восстановления пароля. Регистрируясь, я <a href="/policy/" target="_blank" class="policy__link">даю согласие на<br> обработку персональных данных и согласие на получение рекламных рассылок.</a></div>
    <button class="modal__close"></button>
  </div>
  <div class="modal__overlay"></div>
</div>
