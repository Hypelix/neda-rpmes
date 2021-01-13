$(document).ready(function() {
		setInterval(function() {
			$('.confirmed_con').load('js_client_confirm_section.php').fadeIn(slow);
		}, 1000);
		//auto text
		setInterval(function() {
			$('.con_text').load('js_auto_text.php').fadeIn(slow);
		}, 1000);
	});