<?php
use ValeaPenha\Usuario;
use ValeaPenha\ControleDeAcesso;
require_once "../vendor/autoload.php";
$usuario =new Usuario;

$sessao = new ControleDeAcesso;
$sessao->verificaAcesso();
$sessao->verificarAcessoAdmin();

$usuario->setTipo($_SESSION['tipo']);

$usuario->setId($_GET['id']);
$dados = $usuario->listarUmUsuario();

/* Script para atualização */
if(isset($_POST['atualizar'])){	
	$usuario->setNome($_POST['nome']);

	$usuario->setSobrenome($_POST['sobrenome']);

	$usuario->setCpf($_POST['cpf']);

    $usuario->setTelefone($_POST['telefone']);

    $usuario->setEmail($_POST['email']);

    $usuario->setData($usuario->formatarDataParaBanco($_POST["data"])); 

    $usuario->setTipo($_POST['tipo']);
	
	//SENHA
	if(empty($_POST['senha'])){
		
		$usuario->setSenha($dados['senha']);
	}else{
		
		$usuario->setSenha(
			$usuario->verificarSenha($_POST['senha'], $dados['senha'])
		);
	}

	$usuario->atualizarUsuarios();
	header("location:adm.php");	
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vale a penha / Atualizar ADM</title>


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
            font-size: 18px;
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
            background-color: #ffffff;
            overflow-y: scroll;
            font-size: 50px;
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
            font-size: 18px;
            font-weight: 600;
            color: #000000c0;
            margin-bottom: 0px;
        }

        .botao__enviar {
            display: flex;
            justify-content: center;
        }

        .botao__enviar button {
            width: 60%;
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

        .comerciante__input select {
            margin-top: 0px;
            margin-bottom: 20px;
            padding: 8px 16px;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.412);
            font-size: 16px;
            width: 100%;
        }

        .comerciante__input select:hover {
            outline: 1px solid #c40008;
        }

        .comerciante__input select:focus-visible {
            outline: none
        }

        .comerciante__input label {
            font-size: 18px;
            font-weight: 600;
            color: #000000c0;
            margin-bottom: 0px;
        }

        .comerciante__input option {
            color: #000000c0;
            font-size: 16px;
        }
    </style>

</head>

<body>
    <main class="comerciante">

        <!-- ======= Atualizar Usuario ======= -->
        <section id="minhaconta" class="minhaconta">
            <div class="container">

                <div class="section-title">
                    <h2>Atualizar dados do Usuário</h2>

                </div>

                <form class="comerciante__formulario  " action="" method="post" id="form">

                    <div class="comerciante__sobrenome">
                        <!-- Nome -->
                        <div class="comerciante__input">
                            <label for="nome">Nome:</label>
                            <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome"  value="<?=$dados['nome']?>" required>
                        </div> 

                        <!-- Sobrenome -->
                        <div class="comerciante__input">
                            <label for="sobrenome">Sobrenome:</label>
                            <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome"  value="<?=$dados['sobrenome']?>" required>
                        </div>
                    </div>

                    <div class="comerciante__campos">
                        <div class="comerciante__sobrenome">
                            <!-- CPF -->
                            <div class="comerciante__input">
                                <label for="cpf">CPF</label>
                                <input id="cpf" type="text" name="cpf" placeholder="Digite seu CPF" required maxlength="14"  value="<?=$dados['cpf']?>" >
                            </div>

                            <!-- Telefone -->
                            <div class="comerciante__input">
                                <label for="telefone">Telefone:</label>
                                <input id="telefone" type="text" name="telefone" placeholder="(xx) xxxxx-xxxx" required maxlength="14"  value="<?=$dados['telefone']?>" >
                            </div>
                        </div>

                        <!-- E-mail -->
                        <div class="comerciante__input">
                            <label for="email">E-mail:</label>
                            <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required  value="<?=$dados['email']?>" >
                        </div>

                        <!-- Senha -->
                        <div class="comerciante__input">
                            <label for="senha">Senha:</label>
                            <input id="senha" type="password" name="senha" autocomplete="current-password" value=""placeholder="Preencha apenas se for alterar">
                        </div>

                        <!-- Data de Nascimento -->
                        <div class="comerciante__input">
                            <label for="data">Data de Nascimento:</label>
                            <input id="data" type="date" name="data" placeholder="Digite sua Data de Nascimento" required value="<?=$dados['data']?>">
                        </div>



                        <div class="comerciante__input" name="tipo" id="tipo" required>
                            <label for="tipo">Tipo:</label>
                            <select class="comerciante__option" name="tipo" id="tipo" required>
                                <option value=""></option>

                                <option <?php if($dados["tipo"] === "admin" ) echo " selected ";?>  value="admin">Administrador</option>

                                <option <?php if($dados["tipo"] === "comerciante" ) echo " selected ";?>  value="comerciante">Comerciante</option>
                                
                            </select>

                            
                        </div>

                        <div class="botao__enviar">
                            <button type="submit" id="submit" name="atualizar">Alterar Cadastro</button>
                        </div>

                </form>


            </div>
        </section>
    </main>

    <script src="../assets/js/comerciante.js"></script>




</body>

</html>