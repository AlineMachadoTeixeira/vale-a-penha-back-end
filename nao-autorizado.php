<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Não autorizado / Vale a Penha</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/menu.css">

    <style>
        body {
            background-image: url(assets/images/fundo-nao-autorizado.svg);
            background-size: cover;
            width: 100vw;
            height: 100vh;
            background-position: center;

        }

        .nao_autorizado__principal {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .autorizado_img {
            width: 35%;
        }

        #conteiner__inicio {
            text-align: center;
        }

        .autorizado_hr {
            width: 50%;
            margin: 20px auto;
        }

        .nao_autorizado {
            font-size: 24px;
        }

        .nao_autorizado span {
            font-weight: bold;
        }

        .nao_autorizado span {
            color: red;
        }       

        .autorizado_voltar {
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            background-color: #c40008;
            text-decoration: none;
            border-radius: 5px;
            width: 50%;
        }

        .autorizado_voltar:hover {
            color: #000000;
            background-color: #FFF6C3;
            font-weight: bold;
        }

        .autorizado_voltar:focus,
        .autorizado_voltar:active {
            color: #ffffff;
            background-color: #c40008;
        }


        @media screen and (max-width: 800px) {
            .nao_autorizado__principal {
                flex-direction: column-reverse;
            }
            .autorizado_img {
                width: 70%;
            }
        }

        @media screen and (max-width: 400px) {
            .autorizado_img {
                width: 80%;
            }
            .autorizado_voltar {
                width: 60%;                
            }
        }
    </style>
</head>

<body>






    <main>
        <div class="nao_autorizado__principal">


            <div id="conteiner__inicio">

                <hr class="autorizado_hr">
                <p class="nao_autorizado">Desculpe , mas você <span>não tem permissão </span> para acessar este recurso.</p>
                <hr class="autorizado_hr">

                <p>
                    <a href="index.php" class="autorizado_voltar">Voltar para a página inicial</a>
                </p>

            </div>

            <img class="autorizado_img" src="assets/images/stop.svg" alt="stop">

        </div>

    </main>








</body>

</html>