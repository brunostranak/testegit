<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
</head>
<body>



<h1>Lista de itens</h1>

<?php

session_start();









if(!empty($_POST)){
	
$_SESSION["p1"]= $_POST["p1"];
$_SESSION["p2"]= $_POST["p2"];
$_SESSION["p3"]= $_POST["p3"];
	echo "<ul>
	<li>Produto1: $_SESSION[p1]</li>
	<li>Produto2: $_SESSION[p2]</li>
	<li>Produto3: $_SESSION[p3]</li>
	</ul>
	";
}elseif(empty($_SESSION)){
	echo"não há quantidades";
}else{
	echo "<ul>
	<li>Produto1: $_SESSION[p1]</li>
	<li>Produto2: $_SESSION[p2]</li>
	<li>Produto3: $_SESSION[p3]</li>
	</ul>
	";
}





?>

<br>
<a href="checkout_form.php">formulário de pedidos
<br>
<a href="limpapedido.php">limpar pedidos
</body>
</html>