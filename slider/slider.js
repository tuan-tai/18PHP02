var carousel_items = document.querySelectorAll('.carousel-item');
var carousel = document.getElementById('carousel');
var button_left = document.getElementById('left');
var button_right = document.getElementById('right');
var index = 0;

function hasActive(list) {
	for (var i = 0; i < list.length; i++) {
		if (list[i] == 'active')
			return true;
	}
	return false;
}

button_right.addEventListener('click', function() {
	for (var i = 0; i < carousel_items.length; i++) {
		if (hasActive(carousel_items[i].classList)) {
			index = i;
		}
		carousel_items[i].classList.remove('active');
	}
	if (index == (carousel_items.length - 1)) {
		index = 0;
	}
	else
		index++;
	carousel_items[index].classList.add('active');
});

button_left.addEventListener('click', function() {
	for (var i = 0; i < carousel_items.length; i++) {
		if (hasActive(carousel_items[i].classList)) {
			index = i;
		}
		carousel_items[i].classList.remove('active');
	}
	if (index == 0) {
		index = carousel_items.length - 1;
	}
	else
		index--;
	carousel_items[index].classList.add('active');
});