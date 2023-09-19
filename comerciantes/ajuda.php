<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda</title>
    <link rel="shortcut icon" href="../assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/comerciante.css">




</head>

<body>



    <div class="comerciante__container">
        <main>
            <section class="comerciante__caixa">
                <div class="comerciante__imagem">
                    <!-- Aqui vai a imagem -->
                    <a href="index.php"><img src="../assets/images/logo-Vale-a-Penha.svg" alt="Logo Vale a Penha"> </a>
                    <!-- <ul class="navegacao">
                        <li>
                            <a id="clicando" href="minha-conta.php">Minha Conta</a>
                        </li>
                        <li>
                            <a id="clicando" href="cadastrar-comercio.php">Cadastrar Comércio</a>
                        </li>
                        <li>
                            <a id="clicando" href="">Gerenciar Comércio</a>
                        </li>
                        <li>
                            <a id="clicando" href="ajuda.php" class="active-link">Ajuda</a>
                        </li>
                    </ul> -->

                    <div class="navegacao">
                        <div class="">
                            <button type="submit" ><a id="clicando" href="minha-conta.php">Minha Conta</a></button>
                        </div>

                        <div class="">
                            <button type="submit" ><a id="clicando" href="cadastrar-comercio.php">Cadastrar Comércio</a></button>
                        </div>

                        <div class="">
                            <button type="submit" ><a id="clicando" href="">Gerenciar Comércio</a></a></button>
                        </div>

                        <div class="">
                            <button type="submit" ><a id="clicando" href="ajuda.php" class="active-link">Ajuda</a></button>
                        </div>
                    </div>


                </div>
                <div class="comerciante_for">
                    <!-- Cadastre-se e Voltar site botão -->
                    <div class="comerciante__titulo">
                        <div class="comerciante__subtitulo">
                            <h1>Ajuda</h1>
                        </div>
                        <div class="botao__sair">
                            <button type="submit" name="comerciantes"><a href="../index.php">Sair</a></button>
                        </div>
                    </div>
                    <p class="comerciante__paragrafo">Caso tenha alguma dúvida, nos envie uma mensagem e aguarde a resposta em seu email. O tempo de resposta é de até 48 horas.</p>

                    <form class="comerciante__formulario" id="form" action="https://formspree.io/f/mvonybwj" method="post">

                        <!-- E-meil -->
                        <div class="comerciante__input">
                            <label for="email">Email:
                                <input type="email" name="email" id="email" placeholder="E-mail" required>
                            </label>
                        </div>
                        <!-- Mensagem Ajuda -->
                        <div class="comerciante__input">
                            <label for="mensagem">Mensagem:
                                <textarea rows="10" cols="33" name="mensagem" id="mensagem" required></textarea>
                            </label>
                        </div>
                        <div class="botao__enviar">
                            <button type="submit" id="submit">Enviar</button>
                            <p id="status"></p>
                        </div>

                    </form>
                    <p class="paragrafo__acessar">Já possui uma conta? <a href="login.php">Acessar</a></p>
                </div>
            </section>
        </main>
    </div>

    <script src="../assets/js/contato.js"></script>
    <script src="../assets/js/clicando.js"></script>



</body>

</html