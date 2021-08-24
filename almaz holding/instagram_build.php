<?php
$token = 'IGQVJWeWxHbDdxVlliaFdQaUR6LWRGa3NMcDNES19kb0l6XzI2Ql9wVC1qRWM1YWE1eHg1RTlWN08ydWs2bGR1emVydjl4X2tHa2YwSFVPNDRTa0hKTVVmWHA5NmJ0OGs2ay1NUGVpM040ZAU5jWE5OWAZDZD';
$inst = file_get_contents('https://graph.instagram.com/me/media?fields=id,caption,permalink&limit=3&access_token='.$token);
$decInst = json_decode($inst);
function postDesc($symbol_amount, $desc) {
	$text = strip_tags($desc);
    $text = @mb_substr($text, 0, $symbol_amount);
    $text = trim($text, "!,.- ");
    echo $text."...";
}
?>

<?php ob_start(); ?>
<div class="instagram__list">
  <?php foreach ($decInst->data as $key => $value): ?>
    <?php $imgObj = json_decode(file_get_contents('https://graph.instagram.com/'. $value->id .'?fields=id,media_type,media_url,username,timestamp&access_token='.$token)); ?>
    <div class="instagram__item">
      <a href="<?php echo $value->permalink ?>" target="_blank" class="instagram__item-link">
        <span class="instagram__caption-overlay"><?php echo postDesc( 50, mb_convert_encoding($value->caption, "windows-1251", "utf-8")) ?></span>
        <img src="<?php echo $imgObj->media_url; ?>">
      </a>
    </div>
  <?php endforeach; ?>
</div>
<?php
  $content .= ob_get_contents();
  ob_end_clean(); //упаковка вывода в переменную и очистка вывода
  echo $content;
  file_put_contents('almazholding-ufa.ru/public_html/wp-content/themes/rgtheme/instagram.php',  iconv("Windows-1251", "UTF-8", $content));
?>
