$('#button #right').click(function() {
	if ($('.carousel-item.active').next().length == 0) {
		$('.carousel-item').first().addClass('active').animate({opacity: 1});
		$('.carousel-item').last().removeClass('active').animate({opacity: 0});
	}
	else {
		$('.carousel-item.active').next().addClass('active').animate({opacity: 1});
		$('.carousel-item.active').prev().removeClass('active').animate({opacity: 0});
	}
});

$('#button #left').click(function() {
	if ($('.carousel-item.active').prev().length == 0) {
		$('.carousel-item').last().addClass('active').animate({opacity: 1});
		$('.carousel-item').first().removeClass('active').animate({opacity: 0});
	}
	else {
		$('.carousel-item.active').prev().addClass('active').animate({opacity: 1});
		$('.carousel-item.active').next().removeClass('active').animate({opacity: 0});
	}
});