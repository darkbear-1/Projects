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
      <div class="container">
        <h1 class="main-screen__title">Комплексные поставки строительного оборудования</h1>
        <ul class="main-screen__advantages-list">
          <li class="main-screen__advantages-item">Работаем с 2004 года</li>
          <li class="main-screen__advantages-item">Всегда в наличии более 1000 позиций</li>
          <li class="main-screen__advantages-item">Собственный бренд расходных материалов OXCRAFT</li>
          <li class="main-screen__advantages-item">Более 70 человек в штате</li>
        </ul>
        <button type="button" class="button cons-pu">Заказать консультацию</button>
      </div>
    </section>
    <section class="catalog">
      <div class="container">
        <h2 class="catalog__title">Подобрать строительное оборудование</h2>
        <div class="catalog__choice-buttons">
          <button type="button" data-type="type" class="catalog__choice-btn catalog__choice-btn--active">По типу</button>
          <button type="button" data-type="appointment" class="catalog__choice-btn">По назначению</button>
        </div>
        <div class="catalog__choice catalog__choice--type catalog__choice--active">
          <div class="catalog__choice-wrap">
            <?php get_template_part( 'template-parts/loop-category', 'product_cat' ); ?>
          </div>
        </div>
        <div class="catalog__choice catalog__choice--appointment">
          <div class="catalog__choice-wrap">
            <?php get_template_part( 'template-parts/loop-appointment', 'appointment', array('number' => 7, 'hideBtn' => false, 'pagename' => 'main-page') ); ?>
          </div>
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
    <section class="akcii">
      <div class="container">
        <h2 class="akcii__title">Наши акции</h2>
        <div id="akcii__slider" class="akcii__list owl-carousel">
          <?php get_template_part( 'template-parts/loop-akcii', 'akcii' ); ?>
        </div>
      </div>
    </section>
    <?php get_template_part('template-parts/consult-section', 'page'); ?>
    <section class="projects">
      <div class="container">
        <h2 class="projects__title">Выполненные проекты</h2>
        <div class="projects__list">
          <?php get_template_part( 'template-parts/loop-projects', 'projects', array('numberposts' => '3') ); ?>
        </div>
        <a href="/projects/" class="button">Смотреть все проекты</a>
      </div>
    </section>
 </div>
</div>
<?php
get_footer();
?>
