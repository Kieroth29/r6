<?php
	
	include 'connectdb.php';

	$arma=$_POST['arma'];
	$team=$_POST['team'];
	$dmg=$_POST['dmg'];
	$dmgsup=$_POST['dmgsup'];
	$mag=$_POST['mag'];
	$rof=$_POST['rof'];

	$salvar = "INSERT INTO 'armas' ('arma','equipe','dano','danosup','rof','pente')
		VALUES('$arma','$team','$dmg','$dmgsup','$mag','$rof')";
	if(mysqli_query($link,$salvar)){
		echo json_encode(array("statusCode"=>200));
	}else{
		echo json_encode(array("statusCode"=>201));
	}

	mysqli_close($link);
	
	/*$stmt = $link->prepare("INSERT INTO armas (arma,equipe,dano,danosup,rof,pente)
		VALUES(?,?,?,?,?,?)");
	$stmt->bind_param("ssssss",$arma,$team,$dmg,$dmgsup,$mag,$rof);
	$stmt->execute();

	$stmt->close();*/

?>