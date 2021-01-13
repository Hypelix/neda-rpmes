$(document).ready(function() {
	$('.btn_close_inn_f11').click(function() {
		$('.inn_f11').fadeOut();
	});
	setInterval(function() {
		$('.con_f11').load('js_load_f11.php').fadeIn(slow);
	}, 1000);
	$('.del_proc').fadeIn().delay(3000).slideUp();
	$('.con_no_form').fadeIn().delay(3000).slideUp();
	
});