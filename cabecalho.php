<?PHP 
session_start();
if ($_SESSION['login_admin'] == "NULL") {
    //Destrói a sessão
	session_destroy();
//Redireciona para a página de autenticação
    header("location: index.html");
  }
?>
<html>
<head>
    <title>SEAP - STI - Sistema da Divisão de Redes de computadores</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/link.css" rel="stylesheet" />
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index2.php">Home</a>
			</div>
		<div>
			<ul class="nav navbar-nav">
				<li><a href="link-lista.php">Lista de Links</a></li>
				<li><a href="link-formulario.php">Adiciona Link</a></li>
				<li><a href="about.php">Sobre</a></li>
			</ul>
		</div>	
		</div>
	</div>

    <div class="container">

        <div class="principal">