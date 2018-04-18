function add() {
	var c1 = document.getElementById("c1");
	var c2 = document.getElementById("c2");
	var result1 = document.getElementById("result1");
	c1 = Number(c1.value);
	c2 = Number(c2.value);
	z = c1 + c2;
	if (c1 && c2) {
		result1.value = z;
	}
}
function substract() {
	var t1 = document.getElementById("t1");
	var t2 = document.getElementById("t2");
	var result2 = document.getElementById("result2");
	t1 = Number(t1.value);
	t2 = Number(t2.value);
	z = t1 - t2;
	if (t1 && t2) {
		result2.value = z;
	}
}
function multiply() {
	var n1 = document.getElementById("n1");
	var n2 = document.getElementById("n2");
	var result3 = document.getElementById("result3");
	n1 = Number(n1.value);
	n2 = Number(n2.value);
	z = n1 * n2;
	if (n1 && n2) {
		result3.value = z;
	}
}
function divide() {
	var ch1 = document.getElementById("ch1");
	var ch2 = document.getElementById("ch2");
	var result4 = document.getElementById("result4");
	ch1 = Number(ch1.value);
	ch2 = Number(ch2.value);
	z = ch1 / ch2;
	if (ch1 && ch2) {
		result4.value = z;
	}
}