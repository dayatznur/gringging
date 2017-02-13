$(document).ready(function(){

	// Left Nav
	var indicator = 0;
	$("#btn_bar").click(function(){
		
		if(indicator % 2 != 0){

			$("#left_side").animate({
				marginLeft: "-160px"		
			}, 100, function(){
				$("#btn_bar").html('<i class="fa fa-bars" aria-hidden="true"></i>');
			});

			indicator++;

		}else{

			$("#left_side").animate({
				marginLeft: "0"		
			}, 100, function(){
				$("#btn_bar").html('<i class="fa fa-times" aria-hidden="true"></i>');
			});

			indicator++;

		}	

	});

	// Resize
	$(window).on('resize',function() {	

		$("#left_side").css("margin-left", "-160px");
		$("#btn_bar").html('<i class="fa fa-bars" aria-hidden="true"></i>');

		var widthWindow = $(window).width();
		if(widthWindow > 767){
			$("#left_side").css("margin-left", "0px");
			$("#btn_bar").html('<i class="fa fa-times" aria-hidden="true"></i>');
		}

	}).trigger('resize');

});