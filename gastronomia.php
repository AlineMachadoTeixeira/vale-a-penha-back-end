<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastronomia / Vale a Penha</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/menu.css">    
    <link rel="stylesheet" href="assets/css/cards.css">
    <style>
        .header {
            background-image: url(assets/images/banner-gastronomia.png);
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
                    <li><a href="index.php">Início</a></li>
                    <li><a href="gastronomia.php">Gastronomia</a></li>
                    <li><a href="lazer.php">Lazer</a></li>
                    <li><a href="comercio-local.php">Comércio Local</a></li>
                    <li><a href="cultura.php">Cultura</a></li>
                    <li><a href="historia.php">História</a></li>
                    <li><a href="educacao.php">Educação</a></li>
                    <li><a href="voce-em-foco.php">Você em Foco</a></li>
                </ul>
            </nav>
            <nav>
                <h4 class="menu__camada__um">
                    <a href="index.html"><img class="logo__principal" src="assets/images/logo-Vale-a-Penha.svg"
                            alt=""></a>
                    <!-- pesquisa -->
                    <input type="search" class="menu__pesquisa" placeholder="O que você procura?">                    
                    <a  class="icone__menu__login" href="login.php"><img class="icone__menu" src="assets/images/icone-menu.teste.png" alt="Ícone login"></a>
                </h4>
            </nav>

        </div>
    </div>
    <!-- fim menu -->
   
    <header>
        <div class="header">
            <img src="assets/images/logo-Vale-a-Penha.svg" alt="logo Vale A Penha"> 
            <h1>Conhecer o nosso bairro!</h1>
            <h2>Gastronomia</h2>
        </div>
    </header> 
    

    <main>
       
            <p class="descricao">A região da Penha tem diversas opções para uma boa alimentação que vale a pena conhecer: padaria, bares e restaurantes. Confira aqui algumas sugestões.</p>

        <article class="container">            
            <section class="cards">
                <img class="cards-img" src="assets/images/padaria-requinte.jpg" alt="Comida da Padaria Requinte">
                <h3>Padaria Requinte</h3>
                <p>Padaria antiga que serve café da manhã, lanches, pizzas, frango assado e pães há quatro gerações.</p>
                <a target="_blank" href="https://www.instagram.com/requinte/"><img src="assets/images/instagram.svg" alt="logo instagram"></a>         
                
            </section>
            
            <section class="cards">
                <img class="cards-img" src="assets/images/yara-panificadora.jpg" alt="Comida da Nova Yara Panificadora">
                <h3>Nova Yara Panificadora</h3>
                <p>Panificadora tradicional que serve café da manhã e pratos executivos em um ambiente descontraído.</p>
                <a class="gastromonia__botao"href="https://www.instagram.com/padarianovayara/"><img src="assets/images/instagram.svg" alt="logo instagram"></a>
            </section>
                
            <section class="cards">
                <img class="cards-img" src="assets/images/panelao.jpg" alt="Comida do Panelão do Norte">
                <h3>Panelão do Norte</h3>
                <p>Restaurante com tema nordestino e música sertaneja, que serve pratos e especialidades regionais.</p>
                <a target="_blank" href="https://www.instagram.com/panelaopenha/"><img src="assets/images/instagram.svg" alt="logo instagram"></a>             

            </section>
            <section class="cards">
                <img class="cards-img" src="assets/images/tiquatirao.jpg" alt="Comida do Tiquatirão Frutos Do Mar">
                <h3>Tiquatirão Frutos Do Mar</h3>
                <p>Restaurante em forma de navio que serve camarão, caranguejo, mexilhão, polvo e peixe assado.</p>
                <a target="_blank" href="https://www.instagram.com/tiquatiraorestaurante/"><img src="assets/images/instagram.svg" alt="logo instagram"></a>

            </section>

            <section class="cards">
                <img class="cards-img" src="assets/images/dunas.jpg" alt="Comida do Dunas Bar">
                <h3>Dunas Bar </h3>
                <p>Bar inspirado no Egito com petiscos e coquetéis no estilo do Oriente Médio, além de música e dança à noite.</p>
                <a target="_blank" href="https://www.instagram.com/dunasbar_/"><img src="assets/images/instagram.svg" alt="logo instagram"></a>

            </section>

            <section class="cards">
                <img class="cards-img" src="assets/images/bar-jao.jpg" alt="Comida do Bar do Jão">
                <h3>Bar do Jão </h3>
                <p>O Bar do Jão conta com um ambiente aconchegante e descontraído. oi eleito tetracampeão do Concurso Comida di Buteco em 2017, 2018, 2019 e 2021.</p>
                <a target="_blank" href="https://www.instagram.com/bardojaoetradicao/"><img src="assets/images/instagram.svg" alt="logo instagram"></a>

            </section>
    


        </article>
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
   


    

</body>
</html>