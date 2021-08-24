<?php
$product = wc_get_product( $post->ID );
$productMeta = get_post_meta($post->ID);
$productAttr = unserialize($productMeta['_product_attributes'][0]);
$brands = get_the_terms( $post->ID, 'brands' );
get_header();
 ?>
<div class="main single-product-template">
  <section class="single-product">
    <div class="container">
      <div class="single-product__column">
        <?php echo woocommerce_show_product_images(); ?>
      </div>
      <div class="single-product__column">
        <div class="breadcrumbs"><?php the_breadcrumb() ?></div>
        <h1 class="single-product__title"><?php echo the_title() ?></h1>
        <div class="single__price-wrap">
          <div class="single__product-price">
            <?php echo $product->get_price_html(); ?>
          </div>
          <div class="single__product-popups">
            <button class="button single-product__one-click cons-pu">Купить в 1 клик</button>
            <a class="button single-product__schet--whatsapp" href="https://api.whatsapp.com/send?phone=79378339350&text=<?php  echo nowUrl(); ?> | Здравствуйте, " class="header__whatsapp" target="_blank">Запросить в WhatsApp</a>
            <button class="button single-product__schet">Запросить счет</button>
            <a href="http://T.me/aliiaval" target="_blank" class="button single-product__schet--tg">Запросить в Telegram</a>
          </div>
        </div>
        <div class="single__product-managers">Цену и наличие уточняйте у менеджеров</div>
        <div class="product__attributes-wrap">
          <?php if (!empty($product->list_attributes())): ?>
            <div class="product__attributes-title">Характеристики</div>
            <?php echo $product->list_attributes(); ?>
          <?php endif; ?>
        </div>
        <?php if ($product->get_price() != 0): ?>
          <?php if ($product->is_type( 'variable' )): ?>
            <?php echo woocommerce_variable_add_to_cart(); ?>
          <?php else: ?>
            <div class="single-product__add">
              <div class="single-product__add-simple">
                <?php do_action('woocommerce_simple_add_to_cart'); ?>
              </div>
              <div class="single-product__sravnit-btn"><?php echo do_shortcode('[wooscp id="'.get_the_ID().'"]') ?></div>
            </div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="single-product__info">
    <div class="container">


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


      <div class="single-product__tabs">
        <div class="single-product__tabs-buttons">
          <?php if ($post->post_content != ''): ?>
            <div class="single-product__tabs-item">
              <button type="button" class="single-product__tabs-btn single-product__tabs-btn--active">Описание</button>
            </div>
            <div class="single-product__tabs-item">
              <button type="button" class="single-product__tabs-btn">Доставка</button>
            </div>
          <?php else: ?>
            <div class="single-product__tabs-item">
              <button type="button" class="single-product__tabs-btn single-product__tabs-btn--active">Доставка</button>
            </div>
          <?php endif; ?>
          <div class="single-product__tabs-item">
            <button type="button" class="single-product__tabs-btn">Способы оплаты</button>
          </div>
        </div>
        <div class="single-product__tabs-contents">
          <?php if ($post->post_content != ''): ?>
            <div class="single-product__tabs-content single-product__tabs-content--active">
              <?php echo the_content() ?>
            </div>
            <div class="single-product__tabs-content">
          <?php else: ?>
            <div class="single-product__tabs-content single-product__tabs-content--active">
          <?php endif; ?>
            <div class="single-product__accordeon">
              <button type="button" class="single-product__accordeon-button single-product__accordeon-button--active">Самовывоз</button>
              <div class="single-product__accordeon-content" style="display: block;">
                <div class="single-product__accordeon-text">
                  <p>Вы можете забрать любой заказанный товар со склада самостоятельно. Оформите заказ через сайт или позвоните по телефону офиса. Если вы являетесь <b>физическим лицом</b> вы можете оплатить товар в офисе, как наличными деньгами, так и пластиковой картой любого банка.</p>
                  <p><b>Юридическим лицам</b> для получения товара необходима только доверенность. Вы можете сразу подъехать на склад, закрыть документы и получить товар. Оплата от юридических лиц принимается как безналичным способом, так и наличными и пластиковыми картами. Также действует <b>отсрочка платежа.</b></p>
                </div>
                <div class="single-product__dostavka">
                  <div class="single-product__dostavka-column">
                    <div class="single-product__dostavka-title">ОФИС</div>
                    <div class="single-product__dostavka-list">
                      <div class="single-product__dostavka-item">
                        <div class="single-product__dostavka-item_title">Адрес</div>
                        <div class="single-product__dostavka-adress_text">
                          <span>ул. Заводская 15/1</span><br>
                          <b>email:</b><a href="mailto:zakaz@ufaprom.ru" target="_blank">zakaz@ufaprom.ru</a>
                        </div>
                      </div>
                      <div class="single-product__dostavka-item">
                        <div class="single-product__dostavka-item_title">Телефоны</div>
                        <div class="single-product__dostavka-adress_text">
                          <span>тел./факс:</span><br>
                          <a href="tel:+73472008463" class="mgo-number-12072">+7 (347) 200-84-63</a><span>(круглосуточно)</span>
                        </div><br>
                      </div>
                      <div class="single-product__dostavka-item">
                        <div class="single-product__dostavka-item_title">Время работы</div>
                        <div class="single-product__dostavka-adress_text">Пн-Пт: 9:00 — 18:00<br>Сб, Вск: выходной</div>
                      </div>
                    </div>
                  </div>
                  <div class="single-product__dostavka-column">
                    <div class="single-product__dostavka-title">СКЛАД</div>
                    <div class="single-product__dostavka-list">
                      <div class="single-product__dostavka-item">
                        <div class="single-product__dostavka-item_title">Адрес</div>
                        <div class="single-product__dostavka-adress_text">ул. Владивостокская, 4б<br>Сафроновский проезд 4/2а</div><br>
                      </div>
                      <div class="single-product__dostavka-item">
                        <div class="single-product__dostavka-item_title">Телефоны</div>
                        <div class="single-product__dostavka-adress_text">
                          <a href="tel:89509343750" target="_blank">+7 (950) 934-37-50</a><br>
                          <span>(зав. складом)</span><br>
                        </div>
                      </div>
                      <div class="single-product__dostavka-item">
                        <div class="single-product__dostavka-item_title">Время работы</div>
                        <div class="single-product__dostavka-adress_text">Пн-Пт: 9:00 — 18:00<br>Сб, Вск: выходной</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-product__accordeon">
              <button type="button" class="single-product__accordeon-button">Доставка по Уфе и РБ</button>
              <div class="single-product__accordeon-content single-product__accordeon-content--table" style="display: none;">
                <div class="single-product__accordeon-table">
                  <div class="single-product__accordeon-table_head">
                    <div class="single-product__accordeon-table_cell">РАССТОЯНИЕ</div>
                    <div class="single-product__accordeon-table_cell">ДОСТАВКА В ДЕНЬ ЗАКАЗА</div>
                    <div class="single-product__accordeon-table_cell">ДОСТАВКА НА СЛЕДУЮЩИЙ ДЕНЬ ПОСЛЕ ЗАКАЗА</div>
                  </div>
                  <div class="single-product__accordeon-table_body">
                    <div class="single-product__accordeon-table_row">
                      <div class="single-product__accordeon-table_cell"></div>
                      <div class="single-product__accordeon-table_cell">Газель (до 1,5 тонн груза)</div>
                      <div class="single-product__accordeon-table_cell">5-тонник</div>
                      <div class="single-product__accordeon-table_cell">10-тонник</div>
                      <div class="single-product__accordeon-table_cell">20-тонник</div>
                      <div class="single-product__accordeon-table_cell">Газель (до 1,5 тонн груза)</div>
                      <div class="single-product__accordeon-table_cell">5-тонник</div>
                      <div class="single-product__accordeon-table_cell">10-тонник</div>
                      <div class="single-product__accordeon-table_cell">20-тонник</div>
                    </div>
                    <div class="single-product__accordeon-table_row">
                      <div class="single-product__accordeon-table_cell">По г.Уфа</div>
                      <div class="single-product__accordeon-table_cell">1000 руб</div>
                      <div class="single-product__accordeon-table_cell">3500 руб</div>
                      <div class="single-product__accordeon-table_cell">6000 руб</div>
                      <div class="single-product__accordeon-table_cell">8000 руб</div>
                      <div class="single-product__accordeon-table_cell">БЕСПЛАТНО</div>
                      <div class="single-product__accordeon-table_cell">3500 руб</div>
                      <div class="single-product__accordeon-table_cell">6000 руб</div>
                      <div class="single-product__accordeon-table_cell">8000 руб</div>
                    </div>
                    <div class="single-product__accordeon-table_row">
                      <div class="single-product__accordeon-table_cell">в радиусе до 40 км от Уфы</div>
                      <div class="single-product__accordeon-table_cell">1500 руб</div>
                      <div class="single-product__accordeon-table_cell">4000 руб</div>
                      <div class="single-product__accordeon-table_cell">7000 руб</div>
                      <div class="single-product__accordeon-table_cell">9000 руб</div>
                      <div class="single-product__accordeon-table_cell">1500 руб</div>
                      <div class="single-product__accordeon-table_cell">4000 руб</div>
                      <div class="single-product__accordeon-table_cell">7000 руб</div>
                      <div class="single-product__accordeon-table_cell">9000 руб</div>
                    </div>
                    <div class="single-product__accordeon-table_row">
                      <div class="single-product__accordeon-table_cell">в радиусе 40-80 км от Уфы</div>
                      <div class="single-product__accordeon-table_cell">2000-2500 руб</div>
                      <div class="single-product__accordeon-table_cell">5000 руб</div>
                      <div class="single-product__accordeon-table_cell">8000 руб</div>
                      <div class="single-product__accordeon-table_cell">9500 руб</div>
                      <div class="single-product__accordeon-table_cell">2000-2500 руб</div>
                      <div class="single-product__accordeon-table_cell">5000 руб</div>
                      <div class="single-product__accordeon-table_cell">8000 руб</div>
                      <div class="single-product__accordeon-table_cell">9500 руб</div>
                    </div>
                    <div class="single-product__accordeon-table_row">
                      <div class="single-product__accordeon-table_cell">В радиусе свыше 100 км от Уфы</div>
                      <div class="single-product__accordeon-table_cell">Рассчитывается индивидуально</div>
                      <div class="single-product__accordeon-table_cell"></div>
                      <div class="single-product__accordeon-table_cell"></div>
                      <div class="single-product__accordeon-table_cell"></div>
                      <div class="single-product__accordeon-table_cell"></div>
                      <div class="single-product__accordeon-table_cell"></div>
                      <div class="single-product__accordeon-table_cell"></div>
                      <div class="single-product__accordeon-table_cell"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-product__accordeon">
              <button type="button" class="single-product__accordeon-button">Доставка по России и странам СНГ</button>
              <div class="single-product__accordeon-content" style="display: none;">
                <div class="single-product__dostavka-sng">
                  <div class="single-product__dostavka-sng_column">
                    <img src="/wp-content/uploads/images/samarceva-anna.jpg" alt="">
                  </div>
                  <div class="single-product__dostavka-sng_column">
                    <div class="single-product__dostavka-sng_title">Юля Самойлова</div>
                    <div class="single-product__dostavka-sng_subtitle">Руководитель отдела логистики</div>
                    <div class="single-product__dostavka-sng_text">Стоимость доставки в другие города Российской Федерации, а также в страны СНГ вы можете узнать в отделе логистики по телефону:</div>
                    <a href="tel:89273304512" class="single-product__dostavka-sng_phone">+7 927 330-45-12</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="single-product__tabs-content">
            <div class="single-product__accordeon">
              <button type="button" class="single-product__accordeon-button single-product__accordeon-button--active">Юридическим лицам</button>
              <div class="single-product__accordeon-content" style="display: block;">
                <h3 class="single-product__accordeon-content_title">УДОБНЫЕ ВАРИАНТЫ ОПЛАТЫ НА ВСЕ СЛУЧАИ ЖИЗНИ</h3>
                <div class="single-product__variants-list">
                  <div class="single-product__variants-item">
                    <img src="/wp-content/uploads/images/dost2.jpg" alt="">
                    <div class="single-product__variants-info">
                      <b class="single-product__variants__title">Безналичный расчет и самовывоз</b>
                      <div class="single-product__variants-text">Для получения товара вам необходима только доверенность. Вы можете сразу подъехать на склад, закрыть документы и получить товар.</div>
                    </div>
                  </div>
                  <div class="single-product__variants-item">
                    <img src="/wp-content/uploads/images/nakl.jpg" alt="">
                    <div class="single-product__variants-info">
                      <b class="single-product__variants__title">Безналичный расчет с доставкой</b>
                      <div class="single-product__variants-text">Мы доставим необходимый товар до вашего объекта в пределах города собственным транспортом. На транспортной накладной ставится отметка о получении, после чего наш курьер привезет оригиналы счетов-фактур и накладных к вам в офис.</div>
                    </div>
                  </div>
                  <div class="single-product__variants-item">
                    <img src="/wp-content/uploads/images/cash.jpg" alt="">
                    <div class="single-product__variants-info">
                      <b class="single-product__variants__title">Наличный расчет и самовывоз</b>
                      <div class="single-product__variants-text">В нашем офисе вы можете выбрать товар и оплатить его, как наличными деньгами, так и пластиковой картой любого банка.</div>
                    </div>
                  </div>
                  <div class="single-product__variants-item">
                    <img src="/wp-content/uploads/images/dost1.jpg" alt="">
                    <div class="single-product__variants-info">
                      <b class="single-product__variants__title">Наличный расчет с доставкой</b>
                      <div class="single-product__variants-text">Нет необходимости приезжать к нам в офис, мы можем доставить товар до вашего объекта. Мы привозим товар собственным транспортом, вы проверяете комплектацию и рассчитываетесь наличными деньгами с водителем.</div>
                    </div>
                  </div>
                </div>
                <div class="single-product__program">
                  <a href="/bns" class="single-product__program-link">
                    <div class="single-product__program-column">
                      <div class="single-product__program-title">Накопительная бонусная программа компании «Строительное Оборудование»</div>
                      <div class="single-product__program-subtitle">Получайте баллы за покупки, тратьте их на подарки из каталога</div>
                      <button type="button" class="single-product__program-button button">Перейти в каталог подарков </button>
                    </div>
                    <div class="single-product__program-column">
                      <div class="single-product__variants-overlay"></div>
                      <img src="/wp-content/uploads/images/bns.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="single-product__vikup">
                  <h3 class="single-product__vikup-title">ОБРАТНЫЙ ВЫКУП ОБОРУДОВАНИЯ</h3>
                  <div class="single-product__vikup-wrap">
                    <img src="/wp-content/uploads/images/obvy-1.jpg" alt="">
                    <div class="single-product__vikup-info">
                      <div class="single-product__vikup-text">На оборудование, не относящееся к категории «Расходники» действует услуга Обратного выкупа. Купите оборудование сейчас, используйте столько, сколько требуется, после чего мы готовы выкупить ее обратно за сумму до 70% от первоначальной стоимости. Услуга даст вам возможность сократить издержки и продать нам товар обратно, когда он перестанет быть вам необходимым. Это удобно, согласитесь?</div>
                      <a href="/uslugi/obratnyj-vykup/" class="button">Узнать подробнее</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-product__accordeon">
              <button type="button" class="single-product__accordeon-button">Физическим лицам</button>
              <div class="single-product__accordeon-content" style="display: none;">
                <h3 class="single-product__accordeon-content_title">УДОБНЫЕ ВАРИАНТЫ ОПЛАТЫ НА ВСЕ СЛУЧАИ ЖИЗНИ</h3>
                <div class="single-product__variants-list">
                  <div class="single-product__variants-item">
                    <img src="/wp-content/uploads/images/cash.jpg" alt="">
                    <div class="single-product__variants-info">
                      <b class="single-product__variants__title">Наличный расчет и самовывоз</b>
                      <div class="single-product__variants-text">В нашем офисе вы можете выбрать товар и оплатить его, как наличными деньгами, так и пластиковой картой любого банка.</div>
                    </div>
                  </div>
                  <div class="single-product__variants-item">
                    <img src="/wp-content/uploads/images/dost1.jpg" alt="">
                    <div class="single-product__variants-info">
                      <b class="single-product__variants__title">Наличный расчет с доставкой</b>
                      <div class="single-product__variants-text">Нет необходимости приезжать к нам в офис, мы можем доставить товар до вашего объекта. Мы привозим товар собственным транспортом, вы проверяете комплектацию и рассчитываетесь наличными деньгами с водителем.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/consult-section', 'page'); ?>
  <section class="accompanying">
    <div class="container">
      <h2 class="accompanying__title">Сопутствующие товары</h2>
      <div class="accompanying__list">
        <?php get_template_part( 'template-parts/loop-soput_products', 'product' ); ?>
      </div>
    </div>
  </section>
</div>
<?php
get_footer();
