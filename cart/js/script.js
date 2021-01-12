$(document).ready(function(){
	$('.cart, .background').click(function(event){
		$('.aktive_cart').toggleClass('active');
	});
	$('.circle_colors_headphones').click(function(event){
		$('.conteiner_card_white, .circle_colors_headphones.two, .conteiner_card').toggleClass('active');
	});
});