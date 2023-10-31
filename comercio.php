<?php

require_once "vendor/autoload.php";

use ValeaPenha\Comerciante;

$comercio = new Comerciante;

$comercio->setStatus("ativo");
$dadosComercios = $comercio->listarDestaque();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comércio Local / Vale a Penha</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <!-- <link rel="stylesheet" href="assets/css/comercio-local.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/cards.css"> -->
    <style>
        .header {
            background-image: url(assets/images/banner-comercio-local.png);
            background-size: cover;
            background-position: center;
        }





        .cards {
            width: 100%;
            display: flex;
            display: -webkit-flex;
            justify-content: center;
            -webkit-justify-content: center;
            max-width: 820px;
        }



        .card--1 .card__img,
        .card--1 .card__img--hover {
            /* background-image: url('https://images.pexels.com/photos/45202/brownie-dessert-cake-sweet-45202.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'); */
            background-image: url(imagens/flores.jpg);
        }





        /* .card__clock-info {
    float: right;
} */

        .card__img {
            visibility: hidden;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 235px;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;

        }

        /* .card__info-hover {
    position: absolute;
    padding: 16px;
  width: 100%;
  opacity: 0;
  top: 0;
} */

        .card__img--hover {
            transition: 0.2s all ease-out;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            position: absolute;
            height: 235px;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            top: 0;

        }

        /* tamanho do card */
        .card {
            margin-right: 25px;
            transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
            background-color: #fff;
            width: 33.3%;
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0px 13px 10px -7px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            box-shadow: 0px 30px 18px -8px rgba(0, 0, 0, 0.1);
            transform: scale(1.10, 1.10);
        }


        /* Card descrição */
        .card__info {
            z-index: 2;
            background-color: #fff;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
            padding: 16px 24px 24px 24px;
        }

        /* card titulo */
        .card__category {
            font-family: 'Raleway', sans-serif;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 2px;
            font-weight: 500;
            color: #868686;
        }

        /* titulo vermelho */
        .card__title {
            margin-top: 5px;
            margin-bottom: 10px;
            font-family: 'Roboto Slab', serif;
        }

        /* link do lado do by */
        .card__by {
            font-size: 12px;
            font-family: 'Raleway', sans-serif;
            font-weight: 500;
        }

        /* link do lado do by mesma coisa */
        .card__author {
            font-weight: 600;
            text-decoration: none;
            color: #AD7D52;
        }

        .card:hover .card__img--hover {
            height: 100%;
            opacity: 0.3;
        }

        /* .card:hover .card__info {
    background-color: transparent;
    position: relative;
} */

        /* .card:hover .card__info-hover {
    opacity: 1;
} */
    </style>
</head>

<body>

    <!-- Começo do Integrando a uma Página com VLibras  -->

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js">
    </script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <!-- Fim do Integrando a uma Página com VLibras  -->

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
            <h1>Conhecer o nosso bairro!</h1>
            <h2>Comércio Local</h2>
        </div>
    </header>
    <main>
        <p class="descricao">Na Penha temos muitos comércios locais que vale a pena conhecer.</p>
        <p class="descricao__dois">Quer destacar o seu negócio no nosso Bairro? Alcance moradores e visitantes interessados em seus produtos e serviços. Clique <a href="cadastro.php">Aqui</a> e faça seu cadastro .</p>
        <section class="container">


            <?php foreach ($dadosComercios as $itemComercio) { ?>
                <article class="cards">
                    <img class="cards-img redimensionar" src="imagens/<?= $itemComercio["imagem"] ?>" alt="Comida da Padaria Requinte">

                    <h3><?= $itemComercio["nome_comercio"] ?></h3>
                    <p><?= $itemComercio["descricao"] ?> </p>

                    <a target="_blank" href="<?= $itemComercio["link_instagram"] ?>"><img src="assets/images/instagram.svg" alt="logo instagram"></a>
                </article>
            <?php } ?>

        </section>



        <section class="cards">
            <?php foreach ($dadosComercios as $itemComercio) { ?>
                <article class="card card--1">

                <!-- <img class="cards-img redimensionar" src="imagens/<= $itemComercio["imagem"] ?>" alt="Comida da Padaria Requinte"> -->
 

                    <div class="card__img"></div>
                    <a href="#" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        
                        <h3 class="card__title"><?= $itemComercio["nome_comercio"] ?></h3>
                       
                        <p><span class="card__category"> <?= $itemComercio["descricao"] ?></span></p>
                        <p><span class="card__by"> im <a href="<?= $itemComercio["link_instagram"] ?>" class="card__author" title="author"></a></span></p>
                    </div>
                </article>
            <?php } ?>
        </section>
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