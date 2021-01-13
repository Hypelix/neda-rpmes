$(document).ready(function(){
	$('.close_cover_box').click(function() {
		$('.cover').fadeOut();
	});
});
//date posted
	var date = document.getElementById("date");
	var d = new Date();
	var dayName = ["Sun.", "Mon.", "Tue.", "Wed.", "Thu.", "Fri.", "Sat."];
	var monthName = ["Jan.", "Feb.", "Mar.", "Apr.", "May.", 
				"Jun.", "Jul.", "Aug.", "Sep.", "Oct.", "Nov.", "Dec."];
//time posted
	var AM_PM = "";
	var hour = d.getHours();
	var minute = d.getMinutes();
	var zero = "0";
	
	if(hour < 12){
		AM_PM = "am";
	} else {
		AM_PM = "pm";
	}
	if(hour == 0){
		huor = 12;
	}
	if(hour > 12){
		hour = hour - 12;
	}
	
	if(minute < 10){
		minute = zero+minute;
	}
	
	date.innerHTML=monthName[d.getMonth()] + " " +
		d.getDate() + ", " + d.getFullYear() + " " + dayName[d.getDay()] + " "+ "at" + " "+hour + ":" + minute +" "+ AM_PM;
