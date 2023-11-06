<?php
require_once "inc/cabecalho.php";

require_once "vendor/autoload.php";

use ValeaPenha\Comerciante;

$comercio = new Comerciante;

$comercio->setStatus("ativo");
$comercio->categoria->setId("3");

$dadosComercios = $comercio->listarDestaque();


?>

        <p class="descricao">Na região da Penha, temos uma grande variedade educacional de redes públicas e privadas, com opções desde educação infantil até o ensino superior e técnico. Destaca-se, ainda, a alta adesão das crianças às creches, totalizando mais de 100 escolas na região.</p>

        <!-- Nossa senhora -->
        <article class="container">

            <?php foreach ($dadosComercios as $itemComercio) { ?>
                <section id="<?= $itemComercio["nome_comercio"]?>" class="section-educacao">

                    <img class="section-img" src="imagens/<?= $itemComercio['imagem']?>" alt="">
                    <div class="section-texto">

                        <h4><?= $itemComercio['nome_comercio']?></h4>
                        <p><?= $itemComercio['descricao']?></p>
                        <address><a target="_blank" href="<?= $itemComercio['link_instagram']?>">Link Instragram:</a></address>
                    </div>

                </section>
                <?php }  ?>

            

        </article>
        <?php
require_once "inc/rodape.php";
?>