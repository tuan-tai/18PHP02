var color = '';
function change() {
	var genderCheck = document.getElementsByName('gender');
	var gender = '';
	var name = document.getElementById('name').value;
	var age = document.getElementById('age').value;
	var hobbies = document.getElementsByName('hobbies');
	var d = new Date();
	var n = d.getFullYear();

	for (var i = 0; i < genderCheck.length; i++) {
		if (genderCheck[i].checked) {
			gender = genderCheck[i].value;
		}
	}
	document.getElementById('hobbies').style.display = 'block';


	if (gender == 'male') {
		document.getElementById('result').style.color = 'red';
		color = 'red';
		document.getElementById('result').style.fontSize = '100%';
		document.getElementById('result_img').src = 'male.jpeg';
		document.getElementById('result_img').alt = 'Hinh anh nam';
		document.getElementById('male').style.display = 'block';
		document.getElementById('female').style.display = 'none';
	}
	else if (gender == 'female') {
		document.getElementById('result_img').src = 'female.png';
		document.getElementById('result_img').alt = 'Hinh anh nu';
		document.getElementById('female').style.display = 'block';
		document.getElementById('male').style.display = 'none';
		document.getElementById('result').style.fontSize = '100%';

		if (n - Number(age) > 1997) {
			document.getElementById('result').style.color = 'yellow';
			document.getElementById('result').style.fontSize = '30px';
			color = 'yellow';
		}
		else {
			document.getElementById('result').style.color = 'blue';
			color = 'blue';
		}
	}

	if (age == '') {
		color = 'blue';
	}

	document.getElementById('result').innerHTML = name;
}

function submitHobbies() {
	console.log(color);
	var hobbies = document.getElementsByName('hobbies');
	var hb = '<h3>HOBBIES</h3>';
	for (var i = 0; i < hobbies.length; i++) {
		if (hobbies[i].checked == true)
			hb = hb + '<p>' + hobbies[i].value + '</p>';
	}
	document.getElementById('hobbies_result').innerHTML = hb;
	document.getElementById('hobbies_result').style.color = color;
	for (var i = 0; i < hobbies.length; i++) {
		hobbies[i].checked = false;
	}
}