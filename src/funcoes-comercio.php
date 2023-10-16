<?php
require_once "conecta.php";
 // Ler a tabela comercios
 function lerComercio(PDO $conexao):array{
    $sql = "SELECT * FROM comercios ORDER BY nome"; 

    try {
        $consulta = $conexao->prepare($sql);

        $consulta-> execute();

        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $erro){
        die("Erro ao ler comercio" .$erro->getMessage());
    }

    return $resultado;

 } // Fim Ler a tabela comercios
 

 // Cadastar/Inserir comercios
 function cadastarComerciante(
    PDO $conexao,
    string $imagem,
    string $nome_comercio,
    string $descricao,
    string $link_instagram,
    string $comerciante_id,
    
    


 ):void{
    $sql = "INSERT INTO comercios(
                imagem,
                nome_comercio,
                descricao,
                link_instagram,
                comerciante_id
            )
            VALUES(
                :imagem,
                :nome_comercio,
                :descricao,
                :link_instagram,
                :comerciante_id
            )";

    try{
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":imagem,", $imagem, PDO::PARAM_STR);
        $consulta->bindValue(":nome_comercio", $nome_comercio, PDO::PARAM_STR);
        $consulta->bindValue(":descricao", $descricao, PDO::PARAM_STR);
        $consulta->bindValue(":link_instagram", $link_instagram, PDO::PARAM_STR);
        $consulta->bindValue(":comerciante_id", $comerciante_id, PDO::PARAM_STR);        
        
        $consulta->execute();

    }catch (Exception $erro){
        die ("Erro ao cadastrar/inserir comerciante:" . $erro->getMessage());
    }



 } //Fim Cadastar/Inserir Comercios 
