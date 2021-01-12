$(document).ready(function() {

	$(window).scroll(function() {
		if($(this).scrollTop() > 550) {
			$ ('.scroll_up').fadeIn();
		} else {
			$ ('.scroll_up').fadeOut();
		}
	});
	$('.scroll_up').click(function(){
		$("html, body").animate({scrollTop: 0}, 900)
		return false;
	});
	//плавный переход от ссылки до якоря
	$('a[href^="#"]').on("click", function (event) {
	        //отменяем стандартную обработку нажатия по ссылке
	        event.preventDefault();
	        //забираем идентификатор блока с атрибута href
	        var id  = $(this).attr('href'),
	        //узнаем высоту от начала страницы до блока на который ссылается якорь
	         	top = $(id).offset().top;
	        //анимируем переход на расстояние - top за 1500 мс
	        $('html, body').animate({scrollTop: top}, 1500);
	    });
});
