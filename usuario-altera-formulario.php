<?php
require_once "cabecalho.php";
require_once "model/banco.php";

$id = $_GET['id'];

$usuario = buscaUsuario($conexao, $id);

?>

<h1>Alterando dados do Usuario</h1>
<form action="controller/altera-usuario.php" method="post">
	<input type="hidden" name="id" value="<?=$usuario->getId()?>">
	<table class="table">
		<?php include("usuario-formulario-base.php"); ?>
		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Alterar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>