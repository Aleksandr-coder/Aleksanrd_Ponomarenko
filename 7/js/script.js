$(document).ready(function(){
	$('.menu_bar, .item_link_closed').click(function(event){
		$('.menu_list_top, .hidden_bg_content').toggleClass('active_menu_bar');
	});
});
