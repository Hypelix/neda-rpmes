$(document).ready(function() {
		$('.btn_agree').click(function() {
			$.ajax({
				url: "js_clear_notif.php"
			});
			$('.sure_con_clear').fadeOut();
		});
		var counter = 0;
		$('.a_notif').click(function() {
			counter = 1;
			if(counter > 0){
				$('.main_notif_con').fadeIn();
				setInterval(function() {
					$('.con_notif').load('js_fetch_notif.php').fadeIn('slow');
				}, 2000);
				return false;
			} else {
				$('.main_notif_con').fadeOut();
			}
			
		});
		$('body').click(function() {
			$('.main_notif_con').fadeOut();
			counter = 0;	
		});
		setInterval(function() {
			$('.auto_notif').load('js_auto_notif.php').fadeIn(slow);
		}, 1000);
		$('.clear_notif').click(function() {
			$('.sure_con_clear').fadeIn();
		});
		$('.x_sure_con_clear').click(function() {
			$('.sure_con_clear').fadeOut();
		});
		$('[data-toggle="tooltip"]').tooltip();
		
	});
	