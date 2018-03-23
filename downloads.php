<head>
    <title>SEAP - STI - Downloads</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/link.css" rel="stylesheet" />
</head>

<body>
	

    <div class="container">

        <div class="principal">

<?php
$path = "arquivos/";
$diretorio = dir($path);
?><h3><?php 
echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
while($arquivo = $diretorio -> read()){
echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
}
$diretorio -> close();
?></h3>
        </div>

    </div>

</body>
</html>