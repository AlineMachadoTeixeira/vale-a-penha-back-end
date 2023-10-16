<?php
require_once "conecta.php";
 // Ler a tabela comerciantes 
 function lerComerciantes(PDO $conexao):array{
    $sql = "SELECT * FROM comerciantes ORDER BY nome"; 

    try {
        $consulta = $conexao->prepare($sql);

        $consulta-> execute();

        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $erro){
        die("Erro ao ler comerciantes" .$erro->getMessage());
    }

    return $resultado;

 } // Fim Ler a tabela comerciantes


 // Cadastar/Inserir Comerciantes 
 function cadastarComerciante(
    PDO $conexao,
    string $nome,
    string $sobrenome,
    string $cpf,
    string $telefone,
    string $email,
    string $data_de_nascimento,
    string $senha,
    // Falta status   // (ativo e inativo)


 ):void{
    $sql = "INSERT INTO comerciantes(
                nome,
                sobrenome,
                cpf,
                telefone,
                email,
                data_de_nascimento,
                senha
            )
            VALUES(
                :nome,
                :sobrenome,
                :cpf,
                :telefone,
                :email,
                :data_de_nascimento,
                :senha
            )";

    try{
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":nome", $nome, PDO::PARAM_STR);
        $consulta->bindValue(":sobrenome", $sobrenome, PDO::PARAM_STR);
        $consulta->bindValue(":cpf", $cpf, PDO::PARAM_STR);
        $consulta->bindValue(":telefone", $telefone, PDO::PARAM_STR);
        $consulta->bindValue(":email", $email, PDO::PARAM_STR);
        $consulta->bindValue(":data_de_nascimento", $data_de_nascimento, PDO::PARAM_STR);
        $consulta->bindValue(":senha", $senha, PDO::PARAM_STR);

        $consulta->execute();
        
    }catch (Exception $erro){
        die ("Erro ao cadastrar/inserir comerciante:" . $erro->getMessage());
    }



 } //Fim Cadastar/Inserir Comerciantes 


 // Ler apenas um comerciante da página minha conta ///// Esse deu erro
 function lerUmComerciante(PDO $conexao, int $id,):array{
    $sql = "SELECT * FROM comerciantes WHERE id = :id";
    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":id", $id, PDO::PARAM_INT);    

        $consulta->execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro ao carregar dados: ".$erro->getMessage());
    }    
    return $resultado;
 } //Ler apenas um comerciante da página minha conta Deu erro


  // Atualizar cadastro na página comerciantes minha conta 
  function atualizarComerciante(
    PDO $conexao,
    int $id,
    string $nome,
    string $sobrenome,
    string $cpf,
    string $telefone,
    string $email,
    string $data_de_nascimento,

 ):void{
    $sql = "UPDATE comerciantes SET
                nome = :nome,
                sobrenome = :sobrenome,
                cpf = :cpf,
                telefone = :telefone
                email :email,
                data_de_nascimento = :data_de_nascimento
                WHERE id = :id";         

    try{
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":id", $id, PDO::PARAM_INT);
        $consulta->bindValue(":nome", $nome, PDO::PARAM_STR);
        $consulta->bindValue(":sobrenome", $sobrenome, PDO::PARAM_STR);
        $consulta->bindValue(":cpf", $cpf, PDO::PARAM_STR);
        $consulta->bindValue(":telefone", $telefone, PDO::PARAM_STR);
        $consulta->bindValue(":email", $email, PDO::PARAM_STR);
        $consulta->bindValue(":data_de_nascimento", $data_de_nascimento, PDO::PARAM_STR);
        
        $consulta->execute();
    }catch (Exception $erro){
        die ("Erro ao atualizar minha conta" . $erro->getMessage());
    }



 } //Fim Atualizar cadastro na página comerciantes minha conta 

