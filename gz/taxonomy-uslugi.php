<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyTheme
 */
$termObj = get_queried_object();
$termMeta = get_term_meta($termObj->term_id);
get_header();

$args = array(
      'posts_per_page' => -1,
      'orderby' => 'name',
      'order' => 'DESC',
      'post_type'   => 'agenty',
      'meta_query' => [
    		'relation' => 'OR',
    		[
    			'key' => 'aktsiia-mesiatsa',
    			'value' => 'true'
    		]
    	]
  );

$wp_query = new WP_Query($args);


 ?>

<div class="archive-all_wrap tax-uslugi">
    <section class="main-screen" style="url(<?php echo wp_get_attachment_image_url($termMeta['izobrazhenie'][0], 'full') ?>">
      <div class="main-screen__overlay"></div>
      <div class="container">
        <div class="main-screen__col">
          <div class="breadcrumbs"><?php echo the_breadcrumb() ?></div>
          <h1 class="main-screen__title"><?php echo $termObj->name ?></h1>
          <div class="utp__list">
            <?php foreach (unserialize($termMeta['utp-na-glavnom-ekrane'][0]) as $key => $value): ?>
              <div class="utp__item"><?php echo $value['tekst'] ?></div>
            <?php endforeach; ?>
          </div>
          <a href="/worksdone/" class="main-screen__otzyvy-link">Примеры работ</a>
        </div>
        <div class="main-screen__col">
          <div class="main-screen__form-title">Перезвоним и ответим <br>на все вопросы</div>
          <form class="main-screen__form send-form" action="javascript: console.log('Форма отправлена')" method="post">
            <input type="tel" name="phone" value="" placeholder="Номер телефона" required>
            <input type="submit" class="main-screen__form-submit btn-style btn-hover" value="Отправить">
            <div class="main-screen__form-policy">* — Отправляя данные через эту форму <br>вы даете согласие на обработку персональных<br> данных, согласно действующей <a href="/privacy-policy/" target="_blank">Политике<br> конфиденциальности</a></div>
          </form>
        </div>
      </div>
    </section>
    <section class="akciya">
      <div class="container">
        <?php while( have_posts() ): ?>
          <?php the_post() ?>
          <?php global $post; ?>
          <?php $postMeta = get_post_meta($post->ID); ?>
          <div class="akciya__wrap">
            <div class="akciya__col">
              <div class="akciya__suptitle">Акция месяца</div>
              <div class="akciya__title"><?php echo the_title() ?></div>
              <div class="akciya__srok"><?php echo $postMeta['agenty_period'][0] ?></div>
              <div class="akciya__text"><?php echo the_content() ?></div>
              <a href="/" class="akciya__link">Смотреть все акции</a>
            </div>
            <div class="akciya__col">
              <img src="<?php echo wp_get_attachment_image_url($postMeta['preview'][0], 'full') ?>" alt="">
            </div>
          </div>
        <?php endwhile ?>
      </div>
    </section>
    <section class="price-list">
      <div class="container">
        <h2 class="price-list__title h2-title">Услуги по техобслуживанию автомобилей</h2>
        <div class="price-list__list">
        
        </div>
      </div>
    </section>
    <section class="comfort">
      <h2 class="comfort__title h2-title">Комфортное ожидание</h2>
      <div class="container">
        <div class="comfort__tabs-wrap">
          <div class="comfort__column">
            <div class="comfort__tabs-buttons tabs-buttons">
                <div class="comfort__tabs-item tabs-item">
          <button type="button" class="comfort__tabs-btn tabs-btn tabs-btn--active"><span class="comfort__tabs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none"><g clip-path="url(#clip0)"><path d="M26.5048 41.5232V31.0991C26.5048 29.9909 25.6032 29.0894 24.495 29.0894C23.3869 29.0894 22.4853 29.9909 22.4853 31.0991V41.5232C22.4853 42.6314 23.3869 43.533 24.495 43.533C25.6032 43.533 26.5048 42.6314 26.5048 41.5232ZM23.9208 41.5232V31.0991C23.9208 30.7824 24.1783 30.5249 24.495 30.5249C24.8117 30.5249 25.0692 30.7824 25.0692 31.0991V41.5232C25.0692 41.8399 24.8117 42.0974 24.495 42.0974C24.1783 42.0974 23.9208 41.8398 23.9208 41.5232Z" fill="#237BBA"/><path d="M36.636 33.0659C37.7442 33.0659 38.6458 32.1644 38.6458 31.0562C38.6458 29.9479 37.7442 29.0464 36.636 29.0464H31.6406C30.5325 29.0464 29.6308 29.9479 29.6308 31.0562V41.4802C29.6308 42.5885 30.5325 43.49 31.6406 43.49C32.7487 43.49 33.6504 42.5885 33.6504 41.4802V37.5587H36.636C37.7442 37.5587 38.6458 36.6572 38.6458 35.5489C38.6458 34.4407 37.7442 33.5392 36.636 33.5392H33.6504V33.0659H36.636ZM32.9325 34.9747H36.6359C36.9526 34.9747 37.2101 35.2323 37.2101 35.5489C37.2101 35.8656 36.9526 36.1232 36.6359 36.1232H32.9325C32.536 36.1232 32.2147 36.4445 32.2147 36.8409V41.4802C32.2147 41.7969 31.9572 42.0545 31.6405 42.0545C31.3238 42.0545 31.0663 41.7969 31.0663 41.4802V31.0562C31.0663 30.7395 31.3238 30.4819 31.6405 30.4819H36.6359C36.9526 30.4819 37.2101 30.7395 37.2101 31.0562C37.2101 31.3728 36.9526 31.6304 36.6359 31.6304H32.9325C32.536 31.6304 32.2147 31.9517 32.2147 32.3481V34.2569C32.2147 34.6534 32.5361 34.9747 32.9325 34.9747Z" fill="#237BBA"/><path d="M44.7095 41.4803V31.0562C44.7095 29.9479 43.8078 29.0464 42.6997 29.0464C41.5915 29.0464 40.6899 29.9479 40.6899 31.0562V41.4802C40.6899 42.5885 41.5915 43.49 42.6997 43.49C43.8078 43.49 44.7095 42.5885 44.7095 41.4803ZM42.1255 41.4803V31.0562C42.1255 30.7395 42.383 30.4819 42.6997 30.4819C43.0164 30.4819 43.2739 30.7395 43.2739 31.0562V41.4802C43.2739 41.7969 43.0164 42.0545 42.6997 42.0545C42.383 42.0545 42.1255 41.7969 42.1255 41.4803Z" fill="#237BBA"/><path d="M8.48953 43.3206C9.261 43.4538 10.0484 43.1275 10.4959 42.4657L12.2603 39.8562L14.0247 42.4658C14.4664 43.1188 15.2533 43.4545 16.0309 43.3207C16.8079 43.1869 17.4376 42.6071 17.6353 41.8438L20.2614 31.6998C20.539 30.627 19.8923 29.5282 18.8194 29.2505C18.8193 29.2505 18.8193 29.2505 18.8193 29.2505C17.7464 28.9726 16.6479 29.6198 16.3701 30.6924L14.8602 36.525L13.9253 35.1423C13.1286 33.9641 11.3916 33.9647 10.5955 35.1423L9.66056 36.525L8.15065 30.6924C8.01619 30.1728 7.68725 29.7366 7.22462 29.4642C6.762 29.1919 6.22127 29.116 5.70132 29.2505C4.62849 29.5282 3.98163 30.627 4.25936 31.6998L6.88536 41.8439C7.08308 42.6071 7.7129 43.1868 8.48953 43.3206ZM6.06097 30.6402C6.10911 30.6277 6.15734 30.6218 6.20481 30.6218C6.46024 30.6218 6.69386 30.7938 6.76085 31.0523L8.66936 38.4247C8.74008 38.6978 8.96432 38.9042 9.24233 38.9521C9.52035 38.9999 9.80076 38.8805 9.95877 38.6468L11.7845 35.9465C12.0121 35.6099 12.5085 35.6101 12.7359 35.9465L14.5616 38.6468C14.7195 38.8805 14.9996 38.9999 15.278 38.9521C15.5561 38.9042 15.7803 38.6978 15.851 38.4247L17.7595 31.0524C17.8389 30.7458 18.1529 30.5609 18.4594 30.6403C18.7659 30.7196 18.9507 31.0336 18.8714 31.3401L16.2453 41.484C16.1888 41.7021 16.0089 41.8678 15.7871 41.906C15.5652 41.9441 15.3399 41.8483 15.2137 41.6617L12.8548 38.1728C12.5707 37.7525 11.9501 37.752 11.6656 38.1728L9.30655 41.6618C9.18137 41.8469 8.9558 41.9445 8.73348 41.906C8.51154 41.8678 8.33153 41.702 8.27506 41.484L5.64897 31.3401C5.56963 31.0335 5.75453 30.7196 6.06097 30.6402Z" fill="#237BBA"/><path d="M22.1564 21.0604C23.5063 19.8698 25.4044 19.861 26.7656 21.0388C27.5995 21.7604 28.7673 21.7806 29.6056 21.0885C30.7641 20.1317 30.7964 18.2628 29.6698 17.2742C28.1894 15.9751 26.3318 15.2634 24.4341 15.2735C22.5382 15.2824 20.6856 16.0104 19.2172 17.3233C18.1015 18.3209 18.1479 20.1898 19.317 21.1368H19.3169C20.1656 21.8244 21.3332 21.7863 22.1564 21.0604ZM20.174 18.3934C21.3669 17.3268 22.8432 16.7089 24.4709 16.7089C26.0268 16.7089 27.4967 17.2772 28.723 18.3532C29.1868 18.7603 29.1667 19.5891 28.6915 19.9815C28.3949 20.2265 28.0077 20.2153 27.7049 19.9532C26.7898 19.1615 25.6427 18.7262 24.4721 18.7262C23.2876 18.7262 22.1268 19.1725 21.2069 19.9838C20.9065 20.2486 20.5194 20.2634 20.2206 20.0214H20.2205C19.7408 19.6325 19.7147 18.8041 20.174 18.3934Z" fill="#237BBA"/><path d="M31.6451 16.612C32.4614 17.5391 33.7794 17.6581 34.7119 16.8881C35.7767 16.0088 35.902 14.3291 34.9787 13.2772C32.1984 10.1097 28.4744 8.36816 24.4855 8.36816C20.4508 8.36816 16.6919 10.1463 13.91 13.3761C12.997 14.4361 13.1371 16.1147 14.2104 16.9844C14.2105 16.9844 14.2116 16.9853 14.2116 16.9853C15.1507 17.7459 16.4673 17.6137 17.2745 16.6795C19.1269 14.5358 21.6676 13.2564 24.4876 13.2564C27.1983 13.2565 29.7388 14.447 31.6451 16.612ZM16.1883 15.7409C15.891 16.0848 15.4527 16.1391 15.1141 15.869C14.6727 15.5114 14.6095 14.7636 14.9976 14.313C17.6012 11.2903 21.0198 9.80371 24.4851 9.80371C28.0545 9.80371 31.3965 11.3722 33.8998 14.2241C34.2913 14.6702 34.2372 15.4182 33.7967 15.7821C33.4661 16.0551 33.0245 16.0062 32.7224 15.6633C30.5393 13.184 27.617 11.8209 24.4878 11.8209C21.2705 11.8209 18.3364 13.2551 16.1883 15.7409Z" fill="#237BBA"/><path d="M9.13668 12.7289C9.13917 12.731 9.14175 12.7331 9.14424 12.7352C10.0976 13.5227 11.4678 13.3816 12.2566 12.4013C15.3053 8.61283 19.7056 6.34131 24.4732 6.35079C27.5983 6.36543 30.6315 7.37022 33.2447 9.25652C33.5659 9.4886 34.0148 9.41616 34.2468 9.09469C34.4789 8.77332 34.4063 8.32466 34.085 8.09258C31.2276 6.02999 27.9062 4.93132 24.4793 4.91524C19.2381 4.90558 14.4415 7.39634 11.1383 11.5012C10.8463 11.864 10.3931 11.9011 10.0629 11.6319C10.0609 11.6302 10.059 11.6286 10.057 11.627C9.63013 11.2744 9.56342 10.5551 9.92346 10.1078C13.4794 5.69091 18.6967 2.88184 24.4893 2.89801C30.0362 2.92404 35.3206 5.60172 38.9873 10.2444C39.3444 10.6965 39.269 11.4146 38.8381 11.7635C38.4928 12.0432 38.0393 11.9807 37.7596 11.6262C37.4233 11.2003 37.0661 10.7856 36.6978 10.3936C36.4263 10.1046 35.9721 10.0905 35.6832 10.3618C35.3942 10.6332 35.38 11.0875 35.6514 11.3764C35.9917 11.7388 36.3219 12.1221 36.6327 12.5157C37.4024 13.4911 38.7669 13.6686 39.7432 12.8777C40.8043 12.0182 40.9419 10.403 40.1137 9.35462C36.1746 4.36715 30.4821 1.4906 24.4971 1.46247C18.2204 1.44648 12.6112 4.47998 8.80507 9.20752C7.97035 10.2445 8.08825 11.8573 9.13668 12.7289Z" fill="#237BBA"/><path d="M45.124 24.9992H27.1023C26.9607 23.6579 25.8263 22.6094 24.4521 22.6094C23.0779 22.6094 21.9436 23.6579 21.802 24.9992H3.87598C1.73873 24.9992 0 26.7379 0 28.8752V33.7481C0 34.1445 0.321275 34.4658 0.717773 34.4658C1.11427 34.4658 1.43555 34.1445 1.43555 33.7481V28.8752C1.43555 27.5295 2.53029 26.4347 3.87598 26.4347H22.0473C22.0481 26.4364 22.049 26.438 22.0498 26.4396C22.5056 27.3879 23.4426 27.9555 24.4521 27.9555C25.4851 27.9555 26.4176 27.3617 26.8569 26.4347H45.124C46.4697 26.4347 47.5645 27.5295 47.5645 28.8752V43.6613C47.5645 45.007 46.4697 46.1017 45.124 46.1017H3.87598C2.53029 46.1017 1.43555 45.007 1.43555 43.6613V37.0977C1.43555 36.7013 1.11427 36.3799 0.717773 36.3799C0.321275 36.3799 0 36.7013 0 37.0977V43.6613C0 45.7985 1.73873 47.5373 3.87598 47.5373H45.124C47.2613 47.5373 49 45.7985 49 43.6613V28.8752C49 26.7379 47.2613 24.9992 45.124 24.9992ZM24.4521 26.52C23.7965 26.52 23.2225 25.9747 23.2225 25.2825C23.2225 24.6001 23.7741 24.0449 24.4521 24.0449C25.1302 24.0449 25.6818 24.6001 25.6818 25.2825C25.6818 25.9626 25.1208 26.52 24.4521 26.52Z" fill="#237BBA"/></g><defs><clipPath id="clip0"><rect width="49" height="49" fill="#237BBA"/></clipPath></defs></svg></span>Удобные диваны</button>
          <button type="button" class="comfort__tabs-btn tabs-btn"><span class="comfort__tabs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none"><g clip-path="url(#clip0)"><path d="M46.8467 15.9985H46.0879V11.0962C46.0879 10.6998 45.7665 10.3784 45.3701 10.3784C44.9737 10.3784 44.6523 10.6998 44.6523 11.0962V15.9985H43.8935C42.7061 15.9985 41.7402 16.9644 41.7402 18.1518V21.5888C24.6534 21.5888 25.4511 21.5746 25.2177 21.6169V8.19092C25.2177 7.16192 26.0549 6.32471 27.0839 6.32471H42.7861C43.6973 6.32471 44.4707 6.97482 44.625 7.87079C44.6924 8.26145 45.0635 8.52339 45.4543 8.45621C45.845 8.38883 46.1071 8.0176 46.0397 7.62694C45.7663 6.04047 44.3979 4.88916 42.786 4.88916H27.084C26.0383 4.88916 25.1054 5.3783 24.5 6.13914C23.8946 5.3783 22.9617 4.88916 21.916 4.88916H6.21391C4.39335 4.88916 2.91215 6.37036 2.91215 8.19092V15.9985H2.15332C0.965932 15.9985 0 16.9644 0 18.1518V31.4672C0 33.4461 1.60992 35.056 3.58887 35.056H5.8242V42.0946C5.8242 43.2065 6.72879 44.111 7.84057 44.111C8.89369 44.111 9.77722 43.288 9.85187 42.2375L10.3624 35.0559H14.452C14.8484 35.0559 15.1698 34.7346 15.1698 34.3382C15.1698 33.9418 14.8484 33.6204 14.452 33.6204C13.3661 33.6204 4.67481 33.6204 3.58887 33.6204C2.40148 33.6204 1.43555 32.6545 1.43555 31.4671V18.1518C1.43555 17.756 1.75749 17.434 2.15332 17.434H5.10643C5.45269 17.434 5.74257 17.6806 5.80956 18.0073C5.81913 18.054 5.8242 18.1023 5.8242 18.1518V21.5888H4.6683C3.70371 21.5888 2.91895 22.3735 2.91895 23.3381V27.4826C2.91895 28.4472 3.70371 29.2318 4.6683 29.2318H44.3317C45.2963 29.2318 46.0811 28.4471 46.0811 27.4825V23.338C46.0811 22.3735 45.2963 21.5887 44.3317 21.5887H43.1757V18.1517C43.1757 18.1022 43.1808 18.0539 43.1903 18.0072C43.2574 17.6804 43.5472 17.4339 43.8935 17.4339H46.8466C47.2424 17.4339 47.5644 17.7559 47.5644 18.1517V31.4671C47.5644 32.6545 46.5984 33.6204 45.411 33.6204C44.2682 33.6204 18.7637 33.6204 17.8015 33.6204C17.4051 33.6204 17.0838 33.9418 17.0838 34.3382C17.0838 34.7346 17.4051 35.0559 17.8015 35.0559H38.6374L39.1479 42.2375C39.2226 43.288 40.1061 44.111 41.1592 44.111C42.2711 44.111 43.1757 43.2064 43.1757 42.0946V35.056H45.4111C47.3901 35.056 49 33.4461 49 31.4672V18.1518C49 16.9644 48.0341 15.9985 46.8467 15.9985ZM8.92336 35.056L8.42006 42.1358C8.39852 42.4384 8.14405 42.6754 7.84067 42.6754C7.52035 42.6754 7.25985 42.4148 7.25985 42.0946V35.056H8.92336ZM44.6455 27.4825C44.6455 27.6555 44.5047 27.7962 44.3317 27.7962C43.7001 27.7962 26.083 27.7962 25.2178 27.7962V25.896V23.338C25.2178 23.165 25.3586 23.0243 25.5316 23.0243H44.3317C44.5047 23.0243 44.6455 23.1651 44.6455 23.338V27.4825ZM5.10643 15.9985H4.3476V8.19092C4.3476 7.16192 5.18481 6.32471 6.21381 6.32471H21.916C22.945 6.32471 23.7822 7.16192 23.7822 8.19092V21.6169C23.5517 21.575 24.5861 21.5888 7.25975 21.5888V18.1518C7.25975 16.9644 6.29382 15.9985 5.10643 15.9985ZM4.35449 27.4825V23.338C4.35449 23.165 4.49527 23.0242 4.6683 23.0242H23.4684C23.6414 23.0242 23.7822 23.165 23.7822 23.338V25.896V27.7962H4.6683C4.49527 27.7962 4.35449 27.6555 4.35449 27.4825ZM41.7402 42.0946C41.7402 42.4149 41.4796 42.6754 41.1593 42.6754C40.8559 42.6754 40.6015 42.4384 40.5799 42.1358L40.0766 35.056H41.7402V42.0946Z" fill="#237BBA"/></g><defs><clipPath id="clip0"><rect width="49" height="49" fill="#237BBA"/></clipPath></defs></svg></span>Wi-Fi</button>
          <button type="button" class="comfort__tabs-btn tabs-btn"><span class="comfort__tabs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none"><g clip-path="url(#clip0)"><path d="M25.0207 26.4785C24.4429 27.4925 23.3606 28.1225 22.1962 28.1225C21.0317 28.1225 19.9495 27.4926 19.3716 26.4786C19.1752 26.1339 18.7364 26.0138 18.3918 26.21C18.0472 26.4064 17.927 26.8451 18.1234 27.1897C18.9562 28.6513 20.5168 29.5592 22.1962 29.5592C23.8755 29.5592 25.436 28.6513 26.2689 27.1898C26.4653 26.8452 26.3452 26.4065 26.0005 26.2101C25.656 26.0136 25.2172 26.1338 25.0207 26.4785Z" fill="#237BBA"/><path d="M16.2108 23.5149C17.0126 23.1825 17.3932 22.263 17.0609 21.4612C16.7285 20.6593 15.809 20.2787 15.0071 20.6111C14.2052 20.9434 13.8246 21.8629 14.157 22.6648C14.4894 23.4667 15.4089 23.8473 16.2108 23.5149Z" fill="#237BBA"/><path d="M29.4047 23.511C30.2065 23.1786 30.5871 22.2591 30.2548 21.4573C29.9224 20.6554 29.0029 20.2748 28.201 20.6072C27.3991 20.9395 27.0185 21.859 27.3509 22.6609C27.6833 23.4628 28.6028 23.8434 29.4047 23.511Z" fill="#237BBA"/><path d="M45.4999 28.3521L44.4151 28.3443C40.8302 28.3183 39.2446 27.0091 38.8439 26.6084C38.6549 26.4194 38.4773 26.2137 38.316 25.9966C38.0074 25.5815 37.5337 25.3428 37.0164 25.3414C36.4958 25.3409 36.0212 25.5775 35.7095 25.9927C35.5484 26.2074 35.3684 26.4146 35.1744 26.6085C34.5366 27.2463 32.9647 28.3199 29.6033 28.3443L28.5184 28.3521C27.8512 28.357 27.3053 28.9068 27.3053 29.5741V36.1163C27.3053 36.1196 27.3033 36.1228 27.3004 36.1243C25.6443 36.9793 23.9276 37.4137 22.1961 37.4137C15.7373 37.4137 10.7779 31.542 8.90317 26.0862C8.90298 26.0856 8.90269 26.0851 8.90241 26.0847C8.7199 25.7775 8.57185 25.489 7.89235 25.6724C6.48791 26.0847 4.49642 24.3924 3.91177 22.7693C3.62907 21.9844 3.66534 21.1435 4.0113 20.462C4.31669 19.8604 4.83904 19.4251 5.48207 19.2363C5.99513 19.0856 6.33852 19.2132 6.70592 19.691C6.81809 19.837 6.97877 19.943 7.16118 19.9685C7.60094 20.0298 7.9581 19.7177 7.9939 19.3217C8.16865 17.3862 8.75598 15.6405 9.7399 14.1251C9.74153 14.1226 9.74431 14.1211 9.74727 14.1211C10.9808 14.112 12.1146 13.3948 12.6368 12.2668C12.6382 12.2639 12.641 12.262 12.6443 12.2619C13.8948 12.2195 15.0722 11.6617 15.8961 10.7155C16.1393 10.4362 16.3463 10.1299 16.5135 9.80249C16.5156 9.79837 16.5204 9.79665 16.5246 9.79847C17.157 10.0692 17.8284 10.2062 18.524 10.2062C19.582 10.2062 20.5893 9.88814 21.4493 9.28445C21.4522 9.28234 21.4562 9.28234 21.4592 9.28445C22.3192 9.88814 23.3265 10.2062 24.3845 10.2062C24.9536 10.2062 25.5109 10.113 26.0442 9.9292C26.0482 9.92786 26.0525 9.92949 26.0545 9.93322C26.8502 11.3778 28.3439 12.2654 30.0065 12.2654C30.263 12.2654 30.5197 12.2435 30.7722 12.2001C30.7761 12.1995 30.78 12.2016 30.7815 12.2052C31.2893 13.3634 32.4531 14.1241 33.7213 14.124C33.7864 14.124 34.3585 14.0663 34.5676 14.0085C34.5713 14.0075 34.5752 14.009 34.5774 14.0122C35.6063 15.5537 36.2195 17.3382 36.3987 19.3218C36.4253 19.6166 36.6299 19.8647 36.9142 19.9471C37.1985 20.0291 37.5041 19.9289 37.6842 19.6942C38.0524 19.2137 38.3964 19.0856 38.9103 19.2363C39.5534 19.4251 40.0758 19.8604 40.3812 20.462C40.7271 21.1435 40.7634 21.9844 40.4807 22.7693C40.3602 23.1038 40.1716 23.4577 39.9347 23.7937C39.7169 24.1028 39.7571 24.5395 40.0487 24.7803C40.2484 24.9546 40.756 25.0547 41.093 24.6439C41.415 24.1913 41.6637 23.7243 41.8324 23.2561C42.2488 22.1002 42.1868 20.8448 41.6623 19.8116C41.1757 18.8531 40.3422 18.1594 39.3151 17.8578C38.8525 17.7219 38.2638 17.6642 37.6665 17.9128C37.6613 17.9149 37.6556 17.9119 37.6546 17.9063C37.3469 16.2313 36.7402 14.6951 35.8442 13.3218C35.8418 13.3181 35.8425 13.3135 35.8457 13.3106C36.4524 12.7689 36.8523 12.0003 36.9093 11.1388C37.0112 9.59634 35.9954 8.20597 34.5207 7.82402C34.5211 7.79952 34.5213 7.77511 34.5213 7.75071C34.5213 5.26128 32.496 3.23601 30.0066 3.23601C29.7262 3.23601 29.4464 3.26204 29.172 3.31343C29.1679 3.3142 29.1639 3.3119 29.1624 3.30798C28.4173 1.32042 26.524 0 24.3844 0C23.3263 0 22.319 0.318021 21.4591 0.921717C21.4562 0.923822 21.4522 0.923822 21.4492 0.921717C20.5894 0.318117 19.582 0 18.5239 0C17.8585 0 17.2112 0.126328 16.5998 0.375539C16.286 0.503494 16.0918 0.837307 16.1549 1.17035C16.2428 1.6349 16.7224 1.87808 17.1352 1.70878C17.5755 1.52819 18.0427 1.4366 18.5239 1.4366C19.3292 1.4366 20.0933 1.69289 20.7337 2.17772C21.1579 2.49862 21.7504 2.4989 22.1746 2.17763C22.8151 1.69289 23.5792 1.4366 24.3844 1.4366C25.974 1.4366 27.3744 2.45077 27.869 3.96029C28.063 4.5526 28.6836 4.90345 29.2819 4.75874C29.5178 4.70161 29.7616 4.67271 30.0064 4.67271C31.7036 4.67271 33.0845 6.05351 33.0845 7.7508C33.0845 7.81397 33.0824 7.87809 33.0784 7.94173C33.0404 8.53892 33.4591 9.07581 34.0525 9.19066C34.9225 9.35871 35.5342 10.1555 35.4754 11.0441C35.4182 11.91 34.6948 12.6302 33.8286 12.684C33.0357 12.7323 32.3215 12.2652 32.0538 11.5193C31.8515 10.9561 31.2536 10.629 30.6639 10.758C30.4488 10.805 30.2276 10.8288 30.0063 10.8288C28.8199 10.8288 27.7595 10.1655 27.2388 9.09763C26.9687 8.5437 26.3028 8.28837 25.7235 8.51662C25.2968 8.68448 24.8463 8.76966 24.3844 8.76966C23.58 8.76966 22.8166 8.51385 22.1764 8.02987C21.7463 7.70477 21.162 7.70477 20.7319 8.02987C20.0918 8.51385 19.3283 8.76956 18.5239 8.76956C17.9732 8.76956 17.4441 8.65022 16.9506 8.41479C16.6858 8.28856 16.3845 8.24463 16.1008 8.31909C15.7406 8.41374 15.4558 8.65711 15.3089 8.99102C15.1844 9.27402 15.0175 9.53682 14.8126 9.77215C14.228 10.4434 13.3821 10.8279 12.4904 10.8279C12.4857 10.8279 12.481 10.8279 12.4762 10.8279C11.9876 10.8279 11.5529 11.1235 11.3681 11.582C11.0696 12.3223 10.3031 12.7713 9.50495 12.6736C8.70928 12.5764 8.06692 11.927 7.97753 11.1294C7.89857 10.4249 8.24224 9.74287 8.85302 9.39183C9.28206 9.1452 9.51452 8.67214 9.44514 8.18692C9.31833 7.29956 9.58247 6.40378 10.1698 5.72927C10.9942 4.78257 12.2951 4.43192 13.4836 4.83636C13.9946 5.00508 14.7829 4.78229 15.0109 4.05322C15.0465 3.93397 15.0886 3.81549 15.1361 3.70074C15.2643 3.39162 15.185 3.02613 14.915 2.8286C14.5222 2.5413 13.9961 2.70581 13.8199 3.12432C13.7824 3.21342 13.7473 3.30425 13.7147 3.39593C13.7132 3.40024 13.7086 3.40263 13.7042 3.40138C12.0288 2.93263 10.2397 3.46158 9.08635 4.78611C8.26158 5.73319 7.87111 6.97724 8.00213 8.22291C8.00251 8.22616 8.00098 8.22922 7.9982 8.23104C6.97839 8.88785 6.41326 10.0706 6.54973 11.2896C6.66965 12.3602 7.33775 13.2836 8.26129 13.7657C8.26569 13.768 8.26732 13.7735 8.26474 13.7778C7.52313 15.0325 7.01188 16.4143 6.73789 17.9066C6.73683 17.9121 6.73109 17.9151 6.72602 17.913C6.12854 17.6644 5.53978 17.7225 5.07734 17.8581C4.05035 18.1597 3.21678 18.8535 2.73022 19.8119C2.20577 20.845 2.14375 22.1005 2.56006 23.2564C3.28358 25.2648 5.43613 27.1697 7.45566 27.1695C7.55577 27.1695 7.65558 27.1649 7.75492 27.1552C7.75885 27.1548 7.76249 27.1571 7.76392 27.1607C8.93073 30.2406 10.8295 33.0506 13.1566 35.127C15.8868 37.5629 19.0127 38.8505 22.1961 38.8505C23.9369 38.8505 25.6581 38.4673 27.3237 37.7103C27.3293 37.7078 27.3356 37.7114 27.3361 37.7176C27.4392 39.108 27.8084 40.4819 28.4211 41.7329C29.1511 43.2235 30.2299 44.5491 31.541 45.5667L35.1391 48.3593C35.6716 48.7725 36.3357 49.0001 37.0091 49.0001C37.6825 49.0001 38.3466 48.7725 38.8792 48.3592L42.4773 45.5667C43.7885 44.5491 44.8674 43.2234 45.5973 41.7329C46.3272 40.2423 46.713 38.5773 46.713 36.9176V29.5742C46.7129 28.9068 46.167 28.3569 45.4999 28.3521ZM45.2763 36.9175C45.2763 38.3593 44.9411 39.8061 44.3069 41.101C43.6728 42.3959 42.7356 43.5477 41.5964 44.4317L37.9984 47.2242C37.7124 47.4461 37.3704 47.5634 37.0091 47.5634C36.6479 47.5634 36.3059 47.4461 36.02 47.2243L32.4218 44.4317C31.2828 43.5476 30.3455 42.3959 29.7113 41.101C29.0772 39.8061 28.742 38.3594 28.742 36.9175V29.7961C28.742 29.7912 28.7459 29.7872 28.7508 29.7872L29.6137 29.7809C33.4875 29.7528 35.3969 28.4177 36.1902 27.6244C36.4319 27.3827 36.6567 27.1238 36.8583 26.8553C36.9087 26.7882 36.9763 26.7781 37.0123 26.7781H37.0128C37.0558 26.7782 37.1167 26.7914 37.163 26.8537C37.3658 27.1267 37.5896 27.386 37.828 27.6243C38.4666 28.263 40.386 29.7518 44.4045 29.781L45.2674 29.7873C45.2723 29.7873 45.2762 29.7913 45.2762 29.7962V36.9175H45.2763Z" fill="#237BBA"/><path d="M43.1876 30.8906C41.9314 30.7488 40.763 30.483 39.715 30.1005C39.018 29.8462 38.389 29.5435 37.8453 29.2009C37.3372 28.881 36.6807 28.8809 36.1727 29.201C35.6292 29.5435 35.0003 29.8462 34.3031 30.1006C33.2552 30.483 32.0869 30.7489 30.8304 30.8907C30.3082 30.9498 29.9144 31.391 29.9144 31.917V36.8561C29.9144 39.1561 30.8156 41.303 32.4522 42.9011C32.736 43.1782 33.1908 43.1728 33.4679 42.889C33.7451 42.6052 33.7397 42.1504 33.4559 41.8731C32.0985 40.5477 31.351 38.7659 31.351 36.856V32.2741C32.5852 32.1111 33.7425 31.8344 34.7955 31.45C35.5881 31.1607 36.3091 30.8129 36.9385 30.4163C36.9819 30.3889 37.036 30.389 37.0792 30.4162C37.7087 30.813 38.4298 31.1608 39.2222 31.4499C40.2754 31.8345 41.4327 32.1112 42.6667 32.2741V36.856C42.6667 39.0434 41.6757 41.0669 39.9477 42.408L37.0088 44.6891L35.898 43.827C35.5846 43.5838 35.1333 43.6406 34.8901 43.954C34.6468 44.2674 34.7038 44.7187 35.0171 44.962L36.3755 46.0162C36.5619 46.1608 36.7854 46.2331 37.0088 46.2331C37.2322 46.2331 37.4558 46.1607 37.6422 46.016L40.8286 43.543C42.9097 41.9279 44.1033 39.4905 44.1033 36.856V31.917C44.1037 31.391 43.7099 30.9498 43.1876 30.8906Z" fill="#237BBA"/><path d="M36.5418 39.9861H36.5467C36.7668 39.9861 36.9747 39.8853 37.1109 39.7123L41.2632 34.4431C41.5088 34.1316 41.4552 33.6799 41.1436 33.4344C40.832 33.1889 40.3803 33.2424 40.1347 33.554L36.5548 38.097L34.8145 35.8245C34.5732 35.5096 34.1224 35.4498 33.8074 35.691C33.4925 35.9322 33.4326 36.383 33.6738 36.6981L35.9763 39.7046C36.1112 39.8806 36.3199 39.9845 36.5418 39.9861Z" fill="#237BBA"/><path d="M17.3851 16.2759C17.3501 15.8808 17.0006 15.5902 16.6062 15.6237C15.4614 15.725 14.3972 16.2418 13.6098 17.0788C13.578 17.1126 13.5468 17.1467 13.5162 17.1811C13.2527 17.4777 13.2796 17.9317 13.5762 18.1952C13.713 18.3167 13.8833 18.3764 14.0529 18.3764C14.251 18.3764 14.4483 18.2949 14.5902 18.1352C14.6117 18.111 14.6335 18.0872 14.6559 18.0633C15.2018 17.4831 15.9394 17.125 16.7327 17.0548C17.128 17.0197 17.42 16.6711 17.3851 16.2759Z" fill="#237BBA"/><path d="M30.8763 17.1811C30.8457 17.1467 30.8145 17.1126 30.7829 17.0789C29.9953 16.2418 28.9311 15.725 27.7864 15.6237C27.3915 15.5901 27.0425 15.8808 27.0075 16.276C26.9725 16.6711 27.2646 17.0199 27.6597 17.0548C28.4531 17.125 29.1907 17.4832 29.7368 18.0635C29.7591 18.0871 29.7809 18.111 29.8023 18.1352C29.9443 18.295 30.1415 18.3765 30.3397 18.3765C30.5093 18.3765 30.6797 18.3166 30.8164 18.1952C31.1129 17.9317 31.1398 17.4777 30.8763 17.1811Z" fill="#237BBA"/></g><defs><clipPath id="clip0"><rect width="49" height="49" fill="#237BBA"/></clipPath></defs></svg></span>Детский уголок</button>
          <button type="button" class="comfort__tabs-btn tabs-btn"><span class="comfort__tabs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none"><path d="M45.9808 3.06885H3.01924C1.35439 3.06885 0 4.42333 0 6.08819V35.2406C0 36.9055 1.35439 38.2598 3.01924 38.2598H18.2825L17.7546 41.4273H11.4581C10.2162 41.4273 9.20597 42.4377 9.20597 43.6794C9.20597 44.9212 10.2163 45.9315 11.4581 45.9315H37.5418C38.7837 45.9315 39.7939 44.9212 39.7939 43.6794C39.7939 42.4377 38.7836 41.4273 37.5418 41.4273H31.2453L30.7174 38.2598H45.9807C47.6455 38.2598 48.9999 36.9055 48.9999 35.2406V6.08819C49 4.42333 47.6456 3.06885 45.9808 3.06885ZM38.3585 43.6794C38.3585 44.1297 37.9921 44.496 37.5419 44.496H11.4582C11.0079 44.496 10.6416 44.1296 10.6416 43.6794C10.6416 43.2292 11.008 42.8629 11.4582 42.8629H37.5419C37.9921 42.8629 38.3585 43.2292 38.3585 43.6794ZM29.79 41.4273H19.21L19.7379 38.2598H29.2622L29.79 41.4273ZM47.5645 35.2406C47.5645 36.1139 46.854 36.8243 45.9808 36.8243H3.01924C2.14595 36.8243 1.43555 36.1139 1.43555 35.2406V6.08819C1.43555 5.21489 2.14595 4.50449 3.01924 4.50449H45.9807C46.854 4.50449 47.5644 5.21489 47.5644 6.08819V35.2406H47.5645Z" fill="#237BBA"/><path d="M39.0761 32.9885H4.50417V7.57324H6.85474C7.25114 7.57324 7.57251 7.25187 7.57251 6.85547C7.57251 6.45907 7.25114 6.1377 6.85474 6.1377H3.7864C3.39 6.1377 3.06863 6.45907 3.06863 6.85547V33.7063C3.06863 34.1027 3.39 34.4241 3.7864 34.4241H39.076C39.4724 34.4241 39.7937 34.1027 39.7937 33.7063C39.7937 33.3099 39.4725 32.9885 39.0761 32.9885Z" fill="#237BBA"/><path d="M45.2136 6.1377H9.92403C9.52763 6.1377 9.20626 6.45907 9.20626 6.85547C9.20626 7.25187 9.52763 7.57324 9.92403 7.57324H44.4958V32.9885H42.1453C41.7489 32.9885 41.4275 33.3099 41.4275 33.7063C41.4275 34.1027 41.7489 34.4241 42.1453 34.4241H45.2136C45.61 34.4241 45.9314 34.1027 45.9314 33.7063V6.85547C45.9314 6.45907 45.61 6.1377 45.2136 6.1377Z" fill="#237BBA"/><path d="M30.016 27.5196H30.0228C30.4459 27.5168 30.8218 27.2456 30.9596 26.8402L34.9674 14.7759C35.0924 14.3997 34.8888 13.9934 34.5126 13.8684C34.136 13.7434 33.7301 13.9471 33.6051 14.3233L30.007 25.1542L26.2365 14.2916C26.1066 13.9171 25.6973 13.7191 25.323 13.8489C24.9486 13.9789 24.7504 14.3879 24.8803 14.7624L29.0788 26.8576C29.2195 27.2544 29.5956 27.5196 30.016 27.5196Z" fill="#237BBA"/><path d="M19.0967 27.5192C19.4931 27.5192 19.8145 27.1978 19.8145 26.8014V15.2446H22.4998C22.8962 15.2446 23.2176 14.9233 23.2176 14.5269C23.2176 14.1305 22.8962 13.8091 22.4998 13.8091H15.721C15.3246 13.8091 15.0032 14.1305 15.0032 14.5269C15.0032 14.9233 15.3246 15.2446 15.721 15.2446H18.3789V26.8015C18.3789 27.1978 18.7003 27.5192 19.0967 27.5192Z" fill="#237BBA"/></svg></span>Цифровое ТВ</button>
          <button type="button" class="comfort__tabs-btn tabs-btn"><span class="comfort__tabs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none"><g clip-path="url(#clip0)"><path d="M24.5 7.82373C24.1036 7.82373 23.7823 8.14501 23.7823 8.54141V9.83474H22.489C22.0926 9.83474 21.7713 10.156 21.7713 10.5524C21.7713 10.9488 22.0926 11.2701 22.489 11.2701H23.7823V12.5635C23.7823 12.9599 24.1036 13.2812 24.5 13.2812C24.8964 13.2812 25.2177 12.9599 25.2177 12.5635V11.2701H26.511C26.9074 11.2701 27.2287 10.9488 27.2287 10.5524C27.2287 10.156 26.9074 9.83474 26.511 9.83474H25.2177V8.5415C25.2177 8.14501 24.8964 7.82373 24.5 7.82373Z" fill="#237BBA"/><path d="M34.5949 4.64409H30.6311V1.83262C30.6311 0.82209 29.809 0 28.7985 0H20.2015C19.1909 0 18.3688 0.82209 18.3688 1.83262V4.64419H14.4049C12.7967 4.64419 11.4882 5.95264 11.4882 7.56093V46.0834C11.4882 47.6916 12.7967 49.0001 14.4049 49.0001H34.5949C36.2031 49.0001 37.5116 47.6916 37.5116 46.0834V43.8996C37.5116 43.5032 37.1903 43.1819 36.7939 43.1819C36.3975 43.1819 36.0762 43.5032 36.0762 43.8996V46.0834C36.0762 46.9001 35.4117 47.5646 34.5949 47.5646H14.405C13.5883 47.5646 12.9237 46.9001 12.9237 46.0834V16.8446H15.7059C16.1023 16.8446 16.4236 16.5233 16.4236 16.1269C16.4236 15.7305 16.1023 15.4093 15.7059 15.4093H12.9237V7.56083C12.9237 6.7441 13.5883 6.07954 14.405 6.07954H34.5949C35.4117 6.07954 36.0762 6.7441 36.0762 7.56083V15.4092H19.0615C18.6651 15.4092 18.3438 15.7304 18.3438 16.1268C18.3438 16.5232 18.6651 16.8445 19.0615 16.8445H36.0762V40.5438C36.0762 40.9402 36.3975 41.2614 36.7939 41.2614C37.1903 41.2614 37.5116 40.9402 37.5116 40.5438V7.56083C37.5117 5.95254 36.2032 4.64409 34.5949 4.64409ZM19.8043 1.83262C19.8043 1.61365 19.9825 1.43545 20.2016 1.43545H28.7986C29.0176 1.43545 29.1958 1.61365 29.1958 1.83262V4.64419H19.8043V1.83262Z" fill="#237BBA"/><path d="M19.3869 43.7239C20.3929 44.5726 21.9057 44.4482 22.7581 43.4379L30.9396 33.7394C32.2507 32.1847 31.1421 29.8043 29.1109 29.8043H25.0374L29.8993 24.0409C30.7518 23.0305 30.6243 21.5223 29.6133 20.6697C28.605 19.819 27.0927 19.9474 26.2421 20.9556L18.0607 30.6541C16.7493 32.2087 17.8581 34.5891 19.8893 34.5891H23.9629L19.1009 40.3526C18.2484 41.3633 18.376 42.8711 19.3869 43.7239ZM20.198 41.2782L26.0558 34.3341C26.4487 33.8686 26.117 33.1537 25.5073 33.1537H19.8893C19.0762 33.1537 18.6331 32.2018 19.1578 31.5796L27.3392 21.8812C27.6801 21.4773 28.2851 21.4271 28.6878 21.7668C29.092 22.1079 29.1433 22.7109 28.8021 23.1154L22.9444 30.0593C22.5516 30.5249 22.8833 31.2398 23.493 31.2398H29.1109C29.9239 31.2398 30.3671 32.1916 29.8423 32.8138L21.661 42.5123C21.3206 42.9157 20.7155 42.9669 20.3124 42.6267C19.9083 42.2856 19.8569 41.6825 20.198 41.2782Z" fill="#237BBA"/></g><defs><clipPath id="clip0"><rect width="49" height="49" fill="#237BBA"/></clipPath></defs></svg></span>Зарядные устройства</button>
                </div>
            </div>
          </div>
          <div class="comfort__column">
            <div class="comfort__tabs-content tabs-content">
              <div class="comfort__list">
                <div class="comfort__item">
                  <div class="comfort__item-value"><img src="/wp-content/uploads/2021/08/Rectangle-11-2.jpg" alt=""></div>
                </div>
                <div class="comfort__item">
                  <div class="comfort__item-value"><img src="/wp-content/uploads/2021/08/Rectangle-11-2.jpg" alt=""></div>
                </div>
                <div class="comfort__item">
                  <div class="comfort__item-value"><img src="/wp-content/uploads/2021/08/Rectangle-11-2.jpg" alt=""></div>
                </div>
                <div class="comfort__item">
                  <div class="comfort__item-value"><img src="/wp-content/uploads/2021/08/Rectangle-11-2.jpg" alt=""></div>
                </div>
                <div class="comfort__item">
                  <div class="comfort__item-value"><img src="/wp-content/uploads/2021/08/Rectangle-11-2.jpg" alt=""></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="quiz">
      <div class="container">
        <div class="quiz__title">Выберите интересующее направление</div>
        <div class="quiz__text">Ответьте на несколько вопросов и мы рассчитаем стоимость услуги за 3 минуты! <br>В конце вас ждет приятный бонус!</div>
      </div>
    </section>
    <section class="tax-seo">
      <div class="container">
        <div class="comfort__seo">
          <h4>Почему ТО в Автоплюс выгоднее</h4>
          <p>Нечасто можно встретить автомобиль, который эксплуатировался и имеет идеальное состояние кузова. В большинстве случаев уже в первый год после покупки необходимы меры по защите и восстановлению лакокрасочного покрытия. А в случае когда авто уже с историей, требуются и более сложные работы по устранению коррозийных процессов, покраске или замене определенных элементов, а также полному кузовному ремонту.</p>
          <p>Одним из лучших сервисных центров в Уве, специализирующихся исключительно на ремонте кузова, является компания «Автоплюс». Она ведёт активную деятельность в течение длительного времени и за срок своей работы сумела зарекомендовать себя в качестве надёжной и добросовестной организации. Данный факт подтверждается многочисленными положительными отзывами довольных клиентов.</p>
        </div>
      </div>
    </section>
</div>

<?php
get_footer();
