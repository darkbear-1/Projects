<?php
/*
Template Name: 12 пунктов выдачи
*/
get_header();
?>
<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
      <section class="company">
        <div class="container">
          <h1 class="company__title">Пункты выдачи в Уфе!</h1>
          <div class="company__text">
            <p>Для Вашего комфорта в Уфе под брендом Алмаз-Холдинг работает 12 ювелирных салонов, расположенных во всех частях города. Вы можете заказать доставку и примерку понравившегося Вам украшения в любой удобный для Вас салон.</p>
          </div>
      </section>
      <section class="map">
        <div id="map"></div>
        <div class="map__select-wrap">
          <select class="map__place-select">
            <option place-index="0" value="Проспект Октября, 6">Проспект Октября, 6</option>
            <option place-index="7" value="ул. 50-летия Октября, 5">ул. 50-летия Октября, 5</option>
            <option place-index="8" value="ТК Центральный, павильон #5">ТК Центральный, павильон #5</option>
            <option place-index="6" value="Гостиный двор, бутик 117">Гостиный двор, бутик 117</option>
            <option place-index="9" value="ТРК Иремель. 1 этаж">ТРК Иремель. 1 этаж</option>
            <option place-index="10" value="ТЦ Шатлык Люкс, цокольный этаж">ТЦ Шатлык Люкс, цокольный этаж</option>
            <option place-index="11" value="ТЦ Башкирия, 1 этаж">ЛСЦ Башкирия, 1 этаж</option>
            <option place-index="1" value="ТСК Сипайловский, блок Б, бутик 1095">ТСК Сипайловский, блок Б, бутик 1095</option>
            <option place-index="2" value="ул. Первомайская, 25">ул. Первомайская, 25</option>
            <option place-index="3" value="ТЦ Меркурий, бутик 121">ТЦ Меркурий, бутик 121</option>
            <option place-index="4" value="ТЦ Акварин, 1 этаж">Мкр.Инорс, ТЦ Акварин, 1 этаж</option>
            <option place-index="5" value="Мкр. Дёма, Ухтомского, 16">Мкр. Дема, ул. Ухтомского, 16</option>
          </select>
          <div class="map__select-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none"><path d="M1 1L7.5 8L14 1" stroke="#1084CD"/></svg></div>
        </div>
        <!-- <div class="map__services">
          <div class="map__services-title">Наши услуги</div>
          <ul class="map__services-list">
            <li class="map__services-item">Скупка украшений</li>
            <li class="map__services-item">Обмен старых украшений на новые</li>
            <li class="map__services-item">Изготовление частных и корпоративных заказов</li>
            <li class="map__services-item">Услуги ювелира</li>
            <li class="map__services-item">Рассрочка и кредит</li>
          </ul>
        </div> -->
    	</section>
      <section class="address-phones">
        <div class="container">
          <h2 class="address-phones__title company__another-title">Ждем Вас ежедневно в наших салонах!</h2>
          <ul class="address-phones__list">
            <li class="adress-phones__item">Проспект Октября, 6 - 10-00 до 20-00</li>
            <li class="adress-phones__item">ул. 50-летия Октября, 5 - Пн-пт: 10-00 д 20-00<br> Сб-Вс: 10-00 до 19-00</li>
            <li class="adress-phones__item">ТК Центральный, павильон #5 - 10-00 до 22-00</li>
            <li class="adress-phones__item">Гостиный двор, бутик 117 - 10-00 до 21-00</li>
            <li class="adress-phones__item">ТРК Иремель. 1 этаж - 10-00 до 21-00</li>
            <li class="adress-phones__item">ТЦ Шатлык Люкс, цокольный этаж - 10-00 до 21-00</li>
            <li class="adress-phones__item">ЛСЦ Башкирия, 1 этаж - 10-00 до 21-00</li>
            <li class="adress-phones__item">ТСК Сипайловский, блок Б, бутик 1095 - 10-00 до 20-00</li>
            <li class="adress-phones__item">ул. Первомайская, 25 - 10-00 до 20-00</li>
            <li class="adress-phones__item">ТЦ Меркурий, бутик 121 - 10-00 до 20-00</li>
            <li class="adress-phones__item">Мкр.Инорс, ТЦ Акварин, 1 этаж - 10-00 до 22-00</li>
            <li class="adress-phones__item">Мкр. Дема, ул. Ухтомского, 16 - 10-00 до 20-00</li>
          </ul>
          <div class="address-phones__sprav">Номер единой справочной - <a href="tel:83472238388" class="address-phone-link">8 347 223 83 88</a></div>
          <div class="address-phones__cons">Онлайн-консультант - <a href="tel:89371688168" class="address-phone-link">8 937 168 8 168</a></div>
        </div>
      </section>
    <?php do_action('content_after'); ?>
  </div>
  <?php do_action('after_content'); ?>
</div>
<?php
get_footer();
?>
