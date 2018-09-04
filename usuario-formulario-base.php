<tr>
	<td>Nome</td>
	<td>
		<input class="form-control" type="text" required name="nome" 
			value="<?=$usuario->getNome()?>">
	</td>
</tr>
<tr>
	<td>Email</td>
	<td>
		<input class="form-control" type="text" required name="email" 
			value="<?=$usuario->getEmail()?>">
	</td>
</tr>
<tr>
	<td>Senha</td>
	<td>
		<input class="form-control" type="password"  required name="senha" 
			value="<?=$usuario->getSenha()?>">
	</td>
</tr>
