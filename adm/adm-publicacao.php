<?php
use ValeaPenha\Comerciante;
require_once "../vendor/autoload.php";

$comercio = new Comerciante;


$comercio->setId($_GET['id']);
$dados = $comercio->listarUmComercio();




?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vale a penha / Publicação ADM</title>


    <!-- Favicons -->


    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    <!--  Estilo externo -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Estilo para foto  -->
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- Estilo para bolinha menu fechado -->
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> <!-- Icone do header  -->
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- CSS estilo interno -->
    <!-- <link rel="stylesheet" href="../assets/css/comerciante.css"> -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/images/logo-marmotazona.png" type="image/x-icon">


    <style>
        body {
            background-image: url(../assets/images/fundo.svg);
            background-size: cover;
            width: 100vw;
            height: 100vh;
            background-position: center;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        label,
        a,
        table,
        td,
        th,
        tr {
            font-family: 'Montserrat', sans-serif;
        }

        section {
            padding: 40px 10px;
            overflow: hidden;
        }

        /* Fundo texto */
        .section-title {
            padding-bottom: 30px;
        }

        .section-title h2 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
            padding-bottom: 20px;
            position: relative;
            color: #000000c0;
        }

        .section-title h2::after {
            content: '';
            display: block;
            width: 10%;
            height: 8px;
            background-color: #c40008;
            margin: 0 auto;
            position: absolute;
            border-radius: 10px;
        }

        .comerciante__paragrafo {
            font-size: 16px;
            font-weight: 600;
            color: #000000c0;
            text-align: center;
            padding-bottom: 20px;
            padding-left: 10px;
            padding-right: 10px;
            margin: 0;
        }

        /* Dicas do Cadastrar Comércio */
        .ul__dicas {
            font-size: 15px;
            color: #000000c0;
            padding-bottom: 10px;
            margin-top: 0;
            padding-top: 0;
        }

        .paragrafo__dicas {
            font-size: 16px;
            font-weight: 600;
            color: #c40008;
            margin-bottom: 0;
            margin-top: 20px;
        }

        /* Formulario*/
        .container {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.212);
            border-radius: 20px;
            padding: 20px;
            background-color: #fff;
        }

        .comerciante__formulario {
            padding: 0 20px;
        }

        .comerciante__input {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 8px;
            width: 100%;
            position: relative;
        }

        .comerciante__input textarea {
            margin-top: 0px;
            margin-bottom: 20px;
            padding: 8px 16px;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.212);
            font-size: 16px;
            width: 100%;
        }

        .comerciante__input input {
            margin-top: 0px;
            margin-bottom: 20px;
            padding: 8px 16px;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.412);
            font-size: 16px;
            width: 100%;
        }

        .comerciante__input input:hover {
            outline: 1px solid #c40008;
        }

        .comerciante__input textarea:hover {
            outline: 1px solid #c40008;
        }

        .comerciante__input input:focus-visible {
            outline: none
        }

        .comerciante__input textarea:focus-visible {
            outline: none
        }

        .comerciante__input label {
            font-size: 16px;
            font-weight: 600;
            color: #000000c0;
            margin-bottom: 0px;
        }

        .botao__enviar {
            display: flex;
            justify-content: center;
        }

        .botao__enviar button {
            width: 100%;
            border: none;
            background-color: #c40008;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 700;
            color: #fff;
        }

        

        .botao__enviar button:hover {
            background-color: rgba(300, 200, 120, 0.6);
            color: #000000c0;
        }

        .botao__enviar__adm{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            width: 100%;
        }
        

        

        /* CSS Para a foto do cadastrar comercio  */
        .file-wrapper {
            width: 200px;
            height: 200px;
            border: 10px solid #c40008;
            position: relative;
            margin: auto;
        }

        .file-wrapper:after {
            content: '+';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width: max-content;
            height: max-content;
            display: block;
            max-height: 85px;
            font-size: 70px;
            font-weight: bolder;
            color: #c40008;
        }

        .file-wrapper:before {
            content: 'UPLOAD';
            display: block;
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            bottom: 35px;
            width: max-content;
            height: max-content;
            font-size: 0.75em;
            color: gray;
        }

        .file-wrapper:hover:after {
            font-size: 73px;
        }

        .file-wrapper .close-btn {
            display: none;
        }

        input[type="file"] {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            z-index: 99999;
            cursor: pointer;
        }

        .file-set {
            background-size: cover;
            background-repeat: no-repeat;
            color: transparent;
            padding: 10px;
            border-width: 0px;
        }

        .file-set:hover {
            transition: all 0.5s ease-out;
            filter: brightness(110%);
        }

        .file-set:before {
            color: transparent;
        }

        .file-set:after {
            color: transparent;
        }

        .file-set .close-btn {
            position: absolute;
            width: 35px;
            height: 35px;
            display: block;
            background: #000;
            color: #fff;
            top: 0;
            right: 0;
            font-size: 25px;
            text-align: center;
            line-height: 1.5;
            cursor: pointer;
            opacity: 0.8;
        }

        .file-set>input {
            pointer-events: none;
        }
    </style>

</head>

<body>




    <main class="comerciante">




        <!-- ======= Cadastrar Comércio ======= -->
        <section id="cadastrarcomercio" class="cadastrarcomercio">
            <div class="container">

                <div class="section-title">
                    <h2>Cadastrar Comércio</h2>

                </div>

                <form class="comerciante__formulario" action="" method="post" id="form-inserir" name="form-inserir" enctype="multipart/form-data">


                    <!-- FOTO comercio-->
                    <div class="file-wrapper">
                        <input type="file" class="comerciante__foto__image" name="imagem" id="imagem" accept="image/*,image/png, image/jpeg, image/gif, image/svg+xml " />
                        <div class="close-btn">x</div>
                    </div>




                    <!-- Nome comercio  -->
                    <div class="comerciante__input">
                        <label class="titulo" for="nome_comercio">Nome Comércio:
                            <textarea rows="1" cols="33" name="nome_comercio" id="nome_comercio" required maxlength="40"><?=$dados[$nome_comercio]?></textarea>
                        </label>
                    </div>

                    <!-- Descrição  -->
                    <div class="comerciante__input">
                        <label for="descricao">Descrição:
                            <textarea rows="5" cols="33" name="descricao" id="descricao" required maxlength="80"></textarea>
                        </label>
                    </div>

                    <!-- Instagram Link -->
                    <div class="comerciante__input">
                        <label for="link_instagram">Instagram:</label>
                        <input type="url" name="link_instagram" id="link_instagram" placeholder="Link do instagram" required>

                    </div>

                    <div class="botao__enviar__adm">
                        <div class="botao__enviar">
                            <button type="submit" id="submit" name="publicar">Publicar</button>                        

                        </div>

                        <div class="botao__enviar">                     

                            <button type="submit" id="submit" name="voltar_adm">Voltar</button>

                        </div>

                    </div>
                    

                </form>

                

            </div>
        </section><!-- Fim Cadastrar Comércio -->

    </main>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../assets/js/comerciante.js"></script>
    <script src="../assets/js/mascara-cpf-tel.js"></script>


</body>

</html>