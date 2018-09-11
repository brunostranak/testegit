<!DOCTYPE html>
<html>
<head>
	<title>
		


	</title>
</head>
<body>



<?php 

if(!isset($_COOKIE["contador2"])){
	echo "Essa é a sua primeira vez aqui!";
	setcookie("contador2","1");
}else{
	$valor= $_COOKIE["contador2"] + 1;
	setcookie("contador2",$valor); //trocar o valor do cookie
	
	if($valor==5 || $valor==10 || $valor==15) {
		echo "Nossa! Esta é a sua ".$valor."ª vez";	
	}elseif($valor==20){

		echo "Nossa! Esta é a sua ".$valor."ª vez";
		echo "<br>";
		echo "Reiniciando a contagem...";
		setcookie("contador2");
		
		
	}else{
		echo "Número de exibições: ".$valor;
	}
	}

?>


</body>
</html>