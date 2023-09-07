<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    
</head>

<body>



    <div class="login__container">
        <main>
            <section class="login__caixa">
                
                    
                   
                <div class="comerciante_for">

                  <!-- <p class="login__img"><a  href="index.php"><img src="assets/images/icone-sao-paulo.svg" alt="Logo Vale a Penha"> </a> </p>                       -->

                  
                  <p class="login__img"><a  href="index.php"><img src="assets/images/icone-login-vermelho.svg" alt="Logo Vale a Penha"> </a> </p>   

                   

                    <form class="comerciante__formulario" action="" method="post">

                       <!-- Aqui vai a imagem -->

                        

                            <!-- E-mail -->
                            <div class="login__input">
                                <label for="email">E-mail:</label>
                                <input id="email" type="email" name="email" placeholder="E-mail" required>
                            </div>

                            <!-- Senha -->
                            <div class="login__input">
                                <label for="senha">Senha:</label>
                                <input  type="password" name="senha" id="senha" placeholder="Senha" required>
                            </div>                       




                            <div class="botao__enviar">
                                <button type="submit" id="submit">Login </button>
                            </div>

                    </form>
                    <p class="login__criar">Ainda não tem uma conta? <a href="cadastro.php">Criar</a></p>

                </div>
            </section>
        </main>
    </div>

    <script src="../assets/js/contato.js"></script>
    <script src="../assets/js/clicando.js"></script>



</body>

</html