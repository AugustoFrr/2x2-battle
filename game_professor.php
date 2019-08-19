<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  

  <link rel="icon" href="imagens/icon.png">



  <title>2X2 BATTLE!!</title>
</head>
<body id="game-bg">

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

  <section id="top">
    <div class="container d-flex">
      <div class="row">
        <div class="col-sm" >
          <h4 class="display-4" align="center">TIME A</h4>
          <div class="col-sm">
            <h5 align="left" id="aluno1">Aluno 1</h5> <h5 style="display: none" id="aluno1RA">A</h5> 
            <h5 id="aluno2" class="margin" align="right">Aluno 2</h5>  <h5 style="display: none" id="aluno2RA">A</h5>
          </div>
          <img class="user-img" id="aluno1_img" src="imagens/user.png">
          <img class="user-img" id="aluno2_img" src="imagens/user.png">
        </div>
        <div class="col-sm align-self-center"  align="center">
          <img src="imagens/vs.png" width="50%" >
        </div>
        <div class="col-sm" >
          <h4 class="display-4" align="center">TIME B</h4>
          <div class="col-sm">
            <h5 id="aluno3" align="left">Aluno 3</h5> <h5 style="display: none" id="aluno3RA">A</h5> 
            <h5 id="aluno4" class="margin" align="right">Aluno 4</h5> <h5 style="display: none" id="aluno4RA">A</h5>
          </div>
          <img class="user-img" id="aluno3_img" src="imagens/user.png">
          <img class="user-img" id="aluno4_img" src="imagens/user.png">

        </div>
      </div>
    </div>
  </section>

  
  

  <section id="mid">
    <div class="container">
      <div class="row">
        <div class="col-sm" align="center">
          <table class="questao quests-bg">

            <tr>
              <td>
                <h3 class="centralizar">QUESTÃO:</h3>
              </td>
            </tr>
            <td>
              <h4 class="centralizar" id="questId">&#60; a pergunta fica aqui &#62;</h4>
            </td> 

            <tr class="alternativa" id="alt1">
              <td>
                &#60; ALTERNATIVA A &#62;
              </td>
            </tr>

            <tr class="alternativa" id="alt2">
              <td>
                &#60; ALTERNATIVA B &#62;
              </td>
            </tr>

            <tr class="alternativa" id="alt3">
              <td>
                &#60; ALTERNATIVA C &#62;
              </td>
            </tr>

            <tr class="alternativa" id="alt4">
              <td>
                &#60; ALTERNATIVA D &#62;
              </td>
            </tr>

            <tr class="alternativa" id="alt5">
              <td>
                &#60; ALTERNATIVA E &#62;
              </td>
            </tr>


          </table>


        </div>
      </div>
    </div>
  </section>

  <div id="divCrono" class="container" align="center">

    <h3 id="cronometro"></h3>
    
  </div>

  <br>


  <section id="bot">
    <div class="container">
      <div class="row">
        <div class="col-sm transparent-bg" align="center">
          <h4 class="centralizar">Gerenciar time A</h4>
          <button type="button" class="btn btn-success" onclick="vitoria('1')"> Vitória! +3 Pontos! </button> <br> <br>
          <button type="button" class="btn btn-dark" onclick="adicionarJogador('1')"> Adicionar Participante </button> <br> <br>
          <button type="button" class="btn btn-dark margin" onclick="removerJogador('1')"> Remover Participante </button>

        </div>
        <div class="col-sm transparent-bg" align="center">
          <h4 class="centralizar">Gerenciar questão</h4>

          <?php

          $con = mysqli_connect("localhost", "root", "", "BattleDatabase");

          if(!$con) die("deu ruim no banco");

          $sql = "SELECT pergunta, alterCorreta, alter2, alter3, alter4, alter5 FROM Pergunta";
          $sql2 = "SELECT * FROM Aluno";
          
          $resultado = mysqli_query($con, $sql);
          $resultado2 = mysqli_query($con, $sql2);
          
          $dados = array();
          $alunos = array();

          while($row = mysqli_fetch_assoc($resultado)){
            $dados[] = $row;
          }

          while($row2 = mysqli_fetch_assoc($resultado2)){
            $alunos[] = $row2;
          }
          
          

          mysqli_close($con);

          ?>

          <button type="button" id="botaoNext" class="btn btn-success" onclick="nextQuestion()"> Próxima Questão </button><br><br>
          <button type="button" class="btn btn-dark" onclick="mostrarResp()"> Mostrar resposta </button> <br> <br>
          <button type="button" class="btn btn-info"  onclick="empate()"> Empate! +1 Ponto! </button>
          <button type="button" class="btn btn-danger" onclick="finalizar()"> FINALIZAR! </button>
          
        </div>
        <div class="col-sm transparent-bg" align="center">
          <h4 class="centralizar">Gerenciar time B</h4>
          <button type="button" class="btn btn-success" onclick="vitoria('2')"> Vitória! +3 Pontos! </button> <br> <br>
          <button type="button" class="btn btn-dark" onclick="adicionarJogador('2')"> Adicionar Participante </button> <br> <br>
          <button type="button" class="btn btn-dark margin" onclick="removerJogador('2')"> Remover Participante </button>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    var perguntasArray = <?php echo json_encode($dados); ?>;
    var contagem = 0;
    var aluno1, aluno2, aluno3, aluno4 = false;
    var alunosArray = <?php echo json_encode($alunos); ?>;
    var botaoClicado = false;
    var textoCrono = document.getElementById("cronometro");
    var x;

    var arrayFinal = [];

    var i = 0;

    while(i <= alunosArray.length-1){
      var obj = {ra: alunosArray[i].ra, nomeUser: alunosArray[i].nome, pontos: 0};
      arrayFinal.push(obj);
      i++;
    }
    
    function shuffle(array) {
      array.sort(() => Math.random() - 0.5);
    }


    function nextQuestion(){

      stopTimer(x);
      timeStart();
      limparCampo();

      var txtQuestion = document.getElementById('questId');
      txtQuestion.style.background = "none";
      var alternativa1 = document.getElementById('alt1');
      var alternativa2 = document.getElementById('alt2');
      var alternativa3 = document.getElementById('alt3');
      var alternativa4 = document.getElementById('alt4');
      var alternativa5 = document.getElementById('alt5');

      if(contagem >= perguntasArray.length){
        contagem = 0;
      }

      var alternativasArray = [perguntasArray[contagem].alterCorreta, perguntasArray[contagem].alter2, perguntasArray[contagem].alter3,
      perguntasArray[contagem].alter4, perguntasArray[contagem].alter5];

      shuffle(alternativasArray);

      txtQuestion.innerHTML = perguntasArray[contagem].pergunta;
      alternativa1.innerHTML = alternativasArray[0];
      alternativa2.innerHTML = alternativasArray[1];
      alternativa3.innerHTML = alternativasArray[2];
      alternativa4.innerHTML = alternativasArray[3];
      alternativa5.innerHTML = alternativasArray[4];

      contagem++;

    }

    function mostrarResp (){
      var i = 1;
      while(i <= 5){
        if(document.getElementById('alt' + i).innerHTML == perguntasArray[contagem - 1].alterCorreta){
          document.getElementById('alt' + i).style.background = "rgb(247, 51, 72)";

        }
        i++;
      }
    }

    function limparCampo(){
      var i = 1;
      while(i <= 5){
        document.getElementById('alt' + i).style.background = "none";
        i++;
      }
    }

    function adicionarJogador(time){

      var numeroAleatorio =  getRandomIntInclusive(0, alunosArray.length-1);

      if(time == 1){
        if(!aluno1){
          document.getElementById("aluno1").innerHTML = alunosArray[numeroAleatorio].nome;
          document.getElementById("aluno1RA").innerHTML = alunosArray[numeroAleatorio].ra;
          document.getElementById("aluno1_img").src = retornarImagem(); 
          aluno1 = true;
        } else if (!aluno2) {
          document.getElementById("aluno2").innerHTML = alunosArray[numeroAleatorio].nome;
          document.getElementById("aluno2RA").innerHTML = alunosArray[numeroAleatorio].ra;
          document.getElementById("aluno2_img").src = retornarImagem(); 
          aluno2 = true;
        } else {
          alert("Apenas 2 jogadores por time!");
        }
      } else {
        if(!aluno3){
          document.getElementById("aluno3").innerHTML = alunosArray[numeroAleatorio].nome;
          document.getElementById("aluno3RA").innerHTML = alunosArray[numeroAleatorio].ra;
          document.getElementById("aluno3_img").src = retornarImagem(); 
          aluno3 = true;
        } else if (!aluno4) {
          document.getElementById("aluno4").innerHTML = alunosArray[numeroAleatorio].nome;
          document.getElementById("aluno4RA").innerHTML = alunosArray[numeroAleatorio].ra;
          document.getElementById("aluno4_img").src = retornarImagem(); 
          aluno4 = true;
        } else {
          alert("Apenas 2 jogadores por time!");
        }


      } 
    }  

    function removerJogador(time){
      var numeroAleatorio =  getRandomIntInclusive(0, 1);

      if(time == 1){
        if(numeroAleatorio == 0 || !aluno2){
          document.getElementById("aluno1").innerHTML = "Aluno 1";
          document.getElementById("aluno1RA").innerHTML = "";
          document.getElementById("aluno1_img").src = "imagens/user.png"; 
          aluno1 = false;
        } else if (numeroAleatorio == 1 || !aluno1){
          document.getElementById("aluno2").innerHTML = "Aluno 2";
          document.getElementById("aluno2RA").innerHTML = "";
          document.getElementById("aluno2_img").src = "imagens/user.png"; 
          aluno2 = false;
        }
      } else {
        if(numeroAleatorio == 0 || !aluno4){
          document.getElementById("aluno3").innerHTML = "Aluno 3";
          document.getElementById("aluno3RA").innerHTML = "";
          document.getElementById("aluno3_img").src = "imagens/user.png"; 
          aluno3 = false;
        } else if (numeroAleatorio == 1 || !aluno3) {
          document.getElementById("aluno4").innerHTML = "Aluno 4";
          document.getElementById("aluno4RA").innerHTML = "";
          document.getElementById("aluno4_img").src = "imagens/user.png"; 
          aluno4 = false;
        }
      }


    }   

    function getRandomIntInclusive(min, max) {
      min = Math.ceil(min);
      max = Math.floor(max);
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function vitoria(time){
      var i = 0;

      if(time == 1){
        while(i <= arrayFinal.length-1){
          if(arrayFinal[i].ra == document.getElementById("aluno1RA").innerHTML || arrayFinal[i].ra == document.getElementById("aluno2RA").innerHTML){

            arrayFinal[i].pontos += 3;
          }
          i++;
        }
        alert("+3 PONTOS PARA O TIME A!");
      } else if (time == 2){
        while(i <= arrayFinal.length-1){
          if(arrayFinal[i].ra == document.getElementById("aluno3RA").innerHTML || arrayFinal[i].ra == document.getElementById("aluno4RA").innerHTML){

            arrayFinal[i].pontos += 3;
          }
          i++;
        }
        alert("+3 PONTOS PARA O TIME B!");
      }
    } 

    function empate(){
      var i = 0;
      while(i <= arrayFinal.length-1){
        if(arrayFinal[i].ra == document.getElementById("aluno1RA").innerHTML || arrayFinal[i].ra == document.getElementById("aluno2RA").innerHTML
          || arrayFinal[i].ra == document.getElementById("aluno3RA").innerHTML || arrayFinal[i].ra == document.getElementById("aluno4RA").innerHTML){

          arrayFinal[i].pontos += 1;
      }
      i++;
    }
    alert("+1 PONTO PARA TODOS!");
  }

  function ordenar(a, b){
    if ( a.pontos < b.pontos ){
      return 1;
    }
    if ( a.pontos > b.pontos ){
      return -1;
    }
    return 0;

  }

  function finalizar(){
    arrayFinal.sort(ordenar);

    sessionStorage.setItem('arrayPontos', JSON.stringify(arrayFinal));

    window.open("ranking_final.php");
  } 

  function timeStart(){

    var meses = new Array('Jan','Fev','Mar','Apr', 'May', 'Jun', 'Jul', 'Aug','Sep','Oct', 'Nov', 'Dec');
    data = new Date();

    y = data.getFullYear();

    m = meses[data.getMonth()];

    d = data.getDate();

    h = data.getHours();

    mn = data.getMinutes()+1;

    s = data.getSeconds()+1;

    
    sDataini = (m + " " + d + ", " + y + " " + h + ":" + mn + ":" + s);

    var dataIni = new Date(sDataini).getTime();

    x = setInterval(function() {

     var agora = new Date().getTime();

     var diferenca = dataIni - agora;    

     var hora = Math.floor((diferenca % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

     var minuto = Math.floor((diferenca % (1000 * 60 * 60)) / (1000 * 60));

     var segundo = Math.floor((diferenca % (1000 * 60)) / 1000);

     

     textoCrono.innerHTML = segundo;

     if(diferenca < 0){
      stopTimer(x);
      textoCrono.innerHTML = "Tempo Esgotado!";
     }
     

   }, 1000);   
  }

  function stopTimer(x){
    clearInterval(x);

    
  }

  

</script>



<script type="text/javascript" src="js/imgArray.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>