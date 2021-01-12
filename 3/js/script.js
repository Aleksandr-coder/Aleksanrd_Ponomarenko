$(document).ready(function(){
	$('.burger').click(function(event){
		$('.burger, .menu_top, .header_menu').toggleClass('active');
	});
});