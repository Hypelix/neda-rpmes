$(document).ready(function() {
	setInterval(function() {
		$('.con_form9').load('js_fetch_f9.php').fadeIn(slow);
	}, 1000);
	$('.btn_close_inn_f9').click(function() {
		$('.inn_f9').fadeOut();
	});
	$('.del_proc').fadeIn().delay(3000).slideUp();
	$('.con_no_form').fadeIn().delay(3000).slideUp();
});