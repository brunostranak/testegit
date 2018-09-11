<!DOCTYPE html>



<html>


<head>



</head>

<body>





<?php
session_Start();

if(isset($_SESSION["user"])){
if(isset($_SESSION["carrinho"])){
	array_push($_SESSION["carrinho"],$_GET["id"]);
	$_SESSION["quantidade"]= count($_SESSION["carrinho"]);
}else{

$_SESSION["carrinho"]= [];


}


header("location:games.php");
}else{
	echo"<script>";
echo "alert('Para fazer compras é preciso estar logado!') 
window.location='games.php'
";	
	
	
	
echo "</script>";

}



?>





</body>




</html>