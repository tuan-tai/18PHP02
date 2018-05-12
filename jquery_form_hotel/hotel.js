function date(dateObj) {
	var month = dateObj.getUTCMonth() + 1;
	var day = dateObj.getUTCDate();
	var year = dateObj.getUTCFullYear();

	return year + "/" + month + "/" + day;
}

var currentDate = date(new Date);

$("#submit").click(function() {
	$("form input").each(function() {
		if ($(this).val() == "") {
			$("#"+$(this).attr("name")+" p").html('Vui long nhap vao: ' + $(this).siblings("span").text());
		}
		else {
			$("#"+$(this).attr("name")+" p").html('');
		}
	});

	//check gender
	($("input[name*='gender']:checked").length > 0)?$("#gender p").html(''):$("#gender p").html('Vui long chon gioi tinh');

	//check departure date
	if ($("input[name*='departureDate']").val() != "") {
		var departureDate =  date(new Date($("input[name*='departureDate']").val()));
		(Date.parse(departureDate) < Date.parse(currentDate))?$("#departureDate p").html('Ngay di phai lon hon ngay hien tai'):$("#departureDate p").html('');
	}

	//check arrival date
	if ( ($("input[name*='departureDate']").val() != '') && ( $("input[name*='arrivalDate']").val() != '') ) {
		var arrivalDate = date(new Date($("input[name*='arrivalDate']").val()));
		(Date.parse(arrivalDate) <= Date.parse(departureDate))?$("#arrivalDate p").html('Ngay den phai lon hon ngay di'):$("#arrivalDate p").html('');
	}

	//check child
	if ($("input[name*='child']").val() != "") {
		(Number($("input[name*='child']").val()) > Number($("input[name*='adult']").val()))?$("#child p").html('So tre em phai nho hon so nguoi lon'):$("#child p").html('');
	}
});