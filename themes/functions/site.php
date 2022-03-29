<?php
/**
 * Шаблон - Обычная страница
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
	<div class="content page"> 
		<insert name="show__header">
		
		<main>
			<div class="page__content">
				<div class="container">
					<insert name="show_breadcrumb" current="true" separator=" ">	
				</div>
					<insert name="show_body">
					
				
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