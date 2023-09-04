<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- começo menu  -->
    <div class="camada">
        <div class="menu__camada">
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
                </ul>
            </nav>
            <nav>
                <h4 class="menu__camada__um">
                    <a href="index.php"><img class="logo__principal" src="assets/images/logo-Vale-a-Penha.svg" alt="">
                    </a>
                    <!-- pesquisa -->
                    <input type="search" class="menu__pesquisa" placeholder="O que você procura?">
                    <a class="icone__menu__login" href="login.php"><img class="icone__menu" src="assets/images/icone-menu.teste.png" alt="Ìcone de login">
                    </a>


        </div>
    </div>
    <!-- fim menu -->
    <div class="login__container">
        <main>


            <section class="login">
                <div class="login__imagem">
                    <!-- Aqui vai a imagem -->
                    <a href="index.php"><img src="assets/images/carrinho-de-compra-logo.svg" alt="Logo Vale a Penha"> </a>

                </div>

                <div class="login_for">

                    <!-- Cadastre-se e Voltar site botão -->
                    <div class="form__titulo">
                        <div class="form__subtitulo">
                            <h2>Cadastre-se</h2>
                        </div>

                        <div class="form__voltar">
                            <button type="submit" name="cadastrovoltar"><a href="index.php">Voltar</a></button>
                        </div>

                    </div>

                    <p class="form__paragrafo">Não fique de fora, divulgue conosco!</p>

                    <form action="" method="post">


                        <div class="login__for">

                            <div class="login__for__sobrenome">
                                <!-- Nome  -->
                                <div class="login__campos">
                                    <label for="nome">Nome:</label>
                                    <input id="nome" type="text" name="nome" placeholder=" Primeiro nome" required>
                                </div>
                                <!-- Sobrenome  -->
                                <div class="login__campos">
                                    <label for="nome">Sobrenome:</label>
                                    <input id="nome" type="text" name="nome" placeholder="Ultimo nome" required>
                                </div>
                            </div>

                            <div class="login__for__sobrenome">
                                <!-- Confirmação CPF -->
                                <div class="login__campos">
                                    <label for="cpf">CPF:</label>
                                    <input id="cpf" type="number" name="cpf" placeholder="CPF" required>
                                </div>
                                <!--Telefone-->
                                <div class="login__campos">
                                    <label for="tel">Celular:</label>
                                    <input id="tel" type="tel" name="tel" placeholder="(xx) xxxx-xxxx" required>
                                </div>
                            </div>


                            <!-- E-mail -->
                            <div class="login__campos">


                                <label for="email">E-mail:</label>
                                <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                            </div>

                            <!-- Confirmação E-mail -->
                            <div class="login__campos">
                                <label for="confirmeemail">Confirme seu E-mail:</label>
                                <input id="confirmeemail" type="email" name="confirmeemail" placeholder="Confirme seu E-mail" required>
                            </div>

                            <div class="login__for__sobrenome">
                                <!-- Senha -->
                                <div class="login__campos">
                                    <label for="senha">Senha:</label>
                                    <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                                </div>
                                <!-- Confirme Senha -->
                                <div class="login__campos">
                                    <label for="confirmesenha">Confirme sua senha:</label>
                                    <input id="confirmesenha" type="password" name="confirmesenha" placeholder="Confirme sua senha" required>
                                </div>
                            </div>



                            <div class="login__entrar">
                                <button type="submit" name="cadastrocadastrar"><a href="">Cadastrar</a> </button>
                            </div>

                    </form>

                    <p class="login__criar">Já possui uma conta? <a href="login.php">Acessar</a></p>

                </div>

            </section>



        </main>

        <!-- Teste apagar -->

        <a href="comerciantes/minha-conta.php">Minha conta</a>
        <a href="comerciantes/cadastrar-comercio.php">Cadastrar Comércio</a>
        <a href="comerciantes/ajuda.php">Ajuda</a>


    </div>

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