$(document).ready(function(){
	$("#show-text").click(function(){
		$("#result-text").html($("#text").val());
	});
	$("#submit-find").click(function() {

		var text = $("#result-text").text();
		var word = $("#search-word").val();
		var count = 0;
		var index = 0;
		while (text.indexOf(word, index) != -1) {
			count++;
			index = text.indexOf(word, index) + word.length;
		}
		text = text.replace(new RegExp(word, "g"), `<span style="background-color:yellow;">${word}</span>`) + `<br> <b>Tu ${word} xuat hien ${count} lan.</b>`;
		$("#search-result").html(text);
	});
});
