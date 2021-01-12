$(document).ready(function() {

	$(window).scroll(function() {
		if($(this).scrollTop() > 250) {
			$ ('.up_top').fadeIn();
		} else {
			$ ('.up_top').fadeOut();
		}
	});
	$('.up_top').click(function(){
		$("html, body").animate({scrollTop: 0}, 1500)
		return false;
	});
});


