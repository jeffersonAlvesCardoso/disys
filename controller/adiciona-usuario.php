<?php 
require_once("../cabecalho.php");
require_once("../model/banco.php");
require_once("../class/Usuario.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$usuario = new Usuario("", $nome, $email, $senha);

if(insereUsuario($conexao, $usuario)) { 

	$_SESSION["success"] = "O usuario ". $usuario->getNome()." foi adicionado.";
	header("Location: ../usuario-lista.php");

} else {
	$msg = mysqli_error($conexao);

	$_SESSION["danger"] = "O usuario ".$usuario->getNome()." não foi adicionado: ".$msg;
	header("Location: ../usuario-formulario.php");

}
?>

<?php include("rodape.php"); ?>