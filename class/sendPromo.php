<?php
require_once("../../../wp-load.php");
 global $wpdb;
  // Ругаемся, если соединение установить не удалось
  if( ! empty($wpdb->error) ) {
    echo 'Не могу соединиться с БД';
    wp_die( $wpdb->error );
  } 
// Проверяем на спам. Если скрытое поле заполнено или снят чек, то блокируем отправку
// if ( false === $_POST['anticheck'] || ! empty( $_POST['submitted'] ) ) {
//   wp_die( 'Nope' );
// }
// следующий шаг - проверка на обязательные поля, у нас это емайл, имя и сообщение
//if( isset( $_POST['phone']  ) ) {
// header('HTTP/1.1 301 Moved Permanently');
// header('Location: /thank-you');
  $sql = $wpdb->get_results( "SELECT * FROM `promocodes` WHERE `id` = (SELECT MAX(id) FROM `promocodes`)" );
  ob_start();
  ?>
<div>Промокод: <span><?php echo $sql[0]->text ?></span><br></div>
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

  
    if (wp_mail( array('Конфидицеальность'), 'Сообщение с сайта', $content, $headers )) {
      $wpdb->query("DELETE FROM `promocodes` WHERE id IN(".$sql[0]->id.")");
    }
//}
?>
