 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro...</title>
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

			$ra = $_POST['ra'];
			$nome = $_POST['nome'];
						
			$con = mysqli_connect("localhost", "root", "", "BattleDatabase");

			if(!$con) die("deu ruim no banco");

			$inserir = "INSERT INTO Aluno VALUES (?, ?)";
			$stmt = $con->prepare($inserir);
			$stmt->bind_param('ss', $ra, $nome);
			
			if($stmt->execute()){
				echo "Sucesso! Dados cadastrados!" ."<br>"."<br>";
				echo "Fique atento, seu nome pode ser escolhido a qualquer momento!" ."<br>"."<br>";
				echo "<a href=index.php class='btn btn-custom'>Voltar à tela principal</a>";
			} else {
				echo "Oops... ocorreu um erro!" ."<br>"."<br>";
				echo "<a href=cadastro_aluno.php class='btn btn-custom'>Tentar Novamente</a>";
			}
						
			mysqli_close($con);

		?>
	</div>

</body>
</html>