$(document).ready(function() {
	$('.close_inn_save').click(function() {
		$('.inn_save').fadeOut();
	});
	$('.a_close_inn_ret').click(function() {
		$('.inn_ret').fadeOut();
	});
	setInterval(function() {
		$('.td_response').fadeIn(slow);
	}, 1000);
});