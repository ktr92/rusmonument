$(document).ready(function() {
	
	(function($){
	SmoothScroll({
    // Время скролла 400 = 0.4 секунды
    animationTime    : 800,
    // Размер шага в пикселях 
    stepSize         : 75,

    // Дополнительные настройки:
    
    // Ускорение 
    accelerationDelta : 30,  
    // Максимальное ускорение
    accelerationMax   : 2,   

    // Поддержка клавиатуры
    keyboardSupport   : true,  
    // Шаг скролла стрелками на клавиатуре в пикселях
    arrowScroll       : 50,

    // Pulse (less tweakable)
    // ratio of "tail" to "acceleration"
    pulseAlgorithm   : true,
    pulseScale       : 4,
    pulseNormalize   : 1,

    // Поддержка тачпада
    touchpadSupport   : true,
})
})(jQuery);



	
	 $('.inmodal__sliderto').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: false,
            dots: true,
		
           
	 });
	 
	 
	 function initSlider() {
		$('.inmodal__slidercontainer').each(function(){
			$(this).find('.inmodal__sliderto').slick('setPosition');
		});
	 }
	 
	 $('.modal_cards').on('shown.bs.modal', function (e) {	
		 initSlider();		
	});

	$('#mobile-menu').click(function() {
		$('.mainmenu').slideToggle();
	});
	
	$('#closemodal').click(function() {
		$('.thanksmodal').hide();
	});
	
	 $("input[type=tel]").mask("+7 (999) 999-99-99");
	
    jQuery("a.scrollto").click(function() {
        elementClick = jQuery(this).attr("href")
        destination = jQuery(elementClick).offset().top - 0;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination
        }, 700);
        return false;
    });
	
	$('.inmodal-right').click(function() {
		$('.nav-tabs .active').parent().next('li').find('a').trigger('click');
		setTimeout(initSlider, 200);
	});

	$('.inmodal-left').click(function() {
		$('.nav-tabs .active').parent().prev('li').find('a').trigger('click');
		setTimeout(initSlider, 200);
	});
	
	$('.card a').click(function() {
		let item = '#' + $(this).attr('data-item');		
		$(item).trigger('click');
		
	});

	

	
	$(".inmodal__arrow_right").click(function(e) { 
		$(this).parent().parent().find(".slick-slider").slick("slickNext"); 
	});
	
	$(".inmodal__arrow_left").click(function(e) { 
		$(this).parent().parent().find(".slick-slider").slick("slickPrev"); 
	});
	
	
	$('.aboutslider__slider').each(function(){
		$(this).slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
		
       });     
	 });
	
	$(".aboutslider__right").click(function(e) { 
		$(this).parent().parent().find(".slick-slider").slick("slickNext"); 
	});
	
	$(".aboutslider__left").click(function(e) { 
		$(this).parent().parent().find(".slick-slider").slick("slickPrev"); 
	});
	$('.portfolioslider').each(function(){
		$(this).slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: false,
            dots: true,
			 customPaging : function(slider, i) {
			var thumb = $(slider.$slides[i]).data();
			return '<a class="dot">'+(i+1)+'</a>';
			 },
			 responsive: [
				{
				  breakpoint: 991,
				  settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					infinite: true,
					dots: true
				  }
				},
				{
				  breakpoint: 767,
				  settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				  }
				},
				
			  ]
		
       });     
	 });
	 
	 $(".portfolioslider__right").click(function(e) { 
		$(this).parent().parent().find(".slick-slider").slick("slickNext"); 
	});
	
	$(".portfolioslider__left").click(function(e) { 
		$(this).parent().parent().find(".slick-slider").slick("slickPrev"); 
	});
	 
	 


	
});


