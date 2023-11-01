<?php
namespace ValeaPenha;

final class ControleDeAcesso {
    public function __construct(){
        if(!isset ($_SESSION)){
            //Então inicialize uma seção
            session_start();
        }        
    }

    public function verificaAcesso():void{        
        if( !isset($_SESSION['id'])){
            
            session_destroy();
            header("location:../login.php"); //Falta a mensagem ../login.php?acesso_proibido" proibido acesso 
            die(); 
        } 
    }

    public function verificarAcessoAdmin():void {
        /* Se o tipo de usuário logado na sessão NÃO FOR admin */
        if($_SESSION["tipo"] !== "admin"){
            header("location:../nao-autorizado.php");
            die();
        }
            
    }

    public function verificarAcessoComerciante():void {
        /* Se o tipo de usuário logado na sessão NÃO FOR admin */
        if($_SESSION["tipo"] !== "comerciante"){
            header("location:../nao-autorizado.php");
            die();
        }
            
    }

    public function login(int $id, string $nome, string $tipo):void {
        /* No momento em que ocorre login, criamos variáveis de sessão contendo os dados que queremos monitorar/controlar/usar através da sessão enquanto a pessoa estiver logada */
        $_SESSION["id"] = $id;
        $_SESSION["nome"] = $nome;
        $_SESSION["tipo"] = $tipo;

    }

    public function logout():void {
        session_start();
        session_destroy();
        header("location:../login.php?logout");
        die();
    }

    
}
