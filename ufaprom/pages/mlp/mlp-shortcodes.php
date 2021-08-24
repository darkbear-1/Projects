<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/wp-load.php";

  function zimaKpto() {
    $content = '';
    ob_start();
    	?>
          <h2 class="mlp-info__title">ПОЧЕМУ БОЛЕЕ 50 СТРОИТЕЛЬНЫХ ОРГАНИЗАЦИЙ ПРИОБРЕЛИ КТПТО-80 У НАС?</h2>
          <div class="mlp-info__advantages">
            <div class="mlp-info__advantages-row col-flex-row">
              <div class="mlp-info__advantages-col">
                <div class="projects-sinlge__slider-list projects-sinlge__slider-list--advantages projects-sinlge__slider-list--shortcodes owl-carousel">
                  <div class="projects-sinlge__slider-image"><img src="/wp-content/uploads/2020/12/ktp1.jpg" alt=""></div>
                  <div class="projects-sinlge__slider-image"><img src="/wp-content/uploads/2020/12/ktp2.jpg" alt=""></div>
                  <div class="projects-sinlge__slider-image"><img src="/wp-content/uploads/2020/12/ktp3.jpg" alt=""></div>
                  <div class="projects-sinlge__slider-image"><img src="/wp-content/uploads/2020/12/ktp4.jpg" alt=""></div>
                  <div class="projects-sinlge__slider-image"><img src="/wp-content/uploads/2020/12/ktp5.jpg" alt=""></div>
                </div>
              </div>
              <div class="mlp-info__advantages-col">
                <div class="single-product__tabs zima__tabs">
                  <div class="single-product__tabs-buttons">
                    <div class="single-product__tabs-item">
                        <button type="button" class="single-product__tabs-btn single-product__tabs-btn--active">Преимущества</button>
                    </div>
                    <div class="single-product__tabs-item">
                        <button type="button" class="single-product__tabs-btn">Технические характеристики</button>
                    </div>
                    <div class="single-product__tabs-item">
                        <button type="button" class="single-product__tabs-btn">Комплектация трансформатора</button>
                    </div>
                  </div>
                  <div class="single-product__tabs-contents">
                    <div class="single-product__tabs-content single-product__tabs-content--active">
                      <ul class="zima__tab-list">
                        <li>Прогрев бетона при любых температурных условиях</li>
                        <li>Коэффициент работы под нагрузкой равен 100%</li>
                        <li>Защита от перегрева монтажной разводки (сечение проводов от 16 мм)</li>
                        <li>5 ступеней напряжений для различных условий прогрева</li>
                        <li>Несколько степеней защиты от перегруза, в том числе с помощью датчиков температуры</li>
                        <li>Порошковая токонепроводящая окраска корпуса</li>
                      </ul>
                    </div>
                    <div class="single-product__tabs-content single-product__tabs-content">
                        <ul class="zima__tab-list">
                          <li>Номинальная мощность трансформатора: 80 кВ*A</li>
                          <li>Напряжение на стороне ВН: 380 В</li>
                          <li>Ток на стороне ВН: 76 A</li>
                          <li>Номинальная мощность обмотки НН: 2.5 кВ*A</li>
                          <li>Напряжение на стороне НН: 42 В</li>
                          <li>
                              Ток на стороне НН: 34.4 A<br />
                              Диапазон температуры обогрева: 0-100 ºС
                          </li>
                        </ul>
                    </div>
                    <div class="single-product__tabs-content single-product__tabs-content">
                      <ul class="zima__tab-list">
                        <li>Трансформатор шт.1</li>
                        <li>Шкаф управления шт.1</li>
                        <li>Салазки шт.1</li>
                        <li>Паспорт экз.1</li>
                        <li>Паспорта на ТРМ, ТТИ, КМИ;</li>
                        <li>Методики проведения работ по электропрогреву бетона</li>
                        <li>Датчик температуры</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="projects-single__video-container projects-single__video-container--zlp">
          <img src="/wp-content/uploads/2020/12/ktpto.jpg" alt="" class="projects-single__video-bg">
            <div class="about__btn about__btn--projects" data-video-id="DqhtGeKYsWs">
              <img src="/wp-content/uploads/images/about-btn.svg'" alt="">
            </div>
          </div>
          <div class="documents">
            <div class="container col-flex-row">
              <div class="documents__col col_2">
                <div class="mlp-info__subtitle">ИНСТРУКЦИЯ ПО ЭКСПЛУАТАЦИИ КТПТО-80</div>
              </div>
              <div class="documents__col col_2 col-flex-row">
                <div class="documents__wrap">
                  <a href="/wp-content/uploads/2020/12/ktpto80-MINSK.pdf" target="_blank" class="documents__link"><img src="/wp-content/uploads/2020/12/ktpto80-MINSK-14.jpg" alt="" class="documents__image"></a>
                </div>
                <div class="documents__wrap">
                  <a href="/wp-content/uploads/2020/12/ktpto80-MINSK.pdf" target="_blank" class="documents__link"><img src="/wp-content/uploads/2020/12/ktpto80-MINSK-15.jpg" alt="" class="documents__image"></a>
                </div>
              </div>
            </div>
          </div>
      <?php
  	$content .= ob_get_contents();
    ob_end_clean();
	  return $content;
  }

  add_shortcode('zimaKpto', 'zimaKpto');

  function zimaPnsv() {
    ob_start();
      ?>
          <h2 class="mlp-info__title">ПОЧЕМУ БОЛЕЕ 140 СТРОИТЕЛЬНЫХ ОРГАНИЗАЦИЙ ПОКУПАЮТ ПНСВ У НАС КАЖДЫЙ СЕЗОН?</h2>
          <div class="mlp-info__advantages">
            <div class="mlp-info__advantages-row col-flex-row">
              <div class="mlp-info__advantages-col">
                <div class="projects-sinlge__slider-list projects-sinlge__slider-list--advantages projects-sinlge__slider-list--shortcodes owl-carousel">
                  <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2020/12/pnsv-1.jpg" alt=""></div>
                  <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2020/12/pnsv-2.jpg" alt=""></div>
                  <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2020/12/pnsv-3.jpg" alt=""></div>
                  <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2020/12/pnsv-4.jpg" alt=""></div>
                </div>
              </div>
              <div class="mlp-info__advantages-col">
                <div class="single-product__tabs zima__tabs">
                  <div class="single-product__tabs-buttons">
                    <div class="single-product__tabs-item">
                        <button type="button" class="single-product__tabs-btn single-product__tabs-btn--active">Преимущества</button>
                    </div>
                    <div class="single-product__tabs-item">
                        <button type="button" class="single-product__tabs-btn">Характеристики ПНСВ 1х1,2</button>
                    </div>
                    <div class="single-product__tabs-item">
                        <button type="button" class="single-product__tabs-btn">Характеристики ПНСВ 1х1,4</button>
                    </div>
                  </div>
                  <div class="single-product__tabs-contents">
                    <div class="single-product__tabs-content single-product__tabs-content--active">
                      <ul class="zima__tab-list">
                        <li>Низкая стоимость. Производитель — Россия</li>
                        <li>Фасовка — 1000 пог. м</li>
                        <li>Относительно небольшой расход электричества</li>
                        <li>Устойчивость к щелочному воздействию</li>
                        <li>Устойчивость к кислотному воздействию</li>
                        <li>Возможность использовать вместе с бетонной смесью, содержащей присадки</li>
                      </ul>
                    </div>
                    <div class="single-product__tabs-content single-product__tabs-content">
                      <ul class="zima__tab-list">
                          <li>Материал изоляции — ПВХ пластикат или полиэтилен</li>
                          <li>Минимальная температура при монтаже — -15 °С</li>
                          <li>Электрическое сопротивление жилы 140 Ом/км</li>
                          <li>Электрическое сопротивление изоляции провода — 1 Мон/км</li>
                          <li>Количество жил в проводе — 1 шт</li>
                          <li>Номинальный диаметр токопроводящей джилы — 1,2 мм</li>
                          <li>Толщина изоляции жилы — 0,8-0,17</li>
                          <li>Наружный диаметр провода — 2,8 мм</li>
                          <li>Макс. температура эксплуатации — 80 C</li>
                          <li>Длина нагревательной секции проводов — 110 м</li>
                          <li>Вес — 19 кг/км</li>
                      </ul>
                    </div>
                    <div class="single-product__tabs-content single-product__tabs-content">
                      <ul class="zima__tab-list">
                        <li>Материал изоляции — ПВХ пластикат или полиэтилен</li>
                        <li>Минимальная температура при монтаже — -15 °С</li>
                        <li>Электрическое сопротивление жилы 110 Ом/км</li>
                        <li>Электрическое сопротивление изоляции провода — 1 Мон/км</li>
                        <li>Количество жил в проводе — 1 шт</li>
                        <li>Номинальный диаметр токопроводящей джилы — 1,4 мм</li>
                        <li>Толщина изоляции жилы — 0,8-0,17</li>
                        <li>Наружный диаметр провода — 3 мм</li>
                        <li>Макс. температура эксплуатации — 80 C</li>
                        <li>Длина нагревательной секции проводов — 140 м</li>
                        <li>Вес — 20 кг/км</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="projects-single__video-container projects-single__video-container--zlp">
          <img src="/wp-content/uploads/2020/12/pnsv_video.jpg" alt="" class="projects-single__video-bg">
            <div class="about__btn about__btn--projects" data-video-id="i8C3kwj0eLY">
              <img src="/wp-content/uploads/images/about-btn.svg'" alt="">
            </div>
          </div>
      <?php
    $content .= ob_get_contents();
    ob_end_clean();
    return $content;
  }

  add_shortcode('zimaPnsv', 'zimaPnsv');

  function zimaTsds() {
    ob_start();
      ?>
          <h2 class="mlp-info__title">ПОЧЕМУ БОЛЕЕ 50 СТРОИТЕЛЬНЫХ ОРГАНИЗАЦИЙ ПРИОБРЕЛИ ТСДЗ У НАС?</h2>
          <div class="mlp-info__advantages">
            <div class="mlp-info__advantages-row col-flex-row">
              <div class="mlp-info__advantages-col">
                <div class="projects-sinlge__slider-list projects-sinlge__slider-list--advantages projects-sinlge__slider-list--shortcodes owl-carousel">
                  <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2020/12/tsdz63-1.jpg" alt=""></div>
                  <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2020/12/ktp4.jpg" alt=""></div>
                  <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2020/12/ktp3.jpg" alt=""></div>
                  <div class="projects-sinlge__slider-image"><img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2020/12/tsdz63-2.jpg" alt=""></div>
                </div>
              </div>
              <div class="mlp-info__advantages-col">
                <div class="single-product__tabs zima__tabs">
                  <div class="single-product__tabs-buttons">
                    <div class="single-product__tabs-item">
                        <button type="button" class="single-product__tabs-btn single-product__tabs-btn--active">Преимущества</button>
                    </div>
                    <div class="single-product__tabs-item">
                        <button type="button" class="single-product__tabs-btn">Технические характеристики</button>
                    </div>
                    <div class="single-product__tabs-item">
                        <button type="button" class="single-product__tabs-btn">Комплектация трансформатора</button>
                    </div>
                  </div>
                  <div class="single-product__tabs-contents">
                    <div class="single-product__tabs-content single-product__tabs-content--active">
                      <ul class="zima__tab-list">
                        <li>Система защиты от перегрузок</li>
                        <li>Низкий нагрев катушек за счет низкой плотности тока в катушках</li>
                        <li>Амперметры по фазам для контроля нагрузки</li>
                        <li>Прочные толстые алюминиевые контакты</li>
                        <li>Непрерывная работа без перегрева</li>
                        <li>Длительный режим работы</li>
                      </ul>
                    </div>
                    <div class="single-product__tabs-content single-product__tabs-content">
                      <ul class="zima__tab-list">
                        <li>Напряжение питание сети, В: 3х380</li>
                        <li>Частота, Гц: 50</li>
                        <li>Номинальная мощность, кВА: 63</li>
                        <li>Габаритные размеры, мм: 1040х700х940</li>
                        <li>Масса, кГ не более: 310</li>
                        <li>Диапазон автоматического регулирования температуры: -50 +7500С</li>
                        <li>Тип температурных датчиков: ТХК (L); ТХА(К); ТЖК (J)</li>
                      </ul>
                    </div>
                    <div class="single-product__tabs-content single-product__tabs-content">
                      <ul class="zima__tab-list">
                        <li>Трансформатор силовой – 1 шт.</li>
                        <li>Паспорт – 1 шт.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="documents">
            <div class="container col-flex-row">
              <div class="documents__col col_2">
                <div class="mlp-info__subtitle">ПАСПОРТ НА ТСДЗ-63</div>
              </div>
              <div class="documents__col col_2 col-flex-row">
                <div class="documents__wrap">
                  <div class="documents__title">ТРАНСФОРМАТОР ТСДЗ-63</div>
                  <a href="/wp-content/uploads/2020/12/tsdz63_80.pdf" target="_blank" class="documents__link"><img src="/wp-content/uploads/2020/12/tsdz_pasp.jpg" alt="" class="documents__image"></a>
                </div>
                <div class="documents__wrap">
                  <div class="documents__title">Рекомендации по прогреву бетона</div>
                  <a href="/wp-content/uploads/2020/12/rekomend.pdf" target="_blank" class="documents__link"><img src="/wp-content/uploads/2020/12/tsdz_rec.jpg" alt="" class="documents__image"></a>
                </div>
              </div>
            </div>
          </div>
      <?php
    $content .= ob_get_contents();
    ob_end_clean();
    return $content;
  }

  add_shortcode('zimaTsds', 'zimaTsds');

  function pologsSlider() {
    ob_start();
    ?>
    <div class="projects-sinlge__slider-list projects-sinlge__slider-list--polog owl-carousel">
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2020/12/polog4.jpg" alt="">
        <div class="pologa__text">Цельное (не склеенное из кусков) полотно полога реального размера 400х600 см, с 12 мм люверсами и шагом установки в 100 см.</div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2020/12/polog3.jpg" alt="">
        <div class="pologa__text">Усиление полога канатом по периметру увеличивает прочность при соединении нескольких пологов.</div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2020/12/polog2.jpg" alt="">
        <div class="pologa__text">Дополнительная защита углов пластиковыми наконечниками, которые повышают общую прочность конструкции на разрыв</div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2020/12/polog1.jpg" alt="">
        <div class="pologa__text">При производстве используется только 100% новое сырье, что повышает долговечность и прочность тентов, в отличии от использования вторсырья в разных пропорциях.</div>
      </div>
    </div>
    <?php
    $content .= ob_get_contents();
    ob_end_clean();
    return $content;
  }

  add_shortcode('pologsSlider', 'pologsSlider');

  function opalubkaSlider() {
    ob_start();
    ?>
    <div class="projects-sinlge__slider-list projects-sinlge__slider-list--polog owl-carousel">
      <div class="projects-sinlge__slider-image">
        <img  class="projects-sinlge__slider-img owl-lazy"src="/wp-content/uploads/2021/01/star_comp.png" alt="">
        <div class="pologa__text">
          <b>Фиксатор "Звёздочка"</b>
          <span>25, 35, 50 мм</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/fixator_konus.png" alt="">
        <div class="pologa__text">
          <b>Фиксатор-конус</b>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/fixator_level.png" alt="">
        <div class="pologa__text">
          <b>Фиксатор-стойка</b>
          <span>Многоэтажная</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/fixator_zs.png" alt="">
        <div class="pologa__text">
          <b>Фиксатор-стойка</b>
          <span>С защитным слоем 25 мм <br>С з/с 50 мм "Потолочная опора"</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/emulsol.png" alt="">
        <div class="pologa__text">
          <b>Эмульсол</b>
          <span>Бочка 20 л <br> ЭКС-А бочка  175 кг</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/trubka_pvc.png" alt="">
        <div class="pologa__text">
          <b>Трубка ПВХ</b>
          <span>d=25мм (по 3м) (в пачке 120м)</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/wire.png" alt="">
        <div class="pologa__text">
          <b>Проволока вязальная</b>
          <span>d=1,2мм</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/dubel.png" alt="">
        <div class="pologa__text">
          <b>Дюбель-гвоздь</b>
          <span>4,5*60 монтажный</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/patron_mont.png" alt="">
        <div class="pologa__text">
          <b>Патрон монтажный</b>
          <span>Д-3 зеленый<br>Д-4 красный</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/hook.png" alt="">
        <div class="pologa__text">
          <b>Крючок для вязки арматуры</b>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/hammer.png" alt="">
        <div class="pologa__text">
          <b>Молоток монолитчика</b>
        </div>
      </div>
    </div>
    <?php
      $content = ob_get_contents();
      ob_end_clean();
    return $content;
  }

  add_shortcode('opalubkaSlider', 'opalubkaSlider');

  function opalubkaSlider2() {
    ob_start();
    ?>
    <div class="projects-sinlge__slider-list projects-sinlge__slider-list--polog owl-carousel">
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new2-min-2.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new7-min-2.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new-min-2.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new3-min-1.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new1-min-1.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new5-min-1.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new4-min-1.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/ramnaya-new6-min-1.jpg" alt="">
      </div>
    </div>
    <?php
      $content = ob_get_contents();
      ob_end_clean();
    return $content;
  }

  add_shortcode('opalubkaSlider2', 'opalubkaSlider2');

  function opalubkaSlider3() {
    ob_start();
    ?>
    <div class="projects-sinlge__slider-list projects-sinlge__slider-list--polog owl-carousel">
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/plenka.png" alt="">
        <div class="pologa__text">
          <b>Полиэтиленовая пленка для опалубка</b>
          <span>200мкр. (шир=1,5м)</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/waterstop.png" alt="">
        <div class="pologa__text">
          <b>Ватерстоп</b>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/vint300.png" alt="">
        <div class="pologa__text">
          <b>Болт стяжной для опалубки</b>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/balka2.png" alt="">
        <div class="pologa__text">
          <b>Винтовая арматура</b>
          <span>С защитным слоем 25 мм <br>С з/с 50 мм "Потолочная опора"</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/emulsol.png" alt="">
        <div class="pologa__text">
          <b>Эмульсол</b>
          <span>Бочка 20 л <br> ЭКС-А бочка  175 кг</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/trubka_pvc.png" alt="">
        <div class="pologa__text">
          <b>Трубка ПВХ</b>
          <span>d=25мм (по 3м) (в пачке 120м)</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/wire.png" alt="">
        <div class="pologa__text">
          <b>Проволока вязальная</b>
          <span>d=1,2мм</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/dubel.png" alt="">
        <div class="pologa__text">
          <b>Дюбель-гвоздь</b>
          <span>4,5*60 монтажный</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/armatura.png" alt="">
        <div class="pologa__text">
          <b>Винтовая арматура для опалубки</b>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/patron_mont-1.png" alt="">
        <div class="pologa__text">
          <b>Патрон монтажный</b>
          <span>Д-3 зеленый<br>Д-4 красный</span>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/hook-1.png" alt="">
        <div class="pologa__text">
          <b>Крючок для вязки арматуры</b>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/hammer-1.png" alt="">
        <div class="pologa__text">
          <b>Молоток монолитчика</b>
        </div>
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/2021/01/stringer.png" alt="">
        <div class="pologa__text">
          <b>Ригель</b>
          <span>1м, 1.5м, 2м</span>
        </div>
      </div>
    </div>
    <?php
      $content = ob_get_contents();
      ob_end_clean();
    return $content;
  }

  add_shortcode('opalubkaSlider3', 'opalubkaSlider3');

 function zlpSlider() {
    ob_start();
    ?>
    <div class="projects-sinlge__slider-list owl-carousel">
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/images/zlp-slide14.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/images/zlp-slide13.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/images/zlp-slide12.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/images/zlp-slide11.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/images/zlp-slide10.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/images/zlp-slide9.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/images/zlp-slide8.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/images/zlp-slide7.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/images/zlp-slide6.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/images/zlp-slide5.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/images/zlp-slide4.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/images/zlp-slide3.jpg" alt="">
      </div>
      <div class="projects-sinlge__slider-image">
        <img class="projects-sinlge__slider-img owl-lazy" data-src="/wp-content/uploads/images/zlp-slide2.jpg" alt="">
      </div>
      </div>
    <?php
      $content = ob_get_contents();
      ob_end_clean();
    return $content;
  }

  add_shortcode('zlpSlider', 'zlpSlider');
?>
