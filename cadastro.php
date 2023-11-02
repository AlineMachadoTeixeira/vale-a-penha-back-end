<?php

require_once "inc/cabecalho.php";


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
<?php
require_once "inc/rodape.php";
?>