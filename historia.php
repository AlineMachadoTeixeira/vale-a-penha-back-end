<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História / Vale a Penha</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/menu.css"> -->
    <link rel="stylesheet" href="assets/css/container.css">
    <style>
        .header {
            background-image: url(assets/images/banner-historia.png);
            background-size: cover;
            background-position: center;
        }
    
    
    
    
        .camada {
            display: flex;
            flex-direction: column;
            background-color: #F4EBD0;
            top: 0;
            position: sticky;
            z-index: 10;
            padding: 10px 5px;
            width: 100%;
        }
    
        ul {
            display: flex;
            list-style: none;
            display: none;
        }
    
        nav h3 {
            margin: 0;
            padding: 0;
        }
    
    
        nav a {
            display: flex;
            color: #c40008;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.8rem;
    
        }
    
        .logo__principal__menu {
            display: none;
        }
    
        .icone__menu {
            display: none;
    
        }
    
        nav a:hover,
        nav a:focus {
            color: #000000c0;
        }
    
        .menu-aberto {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: auto;
            gap: 10px;
        }
    
        .menu-aberto a {
            font-size: 16px;
        }
    
    
        /* Pesquisa */
        .pesquisa__lupa {
            background-color: transparent;
            display: flex;
            border: 3px solid #c40008;
            height: 30px;
            border-radius: 50px;
            align-items: center;
            outline: none;
            margin: auto;
        }
    
        .pesquisa__input {
            border: none;
            background-color: transparent;
            outline: none;
            padding: 0;
            line-height: 40px;
            width: 100%;
            padding-left: 10px;
            color: #000000c0;
        }
    
        .pesquisa__link {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #c40008;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    
    
    
        /*   @media screen do menu */
        @media screen and (min-width: 769px) {
    
            nav h3 {
                display: none;
            }
    
            .pesquisa__espaco {
                width: 70%;
            }
    
            .camada__um {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                width: 95%;
                margin: auto;
            }
    
            .menu__camada__dois {
                margin: auto;
                width: 90%;
                /* gap: 20px; */
                margin-top: 15px;
                
            }
    
    
            .logo__principal__menu {
                margin: auto;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 80%;
            }
    
            .login__ul {
                display: none;
            }
    
            .icone__menu {
                margin: auto;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 28%
            }
    
            .pesquisa__lupa {
                width: 90%;
                
            }
        }
    
        @media screen and (max-width: 769px) {
    
            .camada {
                flex-direction: column-reverse;               
            }
    
    
            .pesquisa__lupa {
                width: 80%;
                margin-top: 15px;
                
            }
    
            nav a {
                font-size: 1rem;
                padding: 2px 8px;
            }
        }
    </style>
</head>

<body>

    

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
            <h1>Conhecer este bairro histórico!</h1>
            <h2>História</h2>
        </div>
    </header>


    <main>

        <p class="descricao">Um ponto amarelo no horizonte!</p>

        <!-- ID container para a caixa  -->
        <article class="container">
            <section class="section-direita">
                <img class="section-img" src="assets/images/penha-pb.jpg" alt="Foto preto e branco do bairro da Penha com a igreja colorida">

                <div class="section-texto">
                    <h4>Sobre o bairro</h4>
                    <p>Considerado o segundo bairro mais antigo da cidade, fundado por volta de 1668, a Penha tem sua origem ligada intimamente à religiosidade. Essa característica se manteve até os dias atuais, onde podemos encontrar mais de 30 igrejas, templos e comunidades religiosas espalhadas pelo bairro, sendo a Igreja Nossa Senhora da Penha a mais conhecida atualmente.</p>

                    <p>Com o passar do tempo, a constante valorização da região fez com que o bairro fosse cada vez mais procurado por famílias das classes sociais média e média-alta, e, juntamente com os bairros Tatuapé, Jardim Anália Franco, Vila Carrão, Mooca e Vila Prudente, fossem conhecidos como a elite da Zona Leste paulistana.</p>

                    <p>Tendo como vizinhos os bairros do Tatuapé, Artur Alvim, Cangaíba, Vila Matilde, Ponte Rasa e Vila Maria, além de fazer divisa com o município de Guarulhos, a Penha possui comércio intenso e diversificado, o que atrai consumidores das regiões próximas, fazendo com que as ruas do centro do bairro se transforme num alegre centro de compras.
                    </p>

                </div>
            </section>

            <section class="section-esquerda">
                <img class="section-img" id="curiosidades" src="assets/images/vc-sabia-logo.svg" alt="logotipo 'Você sabia?' ">

                <div class="section-texto">
                    <h4>Curiosidades que Vale a Penha você saber</h4>
                    <p>Nada melhor do que acessar as histórias que formam este bairro histórico de São Paulo.
                    </p>
                </div>

            </section>

            <section class="section-direita">
                <img class="section-img" src="assets/images/vinicola-lucano.jpg" alt="Vinícola Lucano Penha">

                <div class="section-texto">
                    <h4>Você sabia que há uma vinícola que produz há mais de 30 anos vinhos artesanais dentro da capital?</h4>
                    <p> A <strong>Vinícola Lucano</strong> originou-se do trabalho familiar da família Lence, que imigrou do sul da Itália para São Paulo na década de 1960. Em 1967, a família adquiriu uma casa na Rua Mirandinha, com um quintal bastante espaçoso. Desde então, o patriarca, Leonardo Lence, começou a cultivar a uva do tipo Moscato em seu quintal.
                    <p>Assim, no final dos anos 1960 e início dos 1970, colhendo uvas de seu pequeno parreiral e complementando a quantidade necessária com uvas adquiridas no mercado, a família retomou a tradição de seus antepassados e começaram a fazer vinho para consumo da família e dos amigos.</p>

                    <p>No porão da casa, onde atualmente funciona o museu do espaço, foram feitas adaptações para se “descansar o vinho”. Hoje, estão conservados os equipamentos que foram utilizados na época. <br> Até que, em 1987, a família Lence resolveu transformar a produção familiar em uma pequena empresa. Surge, então, a Vinícola Lucano.</p>
                </div>
            </section>

            <section class="section-esquerda">
                <img class="section-img" src="assets/images/igreja-matriz-de-nossa-senhora-da-penha.jpg" alt="Entrada da Igreja Matriz de Nossa Senhora da Penha">

                <div class="section-texto">
                    <h4>Igreja Matriz de Nossa Senhora da Penha</h4>
                    <p>Outra construção interessante é a igreja que fica em uma das colinas mais altas da região. Ela se destaca no meio de outras construções e pode ser vista de diversos outros bairros. Inclusive, podemos vê-la por meio das janelinhas da linha vermelha do metrô. Esta é sem dúvida uma das principais igrejas da Penha e foi construída no século XVII. Além de visitar a bela arquitetura você pode fazer um passeio guiado pela torre mais alta da igreja.</p>
                </div>
            </section>

            <section class="section-direita">
                <img class="section-img" src="assets/images/penha-capital.jpg" alt="Exército da Penha em 1924">

                <div class="section-texto">
                    <h4>A Penha Como Capital do Estado</h4>
                    <p>A maior curiosidade da história do bairro é que, em uma época de nossa história, a Penha foi a capital do estado de São Paulo. Durante a Revolução de 24, o exército federal sitiou São Paulo, e sua base era na região da Penha.
                        O General Sócrates, chefe do comando, e o governador da cidade, Carlos Campos, que, na época, era chamado de presidente da província, abandonou o palácio e foi para o bairro, tornando-o capital do Estado pelo período de dois meses. O momento guarda várias histórias de guerra. Uma delas é a de que um trem, cheio de dinamites e bombas, seguia na direção da cercania, quando um funcionário soube do carregamento e conseguiu desviar o trajeto dos trilhos, descarrilando-o e fazendo com que a explosão ocorresse longe do alvo.
                    </p>
                </div>
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