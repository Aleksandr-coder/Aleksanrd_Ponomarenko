$(document).ready(function(){
	$('.menu_bar').click(function(event){
		$('.menu_top, .fa-bars, .fa-times, .nav_top, .content_header').toggleClass('active_menu_bar');
	});
});