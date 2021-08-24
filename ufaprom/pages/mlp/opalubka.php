<?php
  $queryTerm = get_queried_object();
  $nowTerm = $queryTerm->term_id;
?>
<?php if ($args['termId'] == $nowTerm && isset($_GET['rg']) && $_GET['rg'] != ""): ?>
  <section class="mlp">
        <div class="mlp__screen">
          <div class="container">
            <div class="mlp__screen-title">
              <?php echo do_shortcode('[Title id=3 fallback="ОПАЛУБКА ОТ ПРОИЗВОДИТЕЛЯ С ВЫГОДОЙ -30%"]') ?>
            </div>
            <div class="mlp__screen-subtitle">
              <?php echo do_shortcode('[Subtitle id=4 fallback="ОПАЛУБКА ПЕРЕКРЫТИЙ"]') ?>
            </div>
            <div class="mlp__screen-wrap col-flex-row">
              <div class="mlp__screen-row col-flex-row">
                <div class="mlp__screen-image">
                  <?php echo do_shortcode('[IMG id=13 fallback="opalubka5.png"]') ?>
                </div>
                <div class="mlp__screen-info_wrap">
                  <ul class="mlp__screen-list">
                    <li class="mlp__screen-list_item">
                      <?php echo do_shortcode('[UTP1 id=5 fallback="Бесплатная доставка до объекта и шеф-монтаж"]') ?>
                    </li>
                    <li class="mlp__screen-list_item">
                      <?php echo do_shortcode('[UTP2 id=6 fallback="Возможность купить новую или Б/У"]') ?>
                    </li>
                    <li class="mlp__screen-list_item">
                      <?php echo do_shortcode('[UTP3 id=7 fallback="Бесплатный расчет и схема расстановки опалубки"]') ?>
                    </li>
                    <li class="mlp__screen-list_item">
                      <?php echo do_shortcode('[UTP4 id=8 fallback="Дополнительно в наличии комплектующие к опалубке (винты, гайки, подкосы, замки)"]') ?>
                    </li>
                    <li class="mlp__screen-list_item">
                      <?php echo do_shortcode('[UTP5 id=9 fallback="Ламинированная фанера высшего качества на складе в наличии"]') ?>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="mlp__screen-row col-flex-column col-flex-justify-center">
                <div class="mlp__screen-cta"><?php echo do_shortcode('[CTA id=12 fallback="Получите расчёт стоимости люльки строительной"]') ?></div>
                <form action="javascript: console.log('Форма отправлена')" class="mlp__screen-form col-grid-1 send-form">
                  <input type="tel" class="form__lesa-phone" id="form__lesa-phone" name="phone" placeholder="Контактный телефон" required>
                  <input type="submit" class="button form__lesa-phone" required placeholder="Оставить заявку сейчас!">
                </form>
                <div class="consultation__policy">Нажимая на кнопку, Вы принимаете условия <a href="/zayavlenie-o-konfidentsialnosti/" target="_blank" class="consultation__policy-link">политики конфиденциальности</a> компании и даете согласие на обработку персональных данных.</div>
              </div>
            </div>
            <div class="single-product__info-wrap">
                <div class="phone-icon">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M27.4167 15.3333C29.3395 15.3333 31.1836 16.0972 32.5432 17.4568C33.9028 18.8164 34.6667 20.6605 34.6667 22.5833C34.6667 23.2243 34.9213 23.839 35.3745 24.2922C35.8277 24.7454 36.4424 25 37.0833 25C37.7243 25 38.339 24.7454 38.7922 24.2922C39.2454 23.839 39.5 23.2243 39.5 22.5833C39.5 19.3786 38.2269 16.3052 35.9609 14.0391C33.6948 11.7731 30.6214 10.5 27.4167 10.5C26.7757 10.5 26.161 10.7546 25.7078 11.2078C25.2546 11.661 25 12.2757 25 12.9167C25 13.5576 25.2546 14.1723 25.7078 14.6255C26.161 15.0787 26.7757 15.3333 27.4167 15.3333Z" fill="#FF8D24"/>
      <path d="M27.4167 5.66665C31.9033 5.66665 36.2061 7.44893 39.3786 10.6214C42.5511 13.7939 44.3333 18.0967 44.3333 22.5833C44.3333 23.2243 44.588 23.8389 45.0412 24.2922C45.4944 24.7454 46.1091 25 46.75 25C47.391 25 48.0056 24.7454 48.4589 24.2922C48.9121 23.8389 49.1667 23.2243 49.1667 22.5833C49.1667 16.8149 46.8752 11.2827 42.7962 7.20374C38.7173 3.12482 33.1851 0.833313 27.4167 0.833313C26.7757 0.833313 26.161 1.08793 25.7078 1.54114C25.2546 1.99435 25 2.60904 25 3.24998C25 3.89092 25.2546 4.50561 25.7078 4.95882C26.161 5.41203 26.7757 5.66665 27.4167 5.66665ZM48.5625 34.4491C48.4296 34.0612 48.2001 33.7134 47.8957 33.4386C47.5913 33.1638 47.222 32.971 46.8225 32.8783L32.3225 29.5675C31.9289 29.4782 31.5193 29.489 31.1309 29.5987C30.7425 29.7085 30.3878 29.9138 30.0992 30.1958C29.7608 30.51 29.7367 30.5341 28.1658 33.5308C22.9536 31.129 18.7771 26.9354 16.3967 21.7133C19.4658 20.1666 19.49 20.1666 19.8042 19.8041C20.0862 19.5155 20.2915 19.1608 20.4012 18.7724C20.511 18.3841 20.5218 17.9744 20.4325 17.5808L17.1217 3.24998C17.029 2.85049 16.8362 2.48117 16.5614 2.17677C16.2866 1.87236 15.9388 1.6429 15.5508 1.50998C14.9865 1.3084 14.4037 1.16271 13.8108 1.07498C13.2 0.933351 12.5767 0.852403 11.95 0.833313C9.00169 0.833313 6.17412 2.00453 4.08934 4.08931C2.00456 6.17409 0.833344 9.00166 0.833344 11.95C0.846132 21.8165 4.77127 31.2753 11.748 38.252C18.7247 45.2287 28.1835 49.1539 38.05 49.1666C39.5099 49.1666 40.9554 48.8791 42.3042 48.3204C43.6529 47.7618 44.8784 46.9429 45.9107 45.9107C46.943 44.8784 47.7618 43.6529 48.3205 42.3041C48.8791 40.9554 49.1667 39.5098 49.1667 38.05C49.1674 37.4349 49.1189 36.8207 49.0217 36.2133C48.9201 35.613 48.7665 35.0228 48.5625 34.4491ZM38.05 44.3333C29.4634 44.3269 21.2303 40.9131 15.1586 34.8414C9.08694 28.7697 5.67308 20.5366 5.66668 11.95C5.67304 10.2855 6.33708 8.691 7.51406 7.51402C8.69103 6.33705 10.2855 5.67301 11.95 5.66665H12.7475L15.3333 16.88L14.0283 17.5566C11.95 18.6441 10.3067 19.5141 11.1767 21.3991C12.5934 25.4098 14.8857 29.0545 17.8871 32.0684C20.8885 35.0824 24.5236 37.3899 28.5283 38.8233C30.5583 39.645 31.3558 38.1225 32.4433 36.02L33.1442 34.6908L44.3333 37.2525V38.05C44.327 39.7145 43.6629 41.309 42.486 42.4859C41.309 43.6629 39.7145 44.327 38.05 44.3333Z" fill="#FF8D24"/>
      </svg>

                </div>

              <div class="single-product__info-phone">


                <div class="single-product__info-link">
                  <?php if (!empty(do_shortcode('[tel_number id=17]'))): ?>
                    <?php echo do_shortcode('[tel_number id=17]') ?>
                  <?php else: ?>
                    <a href="tel:+73472008463" class="mgo-number-12072">+7 (347) 200-84-63</a>
                  <?php endif; ?>
                </div>



                <div class="single-product__info-subtext">ЗВОНИТЕ КРУГЛОСУТОЧНО</div>
              </div>
              <div class="phone-icon">
                  <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M27.4167 15.3333C29.3395 15.3333 31.1836 16.0972 32.5432 17.4568C33.9028 18.8164 34.6667 20.6605 34.6667 22.5833C34.6667 23.2243 34.9213 23.839 35.3745 24.2922C35.8277 24.7454 36.4424 25 37.0833 25C37.7243 25 38.339 24.7454 38.7922 24.2922C39.2454 23.839 39.5 23.2243 39.5 22.5833C39.5 19.3786 38.2269 16.3052 35.9609 14.0391C33.6948 11.7731 30.6214 10.5 27.4167 10.5C26.7757 10.5 26.161 10.7546 25.7078 11.2078C25.2546 11.661 25 12.2757 25 12.9167C25 13.5576 25.2546 14.1723 25.7078 14.6255C26.161 15.0787 26.7757 15.3333 27.4167 15.3333Z" fill="#FF8D24"/>
                  <path d="M27.4167 5.66665C31.9033 5.66665 36.2061 7.44893 39.3786 10.6214C42.5511 13.7939 44.3333 18.0967 44.3333 22.5833C44.3333 23.2243 44.588 23.8389 45.0412 24.2922C45.4944 24.7454 46.1091 25 46.75 25C47.391 25 48.0056 24.7454 48.4589 24.2922C48.9121 23.8389 49.1667 23.2243 49.1667 22.5833C49.1667 16.8149 46.8752 11.2827 42.7962 7.20374C38.7173 3.12482 33.1851 0.833313 27.4167 0.833313C26.7757 0.833313 26.161 1.08793 25.7078 1.54114C25.2546 1.99435 25 2.60904 25 3.24998C25 3.89092 25.2546 4.50561 25.7078 4.95882C26.161 5.41203 26.7757 5.66665 27.4167 5.66665ZM48.5625 34.4491C48.4296 34.0612 48.2001 33.7134 47.8957 33.4386C47.5913 33.1638 47.222 32.971 46.8225 32.8783L32.3225 29.5675C31.9289 29.4782 31.5193 29.489 31.1309 29.5987C30.7425 29.7085 30.3878 29.9138 30.0992 30.1958C29.7608 30.51 29.7367 30.5341 28.1658 33.5308C22.9536 31.129 18.7771 26.9354 16.3967 21.7133C19.4658 20.1666 19.49 20.1666 19.8042 19.8041C20.0862 19.5155 20.2915 19.1608 20.4012 18.7724C20.511 18.3841 20.5218 17.9744 20.4325 17.5808L17.1217 3.24998C17.029 2.85049 16.8362 2.48117 16.5614 2.17677C16.2866 1.87236 15.9388 1.6429 15.5508 1.50998C14.9865 1.3084 14.4037 1.16271 13.8108 1.07498C13.2 0.933351 12.5767 0.852403 11.95 0.833313C9.00169 0.833313 6.17412 2.00453 4.08934 4.08931C2.00456 6.17409 0.833344 9.00166 0.833344 11.95C0.846132 21.8165 4.77127 31.2753 11.748 38.252C18.7247 45.2287 28.1835 49.1539 38.05 49.1666C39.5099 49.1666 40.9554 48.8791 42.3042 48.3204C43.6529 47.7618 44.8784 46.9429 45.9107 45.9107C46.943 44.8784 47.7618 43.6529 48.3205 42.3041C48.8791 40.9554 49.1667 39.5098 49.1667 38.05C49.1674 37.4349 49.1189 36.8207 49.0217 36.2133C48.9201 35.613 48.7665 35.0228 48.5625 34.4491ZM38.05 44.3333C29.4634 44.3269 21.2303 40.9131 15.1586 34.8414C9.08694 28.7697 5.67308 20.5366 5.66668 11.95C5.67304 10.2855 6.33708 8.691 7.51406 7.51402C8.69103 6.33705 10.2855 5.67301 11.95 5.66665H12.7475L15.3333 16.88L14.0283 17.5566C11.95 18.6441 10.3067 19.5141 11.1767 21.3991C12.5934 25.4098 14.8857 29.0545 17.8871 32.0684C20.8885 35.0824 24.5236 37.3899 28.5283 38.8233C30.5583 39.645 31.3558 38.1225 32.4433 36.02L33.1442 34.6908L44.3333 37.2525V38.05C44.327 39.7145 43.6629 41.309 42.486 42.4859C41.309 43.6629 39.7145 44.327 38.05 44.3333Z" fill="#FF8D24"/>
                  </svg>

              </div>
            </div>

            <div class="single__product-popups pad-b-20">
              <a class="button single-product__schet--whatsapp" href="https://api.whatsapp.com/send?phone=79378339350&text=<?php  echo nowUrl(); ?> | Здравствуйте, " class="header__whatsapp" target="_blank">Запросить в WhatsApp</a>
              <a href="http://T.me/aliiaval" target="_blank" class="button single-product__schet--tg">Запросить в Telegram</a>
            </div>

          </div>
        </div>
        <div class="mlp-econom mlp-econom__opalubka">
          <div class="container">
            <h2 class="mlp-econom__title mlp-info__title">ВИДЫ ЩИТОВОЙ ОПАЛУБКИ</h2>
            <ul class="mlp-econom__opalubka-list col-grid-4 col-grid-gap-30">
              <li class="mlp-econom__opalubka-item">
                <div class="mlp-econom__opalubka-image_wrap">
                  <img src="/wp-content/uploads/2021/01/opsten_big-1.png" alt="" class="mlp-econom__opalubka-image">
                </div>
                <div class="mlp-econom__opalubka-title mlp-econom__variants-title">Опалубка стен<br><br></div>
                <div class="mlp-econom__opalubka-text">
                  <div class="mlp-econom__opalubka-subtitle">Технические характеристики:</div>
                  <span>Ширина щитов: от 0.2 до 1.2 м</span>
                  <span>Высота щитов: от 1.0 до 3.0 м</span>
                  <span>Нагрузка (СНиП): до 8000 Н на м2</span>
                </div>
                <div class="mlp-econom__opalubka-button_wrap">
                  <b><?php echo (!empty(do_shortcode('[cityName id=22]')) && do_shortcode('[cityName id=22]') == 'г. Нур-Султан') ? 'от: 23000 тг м' : 'от: 4580 руб за комплект'?><sup>2</sup></b>
                  <div class="button mlp-econom__opalubka-button" data-type="opalubka-sten">Подробнее</div>
                </div>
              </li>
              <li class="mlp-econom__opalubka-item">
                <div class="mlp-econom__opalubka-image_wrap">
                  <img src="/wp-content/uploads/2021/01/opalubka2.png" alt="" class="mlp-econom__opalubka-image">
                </div>
                <div class="mlp-econom__opalubka-title mlp-econom__variants-title">Опалубка лифтовых шахт</div>
                <div class="mlp-econom__opalubka-text">
                  <div class="mlp-econom__opalubka-subtitle">Технические характеристики:</div>
                  <span>Ширина щитов: от 0.2 до 1.2 м</span>
                  <span>Высота щитов: от 1.0 до 3.0 м</span>
                  <span>Нагрузка (СНиП): до 8000 Н на м2</span>
                </div>
                <div class="mlp-econom__opalubka-button_wrap">
                  <b><?php echo (!empty(do_shortcode('[cityName id=22]')) && do_shortcode('[cityName id=22]') == 'г. Нур-Султан') ? 'от: 26000 тг за м' : 'от: 6340 руб за комплект' ?><sup>2</sup></b>
                  <div class="button mlp-econom__opalubka-button" data-type="opalubka-lift">Подробнее</div>
                </div>
              </li>
              <li class="mlp-econom__opalubka-item">
                <div class="mlp-econom__opalubka-image_wrap">
                  <img src="/wp-content/uploads/2021/01/opalubka3.png" alt="" class="mlp-econom__opalubka-image">
                </div>
                <div class="mlp-econom__opalubka-title mlp-econom__variants-title">Опалубка колонн на угловых щитах</div>
                <div class="mlp-econom__opalubka-text">
                  <div class="mlp-econom__opalubka-subtitle">Технические характеристики:</div>
                  <span>Ширина щитов: от 0.2 до 1.2 м</span>
                  <span>Высота щитов: от 1.0 до 3.0 м</span>
                  <span>Нагрузка (СНиП): до 8000 Н на м2</span>
                </div>
                <div class="mlp-econom__opalubka-button_wrap">
                  <b><?php echo (!empty(do_shortcode('[cityName id=22]')) && do_shortcode('[cityName id=22]') == 'г. Нур-Султан') ? 'от: 23000 тг м' : 'от: 2100 руб за комплект'?><sup>2</sup></b>
                  <div class="button mlp-econom__opalubka-button" data-type="opalubka-kolon">Подробнее</div>
                </div>
              </li>
              <li class="mlp-econom__opalubka-item">
                <div class="mlp-econom__opalubka-image_wrap">
                  <img src="/wp-content/uploads/2021/01/opalubka3_1.png" alt="" class="mlp-econom__opalubka-image">
                </div>
                <div class="mlp-econom__opalubka-title mlp-econom__variants-title">Опалубка колон на универсальных щитах</div>
                <div class="mlp-econom__opalubka-text">
                  <div class="mlp-econom__opalubka-subtitle">Технические характеристики:</div>
                  <span>Ширина щитов: от 0.2 до 1.2 м</span>
                  <span>Высота щитов: от 1.0 до 3.0 м</span>
                  <span>Нагрузка (СНиП): до 8000 Н на м2</span>
                </div>
                <div class="mlp-econom__opalubka-button_wrap">
                  <b><?php echo (!empty(do_shortcode('[cityName id=22]')) && do_shortcode('[cityName id=22]') == 'г. Нур-Султан') ? 'от: 390 000 тг / комплект' : 'от: 2800 руб за комплект'?><sup>2</sup></b>
                  <div class="button mlp-econom__opalubka-button" data-type="opalubka-kolon-univ">Подробнее</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="single-product__info-wrap pad-t-40">
            <div class="phone-icon">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M27.4167 15.3333C29.3395 15.3333 31.1836 16.0972 32.5432 17.4568C33.9028 18.8164 34.6667 20.6605 34.6667 22.5833C34.6667 23.2243 34.9213 23.839 35.3745 24.2922C35.8277 24.7454 36.4424 25 37.0833 25C37.7243 25 38.339 24.7454 38.7922 24.2922C39.2454 23.839 39.5 23.2243 39.5 22.5833C39.5 19.3786 38.2269 16.3052 35.9609 14.0391C33.6948 11.7731 30.6214 10.5 27.4167 10.5C26.7757 10.5 26.161 10.7546 25.7078 11.2078C25.2546 11.661 25 12.2757 25 12.9167C25 13.5576 25.2546 14.1723 25.7078 14.6255C26.161 15.0787 26.7757 15.3333 27.4167 15.3333Z" fill="#FF8D24"/>
  <path d="M27.4167 5.66665C31.9033 5.66665 36.2061 7.44893 39.3786 10.6214C42.5511 13.7939 44.3333 18.0967 44.3333 22.5833C44.3333 23.2243 44.588 23.8389 45.0412 24.2922C45.4944 24.7454 46.1091 25 46.75 25C47.391 25 48.0056 24.7454 48.4589 24.2922C48.9121 23.8389 49.1667 23.2243 49.1667 22.5833C49.1667 16.8149 46.8752 11.2827 42.7962 7.20374C38.7173 3.12482 33.1851 0.833313 27.4167 0.833313C26.7757 0.833313 26.161 1.08793 25.7078 1.54114C25.2546 1.99435 25 2.60904 25 3.24998C25 3.89092 25.2546 4.50561 25.7078 4.95882C26.161 5.41203 26.7757 5.66665 27.4167 5.66665ZM48.5625 34.4491C48.4296 34.0612 48.2001 33.7134 47.8957 33.4386C47.5913 33.1638 47.222 32.971 46.8225 32.8783L32.3225 29.5675C31.9289 29.4782 31.5193 29.489 31.1309 29.5987C30.7425 29.7085 30.3878 29.9138 30.0992 30.1958C29.7608 30.51 29.7367 30.5341 28.1658 33.5308C22.9536 31.129 18.7771 26.9354 16.3967 21.7133C19.4658 20.1666 19.49 20.1666 19.8042 19.8041C20.0862 19.5155 20.2915 19.1608 20.4012 18.7724C20.511 18.3841 20.5218 17.9744 20.4325 17.5808L17.1217 3.24998C17.029 2.85049 16.8362 2.48117 16.5614 2.17677C16.2866 1.87236 15.9388 1.6429 15.5508 1.50998C14.9865 1.3084 14.4037 1.16271 13.8108 1.07498C13.2 0.933351 12.5767 0.852403 11.95 0.833313C9.00169 0.833313 6.17412 2.00453 4.08934 4.08931C2.00456 6.17409 0.833344 9.00166 0.833344 11.95C0.846132 21.8165 4.77127 31.2753 11.748 38.252C18.7247 45.2287 28.1835 49.1539 38.05 49.1666C39.5099 49.1666 40.9554 48.8791 42.3042 48.3204C43.6529 47.7618 44.8784 46.9429 45.9107 45.9107C46.943 44.8784 47.7618 43.6529 48.3205 42.3041C48.8791 40.9554 49.1667 39.5098 49.1667 38.05C49.1674 37.4349 49.1189 36.8207 49.0217 36.2133C48.9201 35.613 48.7665 35.0228 48.5625 34.4491ZM38.05 44.3333C29.4634 44.3269 21.2303 40.9131 15.1586 34.8414C9.08694 28.7697 5.67308 20.5366 5.66668 11.95C5.67304 10.2855 6.33708 8.691 7.51406 7.51402C8.69103 6.33705 10.2855 5.67301 11.95 5.66665H12.7475L15.3333 16.88L14.0283 17.5566C11.95 18.6441 10.3067 19.5141 11.1767 21.3991C12.5934 25.4098 14.8857 29.0545 17.8871 32.0684C20.8885 35.0824 24.5236 37.3899 28.5283 38.8233C30.5583 39.645 31.3558 38.1225 32.4433 36.02L33.1442 34.6908L44.3333 37.2525V38.05C44.327 39.7145 43.6629 41.309 42.486 42.4859C41.309 43.6629 39.7145 44.327 38.05 44.3333Z" fill="#FF8D24"/>
  </svg>

            </div>

          <div class="single-product__info-phone">


            <div class="single-product__info-link">
              <?php if (!empty(do_shortcode('[tel_number id=17]'))): ?>
                <?php echo do_shortcode('[tel_number id=17]') ?>
              <?php else: ?>
                <a href="tel:+73472008463" class="mgo-number-12072">+7 (347) 200-84-63</a>
              <?php endif; ?>
            </div>



            <div class="single-product__info-subtext">ЗВОНИТЕ КРУГЛОСУТОЧНО</div>
          </div>
          <div class="phone-icon">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M27.4167 15.3333C29.3395 15.3333 31.1836 16.0972 32.5432 17.4568C33.9028 18.8164 34.6667 20.6605 34.6667 22.5833C34.6667 23.2243 34.9213 23.839 35.3745 24.2922C35.8277 24.7454 36.4424 25 37.0833 25C37.7243 25 38.339 24.7454 38.7922 24.2922C39.2454 23.839 39.5 23.2243 39.5 22.5833C39.5 19.3786 38.2269 16.3052 35.9609 14.0391C33.6948 11.7731 30.6214 10.5 27.4167 10.5C26.7757 10.5 26.161 10.7546 25.7078 11.2078C25.2546 11.661 25 12.2757 25 12.9167C25 13.5576 25.2546 14.1723 25.7078 14.6255C26.161 15.0787 26.7757 15.3333 27.4167 15.3333Z" fill="#FF8D24"/>
              <path d="M27.4167 5.66665C31.9033 5.66665 36.2061 7.44893 39.3786 10.6214C42.5511 13.7939 44.3333 18.0967 44.3333 22.5833C44.3333 23.2243 44.588 23.8389 45.0412 24.2922C45.4944 24.7454 46.1091 25 46.75 25C47.391 25 48.0056 24.7454 48.4589 24.2922C48.9121 23.8389 49.1667 23.2243 49.1667 22.5833C49.1667 16.8149 46.8752 11.2827 42.7962 7.20374C38.7173 3.12482 33.1851 0.833313 27.4167 0.833313C26.7757 0.833313 26.161 1.08793 25.7078 1.54114C25.2546 1.99435 25 2.60904 25 3.24998C25 3.89092 25.2546 4.50561 25.7078 4.95882C26.161 5.41203 26.7757 5.66665 27.4167 5.66665ZM48.5625 34.4491C48.4296 34.0612 48.2001 33.7134 47.8957 33.4386C47.5913 33.1638 47.222 32.971 46.8225 32.8783L32.3225 29.5675C31.9289 29.4782 31.5193 29.489 31.1309 29.5987C30.7425 29.7085 30.3878 29.9138 30.0992 30.1958C29.7608 30.51 29.7367 30.5341 28.1658 33.5308C22.9536 31.129 18.7771 26.9354 16.3967 21.7133C19.4658 20.1666 19.49 20.1666 19.8042 19.8041C20.0862 19.5155 20.2915 19.1608 20.4012 18.7724C20.511 18.3841 20.5218 17.9744 20.4325 17.5808L17.1217 3.24998C17.029 2.85049 16.8362 2.48117 16.5614 2.17677C16.2866 1.87236 15.9388 1.6429 15.5508 1.50998C14.9865 1.3084 14.4037 1.16271 13.8108 1.07498C13.2 0.933351 12.5767 0.852403 11.95 0.833313C9.00169 0.833313 6.17412 2.00453 4.08934 4.08931C2.00456 6.17409 0.833344 9.00166 0.833344 11.95C0.846132 21.8165 4.77127 31.2753 11.748 38.252C18.7247 45.2287 28.1835 49.1539 38.05 49.1666C39.5099 49.1666 40.9554 48.8791 42.3042 48.3204C43.6529 47.7618 44.8784 46.9429 45.9107 45.9107C46.943 44.8784 47.7618 43.6529 48.3205 42.3041C48.8791 40.9554 49.1667 39.5098 49.1667 38.05C49.1674 37.4349 49.1189 36.8207 49.0217 36.2133C48.9201 35.613 48.7665 35.0228 48.5625 34.4491ZM38.05 44.3333C29.4634 44.3269 21.2303 40.9131 15.1586 34.8414C9.08694 28.7697 5.67308 20.5366 5.66668 11.95C5.67304 10.2855 6.33708 8.691 7.51406 7.51402C8.69103 6.33705 10.2855 5.67301 11.95 5.66665H12.7475L15.3333 16.88L14.0283 17.5566C11.95 18.6441 10.3067 19.5141 11.1767 21.3991C12.5934 25.4098 14.8857 29.0545 17.8871 32.0684C20.8885 35.0824 24.5236 37.3899 28.5283 38.8233C30.5583 39.645 31.3558 38.1225 32.4433 36.02L33.1442 34.6908L44.3333 37.2525V38.05C44.327 39.7145 43.6629 41.309 42.486 42.4859C41.309 43.6629 39.7145 44.327 38.05 44.3333Z" fill="#FF8D24"/>
              </svg>

          </div>
        </div>
        <div class="mlp-econom mlp-econom__opalubka">
          <div class="container">
            <h2 class="mlp-econom__title mlp-info__title">ВИДЫ ОПАЛУБКИ ПЕРЕКРЫТИЙ</h2>
            <ul class="mlp-econom__opalubka-list col-grid-3 col-grid-gap-30">
              <li class="mlp-econom__opalubka-item">
                <div class="mlp-econom__opalubka-image_wrap">
                  <img src="/wp-content/uploads/2021/01/opalubka_p1333.png" alt="" class="mlp-econom__opalubka-image">
                </div>
                <div class="mlp-econom__opalubka-title mlp-econom__variants-title">Опалубка перекрытий на<br>телескопических стойках</div>
                <div class="mlp-econom__opalubka-text">
                  <div class="mlp-econom__opalubka-subtitle">Базовая комплектация:</div>
                  <span>Телескопические стойки высотой 2,5 м, 3,1 м, 3,7 м , 4,2 м  и 4,5 м</span>
                  <span>Унивилки для связки палубы и опорной части</span>
                  <span>Треноги, ускоряющие монтаж стоек опалубки.</span>
                </div>
                <div class="mlp-econom__opalubka-button_wrap">
                  <div class="button mlp-econom__opalubka-button cons-pu">Заказать расчет</div>
                </div>
              </li>
              <li class="mlp-econom__opalubka-item">
                <div class="mlp-econom__opalubka-image_wrap">
                  <img src="/wp-content/uploads/2021/01/cuplock.png" alt="" class="mlp-econom__opalubka-image">
                </div>
                <div class="mlp-econom__opalubka-title mlp-econom__variants-title">Чашечная опалубка перекрытий<br><br></div>
                <div class="mlp-econom__opalubka-text">
                  <div class="mlp-econom__opalubka-subtitle">Базовая комплектация:</div>
                  <span>Домкраты нижние и унивилки верхние</span>
                  <span>Соединительные вставки</span>
                  <span>Вертикальные и горизонтальные трубы</span>
                  <span>Соединительные чашечные узлы</span>
                </div>
                <div class="mlp-econom__opalubka-button_wrap">
                  <div class="button mlp-econom__opalubka-button cons-pu">Заказать расчет</div>
                </div>
              </li>
              <li class="mlp-econom__opalubka-item">
                <div class="mlp-econom__opalubka-image_wrap">
                  <img src="/wp-content/uploads/2021/01/opalubka_p2232.png" alt="" class="mlp-econom__opalubka-image">
                </div>
                <div class="mlp-econom__opalubka-title mlp-econom__variants-title">Рамная опалубка перекрытий<br><br></div>
                <div class="mlp-econom__opalubka-text">
                  <div class="mlp-econom__opalubka-subtitle">Базовая комплектация:</div>
                  <span>Узловые ригели</span>
                  <span>Соединительные вставки</span>
                  <span>Домкраты</span>
                  <span>Унивилки-опоры.</span>
                </div>
                <div class="mlp-econom__opalubka-button_wrap">
                  <div class="button mlp-econom__opalubka-button cons-pu">Заказать расчет</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="mlp-info mlp-info__opalubka">
          <div class="container">
            <h2 class="mlp-info__title">СОБСТВЕННЫЙ КОНСТРУКТОРСКИЙ ОТДЕЛ</h2>
            <div class="mlp-info__advantages">
              <div class="mlp-info__advantages-row col-flex-row">
                <div class="mlp-info__advantages-col col-w_2">
                  <figure class="mlp-info__opalubka-image">
										<img width="603" height="232" src="/wp-content/uploads/2021/01/specify_new.png" class="attachment-large size-large" alt="Продажа и аренда опалубки РБ">
                    <figcaption class="widget-image-caption wp-caption-text">Присылайте спецификацию или проект на почту <a href="mailto:zakaz@ufaprom.ru">zakaz@ufaprom.ru</a></figcaption>
									</figure>
                </div>
                <div class="mlp-info__advantages-col col-w_2">
                  <div class="mlp-info__opalubka-text">
                    <p>Расчет опалубки производят квалифицированные инженеры конструкторского отдела.</p><br>
                    <p>Ведущий специалист — Абрамов Дмитрий. Профессионально занимается опалубочными системами более 8-ми лет. За это время по его расчетам было возведено сотни монолитных конструкций зданий и сооружений гражданского и промышленного назначений.</p>
                  </div>
                  <div class="mlp-info__opalubka-form">
                    <form action="javascript: console.log('Форма отправлена')" class="mlp__screen-form col-grid-1 send-form">
                      <input type="tel" class="form__lesa-phone" id="form__lesa-phone" name="phone" placeholder="Контактный телефон" required>
                      <input type="submit" class="button form__lesa-phone" required placeholder="Оставить заявку сейчас!">
                    </form>
                    <div class="consultation__policy">Нажимая на кнопку, Вы принимаете условия <a href="/zayavlenie-o-konfidentsialnosti/" target="_blank" class="consultation__policy-link">политики конфиденциальности</a> компании и даете согласие на обработку персональных данных.</div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="mlp-econom">
          <div class="container">
            <h2 class="mlp-econom__title mlp-info__title">ХОТИТЕ СЭКОНОМИТЬ? МЫ ПОМОЖЕМ!​</h2>
            <div class="mlp-econom__subtitle">Благодаря услуге «Обратный выкуп» мы располагаем большим объемом Б/У опалубки. Наши менеджеры смогут подобрать оборудование под ваш бюджет. Купив новую опалубку вы можете продать ее нам обратно после использование за цену вплоть до 70% от первоначальной стоимости!</div>
            <div class="mlp-econom__variants col-grid-3 pad-t-40">
              <div class="mlp-econom__variants-new">
                <div class="mlp-econom__variants-title">Покупка новой опалубки</div>
                <div class="mlp-econom__variants-wrap">
                  <div class="mlp-econom__variants-image">
                    <img src="/wp-content/uploads/2021/01/3.png" alt="">
                  </div>
                  <ul class="mlp-econom__variants-list">
                    <li class="mlp-econom__variants-item">- Гарантия 1 год</li>
                    <li class="mlp-econom__variants-item">- Возможность обратного выкупа (закажите, используйте, продайте обратно за 70% от первоначальной стоимости)</li>
                    <li class="mlp-econom__variants-item">- Большой объем в наличии</li>
                    <li class="mlp-econom__variants-item">- Сервисное обслуживание</li>
                  </ul>
                </div>
              </div>
              <div class="mlp-econom__new-raschet">
                <div class="mlp__screen-cta mlp-econom__cta"><?php echo do_shortcode('[CTA id=12 fallback="Получите расчёт стоимости комплекта лесов"]') ?></div>
                <form action="javascript: console.log('Форма отправлена')" class="mlp__screen-form col-grid-1 send-form">
                  <input type="tel" class="form__lesa-phone form__lesa-phone--econom" id="form__lesa-phone" name="phone" placeholder="Контактный телефон" required>
                  <input type="submit" class="button form__lesa-phone" required placeholder="Оставить заявку сейчас!">
                </form>
                <div class="consultation__policy">Нажимая на кнопку, Вы принимаете условия <a href="/zayavlenie-o-konfidentsialnosti/" target="_blank" class="consultation__policy-link">политики конфиденциальности</a> компании и даете согласие на обработку персональных данных.</div>
              </div>
              <div class="mlp-econom__variants-bu">
                <div class="mlp-econom__variants-title">Покупка Б/У опалубки</div>
                <div class="mlp-econom__variants-wrap">
                  <div class="mlp-econom__variants-image">
                    <img src="/wp-content/uploads/2021/01/opalubka-sten-kolonn-vertikal_naya-opalubka-shitovaya-opalub-166157b.jpg" alt="">
                  </div>
                  <ul class="mlp-econom__variants-list">
                    <li class="mlp-econom__variants-item">- Дешевле на 15-20%</li>
                    <li class="mlp-econom__variants-item">- Ничем не уступают новым по функционалу и надежности</li>
                    <li class="mlp-econom__variants-item">- Уточняйте наличие по телефону</li>
                    <li class="mlp-econom__variants-item">- Сервисное обслуживание</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="single-product__info-wrap pad-t-40">
            <div class="phone-icon">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M27.4167 15.3333C29.3395 15.3333 31.1836 16.0972 32.5432 17.4568C33.9028 18.8164 34.6667 20.6605 34.6667 22.5833C34.6667 23.2243 34.9213 23.839 35.3745 24.2922C35.8277 24.7454 36.4424 25 37.0833 25C37.7243 25 38.339 24.7454 38.7922 24.2922C39.2454 23.839 39.5 23.2243 39.5 22.5833C39.5 19.3786 38.2269 16.3052 35.9609 14.0391C33.6948 11.7731 30.6214 10.5 27.4167 10.5C26.7757 10.5 26.161 10.7546 25.7078 11.2078C25.2546 11.661 25 12.2757 25 12.9167C25 13.5576 25.2546 14.1723 25.7078 14.6255C26.161 15.0787 26.7757 15.3333 27.4167 15.3333Z" fill="#FF8D24"/>
  <path d="M27.4167 5.66665C31.9033 5.66665 36.2061 7.44893 39.3786 10.6214C42.5511 13.7939 44.3333 18.0967 44.3333 22.5833C44.3333 23.2243 44.588 23.8389 45.0412 24.2922C45.4944 24.7454 46.1091 25 46.75 25C47.391 25 48.0056 24.7454 48.4589 24.2922C48.9121 23.8389 49.1667 23.2243 49.1667 22.5833C49.1667 16.8149 46.8752 11.2827 42.7962 7.20374C38.7173 3.12482 33.1851 0.833313 27.4167 0.833313C26.7757 0.833313 26.161 1.08793 25.7078 1.54114C25.2546 1.99435 25 2.60904 25 3.24998C25 3.89092 25.2546 4.50561 25.7078 4.95882C26.161 5.41203 26.7757 5.66665 27.4167 5.66665ZM48.5625 34.4491C48.4296 34.0612 48.2001 33.7134 47.8957 33.4386C47.5913 33.1638 47.222 32.971 46.8225 32.8783L32.3225 29.5675C31.9289 29.4782 31.5193 29.489 31.1309 29.5987C30.7425 29.7085 30.3878 29.9138 30.0992 30.1958C29.7608 30.51 29.7367 30.5341 28.1658 33.5308C22.9536 31.129 18.7771 26.9354 16.3967 21.7133C19.4658 20.1666 19.49 20.1666 19.8042 19.8041C20.0862 19.5155 20.2915 19.1608 20.4012 18.7724C20.511 18.3841 20.5218 17.9744 20.4325 17.5808L17.1217 3.24998C17.029 2.85049 16.8362 2.48117 16.5614 2.17677C16.2866 1.87236 15.9388 1.6429 15.5508 1.50998C14.9865 1.3084 14.4037 1.16271 13.8108 1.07498C13.2 0.933351 12.5767 0.852403 11.95 0.833313C9.00169 0.833313 6.17412 2.00453 4.08934 4.08931C2.00456 6.17409 0.833344 9.00166 0.833344 11.95C0.846132 21.8165 4.77127 31.2753 11.748 38.252C18.7247 45.2287 28.1835 49.1539 38.05 49.1666C39.5099 49.1666 40.9554 48.8791 42.3042 48.3204C43.6529 47.7618 44.8784 46.9429 45.9107 45.9107C46.943 44.8784 47.7618 43.6529 48.3205 42.3041C48.8791 40.9554 49.1667 39.5098 49.1667 38.05C49.1674 37.4349 49.1189 36.8207 49.0217 36.2133C48.9201 35.613 48.7665 35.0228 48.5625 34.4491ZM38.05 44.3333C29.4634 44.3269 21.2303 40.9131 15.1586 34.8414C9.08694 28.7697 5.67308 20.5366 5.66668 11.95C5.67304 10.2855 6.33708 8.691 7.51406 7.51402C8.69103 6.33705 10.2855 5.67301 11.95 5.66665H12.7475L15.3333 16.88L14.0283 17.5566C11.95 18.6441 10.3067 19.5141 11.1767 21.3991C12.5934 25.4098 14.8857 29.0545 17.8871 32.0684C20.8885 35.0824 24.5236 37.3899 28.5283 38.8233C30.5583 39.645 31.3558 38.1225 32.4433 36.02L33.1442 34.6908L44.3333 37.2525V38.05C44.327 39.7145 43.6629 41.309 42.486 42.4859C41.309 43.6629 39.7145 44.327 38.05 44.3333Z" fill="#FF8D24"/>
  </svg>

            </div>

          <div class="single-product__info-phone">


            <div class="single-product__info-link">
              <?php if (!empty(do_shortcode('[tel_number id=17]'))): ?>
                <?php echo do_shortcode('[tel_number id=17]') ?>
              <?php else: ?>
                <a href="tel:+73472008463" class="mgo-number-12072">+7 (347) 200-84-63</a>
              <?php endif; ?>
            </div>



            <div class="single-product__info-subtext">ЗВОНИТЕ КРУГЛОСУТОЧНО</div>
          </div>
          <div class="phone-icon">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M27.4167 15.3333C29.3395 15.3333 31.1836 16.0972 32.5432 17.4568C33.9028 18.8164 34.6667 20.6605 34.6667 22.5833C34.6667 23.2243 34.9213 23.839 35.3745 24.2922C35.8277 24.7454 36.4424 25 37.0833 25C37.7243 25 38.339 24.7454 38.7922 24.2922C39.2454 23.839 39.5 23.2243 39.5 22.5833C39.5 19.3786 38.2269 16.3052 35.9609 14.0391C33.6948 11.7731 30.6214 10.5 27.4167 10.5C26.7757 10.5 26.161 10.7546 25.7078 11.2078C25.2546 11.661 25 12.2757 25 12.9167C25 13.5576 25.2546 14.1723 25.7078 14.6255C26.161 15.0787 26.7757 15.3333 27.4167 15.3333Z" fill="#FF8D24"/>
              <path d="M27.4167 5.66665C31.9033 5.66665 36.2061 7.44893 39.3786 10.6214C42.5511 13.7939 44.3333 18.0967 44.3333 22.5833C44.3333 23.2243 44.588 23.8389 45.0412 24.2922C45.4944 24.7454 46.1091 25 46.75 25C47.391 25 48.0056 24.7454 48.4589 24.2922C48.9121 23.8389 49.1667 23.2243 49.1667 22.5833C49.1667 16.8149 46.8752 11.2827 42.7962 7.20374C38.7173 3.12482 33.1851 0.833313 27.4167 0.833313C26.7757 0.833313 26.161 1.08793 25.7078 1.54114C25.2546 1.99435 25 2.60904 25 3.24998C25 3.89092 25.2546 4.50561 25.7078 4.95882C26.161 5.41203 26.7757 5.66665 27.4167 5.66665ZM48.5625 34.4491C48.4296 34.0612 48.2001 33.7134 47.8957 33.4386C47.5913 33.1638 47.222 32.971 46.8225 32.8783L32.3225 29.5675C31.9289 29.4782 31.5193 29.489 31.1309 29.5987C30.7425 29.7085 30.3878 29.9138 30.0992 30.1958C29.7608 30.51 29.7367 30.5341 28.1658 33.5308C22.9536 31.129 18.7771 26.9354 16.3967 21.7133C19.4658 20.1666 19.49 20.1666 19.8042 19.8041C20.0862 19.5155 20.2915 19.1608 20.4012 18.7724C20.511 18.3841 20.5218 17.9744 20.4325 17.5808L17.1217 3.24998C17.029 2.85049 16.8362 2.48117 16.5614 2.17677C16.2866 1.87236 15.9388 1.6429 15.5508 1.50998C14.9865 1.3084 14.4037 1.16271 13.8108 1.07498C13.2 0.933351 12.5767 0.852403 11.95 0.833313C9.00169 0.833313 6.17412 2.00453 4.08934 4.08931C2.00456 6.17409 0.833344 9.00166 0.833344 11.95C0.846132 21.8165 4.77127 31.2753 11.748 38.252C18.7247 45.2287 28.1835 49.1539 38.05 49.1666C39.5099 49.1666 40.9554 48.8791 42.3042 48.3204C43.6529 47.7618 44.8784 46.9429 45.9107 45.9107C46.943 44.8784 47.7618 43.6529 48.3205 42.3041C48.8791 40.9554 49.1667 39.5098 49.1667 38.05C49.1674 37.4349 49.1189 36.8207 49.0217 36.2133C48.9201 35.613 48.7665 35.0228 48.5625 34.4491ZM38.05 44.3333C29.4634 44.3269 21.2303 40.9131 15.1586 34.8414C9.08694 28.7697 5.67308 20.5366 5.66668 11.95C5.67304 10.2855 6.33708 8.691 7.51406 7.51402C8.69103 6.33705 10.2855 5.67301 11.95 5.66665H12.7475L15.3333 16.88L14.0283 17.5566C11.95 18.6441 10.3067 19.5141 11.1767 21.3991C12.5934 25.4098 14.8857 29.0545 17.8871 32.0684C20.8885 35.0824 24.5236 37.3899 28.5283 38.8233C30.5583 39.645 31.3558 38.1225 32.4433 36.02L33.1442 34.6908L44.3333 37.2525V38.05C44.327 39.7145 43.6629 41.309 42.486 42.4859C41.309 43.6629 39.7145 44.327 38.05 44.3333Z" fill="#FF8D24"/>
              </svg>

          </div>
        </div>
        <div class="mlp-info mlp-info__opalubka--two">
          <div class="container">
            <h2 class="mlp-info__title">НУЖНА ОПАЛУБКА НА КОРОТКИЙ СРОК?<br>ВОЗЬМИТЕ В АРЕНДУ!</h2>
            <div class="mlp-info__advantages">
              <div class="mlp-info__advantages-row col-flex-row">
                <div class="mlp-info__advantages-col">
                  <div class="projects-sinlge__slider-list projects-sinlge__slider-list--advantages projects-sinlge__slider-list--shortcodes owl-carousel">
                    <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/opalubka-sten-kolonn-vertikal_naya-opalubka-shitovaya-opalub-166157b-1.jpg" alt=""></div>
                    <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new-min.jpg" alt=""></div>
                    <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new1-min.jpg" alt=""></div>
                    <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new2-min.jpg" alt=""></div>
                    <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new3-min.jpg" alt=""></div>
                    <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new4-min.jpg" alt=""></div>
                    <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new5-min.jpg" alt=""></div>
                    <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new6-min.jpg" alt=""></div>
                    <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new7-min.jpg" alt=""></div>
                  </div>
                </div>
                <div class="mlp-info__advantages-col">
                  <div class="zima__tab-list_opalubka_title">КОМПЛЕКТ АРЕНДЫ ЩИТОВОЙ ОПАЛУБКИ:</div>
                  <ul class="zima__tab-list zima__tab-list_opalubka">
                    <li>Щиты, подобранные под ваш проект</li>
                    <li>Клиновые замки оцинкованные</li>
                    <li>Стяжные винты с гайками и шайбами</li>
                    <li>Кронштейны подмостей</li>
                    <li>Двухуровневые подкосы</li>
                  </ul>
                  <div class="zima__tab-list_opalubka_title">СТОИМОСТЬ АРЕНДЫ от <?php echo (!empty(do_shortcode('[cityName id=22]')) && do_shortcode('[cityName id=22]') == 'г. Нур-Султан') ? '4500 тг /м' : '500 руб./мес. за м'?>²</div>
                  <hr>
                  <div class="zima__tab-list_opalubka_title">КОМПЛЕКТ АРЕНДЫ ОПАЛУБКИ ПЕРЕКРЫТИЙ:</div>
                  <ul class="zima__tab-list zima__tab-list_opalubka">
                    <li>Стойки телескопические</li>
                    <li>Треноги</li>
                    <li>Унивилки</li>
                    <li>Балки двутавровые</li>
                  </ul>
                  <div class="zima__tab-list_opalubka_title">СТОИМОСТЬ АРЕНДЫ <?php echo (!empty(do_shortcode('[cityName id=22]')) && do_shortcode('[cityName id=22]') == 'г. Нур-Султан') ? '6500 тг за м' : '450 руб./мес. за м'?>²</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="single-product__info-wrap pad-t-40">
            <div class="phone-icon">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M27.4167 15.3333C29.3395 15.3333 31.1836 16.0972 32.5432 17.4568C33.9028 18.8164 34.6667 20.6605 34.6667 22.5833C34.6667 23.2243 34.9213 23.839 35.3745 24.2922C35.8277 24.7454 36.4424 25 37.0833 25C37.7243 25 38.339 24.7454 38.7922 24.2922C39.2454 23.839 39.5 23.2243 39.5 22.5833C39.5 19.3786 38.2269 16.3052 35.9609 14.0391C33.6948 11.7731 30.6214 10.5 27.4167 10.5C26.7757 10.5 26.161 10.7546 25.7078 11.2078C25.2546 11.661 25 12.2757 25 12.9167C25 13.5576 25.2546 14.1723 25.7078 14.6255C26.161 15.0787 26.7757 15.3333 27.4167 15.3333Z" fill="#FF8D24"/>
  <path d="M27.4167 5.66665C31.9033 5.66665 36.2061 7.44893 39.3786 10.6214C42.5511 13.7939 44.3333 18.0967 44.3333 22.5833C44.3333 23.2243 44.588 23.8389 45.0412 24.2922C45.4944 24.7454 46.1091 25 46.75 25C47.391 25 48.0056 24.7454 48.4589 24.2922C48.9121 23.8389 49.1667 23.2243 49.1667 22.5833C49.1667 16.8149 46.8752 11.2827 42.7962 7.20374C38.7173 3.12482 33.1851 0.833313 27.4167 0.833313C26.7757 0.833313 26.161 1.08793 25.7078 1.54114C25.2546 1.99435 25 2.60904 25 3.24998C25 3.89092 25.2546 4.50561 25.7078 4.95882C26.161 5.41203 26.7757 5.66665 27.4167 5.66665ZM48.5625 34.4491C48.4296 34.0612 48.2001 33.7134 47.8957 33.4386C47.5913 33.1638 47.222 32.971 46.8225 32.8783L32.3225 29.5675C31.9289 29.4782 31.5193 29.489 31.1309 29.5987C30.7425 29.7085 30.3878 29.9138 30.0992 30.1958C29.7608 30.51 29.7367 30.5341 28.1658 33.5308C22.9536 31.129 18.7771 26.9354 16.3967 21.7133C19.4658 20.1666 19.49 20.1666 19.8042 19.8041C20.0862 19.5155 20.2915 19.1608 20.4012 18.7724C20.511 18.3841 20.5218 17.9744 20.4325 17.5808L17.1217 3.24998C17.029 2.85049 16.8362 2.48117 16.5614 2.17677C16.2866 1.87236 15.9388 1.6429 15.5508 1.50998C14.9865 1.3084 14.4037 1.16271 13.8108 1.07498C13.2 0.933351 12.5767 0.852403 11.95 0.833313C9.00169 0.833313 6.17412 2.00453 4.08934 4.08931C2.00456 6.17409 0.833344 9.00166 0.833344 11.95C0.846132 21.8165 4.77127 31.2753 11.748 38.252C18.7247 45.2287 28.1835 49.1539 38.05 49.1666C39.5099 49.1666 40.9554 48.8791 42.3042 48.3204C43.6529 47.7618 44.8784 46.9429 45.9107 45.9107C46.943 44.8784 47.7618 43.6529 48.3205 42.3041C48.8791 40.9554 49.1667 39.5098 49.1667 38.05C49.1674 37.4349 49.1189 36.8207 49.0217 36.2133C48.9201 35.613 48.7665 35.0228 48.5625 34.4491ZM38.05 44.3333C29.4634 44.3269 21.2303 40.9131 15.1586 34.8414C9.08694 28.7697 5.67308 20.5366 5.66668 11.95C5.67304 10.2855 6.33708 8.691 7.51406 7.51402C8.69103 6.33705 10.2855 5.67301 11.95 5.66665H12.7475L15.3333 16.88L14.0283 17.5566C11.95 18.6441 10.3067 19.5141 11.1767 21.3991C12.5934 25.4098 14.8857 29.0545 17.8871 32.0684C20.8885 35.0824 24.5236 37.3899 28.5283 38.8233C30.5583 39.645 31.3558 38.1225 32.4433 36.02L33.1442 34.6908L44.3333 37.2525V38.05C44.327 39.7145 43.6629 41.309 42.486 42.4859C41.309 43.6629 39.7145 44.327 38.05 44.3333Z" fill="#FF8D24"/>
  </svg>

            </div>

          <div class="single-product__info-phone">


            <div class="single-product__info-link">
              <?php if (!empty(do_shortcode('[tel_number id=17]'))): ?>
                <?php echo do_shortcode('[tel_number id=17]') ?>
              <?php else: ?>
                <a href="tel:+73472008463" class="mgo-number-12072">+7 (347) 200-84-63</a>
              <?php endif; ?>
            </div>



            <div class="single-product__info-subtext">ЗВОНИТЕ КРУГЛОСУТОЧНО</div>
          </div>
          <div class="phone-icon">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M27.4167 15.3333C29.3395 15.3333 31.1836 16.0972 32.5432 17.4568C33.9028 18.8164 34.6667 20.6605 34.6667 22.5833C34.6667 23.2243 34.9213 23.839 35.3745 24.2922C35.8277 24.7454 36.4424 25 37.0833 25C37.7243 25 38.339 24.7454 38.7922 24.2922C39.2454 23.839 39.5 23.2243 39.5 22.5833C39.5 19.3786 38.2269 16.3052 35.9609 14.0391C33.6948 11.7731 30.6214 10.5 27.4167 10.5C26.7757 10.5 26.161 10.7546 25.7078 11.2078C25.2546 11.661 25 12.2757 25 12.9167C25 13.5576 25.2546 14.1723 25.7078 14.6255C26.161 15.0787 26.7757 15.3333 27.4167 15.3333Z" fill="#FF8D24"/>
              <path d="M27.4167 5.66665C31.9033 5.66665 36.2061 7.44893 39.3786 10.6214C42.5511 13.7939 44.3333 18.0967 44.3333 22.5833C44.3333 23.2243 44.588 23.8389 45.0412 24.2922C45.4944 24.7454 46.1091 25 46.75 25C47.391 25 48.0056 24.7454 48.4589 24.2922C48.9121 23.8389 49.1667 23.2243 49.1667 22.5833C49.1667 16.8149 46.8752 11.2827 42.7962 7.20374C38.7173 3.12482 33.1851 0.833313 27.4167 0.833313C26.7757 0.833313 26.161 1.08793 25.7078 1.54114C25.2546 1.99435 25 2.60904 25 3.24998C25 3.89092 25.2546 4.50561 25.7078 4.95882C26.161 5.41203 26.7757 5.66665 27.4167 5.66665ZM48.5625 34.4491C48.4296 34.0612 48.2001 33.7134 47.8957 33.4386C47.5913 33.1638 47.222 32.971 46.8225 32.8783L32.3225 29.5675C31.9289 29.4782 31.5193 29.489 31.1309 29.5987C30.7425 29.7085 30.3878 29.9138 30.0992 30.1958C29.7608 30.51 29.7367 30.5341 28.1658 33.5308C22.9536 31.129 18.7771 26.9354 16.3967 21.7133C19.4658 20.1666 19.49 20.1666 19.8042 19.8041C20.0862 19.5155 20.2915 19.1608 20.4012 18.7724C20.511 18.3841 20.5218 17.9744 20.4325 17.5808L17.1217 3.24998C17.029 2.85049 16.8362 2.48117 16.5614 2.17677C16.2866 1.87236 15.9388 1.6429 15.5508 1.50998C14.9865 1.3084 14.4037 1.16271 13.8108 1.07498C13.2 0.933351 12.5767 0.852403 11.95 0.833313C9.00169 0.833313 6.17412 2.00453 4.08934 4.08931C2.00456 6.17409 0.833344 9.00166 0.833344 11.95C0.846132 21.8165 4.77127 31.2753 11.748 38.252C18.7247 45.2287 28.1835 49.1539 38.05 49.1666C39.5099 49.1666 40.9554 48.8791 42.3042 48.3204C43.6529 47.7618 44.8784 46.9429 45.9107 45.9107C46.943 44.8784 47.7618 43.6529 48.3205 42.3041C48.8791 40.9554 49.1667 39.5098 49.1667 38.05C49.1674 37.4349 49.1189 36.8207 49.0217 36.2133C48.9201 35.613 48.7665 35.0228 48.5625 34.4491ZM38.05 44.3333C29.4634 44.3269 21.2303 40.9131 15.1586 34.8414C9.08694 28.7697 5.67308 20.5366 5.66668 11.95C5.67304 10.2855 6.33708 8.691 7.51406 7.51402C8.69103 6.33705 10.2855 5.67301 11.95 5.66665H12.7475L15.3333 16.88L14.0283 17.5566C11.95 18.6441 10.3067 19.5141 11.1767 21.3991C12.5934 25.4098 14.8857 29.0545 17.8871 32.0684C20.8885 35.0824 24.5236 37.3899 28.5283 38.8233C30.5583 39.645 31.3558 38.1225 32.4433 36.02L33.1442 34.6908L44.3333 37.2525V38.05C44.327 39.7145 43.6629 41.309 42.486 42.4859C41.309 43.6629 39.7145 44.327 38.05 44.3333Z" fill="#FF8D24"/>
              </svg>

          </div>
        </div>

        <div class="single__product-popups pad-b-20">
          <a class="button single-product__schet--whatsapp" href="https://api.whatsapp.com/send?phone=79373436306&text=<?php  echo nowUrl(); ?> | Здравствуйте, " class="header__whatsapp" target="_blank">Запросить в WhatsApp</a>
          <a href="http://T.me/aliiaval" target="_blank" class="button single-product__schet--tg">Запросить в Telegram</a>
        </div>

        <div class="mlp-info">
          <div class="container">
            <h2 class="mlp-info__title">ПОЧЕМУ БОЛЕЕ 250 СТРОИТЕЛЬНЫХ ОРГАНИЗАЦИЙ<br>ПРИОБРЕЛИ ОПАЛУБКУ ИМЕННО У НАС?</h2>
            <ul class="mlp-info__list">
              <li class="mlp-info__item">
                <i class="fa fa-edit"></i>
                <span>Собственный конструкторский отдел. Бесплатный расчет и схема расстановки по вашему проекту.</span>
              </li>
              <li class="mlp-info__item">
                <i class="fa fa-recycle"></i>
                <span>Обратный выкуп. Купите опалубку сейчас, используйте сколько потребуется, сдайте обратно нам за 70% стоимости.</span>
              </li>
              <li class="mlp-info__item">
                <i class="fa fa-truck"></i>
                <span>Доставка до объекта в любой город России</span>
              </li>
              <li class="mlp-info__item">
                <i class="fa fa-certificate"></i>
                <span>Продукция сертифицирована</span>
              </li>
              <li class="mlp-info__item">
                <i class="fa fa-thumbs-up"></i>
                <span>Цены производителя без накруток</span>
              </li>
              <li class="mlp-info__item">
                <i class="fa fa-clock"></i>
                <span>Минимальные сроки поставки - 24 часа</span>
              </li>
            </ul>
          </div>
        </div>
  </section>
<?php endif; ?>
