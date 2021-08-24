<?php 
    $pattern = '/\n[\s]+/i';
    $replacement = "\n";
    $bot_txt = preg_replace($pattern, $replacement, strip_tags($contentTg));
    $bot_txt = trim($bot_txt);
    
    $botToken="Конфидицеальность";
    
    $website="https://api.telegram.org/bot".$botToken;
    $chatId=521537196;
    $params=[
      'chat_id'=>$chatId,
      'text'=> "test",
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