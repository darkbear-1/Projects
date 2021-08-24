<?php
/*
Template Name: Контакты
*/
get_header();
?>
<div class="single-all_wrap">
  <?php do_action('before_content'); ?>
  <div class="content_wrap">
    <?php do_action('content_inner'); ?>

    <section class="contacts">
      <div class="container  pad-t-b-40">
        <h1 class="catalog__title">Контакты</h1>
        <section class="single-product__info">
          <div class="container">
            <div class="single-product__info-wrap col-wrapper-center">
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
            </div>
            <div class="single-product__tabs">

              <div class="single-product__tabs-buttons">

                <div class="single-product__tabs-item">
                    <button type="button" class="single-product__tabs-btn single-product__tabs-btn--active">Уфа</button>
                </div>

                <div class="single-product__tabs-item">
                    <button type="button" class="single-product__tabs-btn">Казань</button>
                </div>



                <div class="single-product__tabs-item">
                    <button type="button" class="single-product__tabs-btn">Оренбург</button>
                </div>

                <div class="single-product__tabs-item">
                    <button type="button" class="single-product__tabs-btn">Малоярославец</button>
                </div>

                <div class="single-product__tabs-item">
                    <button type="button" class="single-product__tabs-btn">Казахстан</button>
                </div>

              </div>

              <div class="single-product__tabs-contents">

              <div class="single-product__tabs-content single-product__tabs-content--active">


                    <div class="single-product__dostavka pad-b-20">
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
                              <a href="tel:+73472008463" class="mgo-number-12072">+7 (347) 200-84-63</a><br>
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
                            <div class="single-product__dostavka-adress_text">ул. Владивостокская, 4б</div><br>
                          </div>
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Телефоны</div>
                            <div class="single-product__dostavka-adress_text">
                              <a href="tel:89509343750" target="_blank">+7 (950) 934-37-50</a><br>
                              <span>(зав. складом)</span><br>
                              <a href="83472465040" target="_blank">+7 (347) 246-50-40</a><br><span>по вопросам наличия товара</span>
                            </div>
                          </div>
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Время работы</div>
                            <div class="single-product__dostavka-adress_text">Пн-Пт: 9:00 — 18:00<br>Сб, Вск: выходной</div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="single-product__accordeon-text pad-t-b-20">
                      <p>Вы можете забрать любой заказанный товар со склада самостоятельно. Оформите заказ через сайт или позвоните по телефону офиса. Если вы являетесь <b>физическим лицом</b> вы можете оплатить товар в офисе и на складе, как наличными деньгами, так и пластиковой картой любого банка.</p>
                      <p><b>Юридическим лицам</b> для получения товара необходима только доверенность. Вы можете сразу подъехать на склад, закрыть документы и получить товар. Оплата от юридических лиц принимается как безналичным способом, так и наличными и пластиковыми картами. Также действует <b>отсрочка платежа.</b></p>
                    </div>

                    <div class="single-product__accordeon">
                        <button type="button" class="single-product__accordeon-button single-product__accordeon-button">Показать на карте</button>
                        <div class="single-product__accordeon-content" style="display: none;">
                          <iframe id="map_674413393" sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation" width="100%" height="600px" frameborder="0"></iframe><script type="text/javascript">(function(e,t){var r=document.getElementById(e);r.contentWindow.document.open(),r.contentWindow.document.write(atob(t)),r.contentWindow.document.close()})("map_674413393", "PGJvZHk+PHN0eWxlPgogICAgICAgIGh0bWwsIGJvZHkgewogICAgICAgICAgICBtYXJnaW46IDA7CiAgICAgICAgICAgIHBhZGRpbmc6IDA7CiAgICAgICAgfQogICAgICAgIGh0bWwsIGJvZHksICNtYXAgewogICAgICAgICAgICB3aWR0aDogMTAwJTsKICAgICAgICAgICAgaGVpZ2h0OiAxMDAlOwogICAgICAgIH0KICAgICAgICAuYnVsbGV0LW1hcmtlciB7CiAgICAgICAgICAgIHdpZHRoOiAyMHB4OwogICAgICAgICAgICBoZWlnaHQ6IDIwcHg7CiAgICAgICAgICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7CiAgICAgICAgICAgIGJveC1zaGFkb3c6IDAgMXB4IDNweCAwIHJnYmEoMCwgMCwgMCwgMC4yKTsKICAgICAgICAgICAgYm9yZGVyOiA0cHggc29saWQgIzAyODFmMjsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlOwogICAgICAgIH0KICAgICAgICAucGVybWFuZW50LXRvb2x0aXAgewogICAgICAgICAgICBiYWNrZ3JvdW5kOiBub25lOwogICAgICAgICAgICBib3gtc2hhZG93OiBub25lOwogICAgICAgICAgICBib3JkZXI6IG5vbmU7CiAgICAgICAgICAgIHBhZGRpbmc6IDZweCAxMnB4OwogICAgICAgICAgICBjb2xvcjogIzI2MjYyNjsKICAgICAgICB9CiAgICAgICAgLnBlcm1hbmVudC10b29sdGlwOmJlZm9yZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7CiAgICAgICAgfQogICAgICAgIC5kZy1wb3B1cF9oaWRkZW5fdHJ1ZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrOwogICAgICAgIH0KICAgICAgICAubGVhZmxldC1jb250YWluZXIgLmxlYWZsZXQtcG9wdXAgLmxlYWZsZXQtcG9wdXAtY2xvc2UtYnV0dG9uIHsKICAgICAgICAgICAgdG9wOiAwOwogICAgICAgICAgICByaWdodDogMDsKICAgICAgICAgICAgd2lkdGg6IDIwcHg7CiAgICAgICAgICAgIGhlaWdodDogMjBweDsKICAgICAgICAgICAgZm9udC1zaXplOiAyMHB4OwogICAgICAgICAgICBsaW5lLWhlaWdodDogMTsKICAgICAgICB9CiAgICA8L3N0eWxlPjxkaXYgaWQ9Im1hcCI+PC9kaXY+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly9tYXBzLmFwaS4yZ2lzLnJ1LzIuMC9sb2FkZXIuanM/cGtnPWZ1bGwmYW1wO3NraW49bGlnaHQiPjwvc2NyaXB0PjxzY3JpcHQ+KGZ1bmN0aW9uKGUsdCl7dmFyIHI9SlNPTi5wYXJzZShlKSxuPUpTT04ucGFyc2UodCk7ZnVuY3Rpb24gYShlKXtyZXR1cm4gZGVjb2RlVVJJQ29tcG9uZW50KGF0b2IoZSkuc3BsaXQoIiIpLm1hcChmdW5jdGlvbihlKXtyZXR1cm4iJSIrKCIwMCIrZS5jaGFyQ29kZUF0KDApLnRvU3RyaW5nKDE2KSkuc2xpY2UoLTIpfSkuam9pbigiIikpfURHLnRoZW4oZnVuY3Rpb24oKXt2YXIgZT1ERy5tYXAoIm1hcCIse2NlbnRlcjpbbi5sYXQsbi5sb25dLHpvb206bi56b29tfSk7REcuZ2VvSlNPTihyLHtzdHlsZTpmdW5jdGlvbihlKXt2YXIgdCxyLG4sYSxvO3JldHVybntmaWxsQ29sb3I6bnVsbD09PSh0PWUpfHx2b2lkIDA9PT10P3ZvaWQgMDp0LnByb3BlcnRpZXMuZmlsbENvbG9yLGZpbGxPcGFjaXR5Om51bGw9PT0ocj1lKXx8dm9pZCAwPT09cj92b2lkIDA6ci5wcm9wZXJ0aWVzLmZpbGxPcGFjaXR5LGNvbG9yOm51bGw9PT0obj1lKXx8dm9pZCAwPT09bj92b2lkIDA6bi5wcm9wZXJ0aWVzLnN0cm9rZUNvbG9yLHdlaWdodDpudWxsPT09KGE9ZSl8fHZvaWQgMD09PWE/dm9pZCAwOmEucHJvcGVydGllcy5zdHJva2VXaWR0aCxvcGFjaXR5Om51bGw9PT0obz1lKXx8dm9pZCAwPT09bz92b2lkIDA6by5wcm9wZXJ0aWVzLnN0cm9rZU9wYWNpdHl9fSxwb2ludFRvTGF5ZXI6ZnVuY3Rpb24oZSx0KXtyZXR1cm4icmFkaXVzImluIGUucHJvcGVydGllcz9ERy5jaXJjbGUodCxlLnByb3BlcnRpZXMucmFkaXVzKTpERy5tYXJrZXIodCx7aWNvbjpmdW5jdGlvbihlKXtyZXR1cm4gREcuZGl2SWNvbih7aHRtbDoiPGRpdiBjbGFzcz0nYnVsbGV0LW1hcmtlcicgc3R5bGU9J2JvcmRlci1jb2xvcjogIitlKyI7Jz48L2Rpdj4iLGNsYXNzTmFtZToib3ZlcnJpZGUtZGVmYXVsdCIsaWNvblNpemU6WzIwLDIwXSxpY29uQW5jaG9yOlsxMCwxMF19KX0oZS5wcm9wZXJ0aWVzLmNvbG9yKX0pfSxvbkVhY2hGZWF0dXJlOmZ1bmN0aW9uKGUsdCl7ZS5wcm9wZXJ0aWVzLmRlc2NyaXB0aW9uJiZ0LmJpbmRQb3B1cChhKGUucHJvcGVydGllcy5kZXNjcmlwdGlvbikse2Nsb3NlQnV0dG9uOiEwLGNsb3NlT25Fc2NhcGVLZXk6ITB9KSxlLnByb3BlcnRpZXMudGl0bGUmJnQuYmluZFRvb2x0aXAoYShlLnByb3BlcnRpZXMudGl0bGUpLHtwZXJtYW5lbnQ6ITAsb3BhY2l0eToxLGNsYXNzTmFtZToicGVybWFuZW50LXRvb2x0aXAifSl9fSkuYWRkVG8oZSl9KX0pKCdbeyJ0eXBlIjoiRmVhdHVyZSIsInByb3BlcnRpZXMiOnsiZGVzY3JpcHRpb24iOiIiLCJzdHJva2VDb2xvciI6IiNmZmM3MGYiLCJzdHJva2VXaWR0aCI6Miwic3Ryb2tlT3BhY2l0eSI6MSwiekluZGV4IjoxfSwiZ2VvbWV0cnkiOnsidHlwZSI6IkxpbmVTdHJpbmciLCJjb29yZGluYXRlcyI6W1s1NS45OTMwMjMsNTQuNzQwMDk1XSxbNTUuOTkzMjQ4LDU0Ljc0MDAwOF0sWzU1Ljk5NTY3Myw1NC43Mzk3NzNdLFs1NS45OTY3MjQsNTQuNzM5Njc0XSxbNTUuOTk2MzM4LDU0LjczODQyOV0sWzU1Ljk5NTg0NSw1NC43Mzc3NzhdXX0sImlkIjoyMzY0fSx7InR5cGUiOiJGZWF0dXJlIiwicHJvcGVydGllcyI6eyJkZXNjcmlwdGlvbiI6IiIsInN0cm9rZUNvbG9yIjoiIzRkYjcyNSIsInN0cm9rZVdpZHRoIjoyLCJzdHJva2VPcGFjaXR5IjoxLCJ6SW5kZXgiOjJ9LCJnZW9tZXRyeSI6eyJ0eXBlIjoiTGluZVN0cmluZyIsImNvb3JkaW5hdGVzIjpbWzU1Ljk4OTQ1LDU0LjczNzEwM10sWzU1Ljk5MjQ2NSw1NC43MzUzNDRdLFs1NS45OTUwNzIsNTQuNzM2OF0sWzU1Ljk5NTgzNCw1NC43Mzc3NjZdXX0sImlkIjoyNDY1fSx7InR5cGUiOiJGZWF0dXJlIiwicHJvcGVydGllcyI6eyJjb2xvciI6IiMwMGEwZTMiLCJ0aXRsZSI6IjBLSFJndEdBMEw3UXVkQyswTEhRdnRHQTBZUFF0TkMrMExMUXNOQzkwTGpRdFNEUW10Q3cwTGZRc05DOTBZdz0iLCJkZXNjcmlwdGlvbiI6IlBIQSswWVBRdXk0ZzBLM1F2ZEN6MExYUXU5R00wWUhRc0N3ZzBMUXVJREUwTENEUXZ0R0UwTGpSZ1NBeU1USThMM0ErIiwiekluZGV4IjoxMDAwMDAwMDAwfSwiZ2VvbWV0cnkiOnsidHlwZSI6IlBvaW50IiwiY29vcmRpbmF0ZXMiOls0OS4wNzMwODUsNTUuODA4NzQ2XX0sImlkIjo1NTl9LHsidHlwZSI6IkZlYXR1cmUiLCJwcm9wZXJ0aWVzIjp7ImNvbG9yIjoiIzAwYTBlMyIsInRpdGxlIjoiMEtIUmd0R0EwTDdRdWRDKzBMSFF2dEdBMFlQUXROQyswTExRc05DOTBMalF0UT09IiwiZGVzY3JpcHRpb24iOiJQSEErMFlQUXV5NGcwSmZRc05DeTBMN1F0TkdCMExyUXNOR1BJREUxTHpFOEwzQSsiLCJ6SW5kZXgiOjEwMDAwMDAwMDB9LCJnZW9tZXRyeSI6eyJ0eXBlIjoiUG9pbnQiLCJjb29yZGluYXRlcyI6WzU1Ljk5NTYwOSw1NC43Mzc4OTZdfSwiaWQiOjIxOTB9XScsJ3sibGF0Ijo1NC43MzgwMjYwNzA1NjQ5NCwibG9uIjo1NS45OTYzMzgxMjkwNDM1ODYsInpvb20iOjE3fScpPC9zY3JpcHQ+PHNjcmlwdCBhc3luYz0iIiB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly93d3cuZ29vZ2xldGFnbWFuYWdlci5jb20vZ3RhZy9qcz9pZD1VQS0xNTg4NjYxNjgtMSI+PC9zY3JpcHQ+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPihmdW5jdGlvbihlKXtmdW5jdGlvbiB0KCl7ZGF0YUxheWVyLnB1c2goYXJndW1lbnRzKX13aW5kb3cuZGF0YUxheWVyPXdpbmRvdy5kYXRhTGF5ZXJ8fFtdLHQoImpzIixuZXcgRGF0ZSksdCgiY29uZmlnIixlKSx3aW5kb3cuZ3RhZz10fSkoJ1VBLTE1ODg2NjE2OC0xJyk8L3NjcmlwdD48L2JvZHk+")</script>
                      </div>
                    </div>



              </div>

              <div class="single-product__tabs-content single-product__tabs-content">


                    <div class="single-product__dostavka pad-b-20">
                      <div class="single-product__dostavka-column">
                        <div class="single-product__dostavka-title">ОФИС</div>
                        <div class="single-product__dostavka-list">
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Адрес</div>
                            <div class="single-product__dostavka-adress_text">
                              <span>ул. Энгельса, д. 14, офис 212</span><br>
                            </div>
                          </div>
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Телефоны</div>
                            <div class="single-product__dostavka-adress_text">
                                <a href="tel:+78435282968">+7(843) 528-29-68</a><br />
                                <a href="tel:+78435282969">+7(843)528-29-69</a>
                            </div><br>
                          </div>

                        </div>
                      </div>
                      <div class="single-product__dostavka-column">

                        <div class="single-product__dostavka-item">
                          <div class="single-product__dostavka-item_title">Время работы</div>
                          <div class="single-product__dostavka-adress_text">
                              Пн-пт с 8.00 до 17.00<br />
                              Сб с 8.00 до 13.00<br />
                              Вск выходной</div>
                        </div>
                      </div>
                    </div>

                    <div class="single-product__accordeon-text pad-t-b-20">
                      <p>Вы можете забрать любой заказанный товар со склада самостоятельно. Оформите заказ через сайт или позвоните по телефону офиса. Если вы являетесь <b>физическим лицом</b> вы можете оплатить товар в офисе и на складе, как наличными деньгами, так и пластиковой картой любого банка.</p>
                      <p><b>Юридическим лицам</b> для получения товара необходима только доверенность. Вы можете сразу подъехать на склад, закрыть документы и получить товар. Оплата от юридических лиц принимается как безналичным способом, так и наличными и пластиковыми картами. Также действует <b>отсрочка платежа.</b></p>
                    </div>

                    <div class="single-product__accordeon">
                        <button type="button" class="single-product__accordeon-button single-product__accordeon-button">Показать на карте</button>
                        <div class="single-product__accordeon-content" style="display: none;">
                          <iframe id="map_960303323" sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation" width="100%" height="600px" frameborder="0"></iframe><script type="text/javascript">(function(e,t){var r=document.getElementById(e);r.contentWindow.document.open(),r.contentWindow.document.write(atob(t)),r.contentWindow.document.close()})("map_960303323", "PGJvZHk+PHN0eWxlPgogICAgICAgIGh0bWwsIGJvZHkgewogICAgICAgICAgICBtYXJnaW46IDA7CiAgICAgICAgICAgIHBhZGRpbmc6IDA7CiAgICAgICAgfQogICAgICAgIGh0bWwsIGJvZHksICNtYXAgewogICAgICAgICAgICB3aWR0aDogMTAwJTsKICAgICAgICAgICAgaGVpZ2h0OiAxMDAlOwogICAgICAgIH0KICAgICAgICAuYnVsbGV0LW1hcmtlciB7CiAgICAgICAgICAgIHdpZHRoOiAyMHB4OwogICAgICAgICAgICBoZWlnaHQ6IDIwcHg7CiAgICAgICAgICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7CiAgICAgICAgICAgIGJveC1zaGFkb3c6IDAgMXB4IDNweCAwIHJnYmEoMCwgMCwgMCwgMC4yKTsKICAgICAgICAgICAgYm9yZGVyOiA0cHggc29saWQgIzAyODFmMjsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlOwogICAgICAgIH0KICAgICAgICAucGVybWFuZW50LXRvb2x0aXAgewogICAgICAgICAgICBiYWNrZ3JvdW5kOiBub25lOwogICAgICAgICAgICBib3gtc2hhZG93OiBub25lOwogICAgICAgICAgICBib3JkZXI6IG5vbmU7CiAgICAgICAgICAgIHBhZGRpbmc6IDZweCAxMnB4OwogICAgICAgICAgICBjb2xvcjogIzI2MjYyNjsKICAgICAgICB9CiAgICAgICAgLnBlcm1hbmVudC10b29sdGlwOmJlZm9yZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7CiAgICAgICAgfQogICAgICAgIC5kZy1wb3B1cF9oaWRkZW5fdHJ1ZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrOwogICAgICAgIH0KICAgICAgICAubGVhZmxldC1jb250YWluZXIgLmxlYWZsZXQtcG9wdXAgLmxlYWZsZXQtcG9wdXAtY2xvc2UtYnV0dG9uIHsKICAgICAgICAgICAgdG9wOiAwOwogICAgICAgICAgICByaWdodDogMDsKICAgICAgICAgICAgd2lkdGg6IDIwcHg7CiAgICAgICAgICAgIGhlaWdodDogMjBweDsKICAgICAgICAgICAgZm9udC1zaXplOiAyMHB4OwogICAgICAgICAgICBsaW5lLWhlaWdodDogMTsKICAgICAgICB9CiAgICA8L3N0eWxlPjxkaXYgaWQ9Im1hcCI+PC9kaXY+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly9tYXBzLmFwaS4yZ2lzLnJ1LzIuMC9sb2FkZXIuanM/cGtnPWZ1bGwmYW1wO3NraW49bGlnaHQiPjwvc2NyaXB0PjxzY3JpcHQ+KGZ1bmN0aW9uKGUsdCl7dmFyIHI9SlNPTi5wYXJzZShlKSxuPUpTT04ucGFyc2UodCk7ZnVuY3Rpb24gYShlKXtyZXR1cm4gZGVjb2RlVVJJQ29tcG9uZW50KGF0b2IoZSkuc3BsaXQoIiIpLm1hcChmdW5jdGlvbihlKXtyZXR1cm4iJSIrKCIwMCIrZS5jaGFyQ29kZUF0KDApLnRvU3RyaW5nKDE2KSkuc2xpY2UoLTIpfSkuam9pbigiIikpfURHLnRoZW4oZnVuY3Rpb24oKXt2YXIgZT1ERy5tYXAoIm1hcCIse2NlbnRlcjpbbi5sYXQsbi5sb25dLHpvb206bi56b29tfSk7REcuZ2VvSlNPTihyLHtzdHlsZTpmdW5jdGlvbihlKXt2YXIgdCxyLG4sYSxvO3JldHVybntmaWxsQ29sb3I6bnVsbD09PSh0PWUpfHx2b2lkIDA9PT10P3ZvaWQgMDp0LnByb3BlcnRpZXMuZmlsbENvbG9yLGZpbGxPcGFjaXR5Om51bGw9PT0ocj1lKXx8dm9pZCAwPT09cj92b2lkIDA6ci5wcm9wZXJ0aWVzLmZpbGxPcGFjaXR5LGNvbG9yOm51bGw9PT0obj1lKXx8dm9pZCAwPT09bj92b2lkIDA6bi5wcm9wZXJ0aWVzLnN0cm9rZUNvbG9yLHdlaWdodDpudWxsPT09KGE9ZSl8fHZvaWQgMD09PWE/dm9pZCAwOmEucHJvcGVydGllcy5zdHJva2VXaWR0aCxvcGFjaXR5Om51bGw9PT0obz1lKXx8dm9pZCAwPT09bz92b2lkIDA6by5wcm9wZXJ0aWVzLnN0cm9rZU9wYWNpdHl9fSxwb2ludFRvTGF5ZXI6ZnVuY3Rpb24oZSx0KXtyZXR1cm4icmFkaXVzImluIGUucHJvcGVydGllcz9ERy5jaXJjbGUodCxlLnByb3BlcnRpZXMucmFkaXVzKTpERy5tYXJrZXIodCx7aWNvbjpmdW5jdGlvbihlKXtyZXR1cm4gREcuZGl2SWNvbih7aHRtbDoiPGRpdiBjbGFzcz0nYnVsbGV0LW1hcmtlcicgc3R5bGU9J2JvcmRlci1jb2xvcjogIitlKyI7Jz48L2Rpdj4iLGNsYXNzTmFtZToib3ZlcnJpZGUtZGVmYXVsdCIsaWNvblNpemU6WzIwLDIwXSxpY29uQW5jaG9yOlsxMCwxMF19KX0oZS5wcm9wZXJ0aWVzLmNvbG9yKX0pfSxvbkVhY2hGZWF0dXJlOmZ1bmN0aW9uKGUsdCl7ZS5wcm9wZXJ0aWVzLmRlc2NyaXB0aW9uJiZ0LmJpbmRQb3B1cChhKGUucHJvcGVydGllcy5kZXNjcmlwdGlvbikse2Nsb3NlQnV0dG9uOiEwLGNsb3NlT25Fc2NhcGVLZXk6ITB9KSxlLnByb3BlcnRpZXMudGl0bGUmJnQuYmluZFRvb2x0aXAoYShlLnByb3BlcnRpZXMudGl0bGUpLHtwZXJtYW5lbnQ6ITAsb3BhY2l0eToxLGNsYXNzTmFtZToicGVybWFuZW50LXRvb2x0aXAifSl9fSkuYWRkVG8oZSl9KX0pKCdbeyJ0eXBlIjoiRmVhdHVyZSIsInByb3BlcnRpZXMiOnsiY29sb3IiOiIjMDBhMGUzIiwidGl0bGUiOiIwS0hSZ3RHQTBMN1F1ZEMrMExIUXZ0R0EwWVBRdE5DKzBMTFFzTkM5MExqUXRTRFFtdEN3MExmUXNOQzkwWXc9IiwiZGVzY3JpcHRpb24iOiJQSEErMFlQUXV5NGcwSzNRdmRDejBMWFF1OUdNMFlIUXNDd2cwTFF1SURFMExDRFF2dEdFMExqUmdTQXlNVEk4TDNBKyIsInpJbmRleCI6MTAwMDAwMDAwMH0sImdlb21ldHJ5Ijp7InR5cGUiOiJQb2ludCIsImNvb3JkaW5hdGVzIjpbNDkuMDczMDg1LDU1LjgwODc0Nl19LCJpZCI6NTU5fV0nLCd7ImxhdCI6NTUuODA4Njg1NDc3ODk3NTM0LCJsb24iOjQ5LjA3MzQ0OTM3MzI0NTI0Niwiem9vbSI6MTh9Jyk8L3NjcmlwdD48c2NyaXB0IGFzeW5jPSIiIHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbS9ndGFnL2pzP2lkPVVBLTE1ODg2NjE2OC0xIj48L3NjcmlwdD48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+KGZ1bmN0aW9uKGUpe2Z1bmN0aW9uIHQoKXtkYXRhTGF5ZXIucHVzaChhcmd1bWVudHMpfXdpbmRvdy5kYXRhTGF5ZXI9d2luZG93LmRhdGFMYXllcnx8W10sdCgianMiLG5ldyBEYXRlKSx0KCJjb25maWciLGUpLHdpbmRvdy5ndGFnPXR9KSgnVUEtMTU4ODY2MTY4LTEnKTwvc2NyaXB0PjwvYm9keT4=")</script>
                      </div>
                    </div>



              </div>



              <div class="single-product__tabs-content single-product__tabs-content">


                    <div class="single-product__dostavka pad-b-20">
                      <div class="single-product__dostavka-column">
                        <div class="single-product__dostavka-title">ОФИС</div>
                        <div class="single-product__dostavka-list">
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Адрес</div>
                            <div class="single-product__dostavka-adress_text">
                              <span>ул. Загородное шоссе, 1</span><br>

                            </div>
                          </div>
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Телефоны</div>
                            <div class="single-product__dostavka-adress_text">
                              <a href="tel:+73472008463" class="mgo-number-12072">+7 (347) 200-84-63</a>

                            </div><br>
                          </div>

                        </div>
                      </div>
                      <div class="single-product__dostavka-column">
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Время работы</div>
                            <div class="single-product__dostavka-adress_text">Пн-Пт: 9:00 - 18:00<br />
                                    Сб, Вск: выходной</div>
                          </div>
                      </div>
                    </div>

                    <div class="single-product__accordeon-text pad-t-b-20">
                      <p>Вы можете забрать любой заказанный товар со склада самостоятельно. Оформите заказ через сайт или позвоните по телефону офиса. Если вы являетесь <b>физическим лицом</b> вы можете оплатить товар в офисе и на складе, как наличными деньгами, так и пластиковой картой любого банка.</p>
                      <p><b>Юридическим лицам</b> для получения товара необходима только доверенность. Вы можете сразу подъехать на склад, закрыть документы и получить товар. Оплата от юридических лиц принимается как безналичным способом, так и наличными и пластиковыми картами. Также действует <b>отсрочка платежа.</b></p>
                    </div>

                    <div class="single-product__accordeon">
                        <button type="button" class="single-product__accordeon-button single-product__accordeon-button">Показать на карте</button>
                        <div class="single-product__accordeon-content" style="display: none;">
                          <iframe id="map_301751640" sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation" width="100%" height="600px" frameborder="0"></iframe><script type="text/javascript">(function(e,t){var r=document.getElementById(e);r.contentWindow.document.open(),r.contentWindow.document.write(atob(t)),r.contentWindow.document.close()})("map_301751640", "PGJvZHk+PHN0eWxlPgogICAgICAgIGh0bWwsIGJvZHkgewogICAgICAgICAgICBtYXJnaW46IDA7CiAgICAgICAgICAgIHBhZGRpbmc6IDA7CiAgICAgICAgfQogICAgICAgIGh0bWwsIGJvZHksICNtYXAgewogICAgICAgICAgICB3aWR0aDogMTAwJTsKICAgICAgICAgICAgaGVpZ2h0OiAxMDAlOwogICAgICAgIH0KICAgICAgICAuYnVsbGV0LW1hcmtlciB7CiAgICAgICAgICAgIHdpZHRoOiAyMHB4OwogICAgICAgICAgICBoZWlnaHQ6IDIwcHg7CiAgICAgICAgICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7CiAgICAgICAgICAgIGJveC1zaGFkb3c6IDAgMXB4IDNweCAwIHJnYmEoMCwgMCwgMCwgMC4yKTsKICAgICAgICAgICAgYm9yZGVyOiA0cHggc29saWQgIzAyODFmMjsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlOwogICAgICAgIH0KICAgICAgICAucGVybWFuZW50LXRvb2x0aXAgewogICAgICAgICAgICBiYWNrZ3JvdW5kOiBub25lOwogICAgICAgICAgICBib3gtc2hhZG93OiBub25lOwogICAgICAgICAgICBib3JkZXI6IG5vbmU7CiAgICAgICAgICAgIHBhZGRpbmc6IDZweCAxMnB4OwogICAgICAgICAgICBjb2xvcjogIzI2MjYyNjsKICAgICAgICB9CiAgICAgICAgLnBlcm1hbmVudC10b29sdGlwOmJlZm9yZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7CiAgICAgICAgfQogICAgICAgIC5kZy1wb3B1cF9oaWRkZW5fdHJ1ZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrOwogICAgICAgIH0KICAgICAgICAubGVhZmxldC1jb250YWluZXIgLmxlYWZsZXQtcG9wdXAgLmxlYWZsZXQtcG9wdXAtY2xvc2UtYnV0dG9uIHsKICAgICAgICAgICAgdG9wOiAwOwogICAgICAgICAgICByaWdodDogMDsKICAgICAgICAgICAgd2lkdGg6IDIwcHg7CiAgICAgICAgICAgIGhlaWdodDogMjBweDsKICAgICAgICAgICAgZm9udC1zaXplOiAyMHB4OwogICAgICAgICAgICBsaW5lLWhlaWdodDogMTsKICAgICAgICB9CiAgICA8L3N0eWxlPjxkaXYgaWQ9Im1hcCI+PC9kaXY+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly9tYXBzLmFwaS4yZ2lzLnJ1LzIuMC9sb2FkZXIuanM/cGtnPWZ1bGwmYW1wO3NraW49bGlnaHQiPjwvc2NyaXB0PjxzY3JpcHQ+KGZ1bmN0aW9uKGUsdCl7dmFyIHI9SlNPTi5wYXJzZShlKSxuPUpTT04ucGFyc2UodCk7ZnVuY3Rpb24gYShlKXtyZXR1cm4gZGVjb2RlVVJJQ29tcG9uZW50KGF0b2IoZSkuc3BsaXQoIiIpLm1hcChmdW5jdGlvbihlKXtyZXR1cm4iJSIrKCIwMCIrZS5jaGFyQ29kZUF0KDApLnRvU3RyaW5nKDE2KSkuc2xpY2UoLTIpfSkuam9pbigiIikpfURHLnRoZW4oZnVuY3Rpb24oKXt2YXIgZT1ERy5tYXAoIm1hcCIse2NlbnRlcjpbbi5sYXQsbi5sb25dLHpvb206bi56b29tfSk7REcuZ2VvSlNPTihyLHtzdHlsZTpmdW5jdGlvbihlKXt2YXIgdCxyLG4sYSxvO3JldHVybntmaWxsQ29sb3I6bnVsbD09PSh0PWUpfHx2b2lkIDA9PT10P3ZvaWQgMDp0LnByb3BlcnRpZXMuZmlsbENvbG9yLGZpbGxPcGFjaXR5Om51bGw9PT0ocj1lKXx8dm9pZCAwPT09cj92b2lkIDA6ci5wcm9wZXJ0aWVzLmZpbGxPcGFjaXR5LGNvbG9yOm51bGw9PT0obj1lKXx8dm9pZCAwPT09bj92b2lkIDA6bi5wcm9wZXJ0aWVzLnN0cm9rZUNvbG9yLHdlaWdodDpudWxsPT09KGE9ZSl8fHZvaWQgMD09PWE/dm9pZCAwOmEucHJvcGVydGllcy5zdHJva2VXaWR0aCxvcGFjaXR5Om51bGw9PT0obz1lKXx8dm9pZCAwPT09bz92b2lkIDA6by5wcm9wZXJ0aWVzLnN0cm9rZU9wYWNpdHl9fSxwb2ludFRvTGF5ZXI6ZnVuY3Rpb24oZSx0KXtyZXR1cm4icmFkaXVzImluIGUucHJvcGVydGllcz9ERy5jaXJjbGUodCxlLnByb3BlcnRpZXMucmFkaXVzKTpERy5tYXJrZXIodCx7aWNvbjpmdW5jdGlvbihlKXtyZXR1cm4gREcuZGl2SWNvbih7aHRtbDoiPGRpdiBjbGFzcz0nYnVsbGV0LW1hcmtlcicgc3R5bGU9J2JvcmRlci1jb2xvcjogIitlKyI7Jz48L2Rpdj4iLGNsYXNzTmFtZToib3ZlcnJpZGUtZGVmYXVsdCIsaWNvblNpemU6WzIwLDIwXSxpY29uQW5jaG9yOlsxMCwxMF19KX0oZS5wcm9wZXJ0aWVzLmNvbG9yKX0pfSxvbkVhY2hGZWF0dXJlOmZ1bmN0aW9uKGUsdCl7ZS5wcm9wZXJ0aWVzLmRlc2NyaXB0aW9uJiZ0LmJpbmRQb3B1cChhKGUucHJvcGVydGllcy5kZXNjcmlwdGlvbikse2Nsb3NlQnV0dG9uOiEwLGNsb3NlT25Fc2NhcGVLZXk6ITB9KSxlLnByb3BlcnRpZXMudGl0bGUmJnQuYmluZFRvb2x0aXAoYShlLnByb3BlcnRpZXMudGl0bGUpLHtwZXJtYW5lbnQ6ITAsb3BhY2l0eToxLGNsYXNzTmFtZToicGVybWFuZW50LXRvb2x0aXAifSl9fSkuYWRkVG8oZSl9KX0pKCdbeyJ0eXBlIjoiRmVhdHVyZSIsInByb3BlcnRpZXMiOnsiY29sb3IiOiIjMDI4MWYyIiwidGl0bGUiOiIwS0hSZ3RHQTBMN1F1ZEMrMExIUXZ0R0EwWVBRdE5DKzBMTFFzTkM5MExqUXRRPT0iLCJkZXNjcmlwdGlvbiI6IlBIQSswWVBRdXk0ZzBKZlFzTkN6MEw3UmdOQyswTFRRdmRDKzBMVWcwWWpRdnRHQjBZSFF0U3dnTVR3dmNEND0iLCJ6SW5kZXgiOjEwMDAwMDAwMDB9LCJnZW9tZXRyeSI6eyJ0eXBlIjoiUG9pbnQiLCJjb29yZGluYXRlcyI6WzU1LjE0MzIyMiw1MS44NTMxNV19LCJpZCI6Mjk3MX1dJywneyJsYXQiOjUxLjg1MzEyMzY3NDQ3NjQxLCJsb24iOjU1LjE0MzM5MDI5Nzg4OTcyLCJ6b29tIjoxOH0nKTwvc2NyaXB0PjxzY3JpcHQgYXN5bmM9IiIgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Imh0dHBzOi8vd3d3Lmdvb2dsZXRhZ21hbmFnZXIuY29tL2d0YWcvanM/aWQ9VUEtMTU4ODY2MTY4LTEiPjwvc2NyaXB0PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4oZnVuY3Rpb24oZSl7ZnVuY3Rpb24gdCgpe2RhdGFMYXllci5wdXNoKGFyZ3VtZW50cyl9d2luZG93LmRhdGFMYXllcj13aW5kb3cuZGF0YUxheWVyfHxbXSx0KCJqcyIsbmV3IERhdGUpLHQoImNvbmZpZyIsZSksd2luZG93Lmd0YWc9dH0pKCdVQS0xNTg4NjYxNjgtMScpPC9zY3JpcHQ+PC9ib2R5Pg==")</script>
                      </div>
                    </div>



              </div>

              <div class="single-product__tabs-content single-product__tabs-content">


                    <div class="single-product__dostavka pad-b-20">
                      <div class="single-product__dostavka-column">
                        <div class="single-product__dostavka-title">ОФИС</div>
                        <div class="single-product__dostavka-list">
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Адрес</div>
                            <div class="single-product__dostavka-adress_text">
                              <span>ул.Кирова, 1</span><br>

                            </div>
                          </div>
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Телефоны</div>
                            <div class="single-product__dostavka-adress_text">
                                <a href="tel:+74842401656">+7 (4842) 40-16-56</a>

                            </div><br>
                          </div>

                        </div>
                      </div>
                      <div class="single-product__dostavka-column">
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Время работы</div>
                            <div class="single-product__dostavka-adress_text">Пн-Пт: 9:00 - 18:00<br />Сб, Вск: выходной</div>
                          </div>
                      </div>
                    </div>

                    <div class="single-product__accordeon-text pad-t-b-20">
                      <p>Вы можете забрать любой заказанный товар со склада самостоятельно. Оформите заказ через сайт или позвоните по телефону офиса. Если вы являетесь <b>физическим лицом</b> вы можете оплатить товар в офисе и на складе, как наличными деньгами, так и пластиковой картой любого банка.</p>
                      <p><b>Юридическим лицам</b> для получения товара необходима только доверенность. Вы можете сразу подъехать на склад, закрыть документы и получить товар. Оплата от юридических лиц принимается как безналичным способом, так и наличными и пластиковыми картами. Также действует <b>отсрочка платежа.</b></p>
                    </div>

                    <!--div class="single-product__accordeon">
                        <button type="button" class="single-product__accordeon-button single-product__accordeon-button">Показать на карте</button>
                        <div class="single-product__accordeon-content" style="display: none;">
                          <a class="dg-widget-link" href="http://2gis.ru/ufa/firm/70000001045332163/center/55.995640754699714,54.73806323411007/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Уфы</a><div class="dg-widget-link"><a href="http://2gis.ru/ufa/center/55.995634,54.737914/zoom/16/routeTab/rsType/bus/to/55.995634,54.737914╎Строительное оборудование, торговая компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Строительное оборудование, торговая компания</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":1400,"height":600,"borderColor":"#a3a3a3","pos":{"lat":54.73806323411007,"lon":55.995640754699714,"zoom":16},"opt":{"city":"ufa"},"org":[{"id":"70000001045332163"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                      </div>
                  </div-->



              </div>

              <div class="single-product__tabs-content single-product__tabs-content">


                    <div class="single-product__dostavka pad-b-20">
                      <div class="single-product__dostavka-column">
                        <div class="single-product__dostavka-title">ОФИС</div>
                        <div class="single-product__dostavka-list">
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Адрес</div>
                            <div class="single-product__dostavka-adress_text">
                              <span>г. Нур-Султан ул. Жансугурова 8/2<br />БЦ «Аружан» оф. 908</span><br>

                            </div>
                          </div>
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Телефоны</div>
                            <div class="single-product__dostavka-adress_text">
                              <a href="tel:+77172788171">+7(7172) 78-81-71</a>
                            </div><br>
                          </div>

                        </div>
                      </div>
                      <div class="single-product__dostavka-column">
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Время работы</div>
                            <div class="single-product__dostavka-adress_text">Пн-Пт: 9:00 - 18:00<br />Сб, Вск: выходной</div>
                          </div>
                      </div>
                    </div>

                    <div class="single-product__accordeon-text pad-t-b-20">
                      <p>Вы можете забрать любой заказанный товар со склада самостоятельно. Оформите заказ через сайт или позвоните по телефону офиса. Если вы являетесь <b>физическим лицом</b> вы можете оплатить товар в офисе и на складе, как наличными деньгами, так и пластиковой картой любого банка.</p>
                      <p><b>Юридическим лицам</b> для получения товара необходима только доверенность. Вы можете сразу подъехать на склад, закрыть документы и получить товар. Оплата от юридических лиц принимается как безналичным способом, так и наличными и пластиковыми картами. Также действует <b>отсрочка платежа.</b></p>
                    </div>

                    <div class="single-product__accordeon">
                        <button type="button" class="single-product__accordeon-button single-product__accordeon-button">Показать на карте</button>
                        <div class="single-product__accordeon-content" style="display: none;">
                          <iframe id="map_85188778" sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation" width="100%" height="600px" frameborder="0"></iframe><script type="text/javascript">(function(e,t){var r=document.getElementById(e);r.contentWindow.document.open(),r.contentWindow.document.write(atob(t)),r.contentWindow.document.close()})("map_85188778", "PGJvZHk+PHN0eWxlPgogICAgICAgIGh0bWwsIGJvZHkgewogICAgICAgICAgICBtYXJnaW46IDA7CiAgICAgICAgICAgIHBhZGRpbmc6IDA7CiAgICAgICAgfQogICAgICAgIGh0bWwsIGJvZHksICNtYXAgewogICAgICAgICAgICB3aWR0aDogMTAwJTsKICAgICAgICAgICAgaGVpZ2h0OiAxMDAlOwogICAgICAgIH0KICAgICAgICAuYnVsbGV0LW1hcmtlciB7CiAgICAgICAgICAgIHdpZHRoOiAyMHB4OwogICAgICAgICAgICBoZWlnaHQ6IDIwcHg7CiAgICAgICAgICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7CiAgICAgICAgICAgIGJveC1zaGFkb3c6IDAgMXB4IDNweCAwIHJnYmEoMCwgMCwgMCwgMC4yKTsKICAgICAgICAgICAgYm9yZGVyOiA0cHggc29saWQgIzAyODFmMjsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlOwogICAgICAgIH0KICAgICAgICAucGVybWFuZW50LXRvb2x0aXAgewogICAgICAgICAgICBiYWNrZ3JvdW5kOiBub25lOwogICAgICAgICAgICBib3gtc2hhZG93OiBub25lOwogICAgICAgICAgICBib3JkZXI6IG5vbmU7CiAgICAgICAgICAgIHBhZGRpbmc6IDZweCAxMnB4OwogICAgICAgICAgICBjb2xvcjogIzI2MjYyNjsKICAgICAgICB9CiAgICAgICAgLnBlcm1hbmVudC10b29sdGlwOmJlZm9yZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7CiAgICAgICAgfQogICAgICAgIC5kZy1wb3B1cF9oaWRkZW5fdHJ1ZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrOwogICAgICAgIH0KICAgICAgICAubGVhZmxldC1jb250YWluZXIgLmxlYWZsZXQtcG9wdXAgLmxlYWZsZXQtcG9wdXAtY2xvc2UtYnV0dG9uIHsKICAgICAgICAgICAgdG9wOiAwOwogICAgICAgICAgICByaWdodDogMDsKICAgICAgICAgICAgd2lkdGg6IDIwcHg7CiAgICAgICAgICAgIGhlaWdodDogMjBweDsKICAgICAgICAgICAgZm9udC1zaXplOiAyMHB4OwogICAgICAgICAgICBsaW5lLWhlaWdodDogMTsKICAgICAgICB9CiAgICA8L3N0eWxlPjxkaXYgaWQ9Im1hcCI+PC9kaXY+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly9tYXBzLmFwaS4yZ2lzLnJ1LzIuMC9sb2FkZXIuanM/cGtnPWZ1bGwmYW1wO3NraW49bGlnaHQiPjwvc2NyaXB0PjxzY3JpcHQ+KGZ1bmN0aW9uKGUsdCl7dmFyIHI9SlNPTi5wYXJzZShlKSxuPUpTT04ucGFyc2UodCk7ZnVuY3Rpb24gYShlKXtyZXR1cm4gZGVjb2RlVVJJQ29tcG9uZW50KGF0b2IoZSkuc3BsaXQoIiIpLm1hcChmdW5jdGlvbihlKXtyZXR1cm4iJSIrKCIwMCIrZS5jaGFyQ29kZUF0KDApLnRvU3RyaW5nKDE2KSkuc2xpY2UoLTIpfSkuam9pbigiIikpfURHLnRoZW4oZnVuY3Rpb24oKXt2YXIgZT1ERy5tYXAoIm1hcCIse2NlbnRlcjpbbi5sYXQsbi5sb25dLHpvb206bi56b29tfSk7REcuZ2VvSlNPTihyLHtzdHlsZTpmdW5jdGlvbihlKXt2YXIgdCxyLG4sYSxvO3JldHVybntmaWxsQ29sb3I6bnVsbD09PSh0PWUpfHx2b2lkIDA9PT10P3ZvaWQgMDp0LnByb3BlcnRpZXMuZmlsbENvbG9yLGZpbGxPcGFjaXR5Om51bGw9PT0ocj1lKXx8dm9pZCAwPT09cj92b2lkIDA6ci5wcm9wZXJ0aWVzLmZpbGxPcGFjaXR5LGNvbG9yOm51bGw9PT0obj1lKXx8dm9pZCAwPT09bj92b2lkIDA6bi5wcm9wZXJ0aWVzLnN0cm9rZUNvbG9yLHdlaWdodDpudWxsPT09KGE9ZSl8fHZvaWQgMD09PWE/dm9pZCAwOmEucHJvcGVydGllcy5zdHJva2VXaWR0aCxvcGFjaXR5Om51bGw9PT0obz1lKXx8dm9pZCAwPT09bz92b2lkIDA6by5wcm9wZXJ0aWVzLnN0cm9rZU9wYWNpdHl9fSxwb2ludFRvTGF5ZXI6ZnVuY3Rpb24oZSx0KXtyZXR1cm4icmFkaXVzImluIGUucHJvcGVydGllcz9ERy5jaXJjbGUodCxlLnByb3BlcnRpZXMucmFkaXVzKTpERy5tYXJrZXIodCx7aWNvbjpmdW5jdGlvbihlKXtyZXR1cm4gREcuZGl2SWNvbih7aHRtbDoiPGRpdiBjbGFzcz0nYnVsbGV0LW1hcmtlcicgc3R5bGU9J2JvcmRlci1jb2xvcjogIitlKyI7Jz48L2Rpdj4iLGNsYXNzTmFtZToib3ZlcnJpZGUtZGVmYXVsdCIsaWNvblNpemU6WzIwLDIwXSxpY29uQW5jaG9yOlsxMCwxMF19KX0oZS5wcm9wZXJ0aWVzLmNvbG9yKX0pfSxvbkVhY2hGZWF0dXJlOmZ1bmN0aW9uKGUsdCl7ZS5wcm9wZXJ0aWVzLmRlc2NyaXB0aW9uJiZ0LmJpbmRQb3B1cChhKGUucHJvcGVydGllcy5kZXNjcmlwdGlvbikse2Nsb3NlQnV0dG9uOiEwLGNsb3NlT25Fc2NhcGVLZXk6ITB9KSxlLnByb3BlcnRpZXMudGl0bGUmJnQuYmluZFRvb2x0aXAoYShlLnByb3BlcnRpZXMudGl0bGUpLHtwZXJtYW5lbnQ6ITAsb3BhY2l0eToxLGNsYXNzTmFtZToicGVybWFuZW50LXRvb2x0aXAifSl9fSkuYWRkVG8oZSl9KX0pKCdbeyJ0eXBlIjoiRmVhdHVyZSIsInByb3BlcnRpZXMiOnsiY29sb3IiOiIjMDI4MWYyIiwidGl0bGUiOiIwS0hSZ3RHQTBMN1F1ZEMrMExIUXZ0R0EwWVBRdE5DKzBMTFFzTkM5MExqUXRRPT0iLCJkZXNjcmlwdGlvbiI6IlBIQSswWVBRdXk0ZzBKZlFzTkN6MEw3UmdOQyswTFRRdmRDKzBMVWcwWWpRdnRHQjBZSFF0U3dnTVR3dmNEND0iLCJ6SW5kZXgiOjEwMDAwMDAwMDB9LCJnZW9tZXRyeSI6eyJ0eXBlIjoiUG9pbnQiLCJjb29yZGluYXRlcyI6WzU1LjE0MzIyMiw1MS44NTMxNV19LCJpZCI6Mjk3MX0seyJ0eXBlIjoiRmVhdHVyZSIsInByb3BlcnRpZXMiOnsiY29sb3IiOiIjMDI4MWYyIiwidGl0bGUiOiIwSi9SZ05DKzBMd3VJTkMrMExIUXZ0R0EwWVBRdE5DKzBMTFFzTkM5MExqUXRRPT0iLCJkZXNjcmlwdGlvbiI6IlBIQSswWVBRdXk0ZzBKYlFzTkM5MFlIUmc5Q3owWVBSZ05DKzBMTFFzQ0E0THpJc0lBclFrZENtSU1LcjBKRFJnTkdEMExiUXNOQzl3cnNnMEw3UmhDNGdPVEE0UEM5d1BnPT0iLCJ6SW5kZXgiOjEwMDAwMDAwMDB9LCJnZW9tZXRyeSI6eyJ0eXBlIjoiUG9pbnQiLCJjb29yZGluYXRlcyI6WzcxLjQ4NDAyNSw1MS4xNjAzNV19LCJpZCI6NDE4N31dJywneyJsYXQiOjUxLjE2MDMwMTgzMDkyNDk2NSwibG9uIjo3MS40ODQ0MTYxMjcyMDQ5MSwiem9vbSI6MTh9Jyk8L3NjcmlwdD48c2NyaXB0IGFzeW5jPSIiIHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbS9ndGFnL2pzP2lkPVVBLTE1ODg2NjE2OC0xIj48L3NjcmlwdD48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+KGZ1bmN0aW9uKGUpe2Z1bmN0aW9uIHQoKXtkYXRhTGF5ZXIucHVzaChhcmd1bWVudHMpfXdpbmRvdy5kYXRhTGF5ZXI9d2luZG93LmRhdGFMYXllcnx8W10sdCgianMiLG5ldyBEYXRlKSx0KCJjb25maWciLGUpLHdpbmRvdy5ndGFnPXR9KSgnVUEtMTU4ODY2MTY4LTEnKTwvc2NyaXB0PjwvYm9keT4=")</script>
                      </div>
                    </div>



              </div>

              <div class="single-product__tabs-content single-product__tabs-content">


                    <div class="single-product__dostavka pad-b-20">
                      <div class="single-product__dostavka-column">
                        <div class="single-product__dostavka-title">ОФИС</div>
                        <div class="single-product__dostavka-list">
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Адрес</div>
                            <div class="single-product__dostavka-adress_text">
                              <span>ул. Революционная, 98/1, блок А, 2 этаж, офис 2.4</span><br>
                              <b>email:</b><a href="mailto:kpo@ufaprom.ru" target="_blank">kpo@ufaprom.ru</a>
                            </div>
                          </div>
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Телефоны</div>
                            <div class="single-product__dostavka-adress_text">
                              <a href="tel:89509343103" target="_blank">+7 (950) 93-43-103</a><br>
                              <span>тел./факс:</span><br>
                              <a href="83472163809" target="_blank">+7 (347) 216-38-09</a><span>(круглосуточно)</span>
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
                            <div class="single-product__dostavka-adress_text">ул. Владивостокская, 4Б корпус 2</div><br>
                          </div>
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Телефоны</div>
                            <div class="single-product__dostavka-adress_text">
                              <a href="tel:89509343750" target="_blank">+7 (950) 934-37-50</a><br>
                              <span>(зав. складом)</span><br>
                              <a href="83472465040" target="_blank">+7 (347) 246-50-40</a><br><span>по вопросам наличия товара</span>
                            </div>
                          </div>
                          <div class="single-product__dostavka-item">
                            <div class="single-product__dostavka-item_title">Время работы</div>
                            <div class="single-product__dostavka-adress_text">Пн-Пт: 9:00 — 18:00<br>Сб, Вск: выходной</div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="single-product__accordeon-text pad-t-b-20">
                      <p>Вы можете забрать любой заказанный товар со склада самостоятельно. Оформите заказ через сайт или позвоните по телефону офиса. Если вы являетесь <b>физическим лицом</b> вы можете оплатить товар в офисе и на складе, как наличными деньгами, так и пластиковой картой любого банка.</p>
                      <p><b>Юридическим лицам</b> для получения товара необходима только доверенность. Вы можете сразу подъехать на склад, закрыть документы и получить товар. Оплата от юридических лиц принимается как безналичным способом, так и наличными и пластиковыми картами. Также действует <b>отсрочка платежа.</b></p>
                    </div>

                    <div class="single-product__accordeon">
                        <button type="button" class="single-product__accordeon-button single-product__accordeon-button">Показать на карте</button>
                        <div class="single-product__accordeon-content" style="display: none;">
                          <a class="dg-widget-link" href="http://2gis.ru/ufa/firm/70000001045332163/center/55.995640754699714,54.73806323411007/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Уфы</a><div class="dg-widget-link"><a href="http://2gis.ru/ufa/center/55.995634,54.737914/zoom/16/routeTab/rsType/bus/to/55.995634,54.737914╎Строительное оборудование, торговая компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Строительное оборудование, торговая компания</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":1400,"height":600,"borderColor":"#a3a3a3","pos":{"lat":54.73806323411007,"lon":55.995640754699714,"zoom":16},"opt":{"city":"ufa"},"org":[{"id":"70000001045332163"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                      </div>
                    </div>



              </div>
              </div>

            </div>
          </div>
        </section>

            <div class="breadcrumbs pad-b-40"><?php the_breadcrumb() ?></div>

        </div>
      </div>



    </section>
    <section class="about">
      <div class="container">
        <div class="about__row">
          <div class="about__row-column">
            <div class="about__video">
              <img src="/wp-content/uploads/images/about-bg.jpg" alt="" class="about__video-bg">
              <div class="about__btn about__btn--main">
                <img src="/wp-content/uploads/images/about-btn.svg'" alt="">
              </div>
            </div>
          </div>
          <div class="about__row-column">
            <h2 class="about__title">О компании СтройОборудование</h2>
            <div class="about__text">
              <p>Компания «Строительное оборудование» работает<br>на рынке поставок оборудования и расходных материалов с 2003<br> года.</p>
              <p>На протяжении <?php echo date('Y') - 2003 ?> лет мы развивались, открывали новые<br> филиалы и представительства.  Сегодня штат компании<br> насчитывает более 70 человек.</p>
              <p>Мы внедрили множество систем, чтобы сделать<br>ваше сотрудничество с нами максимально удобным.</p>
            </div>
          </div>
        </div>
        <div class="about__row">
          <div class="about__list">
            <div class="about__item">
              <div class="about__item-title">БОНУСНАЯ ПРОГРАММА</div>
              <div class="about__item-text">После каждой оплаты счета вы получаете бонусные баллы, которые можете<br> обменять на подарки из каталога.</div>
            </div>
            <div class="about__item">
              <div class="about__item-title">АРЕНДА ОБОРУДОВАНИЯ НА ВЫГОДНЫХ УСЛОВИЯХ</div>
              <div class="about__item-text">С постоянными клиентами работаем без залога.<br>Полный список оборудования здесь.</div>
            </div>
            <div class="about__item">
              <div class="about__item-title">ОБРАТНЫЙ ВЫКУП</div>
              <div class="about__item-text">Если оборудование после использования вам больше не пригодится, то<br> продайте его нам за сумму до 70%<br> от первоначальной стоимости. Это значительно сэкономит ваши<br> средства.</div>
            </div>
            <div class="about__item">
              <div class="about__item-title">ПЕРСОНАЛЬНЫЕ УСЛОВИЯ СОТРУДНИЧЕСТВА</div>
              <div class="about__item-text">Гибкие формы оплаты и отсрочки, дополнительные скидки и бонусы. Мы<br> открыты к диалогу по решению любых ситуаций.</div>
            </div>
            <div class="about__item">
              <div class="about__item-title">БЕСПЛАТНАЯ ДОСТАВКА ДО ВАШЕГО ОБЪЕКТА</div>
              <div class="about__item-text">У нас собственный автопарк.<br> Отгружаем товар без выходных в любое удобное<br> для вас время.</div>
            </div>
            <div class="about__item">
              <div class="about__item-title">А ТАК ЖЕ...</div>
              <div class="about__item-text">E-mail и SMS сопровождение сделки, вы всегда будете в курсе статуса вашего<br> заказа.<br>Розыгрыши ценных призов среди наших клиентов.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('template-parts/consult-section', 'page'); ?>



 </div>
</div>
<?php
get_footer();
?>
