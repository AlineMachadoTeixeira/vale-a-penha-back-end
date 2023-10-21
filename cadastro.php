<?php
require_once "vendor/autoload.php";
use ValeaPenha\Usuario;

if(isset($_POST['inserir'])){
	$usuario = new Usuario;
    $usuario->setNome($_POST['nome']);
    $usuario->setSobrenome($_POST['sobrenome']);
    $usuario->setCpf($_POST['cpf']);
    $usuario->setTelefone($_POST['telefone']);
    $usuario->setEmail($_POST['email']);
    $usuario->setData($usuario->formatarDataParaBanco($_POST["data"]));    
    //$usuario->setTipo($_POST['tipo']);
    $usuario->setSenha($usuario->codificaSenha($_POST["senha"]));	   

	$usuario->inserirUsuario();
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cadastro.css">

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


    <div class="comerciante__container">
        <main>
            <section class="comerciante__caixa">
                <div class="comerciante__imagem">
                    <!-- Aqui vai a imagem -->
                    <!-- <a href="index.php"><img src="assets/images/logo-vale-a-penha-quadrado.svg" alt="Logo Vale a Penha"> </a> -->
                    <a href="index.php"><img src="assets/images/logo-vale-a-penha-quadrado.svg" alt="Logo Vale a Penha"> </a>

                </div>
                <div class="comerciante_for">
                    <!-- Cadastre-se e Voltar site botão -->
                    <div class="comerciante__titulo">
                        <div class="comerciante__subtitulo">
                            <h1>Cadastre-se</h1>
                        </div>
                        <div class="botao__sair">
                            <button type="submit" name="comerciantes"><a href="index.php">Voltar</a></button>
                        </div>
                    </div>
                    <p class="comerciante__paragrafo">
                        Não fique de fora, divulgue conosco!
                    </p>

                    <form class="comerciante__formulario" action="" method="post" id="form">

                        <div class="comerciante__sobrenome">
                            <!-- Nome required-->
                            <div class="comerciante__input">
                                <label for="nome">Nome:</label>
                                <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome">

                                <!-- Mensagem de erro que vai aparecer no JS -->
                                <i class="img__sucesso"><img src="assets/images/icone-sucesso.svg" alt="icone sucesso"></i>
                                <i class="img__erro"><img src="assets/images/icone-erro.svg" alt="icone erro"></i>
                                <small>Erro Mensagem</small>
                            </div>

                            <!-- Sobrenome -->
                            <div class="comerciante__input ">
                                <label for="sobrenome">Sobrenome:</label>
                                <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome">

                                <!-- Mensagem de erro que vai aparecer no JS -->
                                <i class="img__sucesso"><img src="assets/images/icone-sucesso.svg" alt="icone sucesso"></i>
                                <i class="img__erro"><img src="assets/images/icone-erro.svg" alt="icone erro"></i>
                                <small>Error Mensagem</small>
                            </div>
                        </div>

                        <div class="comerciante__campos">
                            <div class="comerciante__sobrenome">
                                <!-- CPF -->
                                <div class="comerciante__input">
                                    <label for="cpf">CPF</label>
                                    <input id="cpf" type="text" name="cpf" placeholder="Digite seu CPF" maxlength="14">

                                    <!-- Mensagem de erro que vai aparecer no JS -->
                                    <i class="img__sucesso"><img src="assets/images/icone-sucesso.svg" alt="icone sucesso"></i>
                                    <i class="img__erro"><img src="assets/images/icone-erro.svg" alt="icone erro"></i>
                                    <small>Erro Mensagem</small>
                                </div>

                                <!-- Telefone -->
                                <div class="comerciante__input ">
                                    <label for="telefone">Telefone:</label>
                                    <input id="telefone" type="text" name="telefone" placeholder="(xx) xxxxx-xxxx" maxlength="14">

                                    <!-- Mensagem de erro que vai aparecer no JS -->
                                    <i class="img__sucesso"><img src="assets/images/icone-sucesso.svg" alt="icone sucesso"></i>
                                    <i class="img__erro"><img src="assets/images/icone-erro.svg" alt="icone erro"></i>
                                    <small>Erro Mensagem</small>


                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="comerciante__input">
                                <label for="email">E-mail:</label>
                                <input id="email" type="email" autocomplete="username" name="email" placeholder="Digite seu e-mail">

                                <!-- Mensagem de erro que vai aparecer no JS -->
                                <i class="img__sucesso"><img src="assets/images/icone-sucesso.svg" alt="icone sucesso"></i>
                                <i class="img__erro"><img src="assets/images/icone-erro.svg" alt="icone erro"></i>
                                <small>Erro Mensagem</small>
                            </div>

                            <!-- Confirmar E-mail -->
                            <div class="comerciante__input">
                                <label for="confimaremail">Confirmar E-mail:</label>
                                <input id="confimaremail" type="email" autocomplete="username" name="confimaremail" placeholder="Digite seu e-mail">

                                <!-- Mensagem de erro que vai aparecer no JS -->
                                <i class="img__sucesso"><img src="assets/images/icone-sucesso.svg" alt="icone sucesso"></i>
                                <i class="img__erro"><img src="assets/images/icone-erro.svg" alt="icone erro"></i>
                                <small>Erro Mensagem</small>
                            </div>


                            <div class="comerciante__sobrenome">
                                <!-- Senha -->
                                <div class="comerciante__input">
                                    <label for="senha">Senha:</label>
                                    <input id="senha" type="password" name="senha" autocomplete="current-password" placeholder="Digite sua senha">

                                    <!-- Mensagem de erro que vai aparecer no JS -->
                                    <i class="img__sucesso"><img src="assets/images/icone-sucesso.svg" alt="icone sucesso"></i>
                                    <i class="img__erro"><img src="assets/images/icone-erro.svg" alt="icone erro"></i>
                                    <small>Erro Mensagem</small>
                                </div>

                                <!-- Confirme senha: -->
                                <div class="comerciante__input">
                                    <label for="confirmesenha">Confirme sua senha:</label>
                                    <input type="password" id="confirmesenha" name="confirmesenha" autocomplete="current-password" placeholder="Confirme sua senha">

                                    <!-- Mensagem de erro que vai aparecer no JS -->
                                    <i class="img__sucesso"><img src="assets/images/icone-sucesso.svg" alt="icone sucesso"></i>
                                    <i class="img__erro"><img src="assets/images/icone-erro.svg" alt="icone erro"></i>
                                    <small>Erro Mensagem</small>
                                </div>
                            </div>

                            <!-- Data de Nascimento -->
                            <div class="comerciante__input ">
                                <label for="data">Data de Nascimento:</label>
                                <input id="data" type="date" name="data" placeholder="">

                                <!-- Mensagem de erro que vai aparecer no JS -->
                                <i class="img__sucesso"><img src="assets/images/icone-sucesso.svg" alt="icone sucesso"></i>
                                <!-- <i class="img__erro"><img src="assets/images/icone-erro.svg" alt="icone erro"></i> -->
                                <small>Erro Mensagem</small>
                            </div>


                            <div class="botao__enviar">
                                <button type="submit" id="submit" name="inserir">Finalizar Cadastro </button>

                            </div>

                    </form>
                    <p class="paragrafo__acessar">Já possui uma conta? <a href="login.php">Acessar</a></p>

                </div>
            </section>
        </main>
    </div>

    <!-- Teste apagar -->

    <a href="comerciante/comerciante.php">Minha conta</a>
    <a href="adm/adm.php">ADM</a>

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
    <script src="assets/js/mascara-cpf-tel.js"></script>
    <!-- <script src="assets/js/validacao.js"></script> -->


</body>

</html>