$(document).ready(function() {
	$('.btn_show_ref').click(function() {
		$('.td_hide').fadeIn();
		$('.btn_show_ref').fadeOut();
		$('.con_btn_hide_ref').html("<a href='' class='btn_hide_ref'>Hide Reference</a>");
	});
	$('.btn_hide_ref').click(function() {
		$('.td_hide').fadeOut();
		$('.con_btn_hide_ref').html("<a class='btn_hide_ref'>Show Reference</a>");
		$('.btn_show_ref').fadeIn();
	});
	//convert
});