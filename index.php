<!DOCTYPE html>
<html>

<head>
  	<meta charset="utf-8">
	<title>R6 catalog</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<?php

	include 'connectdb.php';

	$populate = "SELECT arma FROM armas";
	$query = mysqli_query($link,$populate);
	
	while($results[] = mysqli_fetch_object($query));
    array_pop($results);

	?>

	<form method="post">
		<select name="select_armas" id="select_armas">
			<?php foreach($results as $option): ?>
	          <option value="<?php echo $option->arma; ?>"><?php echo $option->arma?></option>
	     	<?php endforeach; ?>
		</select>
	</form>

	<table id="data" width="100%">
		<thead>
			<tr>
				<th>Tipo</th>
				<th>Equipe</th>
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


</body>

</html>