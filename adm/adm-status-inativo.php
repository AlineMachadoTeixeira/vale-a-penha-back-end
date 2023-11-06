<?php

/* Output  Buffer (gerenciamento de memória de saída) */
ob_start();

use ValeaPenha\Usuario;
use ValeaPenha\ControleDeAcesso;
use ValeaPenha\Comerciante;

require_once "../vendor/autoload.php";

$sessao = new ControleDeAcesso;
$sessao->verificaAcesso();

$sessao->verificarAcessoAdmin();

$usuario = new Usuario;
$usuario->setTipo($_SESSION['tipo']);

$comercio = new Comerciante;
$comercio->setStatus("inativo");
$listarTodos = $comercio->listarStatus();

//var_dump($listarTodos);


/* Se o parâmetro "sair" */
if (isset($_GET['sair'])){$sessao->logout();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vale a penha / adm</title>

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <!--  Estilo externo -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Estilo para foto  -->
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- Estilo para bolinha menu fechado -->
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> <!-- Icone do header  -->
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- CSS estilo interno -->
  <link rel="stylesheet" href="../assets/css/comerciante.css">
  <link rel="stylesheet" href="../assets/css/adm.css">
  <link rel="shortcut icon" href="../assets/images/logo-marmotazona.png" type="image/x-icon">

</head>

<body>
  <!-- Bolinha de navegação para tela pequena e celular -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <header id="header">
    <div>
      <div class="comerciante__logo">
        <img src="../assets/images/logo-vale-a-penha-quadrado.svg" alt="">
      </div>

      <!-- Achei esses icones nesse site https://boxicons.com/?query= -->
      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="adm.php" class="nav-link scrollto"><i class='bx bx-notepad'></i>
              <span>Controle de Usuários</span></a>
          </li>

          <li><a href="adm-status-inativo.php"  class="nav-link scrollto active"><i class='bx bx-toggle-left' ></i>
              <span>Status Inativos</span></a>
          </li>

          <li><a href="adm-status-ativo.php" class="nav-link scrollto"><i class='bx bx-toggle-right'></i>
              <span>Status Ativos</span></a>
          </li>

          

          <li><a href="?sair" class="nav-link scrollto"><i class="bx bx-run"></i> <span>Sair</span></a>
          </li>
      </nav>
    </div>
  </header>

  <main class="comerciante">

    <!-- ======= Tabela Controle de suarios======= -->
    <section id="controleusuarios" class="controleusuarios">
      <div class="container">

        <div class="section-title">
          <h2>Usuários inativos</h2>
        </div>

        <table>

          <tr>
            <th>Id</th>
            <th>Nome</th>            
            <th>E-mail</th>
            
            <!-- <th colspan="3">Botões</th>  -->
            
            <th>Publicação</th>            
            <th>Excluir</th>
            <th>Status</th>
          </tr>

          <?php foreach ($listarTodos as $itemUsuario) { ?>
            <tr>
              <td><?= $itemUsuario["id"] ?></td>
              <td><?= $itemUsuario["nome"] ?></td>              
              <td><?= $itemUsuario["email"] ?></td>
              

              

              

              <!-- Publicação -->          

                <td class="adm__botao">
                  <a href="adm-publicacao.php?id=<?=$itemUsuario["id"]?>" class="nav-link scrollto active"><i class="bi bi-camera"></i>
                  </a>
                </td>                

              <!-- Excluir -->
              <td class="adm__botao  ">
                <a class="excluir" href="adm-excluir.php?id=<?= $itemUsuario["id"] ?>" class="nav-link scrollto active"><i class="bi bi-trash"></i>
                </a>
              </td>

              <td><?= $itemUsuario["status"] ?></td> <!-- Falta fazer o php para puxa status -->

            </tr>

          <?php } ?>

        </table>

    </section>



    

  <!-- ======= Rodapé======= -->
  <footer class="comerciante__rodape">
    <div class="comerciante__rodape__p">
      <p>Vale a Penha 2023. Alguns direitos reservados &copy;</p>
    </div>
  </footer>



  <script src="../assets/js/comerciante.js"></script>
  <script src="../assets/js/confirma-exclusao.js"></script>

</body>

</html>

<?php 
/* Finalizar o Output Buffere (gerenciamento de memória de saída) */
ob_end_flush(); 
?>