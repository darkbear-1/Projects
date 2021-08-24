<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyTheme
 */
get_header();
$postMeta = get_post_meta(get_the_ID());
$siteSettings = get_option( 'site_settings', array() );
  ?>
  <div class="main main-stati main-stati--blanki">
    <div class="container">
      <?php if( !is_front_page() ) : ?>
     	  <div class='breadcrumbs'>
       	 	<div class='breadcrumbs__wrap'>
       	 		<?php echo the_breadcrumb();?>
       	 	</div>
        </div>
     <?php endif ?>
     <?php if (!empty($siteSettings['brendirovanie_variants']) && $siteSettings['brendirovanie_variants_checker'] == 'true'): ?>
        <?php $randAdvent = array_rand($siteSettings['brendirovanie_variants'], 1); ?>
        <?php $imageArr = explode(",", $siteSettings['brendirovanie_variants'][$randAdvent]['brendirovanie_image']) ?>
          <div class="krug-brand krug-brand--left"><div class="krug-brand__wrap krug-brand__wrap--left"><a href=<?php echo $siteSettings['brendirovanie_variants'][$randAdvent]['brendirovanie_link'] ?>><img src="<?php echo wp_get_attachment_url($imageArr[0]) ?>"></a></div></div>
          <div class="krug-brand krug-brand--right"><div class="krug-brand__wrap krug-brand__wrap--right"><a href=<?php echo $siteSettings['brendirovanie_variants'][$randAdvent]['brendirovanie_link'] ?>><img src="<?php echo wp_get_attachment_url($imageArr[1]) ?>"></a></div></div>
    <?php endif; ?>
    </div>
    <div class="stati--page blanki--page">
      <div class="container">
       <div class="stati__content">
         <h1 class="blanki-title">Бланки документов</h1>
          <div class="blanki-social">
            <div class="blanki-social__column">
              <p>Для новостей малого бизнеса мы запустили специальный канал в <a href="https://t.me/busru/?roistat_visit=4959352" target="_blank">Telegram</a><br> и группы во <a href="https://vk.com/public199514248/?roistat_visit=4959352" target="_blank">Вконтакте</a> и <a href="https://www.facebook.com/groups/646503629371121/?roistat_visit=4959352" target="_blank">Фейсбуке</a>. Присоединяйтесь! Даже <a href="https://twitter.com/Class365" target="_blank">Твиттер</a> есть.</p>
            </div>
            <div class="blanki-social__column">
              <div class="thank-you__social-list">
    						<a target="_blank" href="https://vk.com/public199514248/" class="thank-you__social-item"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
    		<path fill-rule="evenodd" clip-rule="evenodd" d="M12.1277 0H22.8723C32.6782 0 35 2.32181 35 12.1277V22.8723C35 32.6782 32.6782 35 22.8723 35H12.1277C2.32181 35 0 32.6782 0 22.8723V12.1277C0 2.32181 2.32181 0 12.1277 0ZM28.4352 11.9715C28.6132 11.4235 28.4352 11.0249 27.6473 11.0249H25.0292C24.3684 11.0249 24.0634 11.3737 23.8854 11.7473C23.8854 11.7473 22.5383 14.9359 20.6574 17.0036C20.0474 17.6014 19.7678 17.8007 19.4373 17.8007C19.2594 17.8007 19.0306 17.6014 19.0306 17.0534V11.9466C19.0306 11.2989 18.8273 11 18.2681 11H14.1504C13.7437 11 13.4896 11.2989 13.4896 11.5979C13.4896 12.2206 14.43 12.3701 14.5317 14.1139V17.9004C14.5317 18.7224 14.3792 18.8719 14.0487 18.8719C13.1591 18.8719 10.9986 15.6584 9.7023 11.9964C9.44812 11.274 9.19394 11 8.53308 11H5.88962C5.12709 11 5 11.3488 5 11.7224C5 12.395 5.88962 15.7829 9.14311 20.2669C11.3036 23.331 14.3792 24.9751 17.1497 24.9751C18.8273 24.9751 19.0306 24.6014 19.0306 23.9786V21.6619C19.0306 20.9146 19.1831 20.79 19.7169 20.79C20.0982 20.79 20.7845 20.9893 22.335 22.4591C24.1142 24.2028 24.4192 25 25.4105 25H28.0286C28.7911 25 29.1469 24.6263 28.9436 23.9039C28.7148 23.1815 27.8506 22.1352 26.7322 20.8897C26.1222 20.1922 25.2072 19.4199 24.9276 19.0463C24.5463 18.548 24.648 18.3488 24.9276 17.9004C24.9022 17.9004 28.1048 13.4662 28.4352 11.9715Z" fill="#54BCE3"/>
    		</svg></a>
    						<a target="_blank" href="https://t.me/busru/" class="thank-you__social-item"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
    		<path fill-rule="evenodd" clip-rule="evenodd" d="M22.8723 0H12.1277C2.32181 0 0 2.32181 0 12.1277V22.8723C0 32.6782 2.32181 35 12.1277 35H22.8723C32.6782 35 35 32.6782 35 22.8723V12.1277C35 2.32181 32.6782 0 22.8723 0ZM14.9472 21.4234L21.5077 26.2704C22.3125 26.7144 22.8933 26.4845 23.0938 25.5232L25.9645 11.9952C26.2584 10.8169 25.5153 10.2824 24.7454 10.632L7.88853 17.1319C6.7379 17.5934 6.74461 18.2354 7.6788 18.5214L11.5638 19.734C11.8435 19.8213 12.1474 19.7815 12.3953 19.6251L22.0195 13.5533C22.4922 13.2666 22.9262 13.4208 22.57 13.7369L14.9093 20.65C14.6746 20.8618 14.6929 21.2355 14.9472 21.4234Z" fill="#54BCE3"/>
    		</svg></a>
    						<a target="_blank" href="https://www.facebook.com/groups/646503629371121/" class="thank-you__social-item"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
    		<path fill-rule="evenodd" clip-rule="evenodd" d="M22.8723 0H12.1277C2.3218 0 0 2.32181 0 12.1277V22.8723C0 32.6782 2.3218 35 12.1277 35H14.68V21.4655H10V16.1665H14.68V12.2675C14.68 7.749 17.5204 5.285 21.6676 5.285C23.0673 5.2792 24.4663 5.34931 25.858 5.495V10.22H22.9996C20.7424 10.22 20.3032 11.27 20.3032 12.7925V16.1665H25.6888L24.9688 21.4655H20.2888V35H22.8723C32.6782 35 35 32.6782 35 22.8723V12.1277C35 2.32181 32.6782 0 22.8723 0Z" fill="#54BCE3"/>
    		</svg></a>
    						<a target="_blank" href="https://www.youtube.com/user/class365ru" class="thank-you__social-item"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
    		<path fill-rule="evenodd" clip-rule="evenodd" d="M22.8723 0H12.1277C2.3218 0 0 2.32181 0 12.1277V22.8723C0 32.6782 2.3218 35 12.1277 35H22.8723C32.6782 35 35 32.6782 35 22.8723V12.1277C35 2.32181 32.6782 0 22.8723 0ZM6 17C6 13.2288 6 11.3431 7.17157 10.1716C8.34314 9 10.2288 9 14 9H21C24.7712 9 26.6569 9 27.8284 10.1716C29 11.3431 29 13.2288 29 17V18C29 21.7712 29 23.6569 27.8284 24.8284C26.6569 26 24.7712 26 21 26H14C10.2288 26 8.34314 26 7.17157 24.8284C6 23.6569 6 21.7712 6 18V17ZM15 21.4641L21 18L15 14.5359V21.4641Z" fill="#54BCE3"/>
    		</svg></a>
    						<a target="_blank" href="https://twitter.com/Class365" class="thank-you__social-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.31616 0H15.6838C22.4079 0 24 1.5921 24 8.31616V15.6838C24 22.4079 22.4079 24 15.6838 24H8.31616C1.59209 24 0 22.4079 0 15.6838V8.31616C0 1.5921 1.59209 0 8.31616 0ZM12.3159 9.67918L12.2834 9.11689C12.1858 7.65954 13.042 6.32841 14.3968 5.81203C14.8954 5.62842 15.7408 5.60547 16.2935 5.76613C16.5103 5.83498 16.9222 6.06448 17.2148 6.27104L17.7459 6.64972L18.3311 6.45464C18.6563 6.35136 19.0898 6.17923 19.2849 6.06448C19.4692 5.9612 19.6317 5.90383 19.6317 5.93825C19.6317 6.13333 19.2307 6.7989 18.8947 7.1661C18.4395 7.68249 18.5696 7.72839 19.4908 7.38413C20.0436 7.18905 20.0544 7.18905 19.9461 7.40708C19.881 7.52184 19.545 7.92347 19.1874 8.29068C18.5804 8.92182 18.5479 8.99067 18.5479 9.51853C18.5479 10.3333 18.1794 12.0316 17.8109 12.9611C17.1281 14.7053 15.6649 16.5069 14.2017 17.4135C12.1425 18.6872 9.40036 19.0085 7.0918 18.2627C6.32228 18.0102 5 17.3676 5 17.2528C5 17.2184 5.40102 17.1725 5.88874 17.161C6.90755 17.1381 7.92635 16.8397 8.79342 16.3119L9.37868 15.9447L8.70671 15.7037C7.75293 15.3594 6.89671 14.5676 6.67994 13.8217C6.61491 13.5808 6.63659 13.5693 7.24353 13.5693L7.87216 13.5578L7.34108 13.2939C6.71246 12.9611 6.13802 12.3988 5.85623 11.8251C5.6503 11.4119 5.39018 10.3677 5.46605 10.2874C5.48772 10.2529 5.71533 10.3218 5.97545 10.4136C6.72329 10.7005 6.82084 10.6316 6.38731 10.1497C5.57443 9.27755 5.32515 7.98085 5.71533 6.753L5.89958 6.20218L6.61491 6.94807C8.07808 8.45133 9.80138 9.3464 11.774 9.61033L12.3159 9.67918Z" fill="#54BCE3"/>
            </svg></a>
    					</div>
            </div>
          </div>
          <div class="stati__description">
            <div class="stati__description-text">
              <p>Печатные формы документов по учёту сотрудников, товаров, материалов и услуг. Бланки документов для инвентаризации,<br> движению денежных средств по кассе и банковским счетам, а также бланки сопроводительных документов, актов, договоров,<br> приказов.</p>

            </div>
            <div class="blanki__razdels">
              <div class="blanki__razdel-title">Учёт товаров, услуг, материалов</div>
              <div class="blanki__razdels-container">
                <?php get_template_part( 'template-parts/loop-blanki', 'blanki', array('taxIds' => array(6336, 6304, 7512, 7514, 7513)) ) ?>
              </div>
              <?php echo do_shortcode('[wbcr_php_snippet id="9253"]') ?>
              <hr class="stati__separate stati__separate--blanki">
              <div class="blanki__razdel-title">Официальные письма, коммерческие предложения, доверенности</div>
              <div class="blanki__razdels-container">
                <?php get_template_part( 'template-parts/loop-blanki', 'blanki', array('taxIds' => array(7515, 7516, 6337)) ) ?>
              </div>
              <hr class="stati__separate stati__separate--blanki">
              <div class="blanki__razdel-title">Договоры</div>
              <div class="blanki__razdels-container">
                <?php get_template_part( 'template-parts/loop-blanki', 'blanki', array('taxIds' => array(7517)) ) ?>
              </div>
              <hr class="stati__separate stati__separate--blanki">
              <div class="blanki__razdel-title">Финансы</div>
              <div class="blanki__razdels-container">
                <?php get_template_part( 'template-parts/loop-blanki', 'blanki', array('taxIds' => array(7518, 7540, 7539, 7553)) ) ?>
              </div>
              <hr class="stati__separate stati__separate--blanki">
              <div class="blanki__razdel-title">Отчётность</div>
              <div class="blanki__razdels-container">
                <?php get_template_part( 'template-parts/loop-blanki', 'blanki', array('taxIds' => array(7554, 7572, 7573, 7574)) ) ?>
              </div>
              <hr class="stati__separate stati__separate--blanki">
              <div class="blanki__razdel-title">Сотрудники</div>
              <div class="blanki__razdels-container">
                <?php get_template_part( 'template-parts/loop-blanki', 'blanki', array('taxIds' => array(7575, 7676, 7635, 7703)) ) ?>
              </div>
              <hr class="stati__separate stati__separate--blanki">
              <div class="blanki__razdel-title">Регистрация ООО и ИП</div>
              <div class="blanki__razdels-container">
                <?php get_template_part( 'template-parts/loop-blanki', 'blanki', array('taxIds' => array(7704)) ) ?>
              </div>
            </div>
            <hr class="stati__separate stati__separate--blanki">
            <div class="blanki__razdel-banner">
              <?php echo do_shortcode('[wbcr_php_snippet id="10592"]') ?>
            </div>
          </div>
        </div>
      </div>
       </div>
      </div>
<a href="#" class="mlp-btn"><div class="mlp-icon__wrap"><img data-src="/wp-content/uploads/2020/11/Vector.svg" class="mlp-icon lazyloaded" src="/wp-content/uploads/2020/11/Vector.svg"><noscript><img class="mlp-icon" src="/wp-content/uploads/2020/11/Vector.svg" /></noscript></div>
Подойдет ли мне сервис?</a>
<?php
get_footer();
?>
