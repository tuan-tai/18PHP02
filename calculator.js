document.addEventListener("DOMContentLoaded", function () {
	var buttons = document.querySelectorAll('p');
	var result = document.getElementById('result');
	var status = 0;
	var preButton = '';
	var thisButton = '';
	var check = ['+', '-', 'x', '÷', '.'];
	var math = '0';
	var checkMath = ['+', '-', 'x', '÷'];
	var checkNum = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
	var string = '';

	for (var i = 0; i < buttons.length; i++) {
		buttons[i].addEventListener('click', function() {
			thisButton = this.innerHTML;
			if (thisButton == 'AC') {
				string = '';
				result.innerHTML = string;
				return false;
			}
			
			if (thisButton == 'CE') {
				string = string.slice(0, string.length - 1);
				if (string == '') 
					string = '';
				result.innerHTML = string;
				return false;
			}

			if (thisButton == '=') {
				
				function evil(string) {
					return new Function('return ' + string)();
				}
				result.innerHTML = evil(string);
				string = evil(string);
				return false;
			}
			if (check.indexOf(thisButton) == -1) { //check la cac so thi lam
				status = 0;
				string = string + thisButton;
				result.innerHTML = string;
				preButton = thisButton;
				return false;
			}
			if (check.indexOf(thisButton) != -1) { //check la cac phep toan thi lam
				if (preButton == thisButton) { //neu nhu phep toan trung nhau thi k lam nua
					if (status == 1) {
						return false;
					}
				}
				else {//neu cac phep toan k trung nhau thi lam
					if ((check.indexOf(thisButton) != -1) && (check.indexOf(preButton) != -1)) {
						string = string.slice(0, string.length - 1); //neu nhu phep toan khac nhau thi xoa phep toan truoc
					}
					preButton = thisButton;
					status = 1;
					string = string + thisButton;
					result.innerHTML = string;
				}
			}
		})
	}
})