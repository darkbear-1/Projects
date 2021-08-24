<?php
/*
Template Name: Шаблон вакансии
Template Post Type: vakansii
*/
get_header();
$postMeta = get_post_meta(get_the_ID());
$gallery = explode(',', $postMeta['kartinki-dlia-slaidera'][0]);
$usloviya = unserialize($postMeta['usloviia'][0]);
$skills = unserialize($postMeta['kliuchevye-navyki'][0]);
?>

	<div class="single-all_wrap vakansii-single">
    <?php do_action('before_content'); ?>
    <div class="content_wrap">
    <?php do_action('content_inner'); ?>
	  <section class="projects-single__main-screen" style="background-image: linear-gradient(180deg, #00A4E5 15.04%, rgba(0, 215, 229, 0.51) 87.5%), url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>)">
      <div class="container">
        <h1 class="projects-single__title"><?php echo the_title(); ?></h1>
  			<div class="appointment__subtitle">Наш дружный коллектив насчитывает более 70 человек в 5 городах России и Казахстана.<br> Присоединившись к нам, вы получите бесценный опыт в сфере продажи строительного оборудования. </div>
				<div class="vakansii-single__appointment-list">
					<div class="vakansii-single__appointment-item">
						<div class="vakansii-single__appointment-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="21" viewBox="0 0 14 21" fill="none"><path d="M2 19L11 10.5L2 2" stroke="#FF8D24" stroke-width="3" stroke-linecap="round"/></svg></div>
						<div class="vakansii-single__appointment-text">Регулярное обучение сотрудников</div>
					</div>
					<div class="vakansii-single__appointment-item">
						<div class="vakansii-single__appointment-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="21" viewBox="0 0 14 21" fill="none"><path d="M2 19L11 10.5L2 2" stroke="#FF8D24" stroke-width="3" stroke-linecap="round"/></svg></div>
						<div class="vakansii-single__appointment-text">Развивающие корпоративы</div>
					</div>
					<div class="vakansii-single__appointment-item">
						<div class="vakansii-single__appointment-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="21" viewBox="0 0 14 21" fill="none"><path d="M2 19L11 10.5L2 2" stroke="#FF8D24" stroke-width="3" stroke-linecap="round"/></svg></div>
						<div class="vakansii-single__appointment-text">Премии и привилегии для лучших сотрудников</div>
					</div>
				</div>
      </div>
    </section>
    <section class="breadcrumbs__wrap">
      <div class="container">
        <div class="breadcrumbs"><?php the_breadcrumb() ?></div>
      </div>
    </section>
    <section class="projects-single__content projects-single__content--akcii">
      <div class="container">
        <div class="projects-single__content-row projects-single__content-row--appointment">
  				<div id="vakansii-single__slider-list" class="owl-carousel">
						<?php if (!empty($gallery)): ?>
							<?php foreach ($gallery as $key => $value): ?>
	  						<div class="uslugi__item-wrap">
	                <div class="projects-sinlge__slider-image"><?php echo wp_get_attachment_image($value, 'full', false, array('class' => 'projects-sinlge__slider-img')) ?></div>
	              </div>
	  					<?php endforeach; ?>
						<?php endif; ?>
  				</div>
	        <h2 class="projects-single__another-title">Основные условия</h2>
          <div class="usloviia">
            <?php if (!empty($usloviya)): ?>
              <?php foreach ($usloviya as $key => $value): ?>
                <div class="usloviia__item-wrap">
                  <div class="usloviia__item-title"><?php echo $value['zagolovok'] ?></div>
                  <div class="usloviia__item-value"><?php echo $value['znachenie'] ?></div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <button type="button" class="button" onclick="road_to_anchor('.vakansii-contacts')">Откликнуться на вакансию</button>
  			</div>
      </div>
    </section>
    <section class="appointment__another">
      <div class="container">
        <h2 class="projects-single__another-title">Ключевые навыки</h2>
        <div class="skills__list">
          <?php if (!empty($skills)): ?>
            <?php foreach ($skills as $key => $value): ?>
              <div class="skills__item-wrap">
                <div class="skills__item-icon">
                  <?php echo wp_get_attachment_image($value['ikonka'], 'full', false) ?>
                </div>
                <div class="skills__item-value"><?php echo $value['tekst'] ?></div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
  			</div>
      </div>
    </section>
    <section class="vakansii-content">
      <div class="container">
        <?php echo the_content() ?>
				<div class="vakansii-content__wait">Ждем Вас, в нашу команду!</div>
      </div>
    </section>
    <section class="vakansii-contacts">
      <div class="container">
        <div class="vakansii-contacts__col">
          <div class="vakansii-contacts__image">
            <img src="/wp-content/uploads/2021/03/Mask-Group-2.jpg" alt="">
          </div>
        </div>
        <div class="vakansii-contacts__col">
          <div class="vakansii__contacts-title">По вопросам трудоустройства обращайтесь<br> к HR менеджеру Эльвине Федоровой</div>
          <ul class="vakansii__contacts-list">
            <li class="vakansii__contacts-item">
							<div class="vakansii__contacts-icon"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none"><g clip-path="url(#clip0)"><path d="M26.5811 20.1164C26.192 19.7273 25.5612 19.7273 25.1722 20.1164L21.8828 23.4058C21.6666 23.622 21.3148 23.622 21.0986 23.4058L10.6147 12.9219C10.51 12.8171 10.4524 12.6779 10.4524 12.5298C10.4524 12.3817 10.51 12.2425 10.6147 12.1378L13.9042 8.84833C14.2932 8.45927 14.2932 7.82854 13.9042 7.43948L6.777 0.312299C6.38801 -0.0767559 5.7572 -0.0767559 5.36815 0.312299L2.55856 3.12189C-0.852812 6.53333 -0.852812 12.0842 2.55856 15.4956L18.4951 31.4321C20.1354 33.0724 22.3162 33.9825 24.6359 33.9946C24.6517 33.9947 24.6672 33.9948 24.6831 33.9948C26.9851 33.9947 29.1572 33.1087 30.8033 31.4969L33.7007 28.6598C33.8908 28.4736 33.9985 28.2193 34 27.9532C34.0013 27.6871 33.8963 27.4316 33.7081 27.2435L26.5811 20.1164ZM6.07261 2.4256L11.7909 8.14387L10.4124 9.52243L4.69411 3.8041L6.07261 2.4256ZM24.6464 32.0023C22.8549 31.9928 21.1707 31.29 19.9039 30.0233L3.9674 14.0868C1.56447 11.6838 1.35367 7.90651 3.33414 5.26189L9.01522 10.943C8.21805 11.942 8.28135 13.4062 9.2059 14.3308L19.6899 24.8147C20.6144 25.7393 22.0787 25.8026 23.0777 25.0054L28.7294 30.6571C27.557 31.5379 26.137 32.0124 24.6464 32.0023ZM30.1945 29.3045L24.4981 23.6081L25.8766 22.2296L31.5875 27.9404L30.1945 29.3045Z" fill="white"/><path d="M29.0189 0.00512695H21.1821C18.4355 0.00512695 16.201 2.23964 16.201 4.9862V8.35546C16.201 11.102 18.4355 13.3365 21.1821 13.3365H23.9907L28.9786 18.3244C29.1692 18.5151 29.424 18.6163 29.6833 18.6163C29.8116 18.6163 29.941 18.5914 30.0643 18.5404C30.4366 18.3862 30.6793 18.0229 30.6793 17.6201V13.0533C32.6458 12.3646 34 10.506 34 8.35553V4.9862C34 2.23964 31.7655 0.00512695 29.0189 0.00512695ZM32.0076 8.35546C32.0076 9.82049 30.9606 11.0596 29.5182 11.3017C29.0383 11.3823 28.6869 11.7976 28.6869 12.2842V15.2149L25.1078 11.6359C24.921 11.4491 24.6675 11.3442 24.4034 11.3442H21.182C19.5341 11.3442 18.1934 10.0035 18.1934 8.35553V4.9862C18.1934 3.33826 19.5341 1.99756 21.182 1.99756H29.0189C30.6668 1.99756 32.0075 3.33826 32.0075 4.9862V8.35546H32.0076Z" fill="white"/><path d="M29.0189 5.6748C28.7566 5.6748 28.5002 5.78107 28.3143 5.96636C28.129 6.15166 28.0227 6.40868 28.0227 6.67102C28.0227 6.93336 28.129 7.18971 28.3143 7.37501C28.5002 7.56031 28.7566 7.66723 29.0189 7.66723C29.2813 7.66723 29.5376 7.56031 29.7236 7.37501C29.9089 7.18971 30.0151 6.93269 30.0151 6.67102C30.0151 6.40868 29.9089 6.15166 29.7236 5.96636C29.5376 5.78107 29.2813 5.6748 29.0189 5.6748Z" fill="white"/><path d="M25.0341 5.6748C24.7717 5.6748 24.5154 5.78107 24.3294 5.96636C24.1441 6.15166 24.0378 6.40868 24.0378 6.67102C24.0378 6.93336 24.1441 7.18971 24.3294 7.37501C24.5154 7.56097 24.7717 7.66723 25.0341 7.66723C25.2964 7.66723 25.5528 7.56097 25.7387 7.37501C25.924 7.18971 26.0303 6.93336 26.0303 6.67102C26.0303 6.40868 25.924 6.15166 25.7387 5.96636C25.5528 5.78107 25.2964 5.6748 25.0341 5.6748Z" fill="white"/><path d="M21.0492 5.6748C20.7869 5.6748 20.5305 5.78107 20.3446 5.96636C20.1593 6.15166 20.053 6.40868 20.053 6.67102C20.053 6.93269 20.1593 7.18971 20.3446 7.37501C20.5305 7.56031 20.7869 7.66723 21.0492 7.66723C21.3116 7.66723 21.5686 7.56031 21.7539 7.37501C21.9392 7.18971 22.0454 6.93336 22.0454 6.67102C22.0454 6.40868 21.9392 6.15166 21.7539 5.96636C21.5679 5.78107 21.3116 5.6748 21.0492 5.6748Z" fill="white"/></g><defs><clipPath id="clip0"><rect width="34" height="34" fill="white"/></clipPath></defs></svg></div>
							<a href="tel:89677419581" class="vakansii__contacts-link">8 967 741-95-81</a>
						</li>
            <li class="vakansii__contacts-item">
							<div class="vakansii__contacts-icon"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none"><path d="M29.1707 4.82924C26.0563 1.71489 21.9166 0 17.512 0C17.5117 0 17.5107 0 17.5104 0C15.332 0.000259399 13.2091 0.422043 11.2011 1.25394C9.19279 2.08583 7.3936 3.28866 5.85303 4.82924C2.73894 7.94332 1.02405 12.0839 1.02405 16.4879C1.02405 19.1144 1.65776 21.7244 2.85852 24.0499L0.087101 31.9673C-0.108227 32.5258 0.0300332 33.1328 0.448704 33.5512C0.741565 33.8443 1.12703 34 1.52339 34C1.6933 34 1.86502 33.9714 2.0326 33.9128L9.94998 31.1417C12.2755 32.3424 14.8856 32.9761 17.512 32.9761C21.9161 32.9761 26.0563 31.261 29.1707 28.1469C32.2848 25.0328 33.9999 20.8923 33.9999 16.4882C33.9999 12.0839 32.285 7.94332 29.1707 4.82924ZM27.7606 26.7368C25.0232 29.4745 21.3833 30.9819 17.512 30.9819C15.1437 30.9819 12.7909 30.3961 10.7079 29.2875C10.3303 29.0867 9.88383 29.0522 9.48306 29.1925L2.28992 31.71L4.80765 24.5169C4.94798 24.1156 4.91322 23.6691 4.71245 23.2917C3.60404 21.2093 3.01805 18.8565 3.01805 16.4879C3.01805 12.6167 4.52568 8.97677 7.26312 6.23933C10.0003 3.50215 13.6397 1.99452 17.5107 1.994H17.512C21.3835 1.994 25.0232 3.50163 27.7606 6.23933C30.4983 8.97677 32.0059 12.6164 32.0059 16.4879C32.0059 20.3595 30.4983 23.9994 27.7606 26.7368Z" fill="white"/><path d="M23.6396 17.9607C22.8811 17.2022 21.6469 17.2022 20.8884 17.9607L20.0588 18.7902C17.9989 17.6678 16.332 16.0009 15.2094 13.941L16.0389 13.1115C16.7977 12.353 16.7977 11.1188 16.0389 10.3603L13.8034 8.12477C13.0449 7.36629 11.8107 7.36629 11.0522 8.12477L9.26392 9.91307C8.23956 10.9374 8.18845 12.6985 9.11996 14.872C9.92876 16.7591 11.4089 18.8333 13.2877 20.7121C15.1666 22.5909 17.2407 24.0711 19.1278 24.8799C20.1605 25.3224 21.0998 25.5432 21.9115 25.5432C22.8082 25.5432 23.549 25.2737 24.0868 24.7359L25.8751 22.9474V22.9476C26.2426 22.5801 26.445 22.0916 26.445 21.572C26.445 21.0522 26.2426 20.5637 25.8751 20.1964L23.6396 17.9607ZM22.6767 23.3258C22.3843 23.6182 21.4853 23.7206 19.9136 23.0472C18.2539 22.336 16.4016 21.0058 14.6978 19.302C12.9941 17.5983 11.6641 15.7462 10.9529 14.0865C10.2792 12.5148 10.3817 11.6155 10.674 11.3232L12.4281 9.56911L14.5946 11.7359L13.5562 12.7745C13.0867 13.244 12.9733 13.9561 13.2745 14.5465C14.6397 17.2235 16.7764 19.3601 19.4534 20.7253C20.044 21.0265 20.7561 20.9134 21.2256 20.4436L22.264 19.4053L24.4307 21.572L22.6767 23.3258Z" fill="white"/></svg></div>
							<a href="https://api.whatsapp.com/send?phone=89677419581&text=<?php  echo nowUrl(); ?> | Здравствуйте, " class="vakansii__contacts-link">WhatsApp</a></li>
            <li class="vakansii__contacts-item">
							<div class="vakansii__contacts-icon"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="20" viewBox="0 0 34 20" fill="none"><path d="M32.8402 0H1.15977C0.520355 0 0 0.503306 0 1.12177V18.8785C0 19.4969 0.520355 20 1.15977 20H32.8402C33.4796 20 34 19.4969 34 18.8785V1.12177C34 0.503306 33.4796 0 32.8402 0V0ZM1.99426 2.76366L11.5241 8.89014L1.99426 16.9139V2.76366ZM17 10.0942L4.29877 1.92892H29.7012L17 10.0942ZM13.2465 9.99712L16.358 11.9975C16.5531 12.123 16.7764 12.1857 17 12.1857C17.2233 12.1857 17.4469 12.1227 17.642 11.9975L20.7535 9.99712L30.3427 18.0711H3.65727L13.2465 9.99712ZM22.4759 8.88989L32.0057 2.76341V16.9139L22.4759 8.88989Z" fill="white"/></svg></div>
							<a href="mailto:rabota@ufaprom.ru" class="vakansii__contacts-link">rabota@ufaprom.ru</a></li>
          </ul>
        </div>
      </div>
    </section>

  				<?php get_template_part( 'template-parts/loop-vakansii', 'vakansii', array('numberposts' => '3')); ?>

    <?php do_action('content_after'); ?>
	</div>
    <?php do_action('after_content'); ?>
    </div>

<?php
get_footer();
?>
