$(function(){
	$('#btn').click(function(){
			var arma = $('#arma').val();
			var team = $('#team').val();
			var dmg = $('#dmg').val();
			var dmgsup = $('#dmgsup').val();
			var rof = $('#rof').val();
			var mag = $('#mag').val();

			if(arma != "" && team != "" && dmg != "" && dmgsup != "" && rof != "" && mag !=""){
				$.ajax({
					url: "cadastro.php",
					type: "POST",
					data: {
						arma: arma,
						team: team,
						dmg: dmg,
						dmgsup: dmgsup,
						rof: rof,
						mag: mag
					}
				});
		
			}else{
				alert("Preencha todos os campos!");
			}
	});
});