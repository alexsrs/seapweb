<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-link.php");
$id = $_POST['id'];
$link = buscaLink($conexao, $id);
?>

        <h1>Alteração de Links</h1>
        <form action="altera-link.php" method="post">
            <input type="hidden" name="id" value="<?=$link['id']?>">
        	<table class="table">
                <tr>
        			<td>Localização</td>
        			<td><input class="form-control" type="text" name="localizacao" value="<?=$link['localizacao']?>"></td>
        		</tr>
        		<tr>
        			<td>Sigla</td>
        			<td><input class="form-control" type="text" name="sigla" value="<?=$link['sigla']?>"></td>
        		</tr>
                        <tr>
                                <td>Endereço</td>
                                <td><input class="form-control" type="text" name="endereco" value="<?=$link['endereco']?>"></td>
                        </tr>
						  <tr>
                                <td>Telefone</td>
                                <td><input class="form-control" type="text" name="telefone" value="<?=$link['telefone']?>"></td>
                        </tr>
						
                        <tr>
                                <td>CTO</td>
                                <td><input class="form-control" type="text" name="cto" value="<?=$link['cto']?>"></td>
                        </tr>
                        <tr>
                                <td>Rede</td>
                                <td><input class="form-control" type="text" name="rede" value="<?=$link['rede']?>"></td>
                        </tr>
                        <tr>
                                <td>Ping</td>
                                <td><input class="form-control" type="text" name="ping" value="<?=$link['ping']?>"></td>
                        </tr>
                        <tr>
                                <td>Velocidade</td>
                                <td><input class="form-control" type="text" name="velocidade" value="<?=$link['velocidade']?>"></td>
                        </tr>
        		<tr>
        			<td><button class="btn btn-primary" type="submit">Alterar</button></td>
                        </tr>
        	</table>
        </form>

<?php include("rodape.php"); ?>