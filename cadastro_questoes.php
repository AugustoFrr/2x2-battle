<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2x2 | Peguntas</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/cad_desafios.css">

    <link rel="icon" href="imagens/icon.png">
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Cadastro de Desafios</h4>

                    <form class="cad-desafio" action="cadastro_questoes_resposta.php" method="post">
                        <label>Desafio:</label>
                        <textarea class="form-control" name="txDesafio" 
                            placeholder="Digite aqui a sua pergunta." required></textarea>
                        <label>Solução:</label>
                        <input type="text" class="form-control" name="txResposta"
                            placeholder="Digite a resposta correta." required>
                        <label>Perdições:</label>
                        <input type="text" class="form-control" name="txOutraResp1"
                            placeholder="1ª alternativa incorreta." required>
                        <input type="text" class="form-control" name="txOutraResp2"
                            placeholder="2ª alternativa incorreta." required>
                        <input type="text" class="form-control" name="txOutraResp3"
                            placeholder="3ª alternativa incorreta." required>
                        <input type="text" class="form-control" name="txOutraResp4"
                            placeholder="4ª alternativa incorreta." required>
                        <div class="group-btn" align="center">
                            
                            <input class="btn btn-custom" type="submit" id="botao" value="SALVAR QUESTÃO">                         
                            <a href="dashboard.php" class="btn btn-custom">FINALIZAR</a>                         
                        </div>
                    </form>
                </div>
                <div class="col" align="center">
                    <img src="imagens/questions.png" class="logo-lateral">
                </div>
            </div>
        </div>
    </section>


</body>

</html>