$('#submitInfo').click(function() {
	if ($("#name").val() != '' && $("#age").val() != '') {

		$("input[name*='hobbies']").prop("checked", false);
		$("#hobbies").show();
		$("#result").html($("#name").val());
		$("#hobbies_result").html('<h3>HOBBIES</h3>');

		if ($("input[name*='gender']:radio:checked").val() == 'male') {
			$("#hobbies #male").show();
			$("#hobbies #female").hide();
			$("#result_img").attr({
				src: "male.jpeg", 
				alt: "Hinh anh nam"
			});
			$("#avatar .container div").css("color", "red");
		}
		else {
			$("#hobbies #male").hide();
			$("#hobbies #female").show();
			$("#result_img").attr({
				src: "female.png", 
				alt: "Hinh anh nu"
			});
			if ($("#age").val() < 1997) {
				$("#avatar .container div").css("color", "blue");
			}
			else {
				$("#avatar .container div").css("color", "yellow");
			}
		}
	}
});

$("#submitHobbies").click(function() {
	
	if ($("input[name*='gender']:radio:checked").val() == 'male') {
		$("#avatar .container div").css("color", "red");
	}
	else {
		if ($("#age").val() < 1997) {
			$("#avatar .container div").css("color", "blue");
		}
		else {
			$("#avatar .container div").css("color", "yellow");
		}
	}

	var hb = '<h3>HOBBIES</h3>';
	$("input[name*='hobbies']:checked").each(function () {
		hb = hb + '<p>' + $(this).val() + '</p>';
	});
	$("#hobbies_result").html(hb);
});