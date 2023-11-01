<?php

require_once "vendor/autoload.php";

use ValeaPenha\Comerciante;

$comercio = new Comerciante;

$comercio->setStatus("ativo");
$comercio->categoria->setId("3");

$dadosComercios = $comercio->listarDestaque();


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazer / Vale a Penha</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/container.css">
    <style>
        .header {
            background-image: url(assets/images/banner-educacao.png);
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
            <h2>Educação</h2>
        </div>
    </header>
    <main>
        <p class="descricao">Quando o assunto é educação, existem diversas escolas no bairro. São instituições das redes pública e privada, de educação infantil, de ensinos fundamental, médio, técnico e superior. O bairro, inclusive, tem uma das maiores taxas de crianças inscritas em creches. São mais de 100 escolas na região da Penha.</p>

        <!-- Nossa senhora -->
        <article class="container">

            <?php foreach ($dadosComercios as $itemComercio) { ?>
                <section class="section-direita">

                    <img class="section-img" src="imagens/<?= $itemComercio['imagem']?>" alt="">
                    <div class="section-texto">

                        <h4><?= $itemComercio['nome_comercio']?></h4>
                        <p><?= $itemComercio['descricao']?></p>
                        <address><a target="_blank" href="<?= $itemComercio['link_instagram']?>">Link Instragram:</a></address>
                    </div>

                </section>
                <?php }  ?>
                



            <!-- Santos Dummont -->

            <!-- <h4>EE Nossa Senhora da Penha</h4>
                        <p>A Escola Estadual Nossa Senhora da Penha, inicialmente chamada de Colégio (ou Ginásio) Estadual da Penha, foi inaugurada em 1952. É uma escola pública localizada no centro do bairro e destinada ao ensino meio.</p> -->
            <!-- <section class="section-esquerda">
                <img class="section-img" src="assets/images/santos-dummont.jpg" alt="Foto Escola Santos Dummont ">
                <div class="section-texto">
                    <h4>Santos Dummont</h4>
                    <p> Inaugurada em 1913, o Santos Dummont foi a primeira escola do bairro da Penha. É uma escola pública voltada ao ensino fundamental.
                    </p>
                    <address><a target="_blank" href="https://www.google.com/maps/place/EE+Santos+Dumont/@-23.523897,-46.5487677,15z/data=!4m6!3m5!1s0x94ce5e5140e5556d:0x4780e33fced3eb8d!8m2!3d-23.523897!4d-46.5487677!16s%2Fg%2F1td2cgjw">Endereço: Praça Oito de Setembro, 73 - Penha de França, São Paulo - SP, 03603-030</a> </address>
                </div>
            </section> -->

            <!-- Barão de Ramalho -->
            <!-- <section class="section-direita">
                <img class="section-img" src="assets/images/barao-de-ramalho.jpg" alt="Foto EE Barão de Ramalho">

                <div class="section-texto">
                    <h4>EE Barão de Ramalho</h4>
                    <p>É uma escola da rede pública voltada ao ensino fundamental e médio.</p>
                    <address><a target="_blank" href="https://www.google.com/maps/place/EE+Barão+de+Ramalho/@-23.52219,-46.5386695,15z/data=!4m2!3m1!1s0x0:0xee258f8380f498c3?sa=X&ved=2ahUKEwi3tKyPl_f-AhVECtQKHYCgCmMQ_BJ6BAg8EAg"> Endereço: Av. Amador Bueno da Veiga, 604 - Penha de França, São Paulo - SP, 03636-000</a></address>

                </div>
            </section> -->

            <!-- São Vicente de Paulo -->
            <!-- <section class="section-esquerda">
                <img class="section-img" src="assets/images/sao-vicnte-de-paulo-penha.jpg" alt="Foto Colégio São Vicente de Paulo">

                <div class="section-texto">
                    <h4>Colégio São Vicente de Paulo</h4>
                    <p>O Colégio São Vicente de Paulo, fundado em 1918, é o mais antigo da Rede Educacional Vicentina e é tombado como patrimônio histórico e cultural.É uma escola da rede privada.</p>
                    <address><a target="_blank" href="https://www.google.com/maps/place/Praça+Nossa+Sra.+da+Penha,+161+-+Penha+de+França,+São+Paulo+-+SP,+03632-010/@-23.5261868,-46.554391,17z/data=!3m1!4b1!4m10!1m2!2m1!1sPraça+Nossa+Sra.+da+Penha,+161+Penha+-+São+Paulo%2FSP+5*214d-46.5178788*2116s%252Fg%252F11f29xxwx4!3m6!1s0x94ce5e50d6d687c1:0x510fd2b6742326b8!8m2!3d-23.5261918!4d-46.5495255!15sClpQcmHDp2EgTm9zc2EgU3JhLiBkYSBQZW5oYSwgMTYxIFBlbmhhIC0gU8OjbyBQYXVsby9TUCA1ITRkLTQ2LjUxNzg3ODghMTZzJTJGZyUyRjExZjI5eHh3eDSSARBnZW9jb2RlZF9hZGRyZXNz4AEA!16s%2Fg%2F11fk3cm2v3">Endereço: Praça Nossa Sra. da Penha, 161Penha - São Paulo/SP</a> </address>
                </div>
            </section> -->

            <!-- Fereguetti -->
            <!-- <section class="section-direita">
                <img class="section-img" src="assets/images/colegio-fereguetti.jpg" alt="Foto Colégio Fereguetti">

                <div class="section-texto">
                    <h4>Colégio Fereguetti</h4>
                    <p>Referência na zona leste, atende os alunos desde o berçário até o ensino médio. É uma escola da rede privada </p>
                    <address><a target="_blank" href="https://www.google.com/maps/place/Rua+Cumanaxos,+88+-+Penha+de+França,+São+Paulo+-+SP,+03613-010/data=!4m2!3m1!1s0x94ce5e36fcd52031:0x9df439123a1ebc5b?sa=X&ved=2ahUKEwiY4MLYl_f-AhXPHLkGHayJASAQ8gF6BAgQEAI">Endereço: Rua Cumanaxos, 88 - Penha de França, São Paulo - SP, 03613-010</a> </address>
                </div>
            </section> -->

            <!-- Senac Penha -->
            <!-- <section class="section-esquerda">
                <img class="section-img" src="assets/images/senac.medio.jpg" alt="Foto Senac Penha">

                <div class="section-texto">
                    <h4>Senac Penha</h4>
                    <p>Para quem deseja dar um salto na vida profissional, vale a pena conhecer o Senac Penha. A unidade tem uma grande variedade de cursos livres, técnicos, aprendizagem e cursos EAD. A unidade oferece cursos pagos e gratuitos, através de bolsas de estudo.</p>
                    <address><a target="_blank" href="https://www.google.com/maps?client=opera-gx&q=R.+Francisco+Coimbra,+403+-+Penha+de+França,+São+Paulo+-+SP,+03639-0006!4d-46.5325147!16s%252Fg%252F11c5l2ns3p&oe=UTF-8&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjo_4Hfl_f-AhUFIbkGHT2ECxYQ_AUoAXoECAEQAw">Endereço: R. Francisco Coimbra, 403 - Penha de França, São Paulo - SP, 03639-000</a> </address>
                </div>
            </section> -->



            <!-- Etec Professor Aprígio Gonzaga-->
            <!-- <section class="section-direita">
                <img class="section-img" src="assets/images/etec.jpg" alt="Foto Etec Professor Aprígio Gonzaga">

                <div class="section-texto">
                    <h4>Etec Professor Aprígio Gonzaga</h4>
                    <p> A Etec é uma instituição pública que oferece diversos cursos de ensino técnico e integrados ao ensino médio.</p>
                    <address><a target="_blank" href="https://www.google.com/maps/place/ETEC+Professor+Aprígio+Gonzaga/@-23.5310274,-46.5391507,15z/data=!4m6!3m5!1s0x99703f1761823b:0x2f60790fa01b84cd!8m2!3d-23.5310274!4d-46.5391507!16s%2Fg%2F1tz96zf8"> Endereço: Av. Dr. Orêncio Vidigal, 212 - Vila Carlos de Campos, São Paulo - SP, 03640-010</a></address>
                </div>
            </section> -->

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