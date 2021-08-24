<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/wp-load.php";
?>
<div class="modal zayav-pu">
  <div class="modal__container">
    <div class="modal__title">Оставьте заявку на займ</div>
    <div class="modal__subtitle">Одобрение в день обращения!</div>
    <form action="javascript: console.log('Форма отправлена')" class="modal__form send-form" method="post">
      <input type="tel" name="phone" class="main-screen__form-phone" value="" placeholder="Номер телефона">
      <input type="submit" name="button" class="modal__form-send" value="Отправить">
    </form>
    <button class="modal__close"></button>
  </div>
  <div class="modal__overlay"></div>
</div>
