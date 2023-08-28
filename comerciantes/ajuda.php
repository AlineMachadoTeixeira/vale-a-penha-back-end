<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/comerciantes.css ">




</head>

<body>


    <div class="login__container">
        <main>


            <section class="login">
                <div class="login__imagem">
                    <!-- Aqui vai a imagem -->

                    <a href="index.php"><img src="../assets/images/logo-Vale-a-Penha.svg" alt="Logo Vale a Penha"> </a>
                    <ul class="login__lista">
                        <li><a href="minha-conta.php">Minha Conta</a>

                        </li>
                        <li>
                            <a href="cadastrar-comercio.php">Cadastrar Comércio</a>
                        </li>
                        <li>
                            <a href="">Gerenciar Comércio</a>
                        </li>
                        <li>
                            <a href="ajuda.php">Ajuda</a>
                        </li>

                    </ul>



                </div>

                <div class="login_for">

                    <!-- Cadastre-se e Voltar site botão -->
                    <div class="form__titulo">
                        <div class="form__subtitulo">
                            <h2>Ajuda</h2>
                        </div>

                        <div class="form__voltar">
                            <button type="submit" name="comerciantes"><a href="../index.php">Sair</a></button>
                        </div>

                    </div>

                    <p class="form__paragrafo">Não fique de fora, divulgue conosco!</p>

                    <form id="form" action="https://formspree.io/f/mvonybwj" method="post">


                        <div class="login__for">                         

                            <!-- Mensagem Ajuda -->
                            <div class="login__campos">
                                <label for="mensagem">Mensagem:
                                    <textarea rows="10" cols="33" name="mensagem" id="mensagem" required></textarea>
                                </label>                             
                        </label>
                            </div>  

                            



                            <div class="login__entrar">
                            <button type="submit" id="submit">Enviar</button>
                            <p id="status"></p>
                            </div>

                            <!-- <button type="submit" id="submit">Enviar</button>
                    <p id="status"></p> -->

                    </form>

                    <p class="login__criar">Já possui uma conta? <a href="login.php">Acessar</a></p>

                </div>

            </section>

        </main>


    </div>



<script src="../assets/js/contato.js"></script>
    

</body>

</html