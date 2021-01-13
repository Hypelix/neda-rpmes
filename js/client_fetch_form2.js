$(document).ready(function() {
	var allowed = /^[0-9_\.]+$/;
	$('.rel_period').keyup(function() {
		var rel_period = $(this).val();
		
		if(rel_period != ''){
			if(!rel_period.match(allowed)){
			$('.rel_period_checker').html('Invalid key');
			$('.rel_period').css('border','1px solid #ff0000');
			} else {
				$('.rel_period_checker').html('');
				$('.rel_period').css('border','1px solid #9acd32');
				//compute
				$.ajax({
					url: "js_compute_rel_period.php",
					method: "POST",
					data: { rel_period:rel_period },
					success: function(data){
						$('.compute').html(data);
					}
				});
			}
		} else {
			$('.rel_period_checker').html('');
		}
	});
	$('.rel_month').keyup(function() {
		var rel_month = $(this).val();
		
		if(!rel_month.match(allowed)){
			$('.rel_month_checker').html('Invalid key');
			$('.rel_month').css('border','1px solid #ff0000');
			} else {
				$('.rel_month_checker').html('');
				$('.rel_month').css('border','1px solid #9acd32');
			}
	});
	$('.ob_period').keyup(function() {
		var ob_period = $(this).val();
		
		if(!ob_period.match(allowed)){
			$('.ob_period_checker').html('Invalid key');
			$('.ob_period').css('border','1px solid #ff0000');
			} else {
				$('.ob_period_checker').html('');
				$('.ob_period').css('border','1px solid #9acd32');
			}
	});
	$('.ob_month').keyup(function() {
		var ob_month = $(this).val();
		
		if(!ob_month.match(allowed)){
			$('.ob_month_checker').html('Invalid key');
			$('.ob_month').css('border','1px solid #ff0000');
			} else {
				$('.ob_month_checker').html('');
				$('.ob_month').css('border','1px solid #9acd32');
			}
	});
	$('.dis_period').keyup(function() {
		var dis_period = $(this).val();
		
		if(!dis_period.match(allowed)){
			$('.dis_period_checker').html('Invalid key');
			$('.dis_period').css('border','1px solid #ff0000');
			} else {
				$('.dis_period_checker').html('');
				$('.dis_period').css('border','1px solid #9acd32');
			}
	});
	$('.dis_month').keyup(function() {
		var dis_month = $(this).val();
		
		if(!dis_month.match(allowed)){
			$('.dis_month_checker').html('Invalid key');
			$('.dis_month').css('border','1px solid #ff0000');
			} else {
				$('.dis_month_checker').html('');
				$('.dis_month').css('border','1px solid #9acd32');
			}
	});
	$('.actual_date').keyup(function() {
		var actual_date = $(this).val();
		
		if(!actual_date.match(allowed)){
			$('.actual_date_checker').html('Invalid key');
			$('.actual_date').css('border','1px solid #ff0000');
			} else {
				$('.actual_date_checker').html('');
				$('.actual_date').css('border','1px solid #9acd32');
			}
	});
	$('.actual_month').keyup(function() {
		var actual_date = $('.actual_date').val();
		var actual_month = $(this).val();
		
		if(!actual_month.match(allowed)){
			$('.actual_month_checker').html('Invalid key');
			$('.actual_month').css('border','1px solid #ff0000');
			} else {
				$('.actual_month_checker').html('');
				$('.actual_month').css('border','1px solid #9acd32');
				
				$.ajax({
					url: "js_actual_month.php",
					method: "POST",
					data: { actual_date:actual_date,  actual_month:actual_month },
					success: function(data){
						$('.actual_month_validator').html(data);
					}
				});
			}
	});
	$('.x_pic_innn').click(function() {
		$('.pic_inn').fadeOut();
	});
	$('#o_pic_inn').click(function() {
		$('.pic_inn').fadeIn();
	});
	$('.close_checker').click(function() {
		$('.con').fadeOut();
	});
});