$(document).ready(function() {
	$('.btn_add').click(function() {
		var np = $('.np').val();
		var location = $('.location').val();
		var agency = $('.agency').val();
		var f7_m = $('.f7_m').val();
		var f7_d = $('.f7_d').val();
		var f7_y = $('.f7_y').val();
		var date_pss = f7_m+"/"+f7_d+"/"+f7_y;
		var concerned_agency = $('.concerned_agency').val();
		var agreements = $('.agreements').val();
		var next_steps = $('.next_steps').val();
		var submitted_by = $('.submitted_by').val();
		var office = $('.office').val();
		var date = $('.date').val();
		var agency_head = $('.agency_head').val();
		var m = $('.m').val();
		var yr = $('.yr').val();
		
		if(submitted_by == "" && office == "" && agency_head == ""){
			alert('Please fill up first your name, office and your agency_head. Thank you!');
		} else {
			$.ajax({
				url: "js_ins_form8.php",
				method: "POST",
				data: { 
					np:np,
					location:location,
					agency:agency,
					date_pss:date_pss,
					concerned_agency:concerned_agency,
					agreements:agreements,
					next_steps:next_steps,
					submitted_by:submitted_by,
					office:office,
					date:date,
					agency_head:agency_head,
					m:m,
					yr:yr
				}
			});
		}
	});
	setInterval(function() {
		$('.con_f8').load('js_con_f8.php').fadeIn(slow);
	}, 1000);
	$('.btn_close_inn_f8').click(function() {
		$('.inn_f8').fadeOut();
	});
	$('.del_proc').fadeIn().delay(3000).slideUp();
	$('.con_no_form').fadeIn().delay(3000).slideUp();
});