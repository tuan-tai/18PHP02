$(document).ready(function(){
	$("#show-text").click(function(){
		$("#result-text").html($("#text").val());
	});
	$("#submit-find").click(function() {

		var text = $("#result-text").text();
		var word = $("#search-word").val();
		var count = 0;
		var index = 0;

		if ($("#result-text").text() == "" || word == "") {
			return false;
		}
		else {
			while (text.indexOf(word, index) != -1) {
				count++;
				index = text.indexOf(word, index) + word.length;
			}
			text = text.replace(new RegExp(word, "g"), `<span style="background-color:yellow;">${word}</span>`) + `<br> <b>Từ ${word} xuất hiện ${count} lần.</b>`;
			$("#search-result").html(text);
		}	
	});
});
