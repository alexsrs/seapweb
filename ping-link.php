<?php include("cabecalho.php");
 
$ping = $_POST["ping"];
exec("ping -c 4 $ping", $output, $result);
 
 
if ($result ==0) {
    ?>
   
        <img src="imagens/online.png"></br></br>
        <div class="jumbotron">
        <?php
    print_r($output[1]);
    ?><br/><?php
    print_r($output[2]);
    ?><br/><?php
    print_r($output[3]);
    ?><br/><?php
    print_r($output[4]);
    ?><br/><br/><?php  
    print_r($output[7]);
    ?> </div>
            <?php
} else {
    ?>
        <img src="imagens/offline.png"></br></br>
        <div class="jumbotron">
        <?php
    print_r($output[0]);
    ?><br/><br/><?php    
    print_r($output[3]);
    ?> </div> <?php
}
    ?>
 
        <form action="ping-link.php" method="post">
            <input type="hidden" name="ping" value="<?=$ping?>">
            <button class="btn btn-success glyphicon glyphicon-refresh"></button>
            <a href="link-lista.php" class="btn btn-warning glyphicon glyphicon-backward"></a>
        </form>
            <?php
include("rodape.php"); ?>