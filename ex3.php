<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
</head>
<body>

<form method="post" action="ex3.php">


<h1>Troca Cor</h1>

<select name="cor">

<option value="red"> Vermelho </option>
<option value="blue"> Azul </option>
<option value="green"> Verde </option>

</select>

<input type="submit" value="ENVIAR">


<?php
 
session_start();
if(!isset($_POST["cor"])){
	echo "<body style=background-color:white>";
	
}else{
$_SESSION["cor"]=$_POST["cor"];
if($_SESSION["cor"]=="red"){

	echo "<body style=background-color:red>";
}elseif($_SESSION["cor"]=="blue"){

	echo "<body style=background-color:blue>";
}else{

	echo "<body style=background-color:green>";
}
}


?>
</body>
</html>