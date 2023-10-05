<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Você em Foco / Vale a Penha</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <style>
        .header {
            background-image: url(assets/images/banner-vc-em-foco.png);
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>

    <!-- Começo do Integrando a uma Página com VLibras  -->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js">
    </script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <!-- Fim do Integrando a uma Página com VLibras  -->

    <!-- começo menu  -->
    <div class="camada">

        <div class="camada__um">
            <nav>
                <a href="index.php"><img class="logo__principal__menu" src="assets/images/logo-Vale-a-Penha.svg" alt="Ícone login">
                </a>
            </nav>
            <nav class="pesquisa__espaco">
                <div class="pesquisa__lupa">
                    <input class="pesquisa__input" type="search" id="pesquisa" name="pesquisa" placeholder="Pesquisa">

                    <a class="pesquisa__link" href="">
                        <img class="pesquisa__lupa__img" src="assets/images/lupa-branco.svg" alt="Lupa">
                    </a>
                </div>
            </nav>

            <nav>
                <a class="icone__menu__login" href="login.php"><img class="icone__menu" src="assets/images/icone-login-vermelho.svg" alt="Ícone login">
                </a>
            </nav>
        </div>

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
                <li class="login__ul"><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>

    <!-- fim menu -->

    <header>
        <div class="header">
            <img src="assets/images/logo-Vale-a-Penha.svg" alt="logo Vale A Penha">
            <h1>Conhecer o nosso bairro!</h1>
            <h2>Você em Foco</h2>
        </div>
    </header>
    <main>
        <p class="descricao">Use esse espaço para tornar o bairro <span class="spanformulario">ainda melhor</span>.<br>
            <b>Envie aqui suas sugestões, críticas e dicas.</b>
        </p>
        <section class="container">
            <form id="form" action="https://formspree.io/f/mvonybwj" method="post">
                <fieldset>
                    <legend><b>Fale conosco</b></legend>
                    <br>
                    <div class="campo">
                        <label for="nome">Nome:
                            <input type="text" name="nome" id="nome" placeholder="Nome" required>
                        </label>
                    </div>
                    <div class="campo">
                        <label for="email">Email:
                            <input type="email" name="email" id="email" placeholder="E-mail" required>
                        </label>
                    </div>
                    <div class="campo">
                        <label for="tel">Celular:
                            <input type="tel" name="tel" id="tel" placeholder="(xx) xxxx-xxxx" required>
                        </label>
                    </div>
                    <div class="campo">
                        <label for="mensagem">Mensagem:
                            <textarea name="mensagem" id="mensagem" required></textarea>
                        </label>
                    </div>
                    <button type="submit" id="submit">Enviar</button>
                    <p id="status"></p>

                </fieldset>
            </form>

        </section>
    </main>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="assets/js/contato.js"></script>
    <script src="assets/js/menu-novo.js"></script>
</body>

</html>