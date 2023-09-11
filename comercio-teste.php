<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comércio Local / Vale a Penha</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/comercio-local.css"> 
    <!-- <link rel="stylesheet" href="assets/css/cards.css"> -->
    <style>
        .header {
            background-image: url(assets/images/banner-comercio-local.png);
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
        <div class="menu__camada">
            <nav>
                <h3><a href="" id="botao-menu"> Menu &equiv;</a></h3>

                <ul class="menu__camada__dois">
                    <li>
                        <a href="index.php"><img class="logo__principal" src="assets/images/logo-Vale-a-Penha.svg" alt="logo Vale a Penha">
                        </a>
                    </li>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="gastronomia.php">Gastronomia</a></li>
                    <li><a href="lazer.php">Lazer</a></li>
                    <li><a href="comercio-local.php">Comércio Local</a></li>
                    <li><a href="cultura.php">Cultura</a></li>
                    <li><a href="historia.php">História</a></li>
                    <li><a href="educacao.php">Educação</a></li>
                    <li><a href="voce-em-foco.php">Você em Foco</a></li>
                    <li>
                        <a class="icone__menu__login" href="login.php"><img class="icone__menu" src="assets/images/icone-login-vermelho.svg" alt="Ícone login">
                        </a>
                    </li>
                </ul>
            </nav>
            <nav>

                <div class="pesquisa__lupa">
                    <input class="pesquisa__input" type="search" placeholder="Pesquisa">
                    <a class="pesquisa__link" href="">
                        <img class="pesquisa__lupa__img" src="assets/images/lupa-branco.svg" alt="Lupa">
                    </a>


                </div>
            </nav>

        </div>
    </div>
    <!-- fim menu -->

    <header>
        <div class="header">
            <img src="assets/images/logo-Vale-a-Penha.svg" alt="logo Vale A Penha">
            <h1>Conhecer o nosso bairro!</h1>
            <h2>Comércio Local</h2>
        </div>
    </header>
    <main>
        <p class="descricao">Na Penha temos muitos comércios locais que vale a pena conhecer.</p>
        <p class="descricao_cadastro">Quer destacar o seu negócio no nosso Bairro? Alcance moradores e visitantes interessados em seus produtos e serviços. Clique <a href="cadastro.php">Aqui</a> e faça seu cadastro .</p>
        <section class="container">
            <article class="cards">
                <!-- <img class="cards-img" src="assets/images/lapis-de-cor.jpg" alt="Comida da Padaria Requinte"> -->
                <img  class="cards-img redimensionar" src="assets/images/lapis-de-cor.jpg" alt="Comida da Padaria Requinte">
                <h3>Papelaria CopyPen</h3>
                <p>Papelaria de bairro com preços acessíveis a população e um ótimo atendimento</p>
                <a target="_blank" href="https://www.instagram.com/papelariacopypen/"><img src="assets/images/instagram.svg" alt="logo instagram"></a> 
            </article>

            <article class="cards">
                <!-- <img class="cards-img" src="assets/images/lapis-de-cor.jpg" alt="Comida da Padaria Requinte"> -->
                <img  class="cards-img redimensionar" src="assets/images/fotografo.jpg" alt="Comida da Padaria Requinte">
                <h3>Papelaria CopyPen</h3>
                <p>Papelaria de bairro com preços acessíveis a população e um ótimo atendimento</p>
                <a target="_blank" href="https://www.instagram.com/papelariacopypen/"><img src="assets/images/instagram.svg" alt="logo instagram"></a> 
            </article>

            <article class="cards">
                <!-- <img class="cards-img" src="assets/images/lapis-de-cor.jpg" alt="Comida da Padaria Requinte"> -->
                <img  class="cards-img redimensionar" src="assets/images/banner-inicio.png" alt="Comida da Padaria Requinte">
                <h3>Papelaria CopyPen</h3>
                <p>Papelaria de bairro com preços acessíveis a população e um ótimo atendimento</p>
                <a target="_blank" href="https://www.instagram.com/papelariacopypen/"><img src="assets/images/instagram.svg" alt="logo instagram"></a> 
            </article>
            
            
                      
            
            
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
    <script src="assets/js/menu-novo.js"></script>


     <script>
        
         function redimensionarImagem(largura, altura){
            const img =  document.querySelectorAll('.redimensionar');
            img.forEach(imagem => {
                imagem.width = largura;
                imagem.height = altura;
            })
         }

         redimensionarImagem(200,200);


        // function redimensionarImagem(largura, altura){
        //      document.getElementById('img').width = largura;
        //     document.getElementById('img').height = altura;
        //  }

        //  redimensionarImagem(300,200);


    </script> 
</body>

</html>

