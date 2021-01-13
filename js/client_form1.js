$(document).ready(function() {
	$('.a_long_term').click(function() {
		$('.con_long_term').fadeIn();
	});
	$('.x_con_long_term').click(function() {
		$('.con_long_term').fadeOut();
	});
	setInterval(function (){
		var jan = $('.fs_jan').val();
		var feb = $('.fs_feb').val();
		var mar = $('.fs_mar').val();
		var apr = $('.fs_apr').val();
		var may = $('.fs_may').val();
		var jun = $('.fs_jun').val();
		var jul = $('.fs_jul').val();
		var aug = $('.fs_aug').val();
		var sep = $('.fs_sep').val();
		var oct = $('.fs_oct').val();
		var nov = $('.fs_nov').val();
		var dec = $('.fs_dec').val();
		
		$.ajax({
			url: "js_auto_compute.php",
			method: "POST",
			data: {
				jan:jan,
				feb:feb,
				mar:mar,
				apr:apr,
				may:may,
				jun:jun,
				jul:jul,
				aug:aug,
				sep:sep,
				oct:oct,
				nov:nov,
				dec:dec
			},
			success: function(data) {
				$('.con_auto_compute').html(data);
			}
		});
	}, 1000);
	
	//val fs	
	var allowed = /^[0-9_\.]+$/;
	$('.fs_jan').keyup(function() {
		var fs_jan = $(this).val();
		
		if(fs_jan != ''){
			if(!fs_jan.match(allowed)){
			$('.fs_jan_checker').html('Error');
			$('.fs_jan').css('border','1px solid #ff0000');
			} else {
				$('.fs_jan_checker').html('');
				$('.fs_jan').css('border','1px solid #9acd32');
			}
		} else {
			$('.fs_jan_checker').html('');
		}
	});
	$('.fs_feb').keyup(function() {
		var fs_feb = $(this).val();
		
		if(fs_feb != ''){
			if(!fs_feb.match(allowed)){
				$('.fs_feb_checker').html('Error');
				$('.fs_feb').css('border','1px solid #ff0000');
			} else {
				$('.fs_feb_checker').html('');
				$('.fs_feb').css('border','1px solid #9acd32');
			}
		} else {
			$('.fs_feb_checker').html('');
		}
	});
	$('.fs_mar').keyup(function() {
		var fs_mar = $(this).val();
		
		if(fs_mar != ''){
			if(!fs_mar.match(allowed)){
				$('.fs_mar_checker').html('Error');
				$('.fs_mar').css('border','1px solid #ff0000');
			} else {
				$('.fs_mar_checker').html('');
				$('.fs_mar').css('border','1px solid #9acd32');
			}
		} else {
			$('.fs_mar_checker').html('');
		}
	});
	$('.fs_apr').keyup(function() {
		var fs_apr = $(this).val();
		
		if(fs_apr != ''){
			if(!fs_apr.match(allowed)){
				$('.fs_apr_checker').html('Error');
				$('.fs_apr').css('border','1px solid #ff0000');
			} else {
				$('.fs_apr_checker').html('');
				$('.fs_apr').css('border','1px solid #9acd32');
			}
		} else {
			$('.fs_apr_checker').html('');
		}
	});
	$('.fs_may').keyup(function() {
		var fs_may = $(this).val();
		
		if(fs_may != ''){
			if(!fs_may.match(allowed)){
				$('.fs_may_checker').html('Error');
				$('.fs_may').css('border','1px solid #ff0000');
			} else {
				$('.fs_may_checker').html('');
				$('.fs_may').css('border','1px solid #9acd32');
			}
		} else {
			$('.fs_may_checker').html('');
		}
	});
	$('.fs_jun').keyup(function() {
		var fs_jun = $(this).val();
		
		if(fs_jun != ''){
			if(!fs_jun.match(allowed)){
				$('.fs_jun_checker').html('Error');
				$('.fs_jun').css('border','1px solid #ff0000');
			} else {
				$('.fs_jun_checker').html('');
				$('.fs_jun').css('border','1px solid #9acd32');
			}
		} else {
			$('.fs_jun_checker').html('');
		}
	});
	$('.fs_jul').keyup(function() {
		var fs_jul = $(this).val();
		
		if(fs_jul != ''){
			if(!fs_jul.match(allowed)){
				$('.fs_jul_checker').html('Error');
				$('.fs_jul').css('border','1px solid #ff0000');
			} else {
				$('.fs_jul_checker').html('');
				$('.fs_jul').css('border','1px solid #9acd32');
			}
		} else {
			$('.fs_jul_checker').html('');
		}
	});
	$('.fs_aug').keyup(function() {
		var fs_aug = $(this).val();
		if(fs_aug != ''){
			if(!fs_aug.match(allowed)){
				$('.fs_aug_checker').html('Error');
				$('.fs_aug').css('border','1px solid #ff0000');
			} else {
				$('.fs_aug_checker').html('');
				$('.fs_aug').css('border','1px solid #9acd32');
			}
		} else {
			$('.fs_aug_checker').html('');
		}
	});
	$('.fs_sep').keyup(function() {
		var fs_sep = $(this).val();
		
		if(fs_sep != ''){
			if(!fs_sep.match(allowed)){
				$('.fs_sep_checker').html('Error');
				$('.fs_sep').css('border','1px solid #ff0000');
			} else {
				$('.fs_sep_checker').html('');
				$('.fs_sep').css('border','1px solid #9acd32');
			}
		} else {
			$('.fs_sep_checker').html('');
		}
	});
	$('.fs_oct').keyup(function() {
		var fs_oct = $(this).val();
		
		if(fs_oct != ''){
			if(!fs_oct.match(allowed)){
				$('.fs_oct_checker').html('Error');
				$('.fs_oct').css('border','1px solid #ff0000');
			} else {
				$('.fs_oct_checker').html('');
				$('.fs_oct').css('border','1px solid #9acd32');
			}
		} else {
			$('.fs_oct_checker').html('');
		}
	});
	$('.fs_nov').keyup(function() {
		var fs_nov = $(this).val();
		
		if(fs_nov != ''){
			if(!fs_nov.match(allowed)){
				$('.fs_nov_checker').html('Error');
				$('.fs_nov').css('border','1px solid #ff0000');
			} else {
				$('.fs_nov_checker').html('');
				$('.fs_nov').css('border','1px solid #9acd32');
			}
		} else {
			$('.fs_nov_checker').html('');
		}
	});
	$('.fs_dec').keyup(function() {
		var fs_dec = $(this).val();
		
		if(fs_dec != ''){
			if(!fs_dec.match(allowed)){
				$('.fs_dec_checker').html('Error');
				$('.fs_dec').css('border','1px solid #ff0000');
			} else {
				$('.fs_dec_checker').html('');
				$('.fs_dec').css('border','1px solid #9acd32');
			}
		} else {
			$('.fs_dec_checker').html('');
		}
	});
	//feb 
	$('.percentage_jan').keyup(function() {
		var percentage_jan = $(this).val();
		
		if(percentage_jan != ''){
			if(!percentage_jan.match(allowed)){
			$('.p_jan').html('Error');
			$('.percentage_jan').css('border','1px solid #ff0000');
			} else {
				$('.p_jan').html('');
				$('.percentage_jan').css('border','1px solid #9acd32');
			}
		} else {
			$('.p_jan').html('');
		}
	});
	$('.percentage_feb').keyup(function() {
		var percentage_feb = $(this).val();
		
		if(percentage_feb != ''){
			if(!percentage_feb.match(allowed)){
			$('.p_feb').html('Error');
			$('.percentage_feb').css('border','1px solid #ff0000');
			} else {
				$('.p_feb').html('');
				$('.percentage_feb').css('border','1px solid #9acd32');
			}
		} else {
			$('.p_feb').html('');
		}
	});
	$('.percentage_mar').keyup(function() {
		var percentage_mar = $(this).val();
		
		if(percentage_mar != ''){
			if(!percentage_mar.match(allowed)){
			$('.p_mar').html('Error');
			$('.percentage_mar').css('border','1px solid #ff0000');
			} else {
				$('.p_mar').html('');
				$('.percentage_mar').css('border','1px solid #9acd32');
			}
		} else {
			$('.p_mar').html('');
		}
	});
	$('.percentage_apr').keyup(function() {
		var percentage_apr = $(this).val();
		
		if(percentage_apr != ''){
			if(!percentage_apr.match(allowed)){
			$('.p_apr').html('Error');
			$('.percentage_apr').css('border','1px solid #ff0000');
			} else {
				$('.p_apr').html('');
				$('.percentage_apr').css('border','1px solid #9acd32');
			}
		} else {
			$('.p_apr').html('');
		}
	});
	$('.percentage_may').keyup(function() {
		var percentage_may = $(this).val();
		
		if(percentage_may != ''){
			if(!percentage_may.match(allowed)){
			$('.p_may').html('Error');
			$('.percentage_may').css('border','1px solid #ff0000');
			} else {
				$('.p_may').html('');
				$('.percentage_may').css('border','1px solid #9acd32');
			}
		} else {
			$('.p_may').html('');
		}
	});
	$('.percentage_jun').keyup(function() {
		var percentage_jun = $(this).val();
		
		if(percentage_jun != ''){
			if(!percentage_jun.match(allowed)){
			$('.p_jun').html('Error');
			$('.percentage_jun').css('border','1px solid #ff0000');
			} else {
				$('.p_jun').html('');
				$('.percentage_jun').css('border','1px solid #9acd32');
			}
		} else {
			$('.p_jun').html('');
		}
	});
	$('.percentage_jul').keyup(function() {
		var percentage_jul = $(this).val();
		
		if(percentage_jul != ''){
			if(!percentage_jul.match(allowed)){
			$('.p_jul').html('Error');
			$('.percentage_jul').css('border','1px solid #ff0000');
			} else {
				$('.p_jul').html('');
				$('.percentage_jul').css('border','1px solid #9acd32');
			}
		} else {
			$('.p_jul').html('');
		}
	});
	$('.percentage_aug').keyup(function() {
		var percentage_aug = $(this).val();
		
		if(percentage_aug != ''){
			if(!percentage_aug.match(allowed)){
			$('.p_aug').html('Error');
			$('.percentage_aug').css('border','1px solid #ff0000');
			} else {
				$('.p_aug').html('');
				$('.percentage_aug').css('border','1px solid #9acd32');
			}
		} else {
			$('.p_aug').html('');
		}
	});
	$('.percentage_sep').keyup(function() {
		var percentage_sep = $(this).val();
		
		if(percentage_sep != ''){
			if(!percentage_sep.match(allowed)){
			$('.p_sep').html('Error');
			$('.percentage_sep').css('border','1px solid #ff0000');
			} else {
				$('.p_sep').html('');
				$('.percentage_sep').css('border','1px solid #9acd32');
			}
		} else {
			$('.p_sep').html('');
		}
	});
	$('.percentage_oct').keyup(function() {
		var percentage_oct = $(this).val();
		
		if(percentage_oct != ''){
			if(!percentage_oct.match(allowed)){
			$('.p_oct').html('Error');
			$('.percentage_oct').css('border','1px solid #ff0000');
			} else {
				$('.p_oct').html('');
				$('.percentage_oct').css('border','1px solid #9acd32');
			}
		} else {
			$('.p_oct').html('');
		}
	});
	$('.percentage_nov').keyup(function() {
		var percentage_nov = $(this).val();
		
		if(percentage_nov != ''){
			if(!percentage_nov.match(allowed)){
			$('.p_nov').html('Error');
			$('.percentage_nov').css('border','1px solid #ff0000');
			} else {
				$('.p_nov').html('');
				$('.percentage_nov').css('border','1px solid #9acd32');
			}
		} else {
			$('.p_nov').html('');
		}
	});
	$('.percentage_dec').keyup(function() {
		var percentage_dec = $(this).val();
		
		if(percentage_dec != ''){
			if(!percentage_dec.match(allowed)){
			$('.p_dec').html('Error');
			$('.percentage_dec').css('border','1px solid #ff0000');
			} else {
				$('.p_dec').html('');
				$('.percentage_dec').css('border','1px solid #9acd32');
			}
		} else {
			$('.p_dec').html('');
		}
	});
	$('.a_from').click(function() {
		$('.con_date').fadeIn();
	});
	$('.a_to').click(function() {
		$('.con_date2').fadeIn();
	});
	//close date
	$('.close_from').click(function() {
		$('.con_date').fadeOut(1000);
	});
	//close date
	$('.close_to').click(function() {
		$('.con_date2').fadeOut(1000);
	});
	$('.cover').fadeIn().fadeOut(8000);
	
	$('[data-toggle="tooltip"]').tooltip();
});