$(function() {

	//autocomplete
	$(".auto").autocomplete({
		source: "./api/autoCompletarProducao.php",
		minLength: 3
	});
});
