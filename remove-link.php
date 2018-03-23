<?php include("cabecalho.php"); 
include("conecta.php"); 
include("banco-link.php"); 

$id = $_POST['id'];
removeLink($conexao, $id);
header("location: link-lista.php?removido=true");
die();
?>


