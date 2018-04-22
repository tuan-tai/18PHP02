var list = document.querySelectorAll('.list p');
var detail = document.querySelectorAll('.details div');
for (var i = 0; i < list.length; i++) {
	list[i].addEventListener('mouseover', function() {
		for (var j = 0; j < detail.length; j++) {
			if (this.classList == list[j].classList) {
				for (var k = 0; k < detail.length; k++) {
					detail[k].style.display = "none";				
				}
				detail[j].style.display = "block";
			}
		}
	})
}