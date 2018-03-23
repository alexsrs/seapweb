<?php include("cabecalho.php"); 
include("conecta.php"); 
include("banco-link.php"); 
    $id = $_POST["id"];
    $localizacao = $_POST["localizacao"];
    $sigla = $_POST["sigla"];
    $endereco = $_POST["endereco"];
	$telefone = $_POST["telefone"];
    $cto = $_POST["cto"];
    $rede = $_POST["rede"];
    $ping = $_POST["ping"];
    $velocidade = $_POST["velocidade"];
if(alteraLink($conexao, $id, $localizacao, $sigla, $endereco, $telefone, $cto, $rede, $ping, $velocidade)) { ?>
	<p class="text-success">Link <?= $localizacao; ?>, <?= $cto; ?>, <?= $rede; ?> foi alterado com sucesso!</p>
<?php } else { 
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O Link <?= $localizacao; ?>, <?= $cto; ?> não foi alterado: <?= $msg ?> </p>
<?php
}
?>

<?php include("rodape.php"); ?>