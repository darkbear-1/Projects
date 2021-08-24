<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/wp-load.php";
?>
<div class="modal leave-pu">
  <div class="modal__container">
    <div class="modal__title">Не спешите уходить!</div>
    <div class="leave-pu__wrap">
      <div class="modal__subtitle">Хотите получить самые выгодные условия займа? Оставьте свой номер телефона и мы вам перезвоним!</div>
      <form action="javascript: console.log('Форма отправлена')" class="modal__form send-form" method="post">
        <input type="tel" name="phone" class="main-screen__form-phone" value="" placeholder="Номер телефона">
        <input type="submit" name="button" class="modal__form-send" value="Отправить">
      </form>
      <div class="consultation__policy">* — отправляя данные через форму, вы даете согласие на обработку персональных данных согласно действующей <a href="/privacy-policy/" class="consultation__policy-link">Политике конфиденциальности</a></div>
    </div>
    <button class="modal__close"></button>
  </div>
  <div class="modal__overlay"></div>
</div>
