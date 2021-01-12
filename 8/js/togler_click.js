$(document).ready(function(){
	$('.menu_bar').click(function(event){
		$('.menu_list, .menu_bar, .line, body').toggleClass('active_menu_bar');
	});
});