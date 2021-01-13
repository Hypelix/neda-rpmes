$(document).ready(function() {
	setInterval(function() {
		$('.auto_users_req').load('js_auto_users_req.php').fadeIn(slow);
	}, 1000);
	$('.btn_close_con_search').click(function() {
		$('.con_search_transparent').fadeOut();
	});
	$('.btn_search').click(function() {
		$('.con_search_transparent').fadeIn();
	});
	//chat room
	$('.btn_chat').click(function() {
		$('.chat_box').css('width','450px');
		$('.close_chat').fadeIn(1000);
		
		$.ajax({
			url: "js_del_chat_indi.php"
		});
	});
	$('.close_chat').click(function() {
		$('.chat_box').css('width','0px');
		$('.close_chat').fadeOut();
	});
	//slider js 
	setInterval(function() {
		$('.chat_slider').load('js_chat_slider.php').fadeIn(slow);
	});
	setInterval(function() {
		$('.chat_indicator').load('js_chat_indicator.php').fadeIn(slow);
	});
	$('.a_close_form5_inn').click(function() {
		$('.con_form5_inn').fadeOut();
	});
	$('.x_tbl_proname').click(function() {
		$('.inn_tbl').fadeOut();
	});
	$('.x_inn_view_proj').click(function() {
		$('.inn_view_proj').fadeOut();
	});
	$('.x_innn').click(function() {
		$('.innn').fadeOut();
	});
	$('.x_f6_inn').click(function() {
		$('.f6_inn').fadeOut();
	});
	$('.x_con_long_notif').click(function() {
		$('.con_long_notif').fadeOut();
	});
	$('#a_view_long_nofif').click(function() {
		$('.con_long_notif').fadeIn();
		$.ajax({
			url: "js_del_long_indi.php"
		});
	});
	setInterval(function() {
		$('.con_view_long_notif').load('js_con_long_notif_box.php').fadeIn(slow);
	}, 1000);
	setInterval(function() {
		$('.long_indi').load('js_long_indi.php').fadeIn(slow);
	}, 1000);
});