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

  ob_start();
  ?>
    <div>Дата обращения: <span lang="request_date"><?php echo $_POST['form_fields']['time'] ?></span><br></div>
    <div>Телефон: <span lang="customer_phone"><?php echo $_POST['phone'] ?></span><br></div>
    <div>Цель обращения: <span lang="request_name"><?php echo $_POST['phone'] . "(". $_POST['form_fields']['target'] .")" ?></span><br></div>
    <div>Точка входа: <span lang="addfield_3019918"><?php echo $_POST['entry_url'] ?></span><br></div>
    <div>UTM: <span lang="addfield_949882"><?php echo $_POST['form_fields']['utms'] ?></span><br></div>
    <div>Roistat ID: <span lang="addfield_3019924"><?php echo $_POST['form_fields']['roi_id'] ?></span><br></div>
    <div>Яндекс.Метрика: <span lang="addfield_5895241"><?php echo $_POST['form_fields']['yandex_metr'] ?></span><br></div>
    <div>Гугл.Метрика: <span lang="addfield_5895242"><?php echo $_POST['form_fields']['google_metr'] ?></span><br></div>
<?php if ($_POST['form_fields']['bpn'] != "") : ?>
    <div>Изображение: <span><?php echo $_POST['form_fields']['bpn'] ?></span><br></div>
<?php endif; ?>
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
$headers = array('From: class365 <email2@online.business.ru>',
                 'Content-type: text/html; charset=utf-8');

  if ($_POST['form-name'] == 'questions') {
    wp_mail( array('Конфидицеальность'), 'Сообщение с сайта', $content, $headers );
  }
}
?>
