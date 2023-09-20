<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Comercio.</title>
    <link rel="shortcut icon" href="../assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../assets/css/style.css"> 
    <link rel="stylesheet" href="../assets/css/comerciante.css">
</head>

<body>

    <div >
        <main>
            <section class="comerciante__caixa">
                <div class="comerciante__imagem">
                    <!-- Aqui vai a imagem -->
                    <a href="index.php"><img src="../assets/images/logo-Vale-a-Penha.svg" alt="Logo Vale a Penha"> </a>

                    <div class="navegacao">
                        <div class="">
                            <button type="submit"><a id="clicando" href="minha-conta.php">Minha Conta</a></button>
                        </div>

                        <div class="">
                            <button type="submit" class="active-link"><a id="clicando" href="cadastrar-comercio.php">Cadastrar Comércio</a></button>
                        </div>

                        <div class="">
                            <button type="submit"><a id="clicando" href="">Gerenciar Comércio</a></a></button>
                        </div>

                        <div class="">
                            <button type="submit"><a id="clicando" href="ajuda.php">Ajuda</a></button>
                        </div>
                    </div>

                </div>
                <div class="comerciante_for">
                    <!-- Cadastre-se e Voltar site botão -->
                    <div class="comerciante__titulo">
                        <div class="comerciante__subtitulo">
                            <h1>Cadastrar Comércio.</h1>
                        </div>
                        <div class="botao__sair">
                            <button type="submit" name="comerciantes"><a href="../index.php">Sair</a></button>
                        </div>
                    </div>



                    <form class="comerciante__formulario" action="" method="post">


                        <!-- FOTO comercio-->
                        <div class="comerciante__input  foto__margem">
                            <label class="comerciante__foto" for="foto" tabIndex="0">
                                <input type="file" name="foto" id="foto">
                                <span class="comerciante__foto__image">Imagem</span>
                            </label>

                        </div>

                        <!-- Nome comercio  -->
                        <div class="comerciante__input">
                            <label class="titulo" for="titulo">Nome Comércio:
                                <textarea rows="1" cols="33" name="titulo" id="titulo" required> </textarea>
                            </label>
                        </div>

                        <!-- Descrição  -->
                        <div class="comerciante__input">
                            <label for="descricao">Descrição:
                                <textarea rows="5" cols="33" name="descricao" id="descricao" required></textarea>
                            </label>
                        </div>

                        <!-- Instagram Link -->
                        <div class="comerciante__input">
                            <label for="instagram">Instagram:</label>
                            <input type="url" name="instagram" id="instagram" placeholder="Link do instagram" required>

                        </div>
                        <div class="botao__enviar">
                            <button type="submit" id="submit">Enviar</button>

                        </div>

                    </form>
                    <!-- <p class="paragrafo__acessar">Já possui uma conta? <a href="login.php">Acessar</a></p> -->

                    <p class="paragrafo__dicas">Dicas</p>

                    <ul class="ul__dicas">

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

    <!-- <script src="../assets/js/contato.js"></script> -->
    <script src="../assets/js/clicando.js"></script>
    <script src="../assets/js/adicionar-foto-comerciante.js"></script>



</body>

</html