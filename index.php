<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vale a Penha</title>
    <link rel="shortcut icon" href="assets/images/logo-marmotazona.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/menu-tres.css">

    <!-- para icones  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
                    <a href="index.php"><img class="logo__principal" src="assets/images/logo-Vale-a-Penha.svg"
                            alt=""></a>
                    <!-- pesquisa -->
                    <!-- <input type="search" class="menu__pesquisa" placeholder="O que você procura?">       
                    <i class="material-symbols-outlined">search</i> -->

                    <!-- teste barra de pesquisa -->
                    <div class="pesquisa__lupa">
                        <input class="pesquisa__input" type="text" placeholder="Pesquisa">
                        <a class="pesquisa__link" href="">
                            <img class="pesquisa__lupa__img" src="assets/images/lupa-branco.svg" alt="Lupa">
                        </a>


                    </div>



                    <a  class="icone__menu__login" href="login.php"><img class="icone__menu" src="assets/images/icone-login-vermelho.svg" alt="Ícone login"></a>
                </h4>
            </nav>

        </div>
    </div>
    <!-- fim menu -->


    <header>
        <div class="header">
            <img src="assets/images/logo-Vale-a-Penha.svg" alt="logo Vale A Penha"> 
            <h1>Conhecer o nosso bairro!</h1>
            <h2>Início</h2>
        </div>
    </header>

    <main>
        <div id="conteiner__inicio">
            <section class="inicio__numeros">
                <div>
                    <h3>08</h3>
                    <p> de setembro é a data de <br> aniversário do bairro</p>
                </div>
                <div>
                    <h3>+ 128</h3>
                    <p>mil penhenses <br> de acordo com o último senso</p>
                </div>
                <div>
                    <h3>33</h3>
                    <p>subdistritos <br> que fazem parte do bairro</p>
                </div>
                <div>
                    <h3>1986</h3>
                    <p>foi o ano da chegada <br> do metro no bairro da Penha</p>
                </div>
            </section>
            <section class="inicio__historia">
                <div>
                    <h3>A Penha</h3>
                    <p>A Penha é um bairro bastante diversificado, com uma forte presença comercial, industrial e religiosa.</p>
                    <p>Além disso, o bairro conta com uma série de serviços, como escolas, metro, hospitais e postos de saúde, que atendem não só os moradores da Penha, mas também de outros bairros da cidade.</p>
                </div>

                <!-- Temperatura -->
                 <!-- <div id="cont_75a30a07297347aa5c03ac660365ea73"><script type="text/javascript" async src="https://www.tempo.com/wid_loader/75a30a07297347aa5c03ac660365ea73"></script></div>  -->

                 <!-- <iframe scrolling="no" frameborder="0" marginwidth="0" marginheight="0" width="100" height="100" src="https://selos.climatempo.com.br/selos/MostraSelo120.php?CODCIDADE=558&SKIN=padrao"></iframe>  -->

                <!-- <div id="c_446802e85341fdd9132f0c741d7a899c" class="mini"></div><script type="text/javascript" src="https://pt.eltiempo.es/widget/widget_loader/446802e85341fdd9132f0c741d7a899c"></script> -->         
                


                <section class="video">
                    <div class="video-area">
                        <iframe class="inicio__historia__video" width="560" height="315" src="https://www.youtube.com/embed/Xc6W4eH-ZTw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </section>
            </section>


            <section class="inicio__menu">
                <h3> Na região da Penha você encontra <span>tudo que precisa</span>.</h3>

                <div class="inicio__caixa">
                    <article class="inicio__section">
                        <a href="gastronomia.php">
                            <div class="inicio__caixa__botao">
                                <img class="inicio__img" src="assets/images/inicio-gastronomia.png" alt="imagem de frutas e legumes ">
                                <button class="inicio__botao">Gastronomia</button>
                            </div>
                        </a>
                    </article>

                    <article class="inicio__section"> 
                        <a href="lazer.php">
                            <div class="inicio__caixa__botao">
                                <img class="inicio__img" src="assets/images/inicio-lazer.png" alt="menina andando de bicicleta">
                                <button class="inicio__botao">Lazer</button>
                            </div>                           
                        </a>
                    </article>

                    <article class="inicio__section">
                        <a href="comercio-local.php">
                            <div class="inicio__caixa__botao">
                                <img class="inicio__img" src="assets/images/inicio-comercio.png" alt=" sacolas de compras">
                                <button class="inicio__botao">Comércio Local</button>
                            </div>                            
                        </a>
                    </article>

                    <article class="inicio__section">
                        <a href="educação.php">
                            <div class="inicio__caixa__botao">
                                <img class="inicio__img" src="assets/images/inicio-educacao.png" alt="sala de aula">
                                <button class="inicio__botao">Educação</button>
                            </div>                          
                        </a>
                    </article>

                    <article class="inicio__section">
                        <a href="cultura.php">
                            <div class="inicio__caixa__botao">
                                <img class="inicio__img" src="assets/images/inicio-cultura.png" alt="arte de confetes">
                                <button class="inicio__botao">Cultura</button>
                            </div>
                        </a>
                    </article>

                    <article class="inicio__section">
                        <a href="historia.php">
                            <div class="inicio__caixa__botao">
                                <img class="inicio__img" src="assets/images/inicio-historia.png" alt="igreja matriz de nossa Senhora da Penha foto antiga">
                                <button class="inicio__botao">História</button> 
                            </div>                           
                         </a>
                            
                    </article>
                </div>

            </section>
            <article class="inicio__mapa">

                <iframe class="inicio__mapa__mapa"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12216.285669617992!2d-46.554524587318525!3d-23.52380233446841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e51b4d72683%3A0x5a7009ad0acffd39!2sPenha%20de%20Fran%C3%A7a%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1683919195226!5m2!1spt-BR!2sbr"
                    width="1000" height="" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                <div>
                    <h3>Localização</h3>
                    <p>O bairro da Penha está em uma localização privilegiada de São Paulo, na região leste da cidade.</p>
                    <p>O bairro é cortado por importantes vias, como a Avenida Radial Leste, que é uma das principais artérias da cidade, a Avenida Celso Garcia, que liga o bairro ao centro da cidade, além de estar próximo da marginal tietê e ter acesso rápido ao Aeroporto Internacional de Guarulhos.</p>
                    <p> O bairro é atendido por diversas linhas de ônibus e pela Linha 3-Vermelha do Metrô.</p>
                </div>
            </article>

            <!-- Falta Fotos -->
            <section class="devs">
                <h3>Devs</h3>

                <div class="devs__conteudo">
                    <article class="devs_section">
                        <img src="assets/images/andre.jpg" alt="">
                        <p>André</p>
                    </article>
                    <article class="devs_section">
                        <img src="assets/images/aline.png" alt="">
                        <p>Aline</p>
                    </article>
                    <article class="devs_section">
                        <img src="assets/images/jhon.png" alt="">
                        <p>Jhon</p>
                    </article>
                    <article class="devs_section">
                        <img src="assets/images/eliel.png" alt="">
                        <p>Eliel</p>
                    </article>
                    <article class="devs_section">
                        <img src="assets/images/leandro.png" alt="">
                        <p>Leandro</p>
                    </article>
                    <article class="devs_section">
                        <img src="assets/images/logo-marmotazona.png" alt="">
                        <p>Marmotas!</p>
                    </article>
                </div>
            </section>
        </div>
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