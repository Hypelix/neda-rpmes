$(document).ready(function() {
	$('.btn_close_inn_f10').click(function() {
		$('.inn_f10').fadeOut();
	});
	setInterval(function() {
		$('.con_f10').load('js_fetch_f10.php').fadeIn(slow);
	}, 1000);
	$('.del_proc').fadeIn().delay(3000).slideUp();
	$('.con_no_form').fadeIn().delay(3000).slideUp();
});