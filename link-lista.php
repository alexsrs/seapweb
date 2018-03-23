<?php include("cabecalho.php"); 
	  include("conecta.php"); 
	  include("banco-link.php"); ?>
<?php
	if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true") {
?>
		<p class="alert-success">Link removido com sucesso</p>
<?php
}
?>
<table class="table table-hover">
<thead>
			<tr class="success">
				<th>Localização</th>
				<th>Sigla</th>
				<th>Endereço</th>
				<th>Telefone</th>
				<th>CTO</th>
				<th>IP da Rede</th>
				<th class="text-center">Ping</th>
				<!-- <th>IP de Ping</th> -->
				<th>Velocidade</th>
				<th class="text-center">Alterar</th>
				<th class="text-center">Excluir</th>
			</tr>
			</thead>
			<tbody>
	<?php
		$links = listaLink($conexao);
		foreach ($links as $link) {
			?>
			<tr>
				<td><h5><?= $link['localizacao']?></h5></td>
				<td><h5><?= $link['sigla']?></h5></td>
				<td><h5><?= $link['endereco']?></h5></td>
				<td><h5><?= $link['telefone']?></h5></td>
				<td><h5><?= $link['cto']?></h5></td>
				<td><h5><?= $link['rede']?></h5></td>
				<td align="center"><form action="ping-link.php" method="post">
					<input type="hidden" name="ping" value="<?=$link['ping']?>">
					<button class="btn btn-warning glyphicon glyphicon-screenshot"></button>
					</form></td>
				<!--<td><h5><?= $link['ping']?></h5></td>-->
				<td><h5><?= $link['velocidade']?></h5></td>
				<td align="center"><form action="altera-link-formulario.php" method="post">
					<input type="hidden" name="id" value="<?=$link['id']?>">
					<button class="btn btn-primary glyphicon glyphicon-edit"></button></form></td> 
				<td align="center"><form action="remove-link.php" method="post">
					<input type="hidden" name="id" value="<?=$link['id']?>">
					<button class="btn btn-danger glyphicon glyphicon-trash"></button></form></td>
			</tr>
			</tbody>
	<?php
	}
	?>
</table>
<?php include("rodape.php"); ?>