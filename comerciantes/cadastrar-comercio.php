<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Comércio</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
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
                            <a id="clicando" href="minha-conta.php">Minha Conta</a>
                        </li>

                        <li>
                            <a id="clicando" href="cadastrar-comercio.php" class="active-link">Cadastrar Comércio</a>
                        </li>

                        <li>
                            <a id="clicando" href="">Gerenciar Comércio</a>
                        </li>

                        <li>
                            <a id="clicando" href="ajuda.php">Ajuda</a>
                        </li>

                    </ul>

                </div>

                <div class="login_for">

                    <!-- Cadastre-se e Voltar site botão -->
                    <div class="form__titulo">
                        <div class="form__subtitulo">
                            <h2>Cadastrar Comércio</h2>
                        </div>

                        <div class="form__voltar">
                            <button type="submit" name="comerciantes"><a href="../index.php">Sair</a></button>
                        </div>

                    </div>

                    <p class="form__paragrafo">Não fique de fora, divulgue conosco!</p>

                    <form action="" method="post">


                        <div class="login__for">

                            <!-- Foto  -->
                                        <!-- class="login__campos" -->
                            <div class="">
                                <!-- <label for="fotocomercio">Adicionar foto:</label> -->
                                <!-- <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome" required> -->

                                <!-- <img /> -->

                                <!-- <input type="file" name="foto" id="foto">  -->

                                <!-- <input type=button class=hide value="Adicionar outro"> -->

                                <!-- <input type=file>                            

                        
                                <img  />  -->


                                <label class="comerciante__foto" for="foto" tabIndex="0"> 
                                    <input type="file" name="foto" id="foto" >
                                    <span class="comerciante__foto__image">Imagem</span>
                                </label>

                                

                                <!-- <input type="file" name="picture__input" id="picture__input"> -->





                            </div>

                            <!--Título-->
                            <div class="login__campos">
                                <label class="titulo" for="titulo">Título:
                                    <textarea rows="1" cols="33" name="titulo" id="titulo" required> </textarea>
                                </label>
                            </div>

                            <!-- Descrição -->
                            <div class="login__campos">
                                <label for="descricao">Descrição:
                                    <textarea rows="5" cols="33" name="descricao" id="descricao" required></textarea>
                                </label>
                            </div>

                            <!-- Link Instagram -->
                            <div class="login__campos">
                                <label for="instagram">Link Instagram:</label>
                                <input id="instagram" type="text" name="instagram" placeholder="Link do seu Instagram" required>
                            </div>








                            <div class="login__entrar">
                                <button type="submit" name="contaconfirmar"><a href="">Confirmar</a> </button>
                            </div>

                    </form>

                    <!-- <p class="login__criar">Já possui uma conta? <a href="login.php">Acessar</a></p> -->

                    <p class="dicasp">Dicas</p>

                    <ul class="dicas">

                        <li>É permitido um anúncio por usuário/CPF. </li>
                        <li>Limite de 1 foto.</li>
                        <li>Tamanho: 580 pixels(mínimo) a 1080 pixels(máximo). </li>
                        <li>As fotos precisam ser quadradas e com boa resolução.</li>
                        <li>Título de até 20 caracteres</li>
                        <li>Descrição com até 100 caracteres.</li>
                    </ul>

                </div>

            </section>

        </main>


    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../assets/js/clicando.js"></script>
    <script src="../assets/js/adicionar-foto-comerciante.js"></script>


</body>


</html