$(document).ready(function() {

	$(window).scroll(function() {
		if($(this).scrollTop() > 500) {
			$ ('.to_up').fadeIn();
		} else {
			$ ('.to_up').fadeOut();
		}
	});
	$('.to_up').click(function(){
		$("html, body").animate({scrollTop: 0}, 900)
		return false;
	});
	
});
