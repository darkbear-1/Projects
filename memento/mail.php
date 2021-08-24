<?php
require_once("../../../wp-load.php");


	// Проверяем на спам. Если скрытое поле заполнено или снят чек, то блокируем отправку
		// if ( false === $_POST['anticheck'] || ! empty( $_POST['submitted'] ) ) {
		// 	wp_die( 'Nope' );
		// }

		if ($_FILES) {
			if ( ! function_exists( 'wp_handle_upload' ) ) require_once( ABSPATH . 'wp-admin/includes/file.php' );
			$uploadedfile = $_FILES['file'];
			$upload_overrides = array( 'test_form' => false );
			$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
		}
      ob_start();
      ?>


		<?php if (!empty($_POST['phone'])): ?>
				<span class="<?php echo $key ?>"> Номер телефона: <?php echo $_POST['phone'] ?></span><br>
		<?php endif ?>
		<?php if (!empty($_POST['calc__variant'])): ?>
				<span class="<?php echo $key ?>"> Размер: <?php echo $_POST['calc__variant'] ?></span><br>
    <?php endif ?>
		<?php if (!empty($_POST['calc__cvet'])): ?>
				<span class="<?php echo $key ?>"> Размер цветников: <?php echo $_POST['calc__cvet'] ?></span><br>
    <?php endif ?>
		<?php if (!empty($_POST['portret'])): ?>
				<span class="<?php echo $key ?>"> Портрет: <?php echo $_POST['portret'] ?></span><br>
    <?php endif ?>
		<?php if (!empty($_POST['symbol'])): ?>
				<span class="<?php echo $key ?>"> Символ веры: <?php echo $_POST['symbol'] ?></span><br>
    <?php endif ?>
		<?php if (!empty($_POST['fio-date'])): ?>
				<span class="<?php echo $key ?>"> ФИО+даты жизни: <?php echo $_POST['fio-date'] ?></span><br>
    <?php endif ?>
		<?php if (!empty($_POST['price-input'])): ?>
				<span class="<?php echo $key ?>"> Общая стоимость: <?php echo $_POST['price-input'] ?></span><br>
    <?php endif ?>
		<?php if (isset($movefile['url'])): ?>
				<span> Ссылка на файл: <?php echo $movefile['url'] ?></span><br>
		<?php endif; ?>

      <br>
      <span class="delim">---</span><br>
      <br>
      <span class="date">Дата: <?php echo date("d.m.Y") ?></span><br>
      <span class="time">Время: <?php echo current_time("H:i") ?></span><br>
      <span class="link">Ссылка на страницу: <?php echo $_SERVER["HTTP_REFERER"] ?></span>
      <?php
      $content .= ob_get_contents();
			$headers = array('From: Memento <email@'.$_SERVER['HTTP_HOST'].'>',
			                 'Content-type: text/html; charset=utf-8');
      ob_end_clean(); //упаковка вывода в переменную и очистка вывода
      echo $content;
      wp_mail( array("Конфидицеальность"), 'Сообщение с сайта', $content, $headers );


			$contentTg .= ob_get_contents();


      $pattern = '/\n[\s]+/i';
      $replacement = "\n";
      $bot_txt = preg_replace($pattern, $replacement, strip_tags($content));
      $bot_txt = trim($bot_txt);

      $botToken="1984004540:AAGw-j9_WPTxGVIjLyWyvwsYKf2ZlPlKijE";

      $website="https://api.telegram.org/bot".$botToken;
      $chatId=-573600652;
      $params=[
          'chat_id'=>$chatId,
          'text'=> $bot_txt,
      ];
      $ch = curl_init($website . '/sendMessage');
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close($ch);
?>
