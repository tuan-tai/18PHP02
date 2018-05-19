$(document).ready(function(){
	$("#owl-product").owlCarousel({
		loop:false,
		items:3,
		margin:10,
		autoplay:false,
		dots:false,
		nav:true,
		navText: ["<i class='fas fa-chevron-circle-left'></i>","<i class='fas fa-chevron-circle-right'></i>"],
		rewind:true,
		responsive: {
			0 : {
				items : 2
			},
			768 : {
				items : 3
			}
		}
	});
	$("#owl-slide").owlCarousel({
		loop:false,
		items:1,
		autoplay:false,
		dots:false,
		nav:true,
		navText: ["<i class='fas fa-chevron-circle-left'></i>","<i class='fas fa-chevron-circle-right'></i>"],
		rewind:true
	});
	$("#indicates .length").text($("#owl-slide .owl-stage>.owl-item").length);
	$("#owl-slide .owl-stage>.owl-item").change(function() {
		$("#indicates.active").text($(this).index() + 1);
	});
});