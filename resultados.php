<?php
require_once "inc/cabecalho.php";

require_once "../vendor/autoload.php";

use ValeaPenha\Comerciante;
$comecio = new Comerciante;

if($quantidade > 0){
?>
   <h2 class="fs-5">Resultados: <span><?=$quantidade?></span></h2>
   <div class="list-group">
      <?php foreach($resultado as $itemNoticias){?>
        <a class="list-group-item list-group-item-action" href="noticia.php?id=<?= $itemNoticias['id']?>">
           <?= $itemNoticias['titulo']?>
        </a>

      <?php }?>
   </div>

<?php } else {?>
    <h2 class="fs-5 text-danger"> Sem Notícias</h2>
<?php
}
?>

<p class="descricao">Na Penha temos muitos comércios locais que vale a pena conhecer.</p>
<p class="descricao__dois">Quer destacar o seu negócio no nosso bairro? Alcance moradores e visitantes interessados em seus produtos e serviços. Clique <a href="cadastro.php">aqui</a> e faça seu cadastro .</p>
<section class="container">


    <?php foreach ($dadosComercios as $itemComercio) { ?>
        <article class="cards">
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








