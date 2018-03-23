<?php include("cabecalho.php"); ?>

        <h1>Cadastro de Links</h1>
        <form action="adiciona-link.php" method="post">
        	<table class="table">
        		<tr>
        			<td>Localização</td>
        			<td><input class="form-control" type="text" name="localizacao"></td>
        		</tr>
        		<tr>
        			<td>Sigla</td>
        			<td><input class="form-control" type="text" name="sigla"></td>
        		</tr>
                        <tr>
                                <td>Endereço</td>
                                <td><input class="form-control" type="text" name="endereco"></td>
                        </tr>
						<tr>
                                <td>Telefone</td>
                                <td><input class="form-control" type="text" name="telefone"></td>
                        </tr>
						<tr>
                                <td>CTO</td>
                                <td><input class="form-control" type="text" name="cto"></td>
                        </tr>
                        <tr>
                                <td>Rede</td>
                                <td><input class="form-control" type="text" name="rede"></td>
                        </tr>
                        <tr>
                                <td>Ping</td>
                                <td><input class="form-control" type="text" name="ping"></td>
                        </tr>
                        <tr>
                                <td>Velocidade</td>
                                <td><input class="form-control" type="text" name="velocidade"></td>
                        </tr>
        		<tr>
        			<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
                        </tr>
        	</table>
        </form>

<?php include("rodape.php"); ?>