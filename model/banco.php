<?php

require("/../config/conecta.php");
require("/../class/Usuario.php");



function listaUsuario($conexao) {


	$usuarios = array();
	$resultado = mysqli_query($conexao, "select id, nome, email, senha from usuario");

	while($func_array = mysqli_fetch_assoc($resultado)) {

		$nome = $func_array['nome'];
		$email = $func_array['email'];
		$senha = $func_array['senha'];

		$usuario = new Usuario("", $nome, $email, $senha);
		$usuario->setId($func_array['id']);

		array_push($usuarios, $usuario);
	}

	return $usuarios;
}


function insereUsuario($conexao, $usuario) {
	$query = "insert into usuario (nome, email, senha) 
		values ('{$usuario->getNome()}', '{$usuario->getEmail()}', 
			'{$usuario->getSenha()}')";
echo $query;
		return mysqli_query($conexao, $query);
}



function alteraUsuario($conexao, $usuario) {
	$query = "update usuario set nome = '{$usuario->getNome()}', 
		email = '{$usuario->getEmail()}', senha = '{$usuario->getSenha()}'
		 where id = '{$usuario->getId()}'";

	return mysqli_query($conexao, $query);
}



function buscaUsuario($conexao, $id) {
	$query = "select * from usuario where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	$usuario_buscado = mysqli_fetch_assoc($resultado);

	$nome = $usuario_buscado['nome'];
	$email = $usuario_buscado['email'];
	$senha = $usuario_buscado['senha'];


	$usuario = new Usuario("", $nome, $email, $senha);
	$usuario->setId($usuario_buscado['id']);

	return $usuario;
}



function removeUsuario($conexao, $id) {
	$query = "delete from usuario where id = {$id}";
	return mysqli_query($conexao, $query);
}