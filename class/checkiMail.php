<?php
require_once("../../../wp-load.php");
// Проверяем на спам. Если скрытое поле заполнено или снят чек, то блокируем отправку
if ( false === $_POST['anticheck'] || ! empty( $_POST['submitted'] ) ) {
  wp_die( 'Nope' );
}
// следующий шаг - проверка на обязательные поля, у нас это емайл, имя и сообщение
if( isset( $_POST['phone']  ) ) {
// header('HTTP/1.1 301 Moved Permanently');
// header('Location: /thank-you');
print_r($_POST);
  ob_start();
  ?>
<div>Название сделки: <span lang="request_name"><?php echo $_POST['phone'] ?> (заявка с сайта)</span><br></div>
<div>Дата и время: <span lang="request_date"><?php echo $_POST['form_fields']['time'] ?></span><br></div>
<div>Тип заявки: <span lang="addfield_225511">225512</span><br></div>
<div>Телефон: <span lang="customer_phone"><?php echo $_POST['phone'] ?></span><br></div>
<div>UTM: <span lang="addfield_229206"><?php echo $_POST['form_fields']['utms'] ?></span><br></div>
<div>Roistat ID: <span lang="addfield_226110"><?php echo $_POST['form_fields']['roi_id'] ?></span><br></div>
<div>URL входа: <span lang="addfield_4344696"><?php echo $_POST['entry_url'] ?></span><br></div>
<div>URL заявки: <span lang="addfield_4344697"><?php echo $_SERVER["HTTP_REFERER"] ?></span><br></div>
<div>Название формы: <span lang="addfield_4344699"><?php echo $_POST['form_fields']['target'] ?></span></div>
<br>
<span class="delim">---</span><br>
<br>
<span class="date">Дата: <?php echo date("d.m.Y") ?></span><br>
<span class="time">Время: <?php echo current_time("H:i") ?></span><br>
<span class="link">Ссылка на страницу: <?php echo $_SERVER["HTTP_REFERER"] ?></span>
  
  <?php
  $content .= ob_get_contents();

  ob_end_clean(); //упаковка вывода в переменную и очистка вывода
  echo $content;
$headers = array('From: class365 <roznica@mail.business.ru>',
                 'Content-type: text/html; charset=utf-8');

  if ($_POST['form-name'] == 'questions') {
    wp_mail( array('Конфидицеальность'), 'Сообщение с сайта', $content, $headers );
  }
}
?>
