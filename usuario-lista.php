<?php
require_once("cabecalho.php");
require_once("model/banco.php");
?>

<table class="table table-striped table-bordered">
<th>Nome</th>
<th>Email</th>
<th>Senha</th>
<th></th>
<th></th>
	<?php
	$usuarios = listaUsuario($conexao);
	foreach($usuarios as $usuario) :
	?>
		<tr>
			<td><?= $usuario->getNome() ?></td>
			<td><?= $usuario->getEmail() ?></td>
			<td><?= $usuario->getSenha() ?></td>
			<td>
				<a class="btn btn-primary" 
					href="usuario-altera-formulario.php?id=<?=$usuario->getId()?>">
					alterar
				</a>
			</td>
			<td>
				<form action="controller/remove-usuario.php" method="post">
					<input type="hidden" name="id" value="<?=$usuario->getId()?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>	
</table>

<?php include("rodape.php"); ?>