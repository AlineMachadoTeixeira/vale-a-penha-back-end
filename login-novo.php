<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">

    <style>
        body{
            background-image: url(assets/images/Fundo-area-de-login.jpg);
            background-size: cover;     
            /* overflow: hidden; para tirar a barra de rolagem caso aparecer */
            overflow: hidden;
        }
    </style>
   
<body>

    <main>

        <section class="area__login">

            <div class="login">

                <fieldset>
                    <div>
                        <!-- Aqui vai a imagem -->
                        <a href="index.php"><img src="assets/images/logo-Vale-a-Penha.svg" alt="Logo Vale a Penha"></a>
                    </div>

                    <form action="" method="post">

                        <input type="email" id="loginemail" name="loginemail" placeholder="Seu email" required>
                        <label for="loginemail">Login</label>

                        <input type="password" id="loginsenha" name="loginsenha" placeholder="Sua senha" required>
                        <label for="loginsenha">Senha</label>

                        <div class="form__entrar">
                            <button  type="submit" name="loginentrar"><a href="">Entrar</a> 
                            </button>
                        </div>

                    </form>

                    <p class="login__criar">Ainda não tem uma conta? <a href="cadastro.php">Criar conta</a></p>
                </fieldset>
            </div>

        </section>

    </main>

</body>
</html>