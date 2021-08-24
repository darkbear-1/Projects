<?php
/*
Template Name: Облачная касса для интернет-магазина
*/
get_header();
?>
<div class="oblachnaya-page">
  <div class="main-screen">
    <div class="container">
      <?php if( !is_front_page() ) : ?>
        <div class='breadcrumbs'>
          <div class='breadcrumbs__wrap'>
            <?php echo the_breadcrumb();?>
          </div>
        </div>
       <?php endif ?>
       <div class="oblachnaya-page__columns">
         <div class="oblachnaya-page__column">
           <h1 class="resheniya__title">Облачная касса<br>для интернет-магазина</h1>
           <h2 class="resheniya__subtitle"><?php echo $postMeta['subtitle'][0] ?></h2>
           <ul class="resheniya__fast-links">
             <li class="resheniya__fast-item">
               <a rel="nofollow" href="#" class="h2Anchor" data-h2id="<?php echo $h2Id ?>" class="oglavlenie__link">Бесплатная отправка чеков клиентам по SMS</a>
             </li>
             <li class="resheniya__fast-item">
               <a rel="nofollow" href="#" class="h2Anchor" data-h2id="<?php echo $h2Id ?>" class="oglavlenie__link">Быстрая смена платежных систем в личном кабинете</a>
             </li>
             <li class="resheniya__fast-item">
               <a rel="nofollow" href="#" class="h2Anchor" data-h2id="<?php echo $h2Id ?>" class="oglavlenie__link">Полное сопровождение на всех этапах</a>
             </li>
             <li class="resheniya__fast-item">
               <a rel="nofollow" href="#" class="h2Anchor" data-h2id="<?php echo $h2Id ?>" class="oglavlenie__link">Подключение платежной системы</a>
             </li>
           </ul>
           <div class="oblachnaya-page__form">
          		<div class="checki__form">
          			<div class="container">
                  <div class="oblachnaya-page__form-wrap">
            					<form class="form-questions" method="post" action="" enctype="multipart/form-data" name="Получить консультацию">
            						<input class="form-questions__phone checki__form-phone ym-record-keys" type="tel" name="phone" pattern="[0-9() #&+*-=.]+" title="Принимаются только цифры и телефонные символы (#, -, * и т. д.)." placeholder="+7(___)___-__-__" id="phone" value="" required>
            						<input type="hidden" name="form_fields[time]" value="<?php echo do_shortcode('[siteTime]') ?>">
            						<input type="hidden" name="form_fields[target]">
            						<input type="hidden" name="form_fields[enter_dot]">
            						<input type="hidden" name="form_fields[utms]">
            						<input type="hidden" name="form_fields[roi_id]">
            						<input type="hidden" name="form_fields[yandex_metr]">
            						<input type="hidden" name="form_fields[google_metr]">
            						<input type="checkbox" name="anticheck" id="anticheck" class="anticheck" style="display: none !important;" value="true" checked="checked">
            						<input type="text" name="form-name" style="display: none !important;" value="questions">
            						<input type="text" name="submitted" id="submitted" value="" style="display: none !important;">
            						<input class="stati__form-send form-questions__send" type="submit" value="Получить консультацию">
            					</form>
                  </div>
          			</div>
          		</div>
           </div>
           <blockquote>
             <p>«Все интернет-магазины обязаны применять при расчетах онлайн-кассы,<br>передавать ФНС данные о каждой операции и вылавать покупателям чеки.»<br>(п. 5 ст. 1.2 Федерального закона № 54-ФЗ) <a href="#" target="_blank">Узнать подробнее</a></p>
           </blockquote>
       </div>
       <div class="oblachnaya-page__column">
         <img class="oblachnaya-page__image" src="/wp-content/uploads/2020/11/PIC-1.png" alt="">
       </div>
      </div>
    </div>
  </div>
  <div class="how-work">
    <div class="container">
      <h2 class="how-work__title">Как работает облачная касса</h2>
      <div class="how-work__image-wrap">
        <img class="how-work__image how-work__image--desktop" src="/wp-content/uploads/2020/11/Group-340.svg" alt="">
        <img class="how-work__image how-work__image--mobile" src="/wp-content/uploads/2020/11/Mobile.svg" alt="">
      </div>
      <div class="how-work__text-wrap">
        <div class="how-work__text-columns">
          <div class="how-work__text-column">
            <ul class="how-work__text-list">
              <li class="how-work__text-item">Облачная касса - это специальная касса, которая находится в дата центре<br>с круглосуточным обслуживанием.</li>
              <li class="how-work__text-item">Облачная касса получает от платежных систем об оплатах на вашем сайте,<br>формирует электронный чек и отправляет его покупателю и в ФНС.</li>
              <li class="how-work__text-item">Данное решение позволит вашему интернет-магазину<br>полностью соответствовать всем требованиям закона 54-ФЗ</li>
            </ul>
          </div>
          <div class="how-work__text-column">
            <div class="how-work__text-image">
              <img src="/wp-content/uploads/2020/11/Group-341.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="how-work__form">
         <div class="checki__form">
           <div class="container">
             <div class="how-work__form-wrap">
                 <div class="how-work__form-column">
                   <div class="how-work__form-title">Рассчитать стоимость онлайн кассы<br>для вашего интернет-магазина</div>
                 </div>
                 <div class="how-work__form-column">
                   <form class="form-questions" method="post" action="" enctype="multipart/form-data" name="Рассчитать стоимость онлайн кассы для вашего интернет-магазина">
                     <input class="form-questions__phone checki__form-phone ym-record-keys" type="tel" name="phone" pattern="[0-9() #&+*-=.]+" title="Принимаются только цифры и телефонные символы (#, -, * и т. д.)." placeholder="+7______-__-__" id="phone" value="" required>
                     <input type="hidden" name="form_fields[time]" value="<?php echo do_shortcode('[siteTime]') ?>">
                     <input type="hidden" name="form_fields[target]">
                     <input type="hidden" name="form_fields[enter_dot]">
                     <input type="hidden" name="form_fields[utms]">
                     <input type="hidden" name="form_fields[roi_id]">
                     <input type="hidden" name="form_fields[yandex_metr]">
                     <input type="hidden" name="form_fields[google_metr]">
                     <input type="checkbox" name="anticheck" id="anticheck" class="anticheck" style="display: none !important;" value="true" checked="checked">
                     <input type="text" name="form-name" style="display: none !important;" value="questions">
                     <input type="text" name="submitted" id="submitted" value="" style="display: none !important;">
                     <input class="stati__form-send form-questions__send" type="submit" value="Заказать демонстрацию">
                   </form>
                 </div>
             </div>
           </div>
         </div>
      </div>
    </div>
  </div>
  <div class="advantages">
    <div class="container">
      <h2 class="advantages__title">Преимущества аренды облачной кассы</h2>
      <ul class="advantages__list">
        <li class="advantages__item">
          <div class="advantages__item-title">Выгодный тариф</div>
          <div class="advantages__item-text">В стоимость аренды онлайн-кассы также входит<br> сервис фискализации онлайн-платежей, услуги ОФД и<br> регистрация кассы в ФНС.</div>
        </li>
        <li class="advantages__item">
          <div class="advantages__item-title">Удобно и надежно</div>
          <div class="advantages__item-text">–Контроль продаж в личном кабинете и с помощью мобильного приложения.<br>–Дополнительное приложение для быстрой связи с технической поддержкой.<br>–Автоматическое открытие и закрытие смен.</div>
        </li>
        <li class="advantages__item">
          <div class="advantages__item-title">Полное соответствие 54-ФЗ</div>
          <div class="advantages__item-text">Электронные чеки автоматически фискализируются в<br> момент расчета и электронный чек отправляется<br> покупателю, а данные об оплате в ФНС. </div>
        </li>
        <li class="advantages__item">
          <div class="advantages__item-title">Не требует доработок сайта</div>
          <div class="advantages__item-text">Прямая интеграция со всеми популярными платежными<br> системами. Облачная касса получает данные об оплатах<br> напрямую, это исключает множество возможных ошибок и<br> повышает безопасность платежей</div>
        </li>
      </ul>
    </div>
  </div>
  <div class="podkluchit">
    <div class="container">
      <div class="podkluchit__column">
				<div class="podkluchit-title"><b>Готовы подключить облачную кассу?</b><br><span>Отправьте заявку на подключение или проконсультируйтесь с менеджером по телефону</span><a href="tel:88005119063">8-800-511-90-63</a></div>
			</div>
			<div class="podkluchit__column checki__form">
        <form class="form-questions" method="post" action="" enctype="multipart/form-data" name="Готовы подключить облачную кассу?">
          <input class="form-questions__phone checki__form-phone ym-record-keys" type="tel" name="phone" pattern="[0-9() #&+*-=.]+" title="Принимаются только цифры и телефонные символы (#, -, * и т. д.)." placeholder="+7______-__-__" id="phone" value="" required>
          <input type="hidden" name="form_fields[time]" value="<?php echo do_shortcode('[siteTime]') ?>">
          <input type="hidden" name="form_fields[target]">
          <input type="hidden" name="form_fields[enter_dot]">
          <input type="hidden" name="form_fields[utms]">
          <input type="hidden" name="form_fields[roi_id]">
          <input type="hidden" name="form_fields[yandex_metr]">
          <input type="hidden" name="form_fields[google_metr]">
          <input type="checkbox" name="anticheck" id="anticheck" class="anticheck" style="display: none !important;" value="true" checked="checked">
          <input type="text" name="form-name" style="display: none !important;" value="questions">
          <input type="text" name="submitted" id="submitted" value="" style="display: none !important;">
          <input class="stati__form-send form-questions__send" type="submit" value="Отправить заявку">
        </form>
			</div>
    </div>
	</div>
  <div class="eqvairing">
    <div class="container">
      <div class="eqvairing__title">Подключим интернет-эквайринг на выгодных условиях</div>
      <div class="eqvairing__list eqvairing_list--unfold">
        <div class="eqvairing__item">
          <div class="eqvairing__item-column">
            <div class="eqvairing__percent">1,6%</div>
          </div>
          <div class="eqvairing__item-column">
            <img src="/wp-content/uploads/2020/11/SBERBANK.jpg" alt="" class="eqvairing__image">
          </div>
        </div>
        <div class="eqvairing__item">
          <div class="eqvairing__item-column">
            <div class="eqvairing__percent">2,8%</div>
          </div>
          <div class="eqvairing__item-column">
            <img src="/wp-content/uploads/2020/11/Yandeks-kassa.jpg" alt="" class="eqvairing__image">
          </div>
        </div>
        <div class="eqvairing__item">
          <div class="eqvairing__item-column">
            <div class="eqvairing__percent">от 1%</div>
          </div>
          <div class="eqvairing__item-column">
            <img src="/wp-content/uploads/2020/11/TINKOFF.jpg" alt="" class="eqvairing__image">
          </div>
        </div>
        <div class="eqvairing__item">
          <div class="eqvairing__item-column">
            <img src="/wp-content/uploads/2020/11/Alfa.jpg" alt="" class="eqvairing__image">
          </div>
        </div>
        <div class="eqvairing__item">
          <div class="eqvairing__item-column">
            <img src="/wp-content/uploads/2020/11/Uralsib.jpg" alt="" class="eqvairing__image">
          </div>
        </div>
        <div class="eqvairing__item">
          <div class="eqvairing__item-column">
            <img src="/wp-content/uploads/2020/11/ROBOKASSA.jpg" alt="" class="eqvairing__image">
          </div>
        </div>
        <div class="eqvairing__item">
          <div class="eqvairing__item-column">
            <img src="/wp-content/uploads/2020/11/Alfa.jpg" alt="" class="eqvairing__image">
          </div>
        </div>
        <div class="eqvairing__item">
          <div class="eqvairing__item-column">
            <img src="/wp-content/uploads/2020/11/Uralsib.jpg" alt="" class="eqvairing__image">
          </div>
        </div>
        <div class="eqvairing__item">
          <div class="eqvairing__item-column">
            <img src="/wp-content/uploads/2020/11/ROBOKASSA.jpg" alt="" class="eqvairing__image">
          </div>
        </div>
      </div>
      <div class="eqvairing__btn-wrap"><button type="button" class="eqvairing__btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none"><path d="M15 1.5L8 8.5L1 1.5" stroke="#131922" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button></div>
    </div>
  </div>
  <div class="special-offer">
    <div class="container">
      <div class="checki__form special-offer__form">
        <div class="container">
          <div class="special-offer__form-wrap">
              <div class="special-offer__form-column">
                <div class="special-offer__form-title">Получите спецпредложение на подключение<br>платежной системы</div>
              </div>
              <div class="special-offer__form-column">
                <form class="form-questions" method="post" action="" enctype="multipart/form-data" name="Рассчитать стоимость онлайн кассы для вашего интернет-магазина">
                  <input class="form-questions__phone checki__form-phone ym-record-keys" type="tel" name="phone" pattern="[0-9() #&+*-=.]+" title="Принимаются только цифры и телефонные символы (#, -, * и т. д.)." placeholder="+7______-__-__" id="phone" value="" required>
                  <input type="hidden" name="form_fields[time]" value="<?php echo do_shortcode('[siteTime]') ?>">
                  <input type="hidden" name="form_fields[target]">
                  <input type="hidden" name="form_fields[enter_dot]">
                  <input type="hidden" name="form_fields[utms]">
                  <input type="hidden" name="form_fields[roi_id]">
                  <input type="hidden" name="form_fields[yandex_metr]">
                  <input type="hidden" name="form_fields[google_metr]">
                  <input type="checkbox" name="anticheck" id="anticheck" class="anticheck" style="display: none !important;" value="true" checked="checked">
                  <input type="text" name="form-name" style="display: none !important;" value="questions">
                  <input type="text" name="submitted" id="submitted" value="" style="display: none !important;">
                  <input class="stati__form-send form-questions__send" type="submit" value="Заказать демонстрацию">
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="apps-block">
    <div class="container">
      <div class="apps-block__check">
        <div class="apps-block__check-title"><b>Полный контроль</b><br>из любой точки мира с приложением<br><span>«Онлайн-Чеки Мониторинг»</span></div>
        <div class="apps-block__btn-wrap">
          <div class="apps-block__btn-title">Доступно в</div>
          <a href="#" target="_blank">
            <span class="apps-block__check-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none"><g clip-path="url(#clip0)"><path d="M23.497 21.821C23.0661 22.7992 22.5561 23.6997 21.9651 24.5276C21.1596 25.6562 20.5001 26.4374 19.9918 26.8712C19.2039 27.5833 18.3597 27.9479 17.4557 27.9687C16.8067 27.9687 16.024 27.7872 15.113 27.4191C14.199 27.0527 13.359 26.8712 12.5909 26.8712C11.7854 26.8712 10.9215 27.0527 9.99748 27.4191C9.07202 27.7872 8.32649 27.9791 7.75647 27.9981C6.88958 28.0344 6.0255 27.6593 5.16301 26.8712C4.61252 26.3994 3.92396 25.5905 3.09911 24.4446C2.2141 23.2209 1.4865 21.802 0.916489 20.1842C0.306024 18.4369 0 16.7448 0 15.1067C0 13.2303 0.412605 11.6118 1.23904 10.2556C1.88855 9.16623 2.75263 8.3069 3.83409 7.67606C4.91555 7.04521 6.08407 6.72374 7.34246 6.70317C8.03102 6.70317 8.93396 6.91248 10.056 7.32382C11.175 7.73655 11.8934 7.94585 12.2084 7.94585C12.4439 7.94585 13.242 7.70112 14.595 7.21321C15.8745 6.76073 16.9544 6.57337 17.8391 6.64717C20.2363 6.83729 22.0372 7.76593 23.2349 9.43896C21.091 10.7155 20.0305 12.5035 20.0516 14.7972C20.0709 16.5838 20.7305 18.0705 22.0267 19.2509C22.6141 19.7988 23.2701 20.2223 24 20.523C23.8417 20.9741 23.6746 21.4062 23.497 21.821ZM17.9991 0.560647C17.9991 1.96097 17.4785 3.26844 16.4409 4.47862C15.1886 5.9173 13.674 6.74863 12.0315 6.61745C12.0106 6.44945 11.9984 6.27264 11.9984 6.08685C11.9984 4.74254 12.5939 3.30387 13.6515 2.12756C14.1795 1.53198 14.8509 1.03675 15.6653 0.641706C16.4778 0.252552 17.2464 0.0373421 17.9692 0.000488281C17.9903 0.187689 17.9991 0.374902 17.9991 0.560629V0.560647Z" fill="#131922"/></g><defs><clipPath id="clip0"><rect width="24" height="28" fill="white"/></clipPath></defs></svg></span>
            <span>App store</span>
          </a>
        </div>
        <img class="apps-block__check-image" src="/wp-content/uploads/2020/11/CHECK.png" alt="">
      </div>
      <div class="apps-block__help">
        <img class="apps-block__check-image" src="/wp-content/uploads/2020/11/HELP.png" alt="">
        <div class="apps-block__help-title"><b>МОМЕНТАЛЬНАЯ СВЯЗЬ</b><br>с персональным менеджером поддержки<br>в специальном приложении</div>
        <div class="apps-block__btn-wrap apps-block__btn-wrap--help">
          <a href="#" target="_blank">
            <span class="apps-block__check-icon apps-block__check-icon--google"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"><path d="M6.11165 0.447796C5.01622 -0.15767 3.73004 -0.14367 2.6416 0.456546L15.3984 12.2246L19.6839 7.93912L6.11165 0.447796Z" fill="#131922"/><path d="M1.36558 1.66016C1.0541 2.16938 0.87561 2.75209 0.87561 3.36981V24.6241C0.87561 25.2226 1.03835 25.793 1.33233 26.2918L14.1609 13.4632L1.36558 1.66016Z" fill="#131922"/><path d="M25.3655 11.075L21.2778 8.81934L16.6843 13.4111L22.3137 18.603L25.3673 16.9179C26.4662 16.3089 27.1242 15.217 27.1242 13.9955C27.1224 12.7741 26.4662 11.6822 25.3655 11.075Z" fill="#131922"/><path d="M15.4471 14.6504L2.58356 27.5139C3.14178 27.8324 3.75424 28.0004 4.37021 28.0004C4.96517 28.0004 5.56364 27.8499 6.11136 27.5472L20.7003 19.4959L15.4471 14.6504Z" fill="#131922"/><defs><clipPath id="clip0"><rect width="28" height="28" fill="white"/></clipPath></defs></svg></span>
            <span>GooglePlay</span>
          </a>
          <a href="#" target="_blank">
            <span class="apps-block__check-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none"><g clip-path="url(#clip0)"><path d="M23.497 21.821C23.0661 22.7992 22.5561 23.6997 21.9651 24.5276C21.1596 25.6562 20.5001 26.4374 19.9918 26.8712C19.2039 27.5833 18.3597 27.9479 17.4557 27.9687C16.8067 27.9687 16.024 27.7872 15.113 27.4191C14.199 27.0527 13.359 26.8712 12.5909 26.8712C11.7854 26.8712 10.9215 27.0527 9.99748 27.4191C9.07202 27.7872 8.32649 27.9791 7.75647 27.9981C6.88958 28.0344 6.0255 27.6593 5.16301 26.8712C4.61252 26.3994 3.92396 25.5905 3.09911 24.4446C2.2141 23.2209 1.4865 21.802 0.916489 20.1842C0.306024 18.4369 0 16.7448 0 15.1067C0 13.2303 0.412605 11.6118 1.23904 10.2556C1.88855 9.16623 2.75263 8.3069 3.83409 7.67606C4.91555 7.04521 6.08407 6.72374 7.34246 6.70317C8.03102 6.70317 8.93396 6.91248 10.056 7.32382C11.175 7.73655 11.8934 7.94585 12.2084 7.94585C12.4439 7.94585 13.242 7.70112 14.595 7.21321C15.8745 6.76073 16.9544 6.57337 17.8391 6.64717C20.2363 6.83729 22.0372 7.76593 23.2349 9.43896C21.091 10.7155 20.0305 12.5035 20.0516 14.7972C20.0709 16.5838 20.7305 18.0705 22.0267 19.2509C22.6141 19.7988 23.2701 20.2223 24 20.523C23.8417 20.9741 23.6746 21.4062 23.497 21.821ZM17.9991 0.560647C17.9991 1.96097 17.4785 3.26844 16.4409 4.47862C15.1886 5.9173 13.674 6.74863 12.0315 6.61745C12.0106 6.44945 11.9984 6.27264 11.9984 6.08685C11.9984 4.74254 12.5939 3.30387 13.6515 2.12756C14.1795 1.53198 14.8509 1.03675 15.6653 0.641706C16.4778 0.252552 17.2464 0.0373421 17.9692 0.000488281C17.9903 0.187689 17.9991 0.374902 17.9991 0.560629V0.560647Z" fill="#131922"/></g><defs><clipPath id="clip0"><rect width="24" height="28" fill="white"/></clipPath></defs></svg></span>
            <span>App store</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="question">
    <div class="container">
      <div class="checki__form stati__form--questions">
			<div class="stati__form-column">
				<div class="stati__form-title">Есть вопросы?</div>
				<div class="stati__form-subtitle">Закажите бесплатную демонстрацию возможностей сервиса Бизнес.Ру</div>
			</div>
			<div class="stati__form-column">
				<form class="form-questions" method="post" action="" enctype="multipart/form-data" name="Есть вопросы?">
					<input class="form-questions__phone checki__form-phone ym-record-keys" type="tel" name="phone" pattern="[0-9() #&+*-=.]+" title="Принимаются только цифры и телефонные символы (#, -, * и т. д.)." placeholder="+____-___-__-__" id="phone" value="" required>
					<input type="hidden" name="form_fields[time]" value="<?php echo do_shortcode('[siteTime]') ?>">
					<input type="hidden" name="form_fields[target]">
					<input type="hidden" name="form_fields[enter_dot]">
					<input type="hidden" name="form_fields[utms]">
					<input type="hidden" name="form_fields[roi_id]">
					<input type="hidden" name="form_fields[yandex_metr]">
					<input type="hidden" name="form_fields[google_metr]">
					<input type="checkbox" name="anticheck" id="anticheck" class="anticheck" style="display: none !important;" value="true" checked="checked">
					<input type="text" name="form-name" style="display: none !important;" value="questions">
					<input type="text" name="submitted" id="submitted" value="" style="display: none !important;">
					<input class="stati__form-send form-questions__send" type="submit" value="Заказать демонстрацию">
				</form>
			</div>
		</div>
    </div>
  </div>
</div>
<?php
get_footer();
?>
