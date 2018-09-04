<?php
require_once("cabecalho.php");

require_once("class/Usuario.php");


$usuario = new Usuario("", "", "", "", "", "");

?>	

<h1>Formulário de Usuarios</h1>

<form action="controller/adiciona-usuario.php" method="post">
<input type="hidden" id='met' name='metodo'>
	<table class="table">
		
		<?php include("usuario-formulario-base.php"); ?>

		<tr>
			<td>
				<!-- <button class="btn btn-primary" type="submit">Cadastrar</button> -->
				<input class="btn btn-primary" style="width:80px" type="submit" value="Cadastrar"><br>

			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
