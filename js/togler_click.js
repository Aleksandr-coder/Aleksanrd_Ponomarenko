$(document).ready(function(){
	$('.menu_bar, .menu_link').click(function(event){
		$('.menu_top, .fa-bars, .fa-times, .nav_top, .content_header, .nav, body').toggleClass('active_menu_bar');
	});
});