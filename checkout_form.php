<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
</head>
<body>
<?php
session_Start();


?>
<form method="post" action="checkout.php">


<h1>Lista de itens</h1>





<label for="p1">Produto1:
<input id="p1" type="number" name="p1" value="<?php if(isset($_SESSION["p1"])){echo $_SESSION["p1"];} ?>">


<br>
<br>


<label for="p2">Produto2:
<input id="p2" type="number" name="p2" value="<?php if(isset($_SESSION["p2"])){echo $_SESSION["p2"];} ?>">


<br>
<br>


<label for="p3">Produto3:
<input id="p3" type="number" name="p3" value="<?php if(isset($_SESSION["p3"])){echo $_SESSION["p3"];} ?>">
<br>
<br>

<input type="submit">
</form>



<br>
<a href="checkout.php">Listar pedidos



</body>

</html>