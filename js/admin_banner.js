$(document).ready(function() {
		$('.close_date_sub').click(function() {
			$('.con_date_sub').fadeOut();
		});
		$('.close_date_noted').click(function() {
			$('.con_date_noted').fadeOut();
		});
		var counter = 0;
		$('.a_notif').click(function() {
			counter = 1;
			if(counter > 0){
				$('.con_notif').fadeIn();
				setInterval(function() {
					$('.notif_slider').load('js_notif_slider.php').fadeIn('slow');
				}, 1000);
				return false;
			} else {
				$('.con_notif').fadeOut();
			}
			
		});
		$('body').click(function() {
			$('.con_notif').fadeOut();
			counter = 0;	
		});
		setInterval(function() {
			$('.admin_notif_indi').load('js_admin_notif_indi.php').fadeIn(slow);
		}, 1000);
		$('.a_clear_notif').click(function() {
			$('.sure_con_clear').fadeIn();
		});
		$('.x_sure_con_clear').click(function() {
			$('.sure_con_clear').fadeOut();
		});
		$('.btn_agree').click(function() {
			$.ajax({
				url: "js_del_admin_notif.php"
			});
			$('.sure_con_clear').fadeOut();
		});
	});