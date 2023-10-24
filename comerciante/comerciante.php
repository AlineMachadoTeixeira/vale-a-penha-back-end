<?php
require_once "../vendor/autoload.php";

use ValeaPenha\ControleDeAcesso;
use ValeaPenha\Usuario;
use ValeaPenha\Comerciante;

$sessao = new ControleDeAcesso;
$sessao->verificaAcesso();

$usuario = new Usuario;

$usuario->setId($_SESSION['id']);
$dados = $usuario->listarUmUsuario();

/* Se o parâmetro "sair" existeir (algo que acontece quando o usuário clica no link "SAIR"), então faça o logout do sistema */
if (isset($_GET['sair'])) $sessao->logout();

/* Script para atualização da Minha conta  */
if(isset($_POST['alterar_Cadastro'])){	
	$usuario->setNome($_POST['nome']);

	$usuario->setSobrenome($_POST['sobrenome']);

	$usuario->setCpf($_POST['cpf']);

    $usuario->setTelefone($_POST['telefone']);

    $usuario->setEmail($_POST['email']);

    $usuario->setData($usuario->formatarDataParaBanco($_POST["data"]));     
	
	//SENHA
	if(empty($_POST['senha'])){
		
		$usuario->setSenha($dados['senha']);
	}else{
		
		$usuario->setSenha(
			$usuario->verificarSenha($_POST['senha'], $dados['senha'])
		);
	}

	$usuario->atualizarUsuarios();
	header("location:comerciante.php");	
}


/* Script para inserir/cadastrar comercio na  Cadastrar Comércio */
if(isset($_POST['cadastrar_comercio'])){
    $comercio = new Comerciante;

    $comercio->setImagem($_POST['imagem']);
    $comercio->setNomeComercio($_POST['nome_comercio']);
    $comercio->setDescricao($_POST['descricao']);
    $comercio->setLinkInstagram($_POST['link_instagram']);       

	  $comercio->inserirComercio();
	  // header("location:login.php");

  // Falta fazer aparecer uma caixa no comercio. Falando comercio cadastrado. Aguarde! 
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vale a penha / comerciante</title>


  <!-- Favicons -->


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
          <li><a href="#minhaconta" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>Minha
                Conta</span></a>
          </li>

          <li><a href="#cadastrarcomercio" class="nav-link scrollto"><i class="bx bx-clipboard"></i> <span>Cadastrar
                Comércio</span></a>
          </li>

          <li><a href="#ajuda" class="nav-link scrollto"><i class="bx bx-help-circle"></i> <span>Ajuda</span></a>
          </li>

          <li><a href="#gerenciarcomercio" class="nav-link scrollto"><i class="bx bx-copy-alt"></i> <span>Gerenciar
                Comércio</span></a>
          </li>

          <li><a href="?sair" class="nav-link scrollto"><i class="bx bx-run"></i> <span>Sair</span></a>
          </li>
      </nav>
    </div>
  </header>



  <main class="comerciante">

    <!-- ======= Minha Conta ======= -->
    <section id="minhaconta" class="minhaconta">
      <div class="container">

        <div class="section-title">
          <h2>Minha Conta</h2>

        </div>

        <form class="comerciante__formulario  " action="" method="post" id="form">

          <div class="comerciante__sobrenome">
            <!-- Nome -->
            <div class="comerciante__input">
              <label for="nome">Nome:</label>
              <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome" value="<?= $dados['nome'] ?>" required>
            </div>

            <!-- Sobrenome -->
            <div class="comerciante__input">
              <label for="sobrenome">Sobrenome:</label>
              <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome" value="<?= $dados['sobrenome'] ?>" required>
            </div>
          </div>

          <div class="comerciante__campos">
            <div class="comerciante__sobrenome">
              <!-- CPF -->
              <div class="comerciante__input">
                <label for="cpf">CPF</label>
                <input id="cpf" type="text" name="cpf" placeholder="Digite seu CPF" required maxlength="14" value="<?= $dados['cpf'] ?>">
              </div>

              <!-- Telefone -->
              <div class="comerciante__input">
                <label for="telefone">Telefone:</label>
                <input id="telefone" type="text" name="telefone" placeholder="(xx) xxxxx-xxxx" required maxlength="14" value="<?= $dados['telefone'] ?>">
              </div>
            </div>

            <!-- E-mail -->
            <div class="comerciante__input">
              <label for="email">E-mail:</label>
              <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required value="<?= $dados['email'] ?>">
            </div>

            <!-- Senha -->
            <div class="comerciante__input">
              <label for="senha">Senha:</label>
              <input id="senha" type="password" name="senha" autocomplete="current-password" value="" placeholder="Preencha apenas se for alterar">
            </div>

            <!-- Data de Nascimento -->
            <div class="comerciante__input">
              <label for="data">Data de Nascimento:</label>
              <input id="data" type="date" name="data" placeholder="Digite sua Data de Nascimento" required value="<?= $dados['data'] ?>">
            </div>     



            <div class="botao__enviar">
              <button type="submit" id="submit" name="alterar_Cadastro">Alterar Cadastro</button>
            </div>

        </form>


      </div>
    </section><!-- Fim Minha conta -->


    <!-- ======= Cadastrar Comércio ======= -->
    <section id="cadastrarcomercio" class="cadastrarcomercio">
      <div class="container">

        <div class="section-title">
          <h2>Cadastrar Comércio</h2>

        </div>

        <form class="comerciante__formulario" action="" method="post">


          <!-- FOTO comercio-->
          <div class="file-wrapper">
            <input type="file" class="comerciante__foto__image" name="upload-img" accept="image/*" />
            <div class="close-btn">x</div>
          </div>


          <!-- Nome comercio  -->
          <div class="comerciante__input">
            <label class="titulo" for="titulo">Nome Comércio:
              <textarea rows="1" cols="33" name="titulo" id="titulo" required maxlength="40"> </textarea>
            </label>
          </div>

          <!-- Descrição  -->
          <div class="comerciante__input">
            <label for="descricao">Descrição:
              <textarea rows="5" cols="33" name="descricao" id="descricao" required maxlength="70"></textarea>
            </label>
          </div>

          <!-- Instagram Link -->
          <div class="comerciante__input">
            <label for="instagram">Instagram:</label>
            <input type="url" name="instagram" id="instagram" placeholder="Link do instagram" required>

          </div>
          <div class="botao__enviar">
            <button type="submit" id="submit" name="cadastrar_comercio">Enviar</button>

          </div>

        </form>

        <p class="paragrafo__dicas">Dicas</p>

        <ul class="ul__dicas">

          <li>É permitido um anúncio por usuário/CPF. </li>
          <li>Limite de 1 foto.</li>
          <li>Tamanho: 300 x 300(máximo) e com boa resolução. </li>
          <li>Caso sua imagem seja maior, use o link para redimencionar: <a href="https://www.iloveimg.com/pt/redimensionar-imagem">redimencionar imagem </a> </li>
          <li>Título de até 15 caracteres</li>
          <li>Descrição com até 30 caracteres.</li>
        </ul>

      </div>
    </section><!-- Fim Cadastrar Comércio -->


    <!-- ======= Ajuda ======= -->
    <section id="ajuda" class="ajuda">
      <div class="container">

        <div class="section-title">
          <h2>Ajuda</h2>
          <p class="comerciante__paragrafo">Caso tenha alguma dúvida, nos envie uma mensagem e aguarde a resposta em seu
            email. O tempo de resposta é de até 48 horas.</p>

        </div>

        <form class="comerciante__formulario" id="form" action="https://formspree.io/f/mvonybwj" method="post">

          <!-- E-meil -->
          <div class="comerciante__input">
            <label for="email">Email:
              <input type="email" name="email" id="email" placeholder="E-mail" required>
            </label>
          </div>
          <!-- Mensagem Ajuda -->
          <div class="comerciante__input">
            <label for="mensagem">Mensagem:
              <textarea rows="10" cols="33" name="mensagem" id="mensagem" required></textarea>
            </label>
          </div>
          <div class="botao__enviar">
            <button type="submit" id="submit" name="enviar">Enviar</button>
            <p id="status"></p>
          </div>

        </form>

      </div>
    </section><!-- Fim Ajuda -->


    <!-- ======= Gerenciar Comércio ======= -->
    <section id="gerenciarcomercio" class="gerenciarcomercio">
      <div class="container">

        <div class="section-title">
          <h2>Gerenciar Comércio</h2>

        </div>

        <form class="comerciante__formulario" action="" method="post">


          <!-- FOTO comercio-->
          <div class="comerciante__input">
            <div class="file-wrapper">
              <input type="file" name="upload-img" accept="image/*" />
              <div class="close-btn">x</div>
            </div>
          </div>

          <!-- Nome comercio  -->
          <div class="comerciante__input">
            <label class="titulo" for="titulo">Nome Comércio:
              <textarea rows="1" cols="33" name="titulo" id="titulo" required> </textarea>
            </label>
          </div>

          <!-- Descrição  -->
          <div class="comerciante__input">
            <label for="descricao">Descrição:
              <textarea rows="5" cols="33" name="descricao" id="descricao" required></textarea>
            </label>
          </div>

          <!-- Instagram Link -->
          <div class="comerciante__input">
            <label for="instagram">Instagram:</label>
            <input type="url" name="instagram" id="instagram" placeholder="Link do instagram" required>

          </div>
          <div class="botao__enviar">
            <button type="submit" id="submit" name="enviar">Enviar</button>

          </div>
        </form>

      </div>
    </section><!-- Fim Gerenciar Comércio -->

  </main>

  <!-- ======= Footer ======= -->
  <footer class="comerciante__rodape">
    <div>
      <div class="comerciante__rodape__p">
        <p>Vale a Penha 2023. Alguns direitos reservados &copy;</p>
      </div>

    </div>
  </footer><!-- End  Footer -->



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="../assets/js/comerciante.js"></script>
  <script src="../assets/js/mascara-cpf-tel.js"></script>


</body>

</html>