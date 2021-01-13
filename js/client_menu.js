$(document).ready(function() {
	$('.a_close_form3').click(function(){
		$('.con_inn_f3').fadeOut();
	});
	$('.a_from').click(function() {
		$('.con_from').fadeIn();
	});
	$('.a_to').click(function() {
		$('.con_to').fadeIn();
	});
	$('.a_c').click(function() {
		$('.con_from').fadeIn();
	});
	$('.close_from').click(function() {
		$('.con_from').fadeOut();
	});
	$('.close_to').click(function() {
		$('.con_to').fadeOut();
	});
	$('.x_inn_f2_ret').click(function() {
		$('.inn_f2_ret').fadeOut();
	});
	$('.close_del_id').click(function() {
		$('.del_id_inn').fadeOut();
	});
	
	
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
				//$.ajax({
				//	url: "js_compute_rel_period.php",
				//	method: "POST",
				//	data: { rel_period:rel_period },
				//	success: function(data){
				//		$('.compute').html(data);
				//	}
				//});
			}
		} else {
			$('.rel_period_checker').html('');
		}
	});
	$('.btn_close_inn_f4').click(function() {
		$('.inn_f4').fadeOut();
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
		var actual_month = $(this).val();
		
		if(!actual_month.match(allowed)){
			$('.actual_month_checker').html('Invalid key');
			$('.actual_month').css('border','1px solid #ff0000');
			} else {
				$('.actual_month_checker').html('');
				$('.actual_month').css('border','1px solid #9acd32');
			}
	});
	$('.x_head_no_inn').click(function() {
		$('.head_no_inn').fadeOut();
	});
});