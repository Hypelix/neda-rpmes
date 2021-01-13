$(document).ready(function() {
	$('.close_change_inn').click(function() {
		$('.change_inn').fadeOut();
	});
	$('.a_view_chat').click(function() {
		$('.con_chat').slideDown(1000);
		$.ajax({
			url: "js_del_client_indi_chat.php"
		});
	});
	$('.close_con_chat').click(function() {
		$('.con_chat').slideUp(1000);
	});
	setInterval(function() {
		$('.js_view_chat_indi').load('js_view_chat_indi.php').fadeIn(slow);
	}, 1000);
	setInterval(function() {
		$('.con_chat_slider').load('js_con_chat_slider.php').fadeIn(slow);
	}, 1000);
	$('.x_inn_no_head').click(function() {
		$('.inn_no_head').fadeOut();
	});
	setInterval(function() {
		$('.contain_head').load('js_view_head.php').fadeIn(slow);
	}, 1000);
	setInterval(function() {
		$('.get_head').load('js_get_head.php').fadeIn(slow);
	}, 1000);
});