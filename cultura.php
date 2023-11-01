<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cultura / Vale a Penha</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/container.css">
    <style>
        .header {
            background-image: url(assets/images/banner-cultural.png);
            background-size: cover;
            background-position: center;
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
            <h1>Conhecer o nosso bairro!</h1>
            <h2>Cultura</h2>
        </div>
    </header>
    <main>
        <p class="descricao">Temos diversos rolês culturais no nosso bairro que vale a Penha conhecer!</p>
        <section class="container">
            <article class="section-esquerda">
                <img class="section-img" src="assets/images/centro-cultural-da-penha.jpg" alt="Centro Cultural da Penha">
                <div class="section-texto">
                    <h4>Centro Cultural da Penha</h4>
                    <p>O <b>Centro Cultural da Penha</b> é um equipamento público voltado à divulgação da cultura
                        brasileira, propagação do conhecimento e valorização da história do bairro da Penha, onde está
                        localizado. O espaço é ligado ao <b>Coordenação de Centros Culturais e Teatros, da Secretaria Municipal de Cultura da Prefeitura da cidade de São Paulo</b>.</p>
                    <p>É composto pelo Espaço Cultural Mário Zan, da Biblioteca José Paulo Paes, do Teatro Martins Pena, do FabLab, estúdio de gravação Itamar Assumpção e salas de estudos em todos os andares do prédio.</p>
                    <a href="https://linktr.ee/ccpenha" target="_blank">Saiba Mais</a>
                </div>
            </article>

            <article class="section-direita">
                <img class="section-img" src="assets/images/movimento-cultural-penha.jpg" alt="Movimento Cultural Penha">
                <div class="section-texto">
                    <h4>MCP - Movimento Cultural Penha</h4>
                    <p>O <b>Movimento Cultural Penha</b> é uma Organização não Governamental, fundada no bairro da Penha em 23 de junho de 2001, mas sua origem enquanto movimento popular data de meados de 1984, quando um grupo de artistas, músicos, atores, produtores culturais, entre outros se encontrava no Teatro Martins Penna para organização de eventos e atividades na área de teatro e música, participando na organização das Praças de Arte no Largo do Rosário da Penha em 1985 e na comissão executiva do I Congresso de Movimentos Populares de Cultura em outubro do mesmo ano.</p>
                    <a href="https://movimentoculturalpenha.com/o-que-fazemos/" target="_blank">Saiba Mais</a>
                </div>
            </article>

            <article class="section-esquerda">
                <img class="section-img" src="assets/images/cartaz.png" alt="Largo do Rosário">
                <div class="section-texto">
                    <h4>Largo do Rosário</h4>
                    <p>A Comunidade do Rosário dos Homens Pretos da Penha de França é um grupo comunitário existente desde 2002 no bairro Penha de França, região leste de São Paulo, que tem como objetivos divulgar a importância da Igreja de Nossa Senhora do Rosário dos Homens Pretos quanto bem cultural tombado na Penha e testemunho da presença do negro no município; e a organização da Festa do Rosário dos Homens Pretos da Penha de França.</p>
                    <p>A Comunidade é composta atualmente por pessoas físicas, representantes de coletivos artísticos e culturais, de pastorais afros, representantes de associações sem fins lucrativos, que regularmente participam das reuniões de trabalho e estão compromissadas com a promoção da cultura afro-brasileira no bairro e fora dele.</p>
                    <a href="https://largodorosario.blogspot.com/" target="_blank">Saiba Mais</a>
                </div>
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



</body>

</html>