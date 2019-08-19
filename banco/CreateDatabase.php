<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php

		$con = mysqli_connect("localhost", "root", "");

		if(!$con) die("deu ruim no banco");

		$criarBanco = "CREATE DATABASE BattleDatabase";

		if(mysqli_query($con, $criarBanco)){
			echo "Banco criado";
		} else {
			echo "Banco não criado";
		}


	?>

</body>
</html>