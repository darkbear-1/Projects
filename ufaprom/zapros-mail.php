<?php
require_once $_SERVER['DOCUMENT_ROOT']."/wp-load.php";


// Проверяем на спам. Если скрытое поле заполнено или снят чек, то блокируем отправку
	if ( false === $_POST['anticheck'] || ! empty( $_POST['submitted'] ) ) {
		wp_die( 'Nope' );
	}

	if ($_FILES) {
		if ( ! function_exists( 'wp_handle_upload' ) ) require_once( ABSPATH . 'wp-admin/includes/file.php' );
		$uploadedfile = $_FILES['file'];
		$upload_overrides = array( 'test_form' => false );
		$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
	}

      ob_start();
      ?>
      <?php if (!empty($_POST['quan'])): ?>
			  <span> Укажите требуемое количества данного товара: <?php echo $_POST['quan'] ?></span><br>
      <?php endif; ?>
      <?php if (!empty($_POST['orgname'])): ?>
			  <span> Полное название организации: <?php echo $_POST['orgname'] ?></span><br>
      <?php endif; ?>
      <?php if (!empty($_POST['phone'])): ?>
			  <span> Контактный телефон для связи: <?php echo $_POST['phone'] ?></span><br>
      <?php endif; ?>
      <?php if (!empty($_POST['nds'])): ?>
			  <span> Выставить счет с НДС?: <?php echo $_POST['nds'] ?></span><br>
      <?php endif; ?>
      <?php if (!empty($_POST['requisites'])): ?>
			  <span> Вставьте реквизиты организации в это поле или прикрепите карту партнера файлом: <?php echo $_POST['requisites'] ?></span><br>
      <?php endif; ?>
      <?php if (isset($movefile['url'])): ?>
			  <span> Ссылка на файл: <?php echo $movefile['url'] ?></span><br>
      <?php endif; ?>
      <?php if (!empty($_POST['email'])): ?>
			  <span> Email адрес на который выслать счет: <?php echo $_POST['email'] ?></span><br>
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
			$headers = array('From: Ufaprom <email@ufaprom.ru>',
                 'Content-type: text/html; charset=utf-8');
      wp_mail( array("Конфидицеальность"), 'Сообщение с сайта', $content, $headers );

			ob_start();
      ?>
			<?php if (!empty($_POST['quan'])): ?>
			  <span> Укажите требуемое количества данного товара: <?php echo $_POST['quan'] ?></span><br>
      <?php endif; ?>
      <?php if (!empty($_POST['orgname'])): ?>
			  <span> Полное название организации: <?php echo $_POST['orgname'] ?></span><br>
      <?php endif; ?>
      <?php if (!empty($_POST['phone'])): ?>
			  <span> Контактный телефон для связи: <?php echo $_POST['phone'] ?></span><br>
      <?php endif; ?>
      <?php if (!empty($_POST['nds'])): ?>
			  <span> Выставить счет с НДС?: <?php echo $_POST['nds'] ?></span><br>
      <?php endif; ?>
      <?php if (!empty($_POST['requisites'])): ?>
			  <span> Вставьте реквизиты организации в это поле или прикрепите карту партнера файлом: <?php echo $_POST['requisites'] ?></span><br>
      <?php endif; ?>
      <?php if (isset($movefile['url'])): ?>
			  <span> Ссылка на файл: <?php echo $movefile['url'] ?></span><br>
      <?php endif; ?>
      <?php if (!empty($_POST['email'])): ?>
			  <span> Email адрес на который выслать счет: <?php echo $_POST['email'] ?></span><br>
      <?php endif; ?>
      <br>
      <span class="delim">---</span><br>
      <br>
      <span class="link">Ссылка на страницу: <?php echo explode('?', $_SERVER["HTTP_REFERER"], 2)[0] ?></span>
      <?php
      $contentTg .= ob_get_contents();

      ob_end_clean(); //упаковка вывода в переменную и очистка вывода

      $pattern = '/\n[\s]+/i';
      $replacement = "\n";
      $bot_txt = preg_replace($pattern, $replacement, strip_tags($contentTg));
      $bot_txt = trim($bot_txt);

      $botToken="Конфидицеальность";

      $website="https://api.telegram.org/bot".$botToken;
      $chatId=Конфидицеальность;
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
      
      
      $params_flamix = array(
      "DOMAIN" => "stroyoborudovanie.bitrix24.ru",
      "api_token" => "d2b4180715b7d1cf9fdd897fbf9cf52c31bc93899aa4f3274f864b986ea40d21",
      "FIELDS" => array(
        "your-name" => $_POST['orgname'],
        "your-phone-example" => $_POST['phone'],
        "your-email" => $_POST['email'],
      "UTM" => array(
        "utm_source" => $_POST['utm_source']." ufaprom.ru"
      )
      )
    );
    
      $ch_flamix = curl_init('https://leadwoocommerce.app.flamix.solutions/api/v1/lead/add');
      curl_setopt($ch_flamix, CURLOPT_HEADER, false);
      curl_setopt($ch_flamix, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch_flamix, CURLOPT_POST, 1);
      curl_setopt($ch_flamix, CURLOPT_POSTFIELDS, http_build_query($params_flamix));
      curl_setopt($ch_flamix, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch_flamix);
      curl_close($ch_flamix);
?>
