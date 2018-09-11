<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php


$resp=$_POST["resp"];



if(!isset($_COOKIE["form"])){
	if(!isset($resp)){
	echo "Vote em algo";
	}else{
	echo "Obrigado pelo voto";
	setcookie("form",$resp,time()+2592000);
	
   }
}else{
	
	echo "Voce já votou em : ".$_COOKIE["form"];
	
}




?>


</body>
</html>