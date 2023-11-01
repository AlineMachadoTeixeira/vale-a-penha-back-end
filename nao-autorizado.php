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
        .header {
            background-image: url(assets/images/banner-nao-autorizado.png);
            background-size: cover;
            background-position: center;
        }


        #conteiner__inicio {
            text-align: center;
            width: 50%;
            margin: auto;
            margin-top: 5%;
        }

        .autorizado_hr {
            border: 0;
            clear: both;
            display: block;
            width: 100%;
            background-color: #c40008;
            height: 1px;
            margin: 1em 0;
        }

        .nao_autorizado {
            font-size: 24px;
            font-weight: bold;
        }

        .nao_autorizado span {
            color: red;
        }

        .autorizado_voltar {
            display: inline-block;
            font-weight: 400;
            color: #c40008;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s;
        }

        .autorizado_voltar {
            color: #ffffff;
            font-size: 16px;
            background-color: #c40008;
            font-weight: bold;
            margin-top: 20px;
            padding: 10px 20px;
            text-decoration: none;
        }

        .autorizado_voltar:hover {
            color: #000000;
            background-color: #FFF6C3;
            font-weight: bold;

        }

        .autorizado_voltar:focus {
            color: #ffffff;
            background-color: #c40008;
        }

        .autorizado_voltar:active {
            color: #ffffff;
            background-color: #c40008;
        }
    </style>
</head>

<body>   

    <!-- começo menu  -->
    <div class="camada">

        <div class="camada__um">
            <nav>
                <a href="index.php"><img class="logo__principal__menu" src="assets/images/logo-Vale-a-Penha.svg" alt="Ícone login">
                </a>
            </nav>
            <nav class="pesquisa__espaco">
                <div class="pesquisa__lupa">
                    <input class="pesquisa__input" type="search" id="pesquisa" name="pesquisa" placeholder="Pesquisa">

                    <a class="pesquisa__link" href="">
                        <img class="pesquisa__lupa__img" src="assets/images/lupa-branco.svg" alt="Lupa">
                    </a>
                </div>
            </nav>

            <nav>
                <a class="icone__menu__login" href="login.php"><img class="icone__menu" src="assets/images/icone-login-vermelho.svg" alt="Ícone login">
                </a>
            </nav>
        </div>

        <nav>
            <h3><a href="" id="botao-menu"> Menu &equiv;</a></h3>
            <ul class="menu__camada__dois">
                <li><a href="index.php">Início</a></li>
                <li><a href="gastronomia.php">Gastronomia</a></li>
                <li><a href="lazer.php">Lazer</a></li>
                <li><a href="comercio-local.php">Comércio Local</a></li>
                <li><a href="cultura.php">Cultura</a></li>
                <li><a href="historia.php">História</a></li>
                <li><a href="educacao.php">Educação</a></li>
                <li><a href="voce-em-foco.php">Você em Foco</a></li>
                <li class="login__ul"><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>
    <!-- fim menu -->

    <header>
        <div class="header">
            <img src="assets/images/logo-Vale-a-Penha.svg" alt="logo Vale A Penha">
            <h1>Conhecer este bairro histórico!</h1>
            <h2>Não Autorizado</h2>
        </div>
    </header>


    <main>




        <div id="conteiner__inicio">


            <hr class="autorizado_hr">
            <p class="nao_autorizado">Desculpe , mas você <span>não tem permissão </span> para acessar este recurso.</p>
            <hr class="autorizado_hr">

            <p>
                <a href="index.php" class="autorizado_voltar">Voltar para a página inicial</a>
            </p>

        </div>

    </main>
    <footer>
        <div class="container-footer">
            <img id="logo-footer" src="assets/images/logo-Vale-a-Penha.svg" alt="logo vale a penha">
            <section class="footer-nav">
                <a href="index.php">Início</a>
                <a href="gastronomia.php">Gastronomia</a>
                <a href="comercio-local.php">Comércio&nbsp;Local</a>
                <a href="lazer.php">Lazer</a>
                <a href="cultura.php">Cultura</a>
                <a href="educação.php">Educação</a>
                <a href="historia.php">História</a>
                <a href="voce-em-foco.php">Você&nbsp;em&nbsp;Foco</a>
            </section>
            <section class="footer-emojis">
                <div class="emojis">
                    <img src="assets/images/mano-do-ceu.svg" alt="emoji mano do ceu">
                    <img src="assets/images/demoro.svg" alt="emoji demoro">
                    <img src="assets/images/pode-cre.svg" alt="emoji pode cre">
                    <img src="assets/images/ta-osso.svg" alt="emoji ta osso">
                    <img src="assets/images/e-nois.svg" alt="emoji é nois">
                    <img src="assets/images/deu-ruim.svg" alt="emoji deu ruim">
                    <img src="assets/images/deu-bom.svg" alt="emoji deu bom">
                    <img src="assets/images/igrejinha.svg" alt="emoji igrejinha">
                </div>
            </section>
        </div>
        <p>Vale a Penha 2023. Alguns direitos reservados &copy;</p>
    </footer>
    <script src="assets/js/menu-novo.js"></script>







</body>

</html>