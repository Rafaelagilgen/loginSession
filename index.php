<?php
    //verificar se está logado
    session_start();

    $existe = isset($_SESSION['esta_logado']);

    if($existe == false){
        //redirecionar
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

		<img src="http://uploads.metropoles.com/wp-content/uploads/2017/03/02171357/maxresdefault-2-840x475.jpg" alt="" width="200" height="200">
		<h3>Bem vindo!</h3>
	</div>

</body>
</html>