<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/wp-load.php";
 ?>
<div class="one-click pu-container get-price container">
  <div class="one-click__wrap pu-window wrapper flex col-wrap">
    <div class="one-click__title">Оставьте заявку и узнайте стоимость выкупа своего авто за 5 минут</div>
    <form enctype="multipart/form-data" class="one-click__form flex col-wrap send-form" action="javascript: console.log('Форма отправлена')" method="post">
      <div class="flex row-wrap mcol-wrap ac-c">
          <div class="inputholder flex grow mmb-0">
          <input class="form-consultation__phone w100 mmb-0" type="tel" name="phone" title="Принимаются только цифры и телефонные символы (#, -, * и т. д.)." placeholder="Номер телефона" id="phone" value="" required>
        </div>
        <input type="checkbox" name="anticheck" class="anticheck" id="anticheck-popup" class="anticheck" style="display: none !important;" value="true" checked="checked">
        <input type="text" name="submitted" class="submitted" id="submitted-popup" value="" style="display: none !important;">
        <div class="inputholder flex grow ml-15 mml-0">
          <label id="" class="w100" for="filo_popup2" onchange="jQuery('#filo-label2').html('Файл выбран');"><span id="filo-label2" >+ Прикрепить фото авто</span>
            <?php wp_nonce_field( 'my_file_upload', 'fileup_nonce' ); ?>
            <input type="file" name="my_file_upload" id="filo_popup2" class="hidden file_popup">
          </label>
        </div>
      <div class="inputholder flex shrink ml-15 mml-0">
          <input class="one-click__submit button" type="submit" name="" value="Позвоните мне!">
      </div>
      </div>
  </form>
    <button type="button" class="one-click__close pu-close"></button>
  </div>
  <div class="one-click__overlay pu-overlay"></div>
</div>
