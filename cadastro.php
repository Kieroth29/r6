<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<form method="post">
		<label for="arma">Arma</label><br>
		<input type="text" name="arma" id="arma"><br>
		<label for="tipo">Tipo</label><br>
		<input type="text" name="tipo" id="tipo"><br>
		<label for="equipe">Equipe</label><br>
		<input type="text" name="equipe" id="equipe"><br>
		<label for="dmg">Dano</label><br>
		<input type="text" name="dmg" id="dmg"><br>
		<label for="dmgsup">Dano(supressor)</label><br>
		<input type="text" name="dmgsup" id="dmgsup"><br>
		<label for="rof">ROF</label><br>
		<input type="text" name="rof" id="rof"><br>
		<label for="mag">Pente</label><br>
		<input type="text" name="mag" id="mag"><br>
		<input type="submit" name="btn" id="btn" value="Cadastrar">
	</form>

<footer>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="ajaxcadastro.js"></script>
</footer>
</body>

</html>