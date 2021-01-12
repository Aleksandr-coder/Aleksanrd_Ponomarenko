$(document).ready(function(){
	$('.burger_bar').click(function(event){
		$('.menu_top, body, .burger_bar, .line_menu').toggleClass('active_burger_bar');
	});
	$('.blogs_click').click(function(event){
		$('.blogs_block').toggleClass('active_block');
	});
	$('.insta_click').click(function(event){
		$('.insta_block, .more_fotos_instagram').toggleClass('active_block');
	});
});