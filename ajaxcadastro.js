$(function(){

	$('#btn').click(function(){
		var arma = $('#arma').val();
		var tipo = $('#tipo').val();
		var team = $('#equipe').val();
		var dmg = $('#dmg').val();
		var dmg_sup = $('#dmgsup').val();
		var rof = $('#rof').val();
		var mag = $('#mag').val();

		$.ajax({
			type: "POST",
			url: "cadastro.php",
			data: {arma}
		})
		.done(function(msg){
			alert("Sucesso no cadastro.");
		});
	});

});