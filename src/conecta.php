<?php
 //Acho que é parecido com o inserir alunos  Pagina Cadastro

 require_once "src/funcoes-comerciantes.php";
 require_once "src/funcoes-utilitarias.php";


if (isset($_POST['cadastro'])) {    

    //Nome
    $nome = filter_input(
        INPUT_POST,
        "nome",
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    //Sobrenome
    $sobrenome = filter_input(
        INPUT_POST,
        "sobrenome",
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    //CPF
    $cpf = filter_input(
        INPUT_POST,
        "cpf",
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    //Telefone
    $telefone = filter_input(
        INPUT_POST,
        "telefone",
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    //E-mail
    $email = filter_input(
        INPUT_POST,
        "email",
        FILTER_SANITIZE_EMAIL
    );        

    //Data de Nascimento     
    $data_de_nascimento = filter_input(
        INPUT_POST,
        "data_de_nascimento",
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    //Senha
    $senha = password_hash("senha", PASSWORD_DEFAULT);  
    
    //Inserir o cadastro no banco INSERT 
    cadastarComerciante(
        $conexao,
        $nome,
        $sobrenome,
        $cpf,
        $telefone,
        $email,
        formatarDataParaBanco($data_de_nascimento),
        $senha
    );
    
   

    
    // var_dump($nome, $sobrenome, $cpf, $telefone, $email, $confimaremail, $senha, $confirmesenha, $data);
    //voltar para pagina login assim que finaliza o cadastro
    header("location:login.php");
}
?>



 
<?php
// Pagina adm
require_once "../src/funcoes-comerciantes.php";
//require_once "src/funcoes-utilitarias.php";

$listaDeComerciantes = lerComerciantes($conexao);
?>



<?php 
            foreach ($listaDeComerciantes  as $dadosComerciantes ){       
           ?>

          <tr>
            <td><?=$dadosComerciantes["id"]?></td>
            <td><?=$dadosComerciantes["nome"]?></td>
            <td><?=$dadosComerciantes["cpf"]?></td>
            <td><?=$dadosComerciantes["telefone"]?></td>
            <td><?=$dadosComerciantes["email"]?></td>
            <td><?=$dadosComerciantes["data_de_nascimento"]?></td> <!-- Nacimento -->
            <td>https://www.instagram.com/papelariacopypen/</td>            
            <td>Papel Copy</td>
            <td>Visualizar</td>
            <td>Ativo ou Inativo</td>
          </tr>

          <?php       
            }
          ?> 



<?php

//Pagina comerciante

//Acho que é parecido com o inserir alunos

require_once "../src/funcoes-comerciantes.php";
require_once "../src/funcoes-utilitarias.php";

$listaDeComerciantes = lerComerciantes($conexao);

 //$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
 //$comerciante = lerUmComerciante($conexao, $id);





if (isset($_POST['alterar'])) {
   

   //Nome
   $nome = filter_input(
       INPUT_POST,
       "nome",
       FILTER_SANITIZE_SPECIAL_CHARS
   );

   //Sobrenome
   $sobrenome = filter_input(
       INPUT_POST,
       "sobrenome",
       FILTER_SANITIZE_SPECIAL_CHARS
   );

   //CPF
   $cpf = filter_input(
       INPUT_POST,
       "cpf",
       FILTER_SANITIZE_SPECIAL_CHARS
   );

   //Telefone
   $telefone = filter_input(
       INPUT_POST,
       "telefone",
       FILTER_SANITIZE_SPECIAL_CHARS
   );

   //E-mail
   $email = filter_input(
       INPUT_POST,
       "email",
       FILTER_SANITIZE_EMAIL
   );        

   //Data de Nascimento     
   $data_de_nascimento = filter_input(
       INPUT_POST,
       "data_de_nascimento",
       FILTER_SANITIZE_SPECIAL_CHARS
   );

   //Senha
   $senha = password_hash("senha", PASSWORD_DEFAULT);  
   
   //Inserir o cadastro no banco INSERT 
    // atualizarComerciante(
    //    $conexao,
    //    $id,
    //    $nome,
    //    $sobrenome,
    //    $cpf,
    //    $telefone,
    //    $email,
    //    formatarDataParaBanco($data_de_nascimento)
  
    // );     
   //voltar para pagina login assim que finaliza o cadastro
   //header("location:login.php");
}
?>