<?php
require_once "inc/cabecalho.php";

require_once "vendor/autoload.php";

use ValeaPenha\Comerciante;

$comercio = new Comerciante;

$comercio->setTermo($_GET["busca"]);

$comercio->setStatus("ativo");


$resultado = $comercio->busca();


$quantidade = count($resultado);

if ($quantidade > 0) {
?>
   
   <p class="descricao">Resultados da busca: <span class="resultado"> <?= $quantidade ?> </span></p>
   <!-- <p class="descricao__dois">Quer destacar o seu negócio no nosso bairro? Alcance moradores e visitantes interessados em seus produtos e serviços. Clique <a href="cadastro.php">aqui</a> e faça seu cadastro .</p> -->
   
   <section class="container">


      <?php foreach ($resultado as $itemComercio) { ?>
         <article class="cards">
            <img class="cards-img redimensionar" src="imagens/<?= $itemComercio["imagem"] ?>" alt="Comida da Padaria Requinte">

            <h3><?= $itemComercio["nome_comercio"] ?></h3>
            <p><?= $itemComercio["descricao"] ?> </p>

            <a target="_blank" href="<?= $itemComercio["link_instagram"] ?>"><img src="assets/images/instagram.svg" alt="logo instagram"></a>
         </article>
      <?php } ?>

   </section>
   
     
   

<?php } else { ?>
   <p class="descricao"> Não encontramos nenhum resultado para sua busca!</p>
<?php
}
?>



<?php
require_once "inc/rodape.php";
?>