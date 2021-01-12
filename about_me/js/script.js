$(document).ready(function() {

	$(window).scroll(function() {
		if($(this).scrollTop() > 250) {
			$ ('.scroll_up').fadeIn();
		} else {
			$ ('.scroll_up').fadeOut();
		}
	});
	$('.scroll_up').click(function(){
		$("html, body").animate({scrollTop: 0}, 900)
		return false;
	});
});


