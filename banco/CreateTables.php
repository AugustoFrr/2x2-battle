<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php

		$con = mysqli_connect("localhost", "root", "", "BattleDatabase");

		$criarTabela = "CREATE TABLE Aluno(
		ra VARCHAR(20) PRIMARY KEY,
		nome VARCHAR(200))";

		$criarTabela2 = "CREATE TABLE Pergunta(
		id INT PRIMARY KEY AUTO_INCREMENT,
		pergunta VARCHAR(500),
		alterCorreta VARCHAR(100),
		alter2 VARCHAR(100),
		alter3 VARCHAR(100),
		alter4 VARCHAR(100),
		alter5 VARCHAR(100))";					

		if(mysqli_query($con, $criarTabela)){
			echo "Tabela Aluno criada";
		} else {
			echo "Tabela Aluno não criada";
		}

		echo "<br>";

		if(mysqli_query($con, $criarTabela2)){
			echo "Tabela Pergunta criada";
		} else {
			echo "Tabela Pergunta não criada";
		}					
		

		mysqli_close($con);

	?>

</body>
</html>