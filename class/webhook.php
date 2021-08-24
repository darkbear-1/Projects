<?php
require_once("../../../wp-load.php");
$myCurl = curl_init();
curl_setopt_array($myCurl, array(
	CURLOPT_URL => 'Конфидицеальность',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_POST => true,
	CURLOPT_POSTFIELDS => http_build_query($_POST)
));
$response = curl_exec($myCurl);

if (!curl_errno($myCurl)) {
  $http_code = curl_getinfo($myCurl, CURLINFO_HTTP_CODE);
  if ($http_code != 200) {
      $error = 'Ошибка: '. $http_code. "\n";
  } else {
	  $error = 200;
  }
}
curl_close($myCurl);
if ($error != 200) {
	$pattern = '/\n[\s]+/i';
	$replacement = "\n";
	$bot_txt = preg_replace($pattern, $replacement, strip_tags($contentTg));
	$bot_txt = trim($bot_txt);

	$botToken="Конфидицеальность";

	$website="https://api.telegram.org/bot".$botToken;
	$chatId=-595241611;
	$params=[
	  'chat_id'=>$chatId,
	  'text'=> "Дата: " . date('d.m.Y') . "\nВремя: " . current_time("H:i") . "\nСсылка на страницу: " . $_SERVER["HTTP_REFERER"] . "\n" .$error,
	];
	$ch = curl_init($website . '/sendMessage');
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	curl_close($ch);
}



?>
