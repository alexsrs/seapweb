<?php
function listaLink($conexao) {
	$links = array();
	$resultado = mysqli_query($conexao, "select * from links");
	while ($link = mysqli_fetch_assoc($resultado)) {
		array_push($links, $link);
	}
	return $links;
}

function insereLink($conexao, $localizacao, $sigla, $endereco, $telefone, $cto, $rede, $ping, $velocidade) {
	$query = "insert into links (localizacao, sigla, endereco, telefone, cto, rede, ping, velocidade) values ('{$localizacao}', '{$sigla}', '{$endereco}', '{$telefone}', '{$cto}', '{$rede}', '{$ping}', '{$velocidade}')";	
	return mysqli_query($conexao, $query);
}

function removeLink($conexao, $id) {
	$query = "delete from links where id = {$id}";
	return mysqli_query($conexao, $query);
}

function buscaLink($conexao, $id) {
	$query ="select * from links where id ={$id}";
	$resultado = mysqli_query($conexao,$query);
	return mysqli_fetch_assoc($resultado);

}
function alteraLink($conexao, $id, $localizacao, $sigla, $endereco, $telefone, $cto, $rede, $ping, $velocidade) {
	$query ="update links set localizacao= '{$localizacao}', sigla= '{$sigla}', endereco='{$endereco}',  telefone='{$telefone}', cto='{$cto}', rede='{$rede}', ping='{$ping}', velocidade='{$velocidade}' where id = '{$id}'";
	return mysqli_query($conexao,$query);
}
?>