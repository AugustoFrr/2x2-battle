<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Perguntas...</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/estilo.css">

   <link rel="icon" href="imagens/icon.png">
</head>
<body>

	<div align="center">
		<section id="logo" class="d-flex">
	  		<div class="container align-self-center">
	  			<div class="row">
	  				<div class="col-md-12 capa">

						<br><a href="index.php"><img src="imagens/logo2.png" width="40%"></a><br>
	  				
	          </div>
	        </div>
	      </div>
	  	</section>	

		<?php

			$txDesafio = $_POST['txDesafio'];
			$txResposta = $_POST['txResposta'];
			$txOutraResp1 = $_POST['txOutraResp1'];
			$txOutraResp2 = $_POST['txOutraResp2'];
			$txOutraResp3 = $_POST['txOutraResp3'];
			$txOutraResp4 = $_POST['txOutraResp4'];
			
			
			$con = mysqli_connect("localhost", "root", "", "BattleDatabase");

			if(!$con) die("deu ruim no banco");

			$inserir = "INSERT INTO Pergunta VALUES ('', '$txDesafio', '$txResposta', '$txOutraResp1', '$txOutraResp2', '$txOutraResp3', '$txOutraResp4')";

			if(mysqli_query($con, $inserir)){
				echo "Sucesso! Questão cadastrada!" ."<br>"."<br>";
				echo "<a href=cadastro_questoes.php class='btn btn-custom'>Nova Questão!</a>" ."<br>"."<br>";
				echo "<a href=dashboard.php class='btn btn-custom'>Voltar ao Dashboard</a>";
			} else {
				echo "Oops... ocorreu um erro!" ."<br>"."<br>";
				echo "<a href=cadastro_questoes.php class='btn btn-custom'>Tentar Novamente</a>" ."<br>"."<br>";
				echo "<a href=dashboard.php class='btn btn-custom'>Voltar ao Dashboard</a>";
			}
						
			mysqli_close($con);

		?>
	</div>

</body>
</html>