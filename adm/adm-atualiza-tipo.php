<?php
use ValeaPenha\ControleDeAcesso;
use ValeaPenha\Usuario;
require_once "../vendor/autoload.php";
$sessao = new ControleDeAcesso;
$sessao->verificaAcesso();
$sessao->verificarAcessoAdmin();


$usuario = new Usuario;
$usuario->setTipo($_SESSION['tipo']);
$usuario->setId($_GET ['id']);
$usuario->atualizarTipoUsuario();
header("location:adm.php");