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

						  				
	          </div>
	        </div>
	      </div>
	  	</section>	

		<?php		
			
			$con = mysqli_connect("localhost", "root", "", "BattleDatabase");

			if(!$con) die("deu ruim no banco");

			$inserir = "INSERT INTO Pergunta VALUES ('', 'Qual o melhor vingador?', 'Homem-Aranha', 'Homem de Ferro', 'Thor', 'Hulk', 'Capitão América')";			
			$inserir1 = "INSERT INTO Pergunta VALUES ('', 'Qual é o mascote da Nintendo?', 'Mario', 'Sonic', 'Kirby', 'Pikachu', 'Link')";
			$inserir2 = "INSERT INTO Pergunta VALUES ('', 'Qual a cor do céu?', 'Azul', 'Branco', 'Preto', 'Vermelho', 'Verde')";
			$inserir3 = "INSERT INTO Pergunta VALUES ('', 'Todos são vilões do Sonic, exceto:', 'Amy', 'Metal Sonic', 'Silver', 'Shadow', 'Robotnik')";
			$inserir4 = "INSERT INTO Pergunta VALUES ('', 'Qual é a pior linguagem?', 'PHP', 'Ruby', 'Java', 'Python', 'C++')";
			$inserir5 = "INSERT INTO Pergunta VALUES ('', 'Primeiros jogos do Pokémon', 'Red/Blue', 'Gold/Silve', 'Stadium', 'Ruby/Sapphire', 'Yellow')";
			$inserir6 = "INSERT INTO Pergunta VALUES ('', 'Jogo do Mario de corrida', 'Mario Kart', 'Mario Race', 'Mario Racing', 'Mario Nitro Kart', 'Mario Turbo Racing')";

			$inserir7 = "INSERT INTO Aluno(nome, ra) VALUES ('Augusto', '1')";
			$inserir8 = "INSERT INTO Aluno(nome, ra) VALUES ('Caio', '2')";
			$inserir9 = "INSERT INTO Aluno(nome, ra) VALUES ('Guilherme', '3')";
			$inserir10 = "INSERT INTO Aluno(nome, ra) VALUES ('Nathalia', '4')";
			$inserir11 = "INSERT INTO Aluno(nome, ra) VALUES ('Luana', '5')";
			$inserir12 = "INSERT INTO Aluno(nome, ra) VALUES ('Daniel', '6')";
			$inserir13 = "INSERT INTO Aluno(nome, ra) VALUES ('Vitor', '7')";
			$inserir14 = "INSERT INTO Aluno(nome, ra) VALUES ('Vinicius', '8')";
			$inserir15 = "INSERT INTO Aluno(nome, ra) VALUES ('Lucas', '9')";
			$inserir16 = "INSERT INTO Aluno(nome, ra) VALUES ('Matheus', '10')";
			$inserir17 = "INSERT INTO Aluno(nome, ra) VALUES ('Thais', '11')";
			$inserir18 = "INSERT INTO Aluno(nome, ra) VALUES ('Thiago', '12')";
			$inserir19 = "INSERT INTO Aluno(nome, ra) VALUES ('Marcus', '13')";
			$inserir20 = "INSERT INTO Aluno(nome, ra) VALUES ('Juliana', '14')";
			$inserir21 = "INSERT INTO Aluno(nome, ra) VALUES ('Marcos', '15')";
			$inserir22 = "INSERT INTO Aluno(nome, ra) VALUES ('Tamires', '16')";

			mysqli_query($con, $inserir);
			mysqli_query($con, $inserir1);
			mysqli_query($con, $inserir2);
			mysqli_query($con, $inserir3);
			mysqli_query($con, $inserir4);
			mysqli_query($con, $inserir5);
			mysqli_query($con, $inserir6);

			mysqli_query($con, $inserir7);
			mysqli_query($con, $inserir8);
			mysqli_query($con, $inserir9);
			mysqli_query($con, $inserir10);
			mysqli_query($con, $inserir11);
			mysqli_query($con, $inserir12);
			mysqli_query($con, $inserir13);
			mysqli_query($con, $inserir14);
			mysqli_query($con, $inserir15);
			mysqli_query($con, $inserir16);

			
						
			mysqli_close($con);
			echo "preenchido";

		?>
	</div>

</body>
</html>