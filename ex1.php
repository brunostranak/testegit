<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>



<body>

<?php 

if(!isset($_COOKIE["contador"])){
	echo "Essa é a sua primeira vez aqui!";
	setcookie("contador","0");
}else{
	$valor= $_COOKIE["contador"] + 1;
	setcookie("contador",$valor); //trocar o valor do cookie
	echo "Número de exibições: ".$valor;
}
?>



</body>
</html>