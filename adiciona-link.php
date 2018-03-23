<?php include("cabecalho.php"); 
include("conecta.php"); 
include("banco-link.php"); 

    $localizacao = $_POST["localizacao"];
    $sigla = $_POST["sigla"];
    $endereco = $_POST["endereco"];
	$telefone = $_POST["telefone"];
    $cto = $_POST["cto"];
    $rede = $_POST["rede"];
    $ping = $_POST["ping"];
    $velocidade = $_POST["velocidade"];
if(insereLink($conexao, $localizacao, $sigla, $endereco, $telefone, $cto, $rede, $ping, $velocidade)) { ?>
	<p class="text-success">Link <?= $localizacao; ?>, <?= $cto; ?>, <?= $rede; ?> adicionado com sucesso!</p>
<?php } else { 
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O Link <?= $localizacao; ?>, <?= $cto; ?> não foi adicionado: <?= $msg ?> </p>
<?php
}
?>

<?php include("rodape.php"); ?>