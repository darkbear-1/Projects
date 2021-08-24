<?php
require_once $_SERVER['DOCUMENT_ROOT']."/wp-load.php";
?>
<div class="zapros-scheta pu-container">
  <div class="zapros-scheta__wrap pu-window">
    <div class="zapros-scheta__title">ЗАПОЛНИТЕ ФОРМУ И МЫ<br> ПРИШЛЕМ ВАМ СЧЁТ В ТЕЧЕНИЕ 30 МИНУТ</div>
    <form enctype="multipart/form-data" class="zapros-scheta__form send-form" action="javascript: console.log('Форма отправлена')" method="post">

<div class="col-grid-2 col-grid-gap-20 pad-b-20">
    <div class="form-row">
        <label for="zapros-scheta__quan">Укажите требуемое количества данного товара</label>
        <input id="zapros-scheta__quan" class="zapros-scheta__quan" type="number" name="quan" value="">
    </div>
    <div class="form-row">
        <label for="zapros-scheta__orgname">Полное название организации</label>
        <input id="zapros-scheta__orgname" class="zapros-scheta__orgname" type="text" name="orgname" value="" placeholder="Например, ООО Альфастрой">
    </div>
</div>

<div class="col-grid-2 col-grid-gap-20 pad-b-20">
    <div class="form-row">
        <label for="zapros-scheta__phone">Контактный телефон для связи</label>
        <input id="zapros-scheta__phone" class="zapros-scheta__phone" type="tel" name="phone" value="" placeholder="Например, +79171231231" required>
    </div>
    <div class="form-row">
        <label>Выставить счет с НДС?</label>
        <div class="zapros-scheta__nds-wrap">
          <label><input type="radio" name="nds" value="С НДС">С НДС</label>
          <label><input type="radio" name="nds" value="Без НДС">Без НДС</label>
        </div>
    </div>
</div>
      <label for="zapros-scheta__email">Email адрес на который выслать счет</label>
      <input id="zapros-scheta__email" class="zapros-scheta__email" type="email" name="email" value="" placeholder="Например, mail@mail.ru" required>
      <label for="">Вставьте реквизиты организации в это поле или прикрепите карту партнера файлом</label>
      <textarea id="zapros-scheta__requisites" class="zapros-scheta__requisites" name="requisites" rows="4" placeholder="Необходимые реквизиты: ИНН, КПП, Полное наименование организации, Расчетный счет"></textarea>
	    <?php wp_nonce_field( 'my_file_upload', 'fileup_nonce' ); ?>
      <input type="file" name="my_file_upload" id="zapros-scheta__requisites-file" class="zapros-scheta__requisites-file">
      <input class="zapros-scheta__submit button" type="submit" name="" value="Заказать счёт">
    </form>
    <button type="button" class="zapros-scheta__close pu-close"></button>
  </div>
  <div class="zapros-scheta__overlay pu-overlay"></div>
</div>
