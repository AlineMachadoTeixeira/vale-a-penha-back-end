<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
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
                    <ul class="navegacao">
                        <li>
                            <a id="clicando" href="minha-conta.php" class="active-link">Minha Conta</a>
                        </li>
                        <li>
                            <a id="clicando" href="cadastrar-comercio.php">Cadastrar Comércio</a>
                        </li>
                        <li>
                            <a id="clicando" href="">Gerenciar Comércio</a>
                        </li>
                        <li>
                            <a id="clicando" href="ajuda.php">Ajuda</a>
                        </li>
                    </ul>
                </div>
                <div class="comerciante_for">
                    <!-- Cadastre-se e Voltar site botão -->
                    <div class="comerciante__titulo">
                        <div class="comerciante__subtitulo">
                            <h1>Minha conta</h1>
                        </div>
                        <div class="botao__sair">
                            <button type="submit" name="comerciantes"><a href="../index.php">Sair</a></button>
                        </div>
                    </div>
                    <p class="comerciante__paragrafo">
                        Não fique de fora, divulgue conosco!
                    </p>

                    <form class="comerciante__formulario" action="" method="post" id="form">

                        <div class="comerciante__sobrenome">
                            <!-- Nome -->
                            <div class="comerciante__input">
                                <label for="nome">Nome:</label>
                                <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                            </div>
                            <!-- Sobrenome -->
                            <div class="comerciante__input">
                                <label for="sobrenome">Sobrenome:</label>
                                <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
                            </div>
                        </div>

                        <div class="comerciante__campos">
                            <div class="comerciante__sobrenome">
                                <!-- CPF -->
                                <div class="comerciante__input">
                                    <label for="cpf">CPF</label>
                                    <input id="cpf" type="text" name="cpf" placeholder="Digite seu CPF" required  maxlength="14">
                                </div>

                                <!-- Telefone -->
                                <div class="comerciante__input">
                                    <label for="telefone">Telefone:</label>
                                    <input id="telefone" type="text" name="telefone" placeholder="(xx) xxxxx-xxxx" required  maxlength="14">
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="comerciante__input">
                                <label for="email">E-mail:</label>
                                <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                            </div>

                            <!-- Data de Nascimento -->
                            <div class="comerciante__input">
                                <label for="data">Data de Nascimento:</label>
                                <input id="data" type="date" name="data"  placeholder="Digite sua Data de Nascimento" required>
                            </div>




                            <div class="botao__enviar">
                                <button type="submit" id="submit">Finalizar Cadastro </button>

                            </div>

                    </form>
                    <p class="paragrafo__acessar">Já possui uma conta? <a href="login.php">Acessar</a></p>

                </div>
            </section>
        </main>
    </div>

    <script src="../assets/js/contato.js"></script>
    <script src="../assets/js/clicando.js"></script>
    <script src="../assets/js/mascara-cpf-tel.js"></script>



</body>

</html