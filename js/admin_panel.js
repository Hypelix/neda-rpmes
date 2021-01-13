$(document).ready(function() {
	$('.close_view_prof').click(function() {
		$('.prof_inn').fadeOut();
	});
	setInterval(function() {
		$('.con_set').load('js_con_set.php').fadeIn(slow);
	}, 1000);
	setInterval(function() {
		$('.con_act').load('js_con_act.php').fadeIn(slow);
	}, 1000);
	$('.x_set').click(function() {
		$.ajax({
			url: "js_clear_set.php"
		});
	});
	$('.x_log').click(function() {
		$.ajax({
			url: "js_clear_log.php"
		});
	});
	setInterval(function() {
		$('.act_count').load('js_act_count.php').fadeIn(slow);
	}, 1000);
});