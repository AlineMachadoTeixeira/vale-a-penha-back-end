<?php
use ValeaPenha\ControleDeAcesso;
use ValeaPenha\Usuario;
require_once "../vendor/autoload.php";
$sessao = new ControleDeAcesso;
$sessao->verificaAcesso();


$usuario = new Usuario;
$usuario->setId($_GET ['id']);
$usuario->atualizarTipoUsuario();
header("location:adm.php");