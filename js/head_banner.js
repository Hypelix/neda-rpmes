$(document).ready(function() {
		var counter = 0;
		$('.a_head_notif').click(function() {
			counter = 1;
			if(counter > 0){
				$('.inn_head_notif').fadeIn();
				setInterval(function() {
					$('.out_head_notif').load('js_head_fetch_notif.php').fadeIn('slow');
				}, 1000);
				return false;
			} else {
				$('.inn_head_notif').fadeOut();
			}
			
		});
		$('body').click(function() {
			$('.inn_head_notif').fadeOut();
			counter = 0;	
		});
		
		setInterval(function() {
			$('.head_auto_notif_counter').load('js_head_fetch_notif_counter.php').fadeIn(slow);
		}, 1000);
		$('.a_clear_notif').click(function() {
			$('.sure_con_clear').fadeIn();
		});
		$('.x_sure_con_clear').click(function() {
			$('.sure_con_clear').fadeOut();
		});
		$('.btn_agree').click(function() {
			$.ajax({
				url: "js_del_head_notif.php"
			});
			$('.sure_con_clear').fadeOut();
		});
	});