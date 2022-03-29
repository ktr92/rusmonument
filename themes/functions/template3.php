<?php
/**
 * Шаблон - Художественное литье
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2018 OOO «Диафан» (http://www.diafan.ru/)
 */

if(! defined("DIAFAN"))
{
	$path = __FILE__;
	while(! file_exists($path.'/includes/404.php'))
	{
		$parent = dirname($path);
		if($parent == $path) exit;
		$path = $parent;
	}
	include $path.'/includes/404.php';
}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<!-- шаблонный тег show_head выводит часть HTML-шапки сайта. Описан в файле themes/functions/show_head.php. -->
<insert name="show_head">
      <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="<insert name="path">favicon.ico" type="image/x-icon">


<!-- шаблонный тег show_css подключает CSS-файлы. Описан в файле themes/functions/show_css.php. -->
<insert name="show_css" files="jquery.mCustomScrollbar.min.css, animista.css, lightbox.min.css,  bootstrap.min.css, bootstrap-grid.min.css, bootstrap-reboot.min.css, custom.css, font-awesome.min.css, slick.css, slick-theme.css,  animista.css">
<link rel="preload" as="style" href="/css/style.css" onload="this.rel='stylesheet'">
<style>
	@font-face {
    font-family: 'Rubik'; font-display: swap;
    src: url('/themes/Rubik-MediumItalic.ttf') format('truetype');
    font-weight: 500;
    font-style: italic;
    
}

@font-face {
    font-family: 'Rubik'; font-display: swap;
    src: url('/themes/Rubik-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
    
}

@font-face {
    font-family: 'Ubuntu';
    src: url('/themes/Ubuntu-LightItalic.ttf') format('truetype');
    font-weight: 300;
    font-style: italic;
    
}

@font-face {
    font-family: 'Rubik'; font-display: swap;
    src: url('/themes/Rubik-Bold.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
    
}

@font-face {
    font-family: 'Ubuntu';
    src: url('/themes/Ubuntu-Light.ttf') format('truetype');
    font-weight: 300;
    font-style: normal;
    
}

@font-face {
    font-family: 'Rubik'; font-display: swap;
    src: url('/themes/Rubik-BlackItalic.ttf') format('truetype');
    font-weight: 900;
    font-style: italic;
    
}

@font-face {
    font-family: 'Rubik'; font-display: swap;
    src: url('/themes/Rubik-BoldItalic.ttf') format('truetype');
    font-weight: bold;
    font-style: italic;
    
}

@font-face {
    font-family: 'Rubik'; font-display: swap;
    src: url('/themes/Rubik-LightItalic.ttf') format('truetype');
    font-weight: 300;
    font-style: italic;
    
}

@font-face {
    font-family: 'Ubuntu';
    src: url('/themes/Ubuntu.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
    
}

@font-face {
    font-family: 'Ubuntu';
    src: url('/themes/Ubuntu-MediumItalic.ttf') format('truetype');
    font-weight: 500;
    font-style: italic;
    
}

@font-face {
    font-family: 'Ubuntu';
    src: url('/themes/Ubuntu-Bold.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
    
}

@font-face {
    font-family: 'Rubik'; font-display: swap;
    src: url('/themes/Rubik-Medium.ttf') format('truetype');
    font-weight: 500;
    font-style: normal;
    
}

@font-face {
    font-family: 'Ubuntu';
    src: url('/themes/Ubuntu-BoldItalic.ttf') format('truetype');
    font-weight: bold;
    font-style: italic;
    
}

@font-face {
    font-family: 'Ubuntu';
    src: url('/themes/Ubuntu-Italic.ttf') format('truetype');
    font-weight: normal;
    font-style: italic;
    
}

@font-face {
    font-family: 'Ubuntu';
    src: url('/themes/Ubuntu-Medium.ttf') format('truetype');
    font-weight: 500;
    font-style: normal;
    
}

@font-face {
    font-family: 'Rubik'; font-display: swap;
    src: url('/themes/Rubik-Black.ttf') format('truetype');
    font-weight: 900;
    font-style: normal;
    
}

@font-face {
    font-family: 'Rubik'; font-display: swap;
    src: url('/themes/Rubik-Light.ttf') format('truetype');
    font-weight: 300;
    font-style: normal;
    
}

@font-face {
    font-family: 'Rubik'; font-display: swap;
    src: url('/themes/Rubik-Italic.ttf') format('truetype');
    font-weight: normal;
    font-style: italic;
    
}

@font-face {
    font-family: 'Droid Serif';
    src: url('/themes/DroidSerif.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
    
}


</style>
</head>

<body>
<div class="content"> 
		<div class="topblock topblock_litie topblock_page">
			<div class="topblock__header">
				<insert name="show__header">
			</div>
			<div class="topblock__main">
				<div class="container">
					<div class="topmain topmain_page">
						<div class="topmain__content wow fade-in">
							<div class="row">
								<div class="col-md-9">
									<div class="topmain__title topmain__title_page">
										<h1><span class="greenmark">Художественное литье</span><br/> на заказ</h1>									
									</div>
									
									<div class="images">
										<div class="image"><img src="/images/img1.png" alt=""></div>
										<div class="image"><img src="/images/img2.png" alt=""></div>
										<div class="image"><img src="/images/img3.png" alt=""></div>
										<div class="image"><img src="/images/img4.png" alt=""></div>
									</div>
									
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="goto goto_page">
				<div class="container">
				<a href="#block1" class="scrollto"><img src="/images/chevron_down.png" alt=""></a></div>
			</div>
		</div>
		
	
		
		<main>
		<div class="stagesblock stagesblock_bg" id="block1">
			<div class="container">
				<div class="title">
						<h2>Что входит в изготовление <br/><strong>бронзовой скульптуры?</strong></h2>
					</div>
				<div class="stages__items stages__items_page">
					<div class="row">
						<div class="col-md-4">
							<div class="stages__item">
								<div class="stages__title">
									<div class="stages__number">01.</div>
									<div class="stages__name">Разработка дизайна</div>
								</div>
								<div class="stages__text"><span class="text">Мы можем разработать свой эскиз, но также работаем с эскизами заказчиков.</span></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="stages__item stages__item_center">
								<div class="stages__title">
									<div class="stages__number">02.</div>
									<div class="stages__name">Утверждение эскиза</div>
								</div>
								<div class="stages__text"><span class="text">Согласуем с Вами эскиз, поправим или переделаем если что то не понравится. Доработаем до согласования </span></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="stages__item">
								<div class="stages__title">
									<div class="stages__number">03.</div>
									<div class="stages__name">Выбор материала</div>
								</div>
								<div class="stages__text"><span class="text">Выбираем металл из которого будет выполнено
										будущее изделие. Обычно мы используем
										бронзу, латунь, чугун. Стоимость изделия 
										напрямую зависит от выбранного материала.</span></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="stages__item">
								<div class="stages__title">
									<div class="stages__number">04.</div>
									<div class="stages__name">Отливка изделия</div>
								</div>
								<div class="stages__text"><span class="text">Отличваем изделие по утвержденному эскизу
										из выбранного материала.
										Время отливки 2-3 рабочих дня.</span></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="stages__item stages__item_center">
								<div class="stages__title">
									<div class="stages__number">05.</div>
									<div class="stages__name">Шлифовка поверхности</div>
								</div>
								<div class="stages__text"><span class="text">Чтобы изделие было ровным и гладким его шлифуют
										и зачищают. На данном этапе можно придать
										поверхности разную фактуру - матовую, грубую.
										Состарить или  сделать винтажный эффект.</span></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="stages__item">
								<div class="stages__title">
									<div class="stages__number">06.</div>
									<div class="stages__name">Покраска и отделка</div>
								</div>
								<div class="stages__text"><span class="text">Готовое изделие покрывают красками, которые по
										мимо придания внешнего облика, также защищают
										изделие от воздействия окружающей среды.
										Защитный состав подбирается под используемый
										металл.</span></div>
							</div>
						</div>
					</div>
					<div class="goto goto_page goto_right"><a href="#block2" class="scrollto"><img src="/images/chevron_down.png" alt=""></a></div>
				</div>
				
			</div>
			
		</div>
		
		
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="h2blue">Какие изделия <br/>мы изготавливаем?</h2>
						<div class="text text_margin">Метод художественного литья из металла дает возможность
							получать предметы и конструкции с очень точной детализацией,
							по изяществу приближающиеся к произведениям искусства.</div>
							<div class="aboutslider">
								<div class="aboutslider__container">
									<div class="aboutslider__slider">
										<div class="aboutsliders__item"><a href="/images/aboutslider3.png" data-lightbox="gallery2"><img src="/images/aboutslider3.png" alt=""></a></div>
										<div class="aboutsliders__item"><a href="/images/aboutslider1.png" data-lightbox="gallery2"><img src="/images/aboutslider1.png" alt=""></a></div>
										<div class="aboutsliders__item"><a href="/images/aboutslider2.png" data-lightbox="gallery2"><img src="/images/aboutslider2.png" alt=""></a></div>
									</div>
									<div class="aboutslider__arrows">
										<div class="aboutslider__left"><span><img src="/images/left-white.png" alt=""></span></div>
										<div class="aboutslider__right"><span><img src="/images/right-white.png" alt=""></span></div>
									</div>
								</div>
							</div>
						</div>
					<div class="col-md-6">
						
						<div class="listblock">
							<div class="title">
								<strong><span class="greenmark">Мы работаем с...</span></strong>
							</div>
							<div class="list">
								<ul>
									<li>Декоративные элементы - ограды, скамейки, перила, фонари, урны, клумбы</li>
									<li>Малые архитектурные формы, резные беседки, арки, садовые качели перила и балясины для лестниц</li>
									<li>Каслинское литье уличных лавочек, столиков</li>
									<li>Декоративные ливневые решетки, оконные решетки</li>
									<li>Ворота и заборы по индивидуальному дизайну</li>
									<li>Уличные фонари и настенные светильники</li>
									<li>Изготавливаем скульптуры малых и крупных форм, рельефы, гербы, колокола.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="works">
			<div class="container">
					<div class="title">
						<h2><strong>Наши работы </strong><br>Объединение Российская монументальная скульптура</div>
			
					<insert name="show_block" module="news" count="100" images="100" template="slider" cat_id="3">
			</div>	
		</div>
		
			<div class="delivblock">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="pageimg"><img src="/images/img5.png" alt=""></div>
					</div>
					<div class="col-md-6">
						<div class="deliv__content">
							<div class="deliv__title1">Главное преимущество</div>
							<div class="deliv__title2">Авторский надзор на протяжении всех этапов</div>
							<div class="deliv__text">Мы сотрудничаем с литейными производствами и производим весь цикл авторского надзора. Следим за процессом изготовления и обработки изделия. Контролируем внешний вид. Лично присутствуем при установке изделия.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="pageformblock">
			<div class="container">
				<div class="pageform">
					<div class="pageform__form">
						<insert name="show_form" module="feedback" site_id="176">
					</div>
				</div>
			</div>
		</div>
			
		<div class="contactsblock">
			<div class="container">
				<div class="contactsblock__items">
					<div class="row">
						<div class="col-md-6">
							<div class="contactsblock__left">
								<div class="contactsblock__map">
									<div class="map">
										<div class="map__mask"></div>
										<iframe src="" width="100%" height="560" frameborder="0" id="iframe"></iframe>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5 offset-md-1">
							<div class="contactsblock__right">
								<div class="contactsblock__content">
									<div class="contacts">
										<div class="title">
											<h2>Контакты</h2>
										</div>
										<div class="contacts__items">
											<div class="contacts__item">
												<div class="contacts__icon contacts__icon_location">
												
												
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
																		<g>
																			<g>
																				<path d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035
																					c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719
																					c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z"/>
																			</g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		</svg>
												
												</div>
												<div class="contacts__text">Москва, ул. Армянский переулок, д. 7, кв. 3</div>
											</div>
											<div class="contacts__item">
												<div class="contacts__icon">
												
												<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 513.64 513.64" style="enable-background:new 0 0 513.64 513.64;" xml:space="preserve">
													<g>
														<g>
															<path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72
																c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68
																c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44
																l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z"/>
														</g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													</svg>
												
												
												</div>
												<div class="contacts__text">
													<div class="phone"><a href="tel:89169200298">8 (916) 920-02-98</a></div>
												</div>
											</div>
											<div class="contacts__item">
												<div class="contacts__icon">
												
												<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
																		<g>
																			<g>
																				<polygon points="43.52,76.8 256,225.28 468.48,76.8 		"/>
																			</g>
																		</g>
																		<g>
																			<g>
																				<path d="M268.8,276.48c-7.68,5.12-20.48,5.12-28.16,0L0,107.52V409.6c0,12.8,12.8,25.6,25.6,25.6h460.8
																					c12.8,0,25.6-12.8,25.6-25.6V107.52L268.8,276.48z"/>
																			</g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		</svg>
												
												</div>
												<div class="contacts__text">
													<div class="email"><a href="mailto:zakaz@rusmonument.ru">zakaz@rusmonument.ru</a></div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="socials">
											<div class="social"><a href=""><svg id="Bold" enable-background="new 0 0 24 24" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m19.915 13.028c-.388-.49-.277-.708 0-1.146.005-.005 3.208-4.431 3.538-5.932l.002-.001c.164-.547 0-.949-.793-.949h-2.624c-.668 0-.976.345-1.141.731 0 0-1.336 3.198-3.226 5.271-.61.599-.892.791-1.225.791-.164 0-.419-.192-.419-.739v-5.105c0-.656-.187-.949-.74-.949h-4.126c-.419 0-.668.306-.668.591 0 .622.945.765 1.043 2.515v3.797c0 .832-.151.985-.486.985-.892 0-3.057-3.211-4.34-6.886-.259-.713-.512-1.001-1.185-1.001h-2.625c-.749 0-.9.345-.9.731 0 .682.892 4.073 4.148 8.553 2.17 3.058 5.226 4.715 8.006 4.715 1.671 0 1.875-.368 1.875-1.001 0-2.922-.151-3.198.686-3.198.388 0 1.056.192 2.616 1.667 1.783 1.749 2.076 2.532 3.074 2.532h2.624c.748 0 1.127-.368.909-1.094-.499-1.527-3.871-4.668-4.023-4.878z"/></svg></a></div>
											<div class="social"><a href=""><svg viewBox="-110 1 511 511.99896" xmlns="http://www.w3.org/2000/svg"><path d="m207.363281 126.734375c.699219-.789063 3.96875-3.367187 16.808594-3.367187l42.097656-.015626c13.695313 0 24.832031-11.140624 24.832031-24.835937v-73.578125c0-13.671875-11.121093-24.8125-24.792968-24.835938l-62.53125-.101562c-38.59375 0-71.402344 12.730469-94.878906 36.820312-23.371094 23.980469-35.726563 57.457032-35.726563 96.804688v39.683594h-47.835937c-13.695313 0-24.835938 11.140625-24.835938 24.835937v79.242188c0 13.695312 11.140625 24.835937 24.835938 24.835937h47.835937v184.941406c0 13.695313 11.140625 24.835938 24.835937 24.835938h81.992188c13.695312 0 24.835938-11.140625 24.835938-24.835938v-184.9375h58.472656c13.695312 0 24.832031-11.144531 24.832031-24.832031l.03125-79.246093c0-8.996094-4.894531-17.320313-12.777344-21.722657-3.652343-2.039062-7.902343-3.117187-12.285156-3.117187h-58.273437v-31.351563c0-10.21875 1.375-13.917969 2.527343-15.222656zm0 0"/></svg></a></div>
											<div class="social"><a href=""><svg viewBox="0 0 512.00096 512.00096" xmlns="http://www.w3.org/2000/svg"><path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm-117.40625 395.996094c-77.195312 0-139.996094-62.800782-139.996094-139.996094s62.800782-139.996094 139.996094-139.996094 139.996094 62.800782 139.996094 139.996094-62.800782 139.996094-139.996094 139.996094zm143.34375-246.976563c-22.8125 0-41.367188-18.554687-41.367188-41.367187s18.554688-41.371094 41.367188-41.371094 41.371094 18.558594 41.371094 41.371094-18.558594 41.367187-41.371094 41.367187zm0 0"/><path d="m256 146.019531c-60.640625 0-109.980469 49.335938-109.980469 109.980469 0 60.640625 49.339844 109.980469 109.980469 109.980469 60.644531 0 109.980469-49.339844 109.980469-109.980469 0-60.644531-49.335938-109.980469-109.980469-109.980469zm0 0"/><path d="m399.34375 96.300781c-6.257812 0-11.351562 5.09375-11.351562 11.351563 0 6.257812 5.09375 11.351562 11.351562 11.351562 6.261719 0 11.355469-5.089844 11.355469-11.351562 0-6.261719-5.09375-11.351563-11.355469-11.351563zm0 0"/></svg></a></div>
										</div>
										
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		</main>	
		<insert name="show__footer">
		
<!-- шаблонный тег show_js подключает JS-файлы. Описан в файле themes/functions/show_js.php. -->
<insert name="show_js">
<script type="text/javascript" asyncsrc="<insert name="custom" path="js/main.js" absolute="true" compress="js">" charset="UTF-8"></script>

<!-- шаблонный тег подключает вывод информации о Политике конфиденциальности. Если необходимо вывести свой текст сообщения, то добавле его в атрибут "text". -->
<insert name="show_privacy" hash="false" text="">

<insert name="show_include" file="counters">

</body>
</html>
