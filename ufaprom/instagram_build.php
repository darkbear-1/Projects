<?php
$token = 'Конфидицеальность';
$inst = file_get_contents('https://graph.instagram.com/me/media?fields=id,caption,permalink,thumbnail_url&limit=4&access_token='.$token);
$decInst = json_decode($inst);
function postDesc($symbol_amount, $desc) {
	$text = strip_tags($desc);
    $text = @mb_substr($text, 0, $symbol_amount);
    $text = trim($text, "!,.- ");
    echo $text."...";
}
?>

<?php ob_start(); ?>
<?php if (!empty($decInst->data)): ?>
	<div class="instagram__list">
	  <?php foreach ($decInst->data as $key => $value): ?>
			<?php $postObj = json_decode(file_get_contents('https://graph.instagram.com/'. $value->id .'?fields=id,media_type,media_url,username,timestamp&access_token='.$token)); ?>
				<?php if ($postObj->media_type != 'VIDEO'): ?>
					<?php $imgObj = json_decode(file_get_contents('https://graph.instagram.com/'. $value->id .'?fields=id,media_type,media_url,username,timestamp&access_token='.$token))->media_url; ?>
				<?php else: ?>
					<?php $imgObj = $value->thumbnail_url; ?>
				<?php endif; ?>
		<div class="instagram__item">
		  <a href="<?php echo $value->permalink ?>" target="_blank" class="instagram__item-link">
			<!-- <span class="instagram__caption-overlay"><?php echo postDesc( 50, mb_convert_encoding($value->caption, "windows-1251", "utf-8")) ?></span> -->
			<img src="<?php echo $imgObj; ?>">
		  </a>
		</div>
	  <?php endforeach; ?>
	</div>
<?php else: ?>
	<div><?php echo mb_convert_encoding("Не верный токен инстаграмма", "windows-1251", "utf-8") ?></div>
<?php endif; ?>

<?php
  $content .= ob_get_contents();
  ob_end_clean(); //упаковка вывода в переменную и очистка вывода
  echo $content;
  file_put_contents('instagram.php',  iconv("Windows-1251", "UTF-8", $content));
?>
