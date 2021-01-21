<!DOCTYPE html>
<html>

<head>
  	<meta charset="utf-8">
	<title>R6 catalog</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<label for="L85a2">L85A2</label>
	<br>
	<button>
		<img src="wps/L85a2.webp" id="L85a2">
	</button>
	
	<label for="AR33">AR33</label>
	<button>
		<img src="wps/AR33.webp" id="AR33">
	</button>
	<br>
	
	<table id="data" width="100%">
		<thead>
			<tr>
				<th>Tipo</th>
				<th>Operadores</th>
				<th>Equipe</th>
				<th>Organizações</th>
				<th>Dano</th>
				<th>Dano com supressor</th>
				<th>ROF</th>
				<th>Pente</th>
			</tr>
		</thead>
	</table>
	
	<footer>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="buttons.js"></script>
	</footer>

	<?php

	include 'connectdb.php';

	?>

</body>

</html>