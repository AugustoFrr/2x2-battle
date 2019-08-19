<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>QUESTÕES CADASTRADAS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <link rel="icon" href="imagens/icon.png">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
      <div class="container">

        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
          <i class="fas fa-bars text-black"></i>
        </button>

        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link">Voltar</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header>

  <?php
  error_reporting(0);
  ini_set('display_errors', 0);

  $con = mysqli_connect("localhost", "root", "", "BattleDatabase");

  if(!$con) die("deu ruim no banco");

  if($_POST['idQuestion']){


    $id = $_POST['idQuestion'];

    $deletar = "DELETE FROM pergunta WHERE id = $id";

    mysqli_query($con, $deletar);

  }

  $sql = "SELECT * FROM Pergunta";

  $resultado = mysqli_query($con, $sql);
  
  $dados = array();
  
  while($row = mysqli_fetch_assoc($resultado)){
    $dados[] = $row;
  }

  mysqli_close($con);

  ?>

  <section id="logo" class="d-flex">
    <div class="container align-self-center">
      <div class="row">
        <div class="col-md-12 capa">
          <br><a href="index.php"><img src="imagens/logo2.png" width="40%"></a> <br>
          <h4>Questões:</h4>
          
        </div>
      </div>
    </div>
  </section>

  <section id="quests">
    <div class="container" style="width: 80%" id="questionContainers" align="center">
    </div>
  </section>

  <script type="text/javascript">


    var perguntasArray = <?php echo json_encode($dados); ?>;
    var container = document.getElementById("questionContainers");
    var alternativasArray = [];

    var i = 0;
    var j = 0;

    while(i < perguntasArray.length){
      var space =  document.createElement("br");

      var questionContainer = document.createElement("div");
      questionContainer.className = "containerQuestao";
      

      var pergunta = document.createTextNode(perguntasArray[i].pergunta);
      var h = document.createElement("p");
      h.appendChild(pergunta);
      questionContainer.appendChild(h);

      alternativasArray = [perguntasArray[i].alter2, perguntasArray[i].alter3,
      perguntasArray[i].alter4, perguntasArray[i].alter5];
      
      var alternativas = document.createElement("div");

      var alC = document.createElement("p");
      var alterCorreta = document.createTextNode(perguntasArray[i].alterCorreta);
      alC.appendChild(alterCorreta);
      
      alternativas.appendChild(alC);



      while(j<4){
        var p = document.createElement("p");
        var alternativa = document.createTextNode(alternativasArray[j]);

        p.appendChild(alternativa);

        alternativas.appendChild(p);

        
        j++;

      }
      alternativas.appendChild(space);

      questionContainer.appendChild(alternativas);

      alC.style.background = "rgb(247, 51, 72)";
      alternativas.style.fontWeight = "normal";

      
      container.appendChild(questionContainer);
      container.style.width = "50%";

      container.appendChild(space);

      
      var formbutton = document.createElement("form");
      formbutton.setAttribute('method', 'post');
      formbutton.setAttribute('action', 'lista_questoes.php');

      var questaoId = document.createElement("input");
      questaoId.setAttribute('type', 'hidden');
      questaoId.setAttribute('name', 'idQuestion');
      questaoId.setAttribute('value', perguntasArray[i].id);
      

      var button = document.createElement("input");
      button.className = "btn btn-danger";
      button.setAttribute('type', 'submit');
      button.setAttribute('value', 'Excluir Questão');

      formbutton.appendChild(questaoId);
      formbutton.appendChild(button);
      questionContainer.appendChild(formbutton);

      j=0;
      i++;
    }
    console.log(perguntasArray[2].id);


    function excluir(botaoId){
      alert("OK");
    }
    
  </script>

</body>
</html>