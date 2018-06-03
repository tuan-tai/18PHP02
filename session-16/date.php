<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	form {
		width: 350px;
		margin: auto;
		text-align: center;
	}
	select {}
	optgroup {
		height: 300px;
	}
</style>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend>BirthDay</legend>
			<div>
				<b>Ngày sinh</b>
				<select name="day" id="day">
					<optgroup>
						<script type="text/javascript">
						</script>
					</optgroup>
				</select>
				<select name="month" id="month">
					<optgroup>
						<script type="text/javascript">
							for (m = 1; m < 13; m++) {
								document.querySelector("#month optgroup").innerHTML += `<option>${m}</option>`;
							}
						</script>
					</optgroup>
				</select>
				<select name="year" id="year">
					<optgroup>
						<script type="text/javascript">
							for (y = 1900; y < ((new Date()).getFullYear()); y++) {
								document.querySelector("#year optgroup").innerHTML += `<option>${y}</option>`;
							}
						</script>
					</optgroup>
				</select>
			</div>
		</fieldset>	
	</form>
	<script type="text/javascript">
		var day = document.getElementById("day");
		var month = document.getElementById("month");
		var year = document.getElementById("day");
		var d;
		var m;
		var y;
		var dayCheck31 = ['1', '3', '5', '7', '8', '10', '12'];
		var dayCheck30 = ['4', '6', '9', '11'];
		month.addEventListener('change', function() {
			if (dayCheck31.includes(month.value)) {
				d = 31;
				console.log(i);
			}
			if (dayCheck30.includes(month.value)) {
				d = 30;
				console.log(i);
			}
			for (i = 1; i < d; i++) {
				document.querySelector("#day optgroup").innerHTML += `<option>${i}</option>`;
			}
		});
	</script>
</body>
</html>
