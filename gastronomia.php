<?php
require_once "inc/cabecalho.php";

require_once "vendor/autoload.php";

use ValeaPenha\Comerciante;

$comercio = new Comerciante;

$comercio->setStatus("ativo");
$comercio->categoria->setId("1");

$dadosComercios = $comercio->listarDestaque();


?>

        <p class="descricao">A região da Penha tem diversas opções para uma boa alimentação que vale a pena conhecer: padarias, bares e restaurantes. Confira aqui algumas sugestões.</p>
        <p class="descricao__dois">Quer destacar o seu negócio no nosso bairro? Alcance moradores e visitantes interessados em seus produtos e serviços. Clique <a href="cadastro.php">aqui</a> e faça seu cadastro .</p>



        <section class="container">


            <?php foreach ($dadosComercios as $itemComercio) { ?>
                <article  id="<?= $itemComercio["nome_comercio"]?>"  class="cards">
                    <img class="cards-img redimensionar" src="imagens/<?= $itemComercio["imagem"] ?>" alt="Comida da Padaria Requinte">

                    <h3><?= $itemComercio["nome_comercio"] ?></h3>
                    <p><?= $itemComercio["descricao"] ?> </p>

                    <a target="_blank" href="<?= $itemComercio["link_instagram"] ?>"><img src="assets/images/instagram.svg" alt="logo instagram"></a>
                </article>
            <?php } ?>

        </section>


        <?php
require_once "inc/rodape.php";
?>