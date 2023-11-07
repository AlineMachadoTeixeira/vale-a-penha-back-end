<?php
/* Output  Buffer (gerenciamento de memória de saída) */
ob_start();
$pagina = basename($_SERVER['PHP_SELF']);

use ValeaPenha\ControleDeAcesso;
require_once "vendor/autoload.php";



$sessao = new ControleDeAcesso;

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/menu.css">

    <?php

    switch ($pagina) {
        case "index.php":
            $tituloPagina = "Início";
    ?>
            <link rel="stylesheet" href="assets/css/index.css">
        <?php
            break;

        case "gastronomia.php":
            $tituloPagina = "Gastronomia";
        ?>
            <link rel="stylesheet" href="assets/css/comercio-local.css">
            <style>
                .header {
                    background-image: url(assets/images/banner-gastronomia.png);
                    background-size: cover;
                    background-position: center;
                }
            </style>
        <?php
            break;

        case "lazer.php":
            $tituloPagina = "Lazer";
        ?>
            <link rel="stylesheet" href="assets/css/container.css">
            
            <style>
                .header {
                    background-image: url(assets/images/banner-lazer.png);
                    background-size: cover;
                    background-position: center;
                }
            </style>
        <?php
            break;
        case "comercio-local.php":
            $tituloPagina = "Comércio Local";
        ?>
            <link rel="stylesheet" href="assets/css/comercio-local.css">
            <style>
                .header {
                    background-image: url(assets/images/banner-comercio-local.png);
                    background-size: cover;
                    background-position: center;
                }
            </style>
        <?php
            break;
        case "cultura.php":
            $tituloPagina = "Cultura";
        ?>
            <link rel="stylesheet" href="assets/css/container.css">
            <style>
                .header {
                    background-image: url(assets/images/banner-cultural.png);
                    background-size: cover;
                    background-position: center;
                }
            </style>
        <?php
            break;
        case "historia.php":
            $tituloPagina = "História";
        ?>
            <link rel="stylesheet" href="assets/css/container.css">
            <style>
                .header {
                    background-image: url(assets/images/banner-historia.png);
                    background-size: cover;
                    background-position: center;
                }
            </style>
        <?php
            break;
        case "educacao.php":
            $tituloPagina = "Educação";
        ?>
            <link rel="stylesheet" href="assets/css/container.css">
            <style>
                .header {
                    background-image: url(assets/images/banner-educacao.png);
                    background-size: cover;
                    background-position: center;
                }
            </style>
        <?php
            break;

        case "voce-em-foco.php":
            $tituloPagina = "Você em Foco";
        ?>
            <link rel="stylesheet" href="assets/css/form.css">
            <style>
                .header {
                    background-image: url(assets/images/banner-vc-em-foco.png);
                    background-size: cover;
                    background-position: center;
                }
            </style>
        <?php

        case "cadastro.php":
            $tituloPagina = "Cadastro";
        ?>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            <link rel="stylesheet" href="assets/css/cadastro.css">
        <?php
            break;

        case "resultados.php":
            $tituloPagina = "Resultados";
        ?>
            <link rel="stylesheet" href="assets/css/comercio-local.css">
            <style>
                .header {
                    background-image: url(assets/images/banner-pesquisa.png);
                    background-size: cover;
                    background-position: center;
                }
            </style>

    <?php
            break;
        default:
            //header("404.php");
            //header("Location: 404.php");

            break;
    }

    ?>
    <title>Vale a Penha | <?= $tituloPagina ?></title>
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
                <form action="resultados.php" method="GET">
                    <div class="pesquisa__lupa">
                        <input class="pesquisa__input" type="search" id="busca" name="busca" placeholder="Pesquisa">
                        <button class="pesquisa__link" type="submit">
                            <img class="pesquisa__lupa__img" src="assets/images/lupa-branco.svg" alt="Lupa">
                        </button>
                    </div>
                </form>
            </nav>

            <nav>
                <?php if(isset($_SESSION["id"])){?>

                    <a class="icone__menu__login" href="comerciante/comerciante.php"> Minha conta</a>

                    <!-- <a class="icone__menu__login" href="comerciante/comerciante.php"><img class="icone__menu" src="assets/images/icone-login-vermelho.svg" alt="Ícone login"></a> -->
                    
                    <?php }else{    ?>
                        <div class="botao_menu_criar">
                            <div class="botao__enviar__menu">
                                <a class="menu_criar" href="cadastro.php">Criar conta</a>
                            </div>
        
                            <div class="botao__enviar__menu">
                                <a href="login.php"><button type="submit" id="submitlogin" name="casdastrarComercio">Entrar</button></a>
                            </div>
        
                        </div>
                
                <?php

                }
                ?>
            </nav>
        </div>

        <nav>
            <h3><a href="" id="botao-menu"> Menu &equiv;</a></h3>
            <ul class="menu__camada__dois">
                <li><a href="index.php">Início</a></li>
                <li><a href="gastronomia.php">Gastronomia</a></li>
                <li><a href="lazer.php">Lazer</a></li>
                <li><a href="comercio-local.php">Comércio local</a></li>
                <li><a href="cultura.php">Cultura</a></li>
                <li><a href="historia.php">História</a></li>
                <li><a href="educacao.php">Educação</a></li>
                <li><a href="voce-em-foco.php">Você em foco</a></li>
                <li class="login__ul"><a href="login.php">Login</a></li>
                <li class="login__ul"><a href="cadastro.php">Criar conta</a></li>
            </ul>
        </nav>
    </div>

    <!-- fim menu -->

    <body>

        <?php if ($pagina !== "cadastro.php") { ?>
            <header>
                <div class="header">
                    <img src="assets/images/logo-Vale-a-Penha.svg" alt="logo Vale A Penha">
                    <h1>Conhecer o nosso bairro!</h1>

                    <h2><?= $tituloPagina ?></h2>

                </div>
            </header>
        <?php } ?>

        <main>