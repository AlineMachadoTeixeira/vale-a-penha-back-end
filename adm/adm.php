

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vale a penha / adm</title> 
  
  <!-- Google Fonts -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
          <li><a href="#minhaconta" class="nav-link scrollto active"><i class='bx bx-notepad'></i>
              <span>Tabela</span></a>
          </li>


          <li><a href="#sair" class="nav-link scrollto"><i class="bx bx-run"></i> <span>Sair</span></a>
          </li>
      </nav>
    </div>    
  </header>

  <main class="comerciante">

    <!-- ======= Tabela ======= -->
    <section id="minhaconta" class="minhaconta">
      <div class="container">

        <div class="section-title">
          <h2>Adm</h2>
        </div>

        <table>

          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Nascimento</th>
            <th>link_instagram</th>
            <th>Nome Comercio</th>
            <th>Visualizar</th>
            <!-- <th colspan="2"> Status</th> -->
            <th> Status</th>
          </tr>

          

          <tr>
            <td>1</td>
            <td>Fulano</td>
            <td>12312312359</td>
            <td>11977388397</td>
            <td>a@gmail</td>
            <td>20/20/2020</td> 
            <td>https://www.instagram.com/papelariacopypen/</td>            
            <td>Papel Copy</td>
            <td>Visualizar</td>
            <td>Ativo ou Inativo</td>
          </tr>


          
        </table>

    </section>

  </main>

  <!-- ======= Rodapé======= -->
  <footer class="comerciante__rodape">    
      <div class="comerciante__rodape__p">
        <p>Vale a Penha 2023. Alguns direitos reservados &copy;</p>
      </div>    
  </footer>



  <script src="../assets/js/comerciante.js"></script>

</body>

</html>