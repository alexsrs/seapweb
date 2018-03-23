<?php
session_start();
include("conecta.php"); 
$_SESSION['login_admin'] = "NULL";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	// envia pelo form o username e password
	$myusername = addslashes($_POST['username']);
	$mypassword = md5(addslashes($_POST['password']));
	$sql = "SELECT userid FROM tbl_users WHERE username='$myusername' and password='$mypassword'";
	$result = mysqli_query($conexao, $sql);
	$count = mysqli_num_rows($result);


	// ira executar caso encontre uma linha contendo o usuario e senha na tabela
	if ($count == 1) {
		// sessão registrada
		$_SESSION['login_admin'] = $myusername;
		header("location:index2.php");
		}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">

    <title>Login Intranet STI - SEAP</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    </head>
  <body>
  <div class="container" align="center">
      <form class="form-signin" method= "post">
        <h2 class="form-signin-heading"><img src="imagens/intranet.png" width="130" height="130"></h2>
        <h2 class="form-signin-heading">Faça o login</h2>
        <p>&nbsp;</p>
        <label for="inputEmail" class="sr-only">Email</label>
        <input name="username" type="login" id="inputEmail" class="form-control" placeholder="Endereço de email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="Lembrar-me"> 
            Lembrar senha</label></div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
		</form> 
		<p>&nbsp;</p>
		<a href="downloads/"><img src="imagens/downloads.png"></a> 
    </div>  <!-- /container -->  
</body>
</html>
	
