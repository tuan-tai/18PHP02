function validate() {
	var checkField = document.getElementsByTagName('input');
	var currentTime = new Date();
	var status = 0;

	for (var i = 0; i < checkField.length; i++) {
		console.log(checkField[i].name);
		switch (checkField[i].name) {
			case 'name':
				if (checkField[i].value == '') {
					document.querySelector('#name p').innerHTML = 'Vui long nhap vao ho va ten';
				}
				else {
					document.querySelector('#name p').innerHTML = '';
				}
				break;
			case 'email':
				if (checkField[i].value == '') {
					document.querySelector('#email p').innerHTML = 'Vui long nhap vao email';
				}
				else {
					document.querySelector('#email p').innerHTML = '';
				}
				break;
			case 'phone':
				if (checkField[i].value == '') {
					document.querySelector('#phone p').innerHTML = 'Vui long nhap vao so dien thoai';
				}
				else {
					document.querySelector('#phone p').innerHTML = '';
				}
				break;
			case 'gender':
				if (checkField[i].checked == false && status == 0) {
					document.querySelector('#gender p').innerHTML = 'Vui long chon gioi tinh';
				}
				else {
					status = 1;
					document.querySelector('#gender p').innerHTML = '';
					break;
				}
				break;
			case 'ngaydi':
				var ngaydi = checkField[i].value;
				if (checkField[i].value == '') {
					document.querySelector('#ngaydi p').innerHTML = 'Vui long nhap vao ngay di';
				}
				else {
					document.querySelector('#ngaydi p').innerHTML = '';
				}
				if (ngaydi < currentTime) {
					document.querySelector('#ngaydi p').innerHTML = 'Ngay di phai lon hon ngay hien tai';
				}
				break;
			case 'ngayden':
				var ngayden = checkField[i].value;
				if (checkField[i].value == '') {
					document.querySelector('#ngayden p').innerHTML = 'Vui long nhap vao ngay den';
				}
				else {
					document.querySelector('#ngayden p').innerHTML = '';
				}
				if (ngayden < ngaydi) {
					document.querySelector('#ngayden p').innerHTML = 'Ngay den phai lon hon ngay di';
				}
				break;
			case 'nguoilon':
				var nguoilon = checkField[i].value;
				if (checkField[i].value == '') {
					document.querySelector('#nguoilon p').innerHTML = 'Vui long nhap vao so nguoi lon';
				}
				else {
					document.querySelector('#nguoilon p').innerHTML = '';
				}
				break;	
			case 'treem':
				var treem = checkField[i].value;
				if (checkField[i].value == '') {
					document.querySelector('#treem p').innerHTML = 'Vui long nhap vao so tre em';
				}
				else {
					document.querySelector('#treem p').innerHTML = '';
				}
				if (treem > nguoilon) {
					document.querySelector('#treem p').innerHTML = 'So tre em phai nho hon so nguoi lon';
				}
				break;	
		}


	}

}