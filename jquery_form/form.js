$('#submitInfo').click(function() {
	if ($("#name").val() != '' && $("#age").val() != '') {
		$("#hobbies").show();
		if ($("input[name*='gender']:radio:checked").val() == 'male') {
			$("#hobbies #male").show();
			$("#hobbies #female").hide();
			$("#result_img").attr({
				src: "male.jpeg", 
				alt: "Hinh anh nam"
			});
			$("#result").css("color", "red").html($("#name").val());
		}
		else {
			$("#hobbies #male").hide();
			$("#hobbies #female").show();
			$("#result_img").attr({
				src: "female.png", 
				alt: "Hinh anh nu"
			});
			if ($("#age").val() < 1997) {
				$("#result").css("color", "blue").html($("#name").val());
			}
			else {
				$("#result").css("color", "yellow").html($("#name").val());
			}
		}
	}
});

$("#submitHobbies").click(function() {
	var hb = '<h3>HOBBIES</h3>';
	// $("#hobbies_result").html($("input[name*='hobbies']:checked").each().val());
	$("input[name*='hobbies']:checked").each(function () {
		hb = hb + '<p>' + $(this).val() + '</p>';
	});
	$("#hobbies_result").html(hb);
	$("input[name*='hobbies']").prop("checked", false);
});