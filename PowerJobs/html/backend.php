<html>
<head>
	<title>Resposta dos Dados Pessoais</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/cabecalho.css">
</head>
<body>
<?php include_once 'cabecalho.php';?>
<?php

	echo "<p>Bem vindo(a) ".$_POST['nome']." ".$_POST['sobrenome']."!</p>";
	echo "<p>Seu email é ".$_POST['email']."</p>";
?>
</body>
</html>
				