<?php
namespace ValeaPenha;
use PDO, Exception;

abstract class Banco{
    private static string $servidor = "localhost";
    private static string $usuario = "root";
    private static string $senha = "";
    private static string $banco = "vale_a_penha";
    private static PDO $conexao = null;

    public static function conecta():PDO {
        /* Só conecte se não houver conexão ...
        Se a conexão for nula, faça as ações do try/catch */
        if(self::$conexao === null){
            try {
                self::$conexao = new PDO(
                    "mysql:host=".self::$servidor."; 
                    dbname=".self::$banco.";
                    charset=utf8",
                    self::$usuario, 
                    self::$senha
                );
                self::$conexao->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $erro) {
                die("Algo deu errado: ".$erro->getMessage());
            }
           
        } 

        return self::$conexao;  
    }


}