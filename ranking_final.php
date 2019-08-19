<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2x2 | Ranking</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/cad_desafios.css">

    <link rel="icon" href="imagens/icon.png">
    <script type="text/javascript" src="js/imgArray.js"></script>
</head>

<body>
    <h2 align='center'>Fim do desafio!</h2>
    <div class="container col-md-8">
        <table class="table table-striped" id="tbRanking" align="center">
            <thead id="cabecalho-ranking">
                <tr>
                    <th>Ícone</th>
                    <th>Posição</th>
                    <th>RA</th>
                    <th>Nome</th>
                    <th>Pontuação</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>


    <script type="text/javascript">

        var retornoSession = sessionStorage.getItem('arrayPontos');
        var arrayFinal = JSON.parse(retornoSession);         

        var totalLinhas = 0;

        var colRankig = new Array(
            "iconUser_",
            "posicUser_",
            "raUser_",
            "nomeUser_",
            "pontosUser_"
            );

        var valRankig = new Array(
            user = "",
            posicUser = '1º',
            raUser = 20871279,
            nomeUser = 'GuiAlves63',
            pontosUser = 536
            );

        Element.prototype.tbRanking = function (vColunas, vValores, numlinha) {
            var td, tr = document.createElement("tr");
            tr.className = "linha-ranking";

            for (i = 0; i < (vColunas.length); i++) {

                td = document.createElement("td");

                switch (i) {
                    case 0:
                    td.className = "col-img";
                    break;
                    case 1:
                    td.className = "col-posicao";
                    break;
                    case 2:
                    td.className = "col-ra";
                    break;
                    case 3:
                    td.className = "col-nome";
                    break;

                    case 4:
                    td.className = "col-pontos";
                    break;                        
                    default:
                    td.className = "col-padrao";
                }

                td.setAttribute("id", vColunas[i] + numlinha);
                td.innerHTML = vValores[i];
                tr.appendChild(td);
            }

            this.appendChild(tr);
        }

        while (totalLinhas < arrayFinal.length) {
            
            valRankig[0] = "<img src='"+ retornarImagem()+  "' class='rounded-circle profile'/>";
            valRankig[2] = arrayFinal[totalLinhas].ra;
            valRankig[3] = arrayFinal[totalLinhas].nomeUser;
            valRankig[4] = arrayFinal[totalLinhas].pontos;

            document.getElementById("tbRanking").tbRanking(colRankig, valRankig, totalLinhas);
            totalLinhas++;
            valRankig[1] = totalLinhas+1 + "º";

        }


    </script>

    

    <style>

        .table{
            text-align: center;
            font-weight: bold;
        }

        table tr img{
            width: 40px;
        }

        thead th{
            background-color:#2E2E2E;
            color:chartreuse;
        }
        
        table tr{
            border-bottom: solid 1.5px #ccc;
        }

        table tr:hover {
            background-color: #f73348;
            color: white;
        }

    </style>
</body>

</html>