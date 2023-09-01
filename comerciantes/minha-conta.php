<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link rel="shortcut icon" href="../assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/comert.css">   


</head>

<body>


    <div class="login__container">
        <main>


            <section class="login">
                <div class="login__imagem">
                    <!-- Aqui vai a imagem -->

                    <a href="index.php"><img src="../assets/images/logo-Vale-a-Penha.svg" alt="Logo Vale a Penha"> </a>
                    <ul class="login__lista">

                        <li>
                            <a href="minha-conta.php">Minha Conta</a>
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
                            <h2>Minha Conta</h2>
                        </div>

                        <div class="form__voltar">
                            <button type="submit" name="comerciantes"><a href="../index.php">Sair</a></button>
                        </div>

                    </div>

                    <p class="form__paragrafo">Não fique de fora, divulgue conosco!</p>

                    <form action="" method="post">


                        <div class="login__for">

                            <div class="login__for__sobrenome">
                                <!-- Nome  -->
                                <div class="login__campos">
                                    <label for="nome">Nome<i class="obrigatorio">*</i> :</label>
                                    <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                                </div>
                                <!-- Sobrenome  -->
                                <div class="login__campos">
                                    <label for="nome">Sobrenome<i class="obrigatorio">*</i> :</label>
                                    <input id="nome" type="text" name="nome" placeholder="Digite seu sobrenome" required>
                                </div>
                            </div>

                            <div class="login__for__sobrenome">
                                <!-- Confirmação CPF -->
                                <div class="login__campos">
                                    <label for="cpf">CPF<i class="obrigatorio">*</i> :</label>
                                    <i>
                                    <input id="cpf" type="number" name="cpf" placeholder="Digite seu CPF" required>
                                </div>
                                <!--Telefone-->
                                <div class="login__campos">
                                    <label for="tel">Celular<i class="obrigatorio">*</i> :</label>
                                    <input id="tel" type="tel" name="tel" placeholder="(xx) xxxx-xxxx" required>
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="login__campos">
                                <label for="email">E-mail<i class="obrigatorio">*</i> :</label>
                                <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                            </div>

                            

                            <!-- Data de Nascimento -->
                            <div class="login__campos">
                                <label for="senha">Data de Nascimento<i class="obrigatorio">*</i> :</label>                     
                                <input id="data" type="date" name="data" id=""placeholder="Digite sua Data de Nascimento" required>
                            </div>

                            


                            <div class="login__entrar">
                                <button type="submit" name="contaconfirmar"><a href="">Confirmar</a> </button>
                            </div>

                    </form>

                    <p class="login__criar">Já possui uma conta? <a href="login.php">Acessar</a></p>

                </div>

            </section>

        </main>


    </div>





</body>

</html>