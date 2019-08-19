<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/estilo.css">

   <link rel="icon" href="imagens/icon.png">
   <script src="js/javascript.js"></script>
   <script src="js/perguntas.js"></script>
</head>

<body>

  	<section id="logo" class="d-flex">
  		<div class="container align-self-center">
  			<div class="row">
  				<div class="col-md-12 capa">

					<br><a href="index.php"><img src="imagens/logo2.png" width="40%"></a><br>
  					<h4>Acesso ao dashboard</h4>
 					 
  				</div>
  			</div>
  		</div>
  	</section>

  	<section id="form">
  		<div class="container" style="width: 20%">
  			<form class="capa">
				<div class="form-group">
		        <div class="form-group">
		            <label for="senha">Senha Mestra</label>
		            <input class="form-control" type="password" id="senhaProf" required>
		        </div>

		        <div class="form-group-append">
		        	<input class="btn btn-custom" onclick="verificarSenhaMestra()" type="submit" value="Entrar">
		        </div>
			</form>  
  		</div>
  	</section>



</body>
</html>