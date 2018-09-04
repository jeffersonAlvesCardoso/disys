<?php
require_once ("../cabecalho.php");
require_once ("../model/banco.php"); 

$id = $_POST['id'];
removeUsuario($conexao, $id);

$_SESSION["success"] = "Usuario removido com sucesso.";
header("Location: ../usuario-lista.php");

die();

?>