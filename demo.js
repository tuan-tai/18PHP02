function cal() {
	var	x = document.getElementById("x"),
	y = document.getElementById("y"),
	result = document.getElementById("result");
	console.log(x);
	x = Number(x.value);
	y = Number(y.value);
	z = x % y;
	if (z) {
		if (z == 1)
			result.value = 'ONE';
		else if (z == 2)
			result.value = 'TWO';
		else if (z == 3)
			result.value = 'THREE';
		else
			result.value = x + y;
	}
}

/*
	Name: sum
	Description: Tinh tong cua 2 gia tri truyen vao
	Created by TuanTai
	Created on 15.04.2018
	*/
// function sum(x, y) {
// 	console.log(x + " + " + y + " = " + (x + y));
// }
// function minus (x, y) {
// 	console.log(x + " - " + y + " = " + (x - y));
// }
// function multiple (x, y) {
// 	console.log(x + " * " + y + " = " + x * y);
// }
// function divide (x, y) {
// 	console.log(x + " / " + y + " = " + x / y);
// }

// sum(3, 4);
// minus(3, 4);
// multiple(3, 4);
// divide(3, 4);

// var MyMobile = '012345678';
// console.log(typeof(MyMobile));
// var MyAge = 30;
// console.log(typeof(MyAge));
// var MyClass = [];
// console.log(MyClass);
