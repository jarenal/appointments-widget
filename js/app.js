// Default price for Gold Package
var default_price='100.00';

// Package selector handler
var selectPackage = function(e){

	$('.package-container').removeClass("on");

	if($(this).hasClass("package-container")){
		$(this).addClass("on");
		var $radio = $(this).find("input[type=\"radio\"]");
		$radio.prop("checked", true);
	}
	else{
		var $parent = $(this).parents(".package-container");
		$parent.addClass("on");
	}

};

// On Document ready!
(function(){

	// Set default price
	$("#default-price").html(default_price);

	// Attach Package selector handler
	$(document).on("click", "input[type=\"radio\"]", selectPackage);
	$(document).on("click", ".package-container", selectPackage);

	// On change Appointment dates dropdown
	$(document).on("change", "#select-dates", function(e){

		$("#default-price").html(default_price);

		if(parseInt($(this).val()))
		{
			$("#select-slots").html("<option value=\"0\">Please select</option>");

			$.each(appointments[$(this).val()], function(key, item){
				var title = item.start_time + "-" + item.end_time + ": " + item.slot_description + " - &pound;" + item.price;
				$("#select-slots").append('<option value="'+item.price+'">'+title+'</option>');
			});
		}
	});

	// On change Appointment Slots dropdown
	$(document).on("change", "#select-slots", function(e){

		$("#default-price").html(default_price);

		if(parseInt($(this).val()))
		{
			$("#default-price").html($(this).val());
		}
	});

	// Init Appointment dates dropdown
	$.each(appointments, function(key, value){
		$("#select-dates").append('<option value="'+key+'">'+moment(key, "MM-DD-YYYY").format("dddd Mo MMMM")+'</option>');
	});

})();