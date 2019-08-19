<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CADASTRO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <link rel="icon" href="imagens/icon.png">
</head>

<body>

  <section id="logo" class="d-flex">
    <div class="container align-self-center">
      <div class="row">
        <div class="col-md-12 capa">
          <br><a href="index.php"><img src="imagens/logo2.png" width="40%"></a> <br>
          <h4>Preencha os dados para cadastrar</h4>
          
        </div>
      </div>
    </div>
  </section>

  <section id="form">
    <div class="container" style="width: 20%">
      <form class="capa" action="cadastro_aluno_resposta.php" method="post">
        <div class="form-group">
          <label for="ra">RA</label>
          <input class="form-control" type="text" name="ra" required>
        </div>

        <div class="form-group">
          <label for="nome">Nome</label>
          <input class="form-control" type="text" name="nome" required>
        </div>

        <div class="form-group-append">
          <input class="btn btn-custom" type="submit" value="CADASTRAR">
        </div>
      </form>  
    </div>
  </section>

</body>
</html>