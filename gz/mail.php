<?php
require_once("../../../wp-load.php");


// Проверяем на спам. Если скрытое поле заполнено или снят чек, то блокируем отправку
	if ( false === $_POST['anticheck'] || ! empty( $_POST['submitted'] ) ) {
		wp_die( 'Nope' );
	}

	if ($_FILES) {
    $newAdress = array();
    foreach ($_FILES as $key => $value) {
      if ( ! function_exists( 'wp_handle_upload' ) ) require_once( ABSPATH . 'wp-admin/includes/file.php' );
  		$uploadedfile = $value;
  		$upload_overrides = array( 'test_form' => false );
  		$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
      array_push($newAdress, $movefile);
    }
	}

      ob_start();
      // header('HTTP/1.1 301 Moved Permanently');
      // header('Location: /thank-you');
      ?>
      <?php foreach ($_POST as $key => $value): ?>
				<?php if (isset($value) && $key == 'name'): ?>
						<span class="<?php echo $key ?>"> Имя: <?php echo $_POST['name'] ?></span><br>
        <?php elseif (isset($value) && $key == 'phone'): ?>
            <span class="<?php echo $key ?>">Телефон: <?php echo $_POST['phone'] ?></span><br>
				<?php elseif (isset($newAdress)): ?>
	        <span> Ссылка на файлы:
		        <?php foreach ($newAdress as $key => $value): ?>
		          <?php echo $value['url'].',' ?>
		        <?php endforeach; ?>
	        </span><br>
        <?php elseif (isset($value) && $key == 'question'): ?>
            <span class="<?php echo $key ?>">Ваш вопрос: <?php echo $_POST['question'] ?></span><br>
        <?php elseif (isset($value) && $key == 'summ_zaim'): ?>
            <span class="<?php echo $key ?>">Сумма займа: <?php echo $_POST['summ_zaim'] ?></span><br>
        <?php elseif (isset($value) && $key == 'srok_zaima'): ?>
            <span class="<?php echo $key ?>">На срок: <?php echo $_POST['srok_zaima'] ?></span><br>
        <?php elseif (isset($value) && $key == 'ejemes_zaim'): ?>
            <span class="<?php echo $key ?>">Ежемесячный платеж: <?php echo $_POST['ejemes_zaim'] ?></span><br>
        <?php endif ?>
      <?php endforeach; ?>
      <br>
      <span class="delim">---</span><br>
      <br>
      <span class="date">Дата: <?php echo date("d.m.Y") ?></span><br>
      <span class="time">Время: <?php echo current_time("H:i") ?></span><br>
      <span class="link">Ссылка на страницу: <?php echo $_SERVER["HTTP_REFERER"] ?></span>
      <?php
      $content .= ob_get_contents();
			$headers = array('From: ГОСЗАЙМ.РФ <email@'.$_SERVER['HTTP_HOST'].'>',
			                 'Content-type: text/html; charset=utf-8');
      ob_end_clean(); //упаковка вывода в переменную и очистка вывода
      echo $content;
      wp_mail( array("Конфидицеальность", "ltr123456mail@gmail.com"), 'Сообщение с сайта', $content, $headers );
      ?>
?>
