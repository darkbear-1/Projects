<?php
/*
Template Name: Главная страница
*/
get_header();
?>
<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>
      <section class="main-screen">
        <div class="main-screen__slides">
          <img class="main-screen__slides-item" src="/wp-content/uploads/images/slides/1.jpg" alt="">
        </div>
        <div class="container">
          <h1 class="main-screen__title">Сеть ювелирных салонов<br>Алмаз-Холдинг в Уфе</h1>
          <span class="main-screen__subtitle">Подарки для самых любимых...</span>
          <a href="/o-kompanii/" class="main-screen__link">подробнее о компании</a>
        </div>
      </section>
      <section class="advantages">
        <div class="container">
          <ul class="advantages__list">
            <li class="advantages__item"><a href="/sobstvennoe-proizvodstvo/" class="advantages__link"><img src="/wp-content/uploads/images/advantages1.jpg" alt="" class="advantages__image"><span class="advantages__text">Собственное производство</span></a></li>
            <li class="advantages__item"><a href="/garantiya-kachestva/" class="advantages__link"><img src="/wp-content/uploads/images/advantages2.jpg" alt="" class="advantages__image"><span class="advantages__text">Гарантия качества</span></a></li>
            <li class="advantages__item"><a href="/chastnye-zakazy/" class="advantages__link"><img src="/wp-content/uploads/images/advantages3.jpg" alt="" class="advantages__image"><span class="advantages__text">Частные заказы</span></a></li>
            <li class="advantages__item"><a href="/punkti-vydachi/" class="advantages__link"><img src="/wp-content/uploads/images/advantages4.jpg" alt="" class="advantages__image"><span class="advantages__text">12 пунктов выдачи</span></a></li>
            <li class="advantages__item"><a href="#" class="advantages__link"><img src="/wp-content/uploads/images/advantages5.jpg" alt="" class="advantages__image"><span class="advantages__text">Доставка по всему миру</span></a></li>
          </ul>
        </div>
      </section>
      <section class="new-items">
        <div class="container">
          <h2 class="new-items__title">Наши новинки</h2>
          <div id="new-items__slider" class="owl-carousel products-owl">
            <?php get_template_part( 'template-parts/loop-novinki', 'product' ); ?>
          </div>
          <a href="/novinki/" target="_blank" class="new-items__link">смотреть все новинки</a>
        </div>
      </section>
      <section class="product-categories">
        <div class="container">
          <div class="product-categories__title">Посмотреть по категориям</div>
          <div class="product-categories__list">
            <?php get_template_part( 'template-parts/loop-category', 'product_cat' ); ?>
          </div>
        </div>
      </section>
      <section class="brands">
        <div class="container">
          <div class="brands__list-wrap">
            <div id="brands__list" class="owl-carousel">
              <?php get_template_part( 'template-parts/loop-brands', 'brands' ); ?>
            </div>
          <a href="/brands/aquamarine/" class="brands__link">перейти к товарам бренда</a>
          </div>
          <div class="brands__column">
            <h2 class="brands__title"><a href="/brands/">Бренды</a></h2>
            <p class="brands__text">В ювелирных салонах Алмаз-Холдинг Уфа представлены лучшие новинки собственного производства, а также последние коллекции основных ведущих ювелирных брендов России.<br><br>Благодаря многолетнему сотрудничеству, которое в некоторых случаях длится уже более 20 лет, мы имеем лучшие закупочные цены. В сочетании с минимальной наценкой это дает нашим клиентам лучшее на рынке предложение.</p>
          </div>
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
        <div class="map__services">
          <div class="map__services-title">Наши услуги</div>
          <ul class="map__services-list">
            <li class="map__services-item"><a href="/skupka-i-obmen-yuvelirnyh-izdelij/" class="map__services-link">Скупка украшений</a></li>
            <li class="map__services-item"><a href="/skupka-i-obmen-yuvelirnyh-izdelij/" class="map__services-link">Обмен старых украшений на новые</a></li>
            <li class="map__services-item"><a href="/chastnye-zakazy/" class="map__services-link">Изготовление частных и корпоративных заказов</a></li>
            <li class="map__services-item"><a href="/uslugi-yuvelira/" class="map__services-link">Услуги ювелира</a></li>
            <li class="map__services-item"><a href="/rassrochka-bez-pereplat/" class="map__services-link">Рассрочка без переплат</a></li>
          </ul>
        </div>
    	</section>
    	<section class="instagram">
    		<div class="container">
    			<div class="instagram__info">
            <span class="instagram__profile">ALMAZ.HOLDING.UFA</span>
            <a href="https://www.instagram.com/almaz.holding.ufa/" target="_blank" class="instagram__link">Перейти в Instagram</a>
          </div>
    		</div>
    	</section>
    <?php do_action('content_after'); ?>
  </div>
  <?php do_action('after_content'); ?>
</div>
<?php
get_footer();
?>
