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