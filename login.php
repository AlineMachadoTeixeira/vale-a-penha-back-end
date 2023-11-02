<?php

use ValeaPenha\Usuario;
use ValeaPenha\ControleDeAcesso;
require_once "vendor/autoload.php";


/* Programação das mensagens de feedback (campos obrigatórios, dados incorretos, saiu do sistema etc ) */
if(isset($_GET["campos_obrigatorios"])){
	$feedback = "Preenchar e-mail e senha!";
}elseif(isset($_GET['dados_incorretos'])){
    $feedback = "E-mail do usuário ou senha incorreto. Tente novamente!";
}elseif (isset($_GET['logout'])){
	$feedback = "Você saiu do sistema!";
}elseif(isset($_GET['acesso_proibido'])){
	$feedback = "Você deve logar primeiro!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">

</head>

<body>
    <div class="login__container">
        <main>
            <section class="login__caixa">
            <a href="index.php"><img class="login__ama" src="assets/images/logo-amarelo-branco.svg" alt=""></a>


                <div class="login_for">                    

                    <p class="login__img"><a href="index.php"><img src="assets/images/icone-login-vermelho.svg" alt="Logo Vale a Penha"> </a> </p>

                    <?php if(isset($feedback)){ ?>
                     <p class="alert alert-warning text-center"><?=$feedback?></p>
                    <?php }?>

                    <form  action="" method="post">

                        <!-- Aqui vai a imagem -->

                        <!-- E-mail -->
                        <div class="comerciante__input">
                            <label for="email">E-mail:</label>
                            <input id="email" type="email" autocomplete="username" name="email" placeholder="Digite seu e-mail">

                            <!-- Mensagem de erro que vai aparecer no JS -->
                            <i class="img__sucesso"><img src="assets/images/icone-sucesso.svg" alt="icone sucesso"></i>
                            <i class="img__erro"><img src="assets/images/icone-erro.svg" alt="icone erro"></i>
                            <small>Erro Mensagem</small>
                        </div>

                        <!-- Senha -->
                        <div class="comerciante__input">
                            <label for="senha">Senha:</label>
                            <input id="senha" type="password" name="senha" autocomplete="current-password" placeholder="Digite sua senha">

                            <!-- Mensagem de erro que vai aparecer no JS -->
                            <i class="img__sucesso"><img src="assets/images/icone-sucesso.svg" alt="icone sucesso"></i>
                            <i class="img__erro"><img src="assets/images/icone-erro.svg" alt="icone erro"></i>
                            <small>Erro Mensagem</small>
                        </div>

                        <div class="botao__login">
                            <button type="submit" id="submit" name="login">Login </button>
                        </div>

                    </form>

                    <?php
                    if(isset($_POST['login'])){
                        //Verificar se os campos foram preenchidos
                        if( empty($_POST['email']) || empty($_POST['senha']) ){
                            header("location:login.php?campos_obrigatorios"); //?campos_obrigatorios
                        }else{
                            //Capturar o e-mail
                            $usuario = new Usuario;
                            $usuario->setEmail($_POST['email']);
                    
                            //Buscar o usuário/e-mail no Banco de Dados 
                            $dados = $usuario->buscar(); // $dados = $usuario foi o nome que usamos na usuario.php		
                    
                            //Se não existir o usuário/e-mail, continuará em login.php
                            if(!$dados) { //ou pode fazer assim if($dados === false)
                                header("location:login.php?dados_incorretos"); //?dados_incorretos
                            }else{
                                // Se existir:
                                // - Verificar a senha
                                if(password_verify($_POST['senha'], $dados['senha'])){
                                    // - Está correta? Iniciar o processo de login
                                    $sessao = new ControleDeAcesso;
                                    $sessao->login($dados['id'], $dados['nome'], $dados['tipo']);
                                    if($dados['tipo'] === 'admin'){
                                        header("location:adm/adm.php");
                                    }else{
                                        header("location:comerciante/comerciante.php");
                                    }

                                }else{
                                    // - Não está? Continuará em login.php
                                    header("location:login.php?dados_incorretos"); // ?dados_incorretos             
                    
                                }		
                                
                            }             
                            
                            
                        }
                    }                 
                    
                    ?>
                    <p class="paragrafo__novasenha"> Ainda não tem uma conta? <a href="cadastro.php">Criar</a></p>

                </div>
            </section>
        </main>
    </div>
</body>

</html