<?php
require_once "inc/cabecalho.php";

require_once "vendor/autoload.php";

use ValeaPenha\Comerciante;

$comercio = new Comerciante;

$comercio->setStatus("ativo");
$comercio->categoria->setId("4");

$dadosComercios = $comercio->listarDestaque();


?>

        <p class="descricao">Não importa qual é o seu estilo, o bairro da Penha certamente tem aquilo que você precisa para se divertir e relaxar!</p>

        <!-- Nossa senhora -->
        <article class="container">

            <?php foreach ($dadosComercios as $itemComercio) { ?>
                <section class="section-educacao">

                    <img class="section-img" src="imagens/<?= $itemComercio['imagem']?>" alt="">
                    <div class="section-texto">

                        <h4><?= $itemComercio['nome_comercio']?></h4>
                        <p><?= $itemComercio['descricao']?></p>
                        <address class="sumir"><a target="_blank" href="<?= $itemComercio['link_instagram']?>">Link Instragram:</a></address>
                    </div>

                </section>
                <?php }  ?>

            

        </article>


<!-- <p class="descricao">Não importa qual é o seu estilo, o bairro da Penha certamente tem aquilo que você precisa para se divertir e relaxar!</p>
        <article class="container">
            <section class="section-direita">
                <img class="section-img" src="assets/images/parque-linear-tiquatira.jpg" alt="Pessoa correndo no Parque Linear Tiquatira">
                <div class="section-texto">
                    <h4>Parque Linear Tiquatira</h4>
                    <p>Quem curte a natureza pode aproveitar as belezas do primeiro parque linear de São Paulo, o Parque Linear Tiquatira. É uma ótima forma de curtir um pouco o verde sem precisar se deslocar para regiões mais afastadas. O parque conta com bosques, quiosques, sanitários e tem também quadras e pistas de skate e bicicross. Por lá também é possível levar seu bichinho de estimação para uma caminhada.
                    </p>
                </div>
            </section>
            <section class="section-esquerda">
                <img class="section-img" src="assets/images/shopping-center-penha.jpg" alt="Entrada dp Shopping Center Penha">
                <div class="section-texto">
                    <h4>Shopping Center Penha</h4>
                    <p>Ter um shopping perto de casa é sempre bom. São inúmeras opções de lojas, serviços, além das diversas opções de restaurantes e lanchonetes na praça de alimentação. É um ótimo lugar para realizar passeios com a família, especialmente em dias chuvosos. Além de tudo, o Shopping Penha também conta com um cinema moderno com seis salas Stadium.
                    </p>
                </div>
            </section>

            <section class="section-direita">
                <img class="section-img" src="assets/images/igreja-rosário-dos-homens-pretos-da-penha.jpg" alt="Pessoas na entrada da Igreja Rosário dos Homens Pretos da Penha">

                <div class="section-texto">
                    <h4>Igreja Rosário dos Homens Pretos da Penha</h4>
                    <p>Esta igreja, construída no início do século XX, é um importante patrimônio histórico da região. A igreja foi construída por trabalhadores negros e é um marco na história do bairro. Por este motivo, a igreja realiza anualmente a Festa do Rosário dos Homens Pretos, que já foi incluída no calendário oficial de São Paulo. </p>
                    <p>Esta festa reúne diversos grupos que realizam apresentações afro-brasileiras de maracatu, samba, congadas, entre outras. Também ocorrem durante todo o mês diversas atividades como apresentações teatrais, palestras, feiras, etc. Também é possível assistir a missas afro-brasileiras durante o mês de junho.
                    </p>
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
                <img class="section-img" src="assets/images/basilica-de-nossa-senhora-da-penha.jpg" alt="Foto da Basílica de Nossa Senhora da Penha">

                <div class="section-texto">
                    <h4>A Basílica de Nossa Senhora da Penha</h4>
                    <p>A Basílica de Nossa Senhora da Penha é uma das maiores e mais belas igrejas da cidade de São Paulo, que se destaca na parte mais alta da colina do bairro da Penha de França.</p>
                </div>
            </section>

            <section class="section-esquerda">
                <img class="section-img" src="assets/images/mercado-municipal-da-Penha.jpg" alt="Foto do Alto do Mercado Municipal da Penha">

                <div class="section-texto">
                    <h4>Mercado Municipal da Penha</h4>
                    <p>Outra boa opção de lazer é visitar o tradicional mercado municipal, que fica entre as avenidas Penha de França, Gabriela Mistral e Cangaíba. Por lá você encontra de tudo: açougue, restaurantes, peixaria, grãos, frios, floricultura, rotisseria entre diversos outros itens.</p>
                </div>
            </section>

            <section class="section-direita">
                <img class="section-img" src="assets/images/esportivo-da-penha.jpg" alt="Foto Clube Esportivo da Penha">

                <div class="section-texto">
                    <h4>Clube Esportivo da Penha</h4>
                    <p>Clube Esportivo da Penha é um clube particular fundado em 1º de janeiro de 1930 às margens do Rio Tietê, no bairro da Penha, em São Paulo. O clube possui parque aquático com cinco piscinas, campo de futebol, quadra de tênis, parque infantil, academia e espaço de eventos e festa.</p>
                </div>
            </section>

        </article> -->
<?php
require_once "inc/rodape.php";
?>