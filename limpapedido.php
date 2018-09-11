<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
</head>
<body>





<?php

session_start();

$_SESSION["p1"]= $_POST["p1"];
$_SESSION["p2"]= $_POST["p2"];
$_SESSION["p3"]= $_POST["p3"];

session_destroy;

?>

</body>
</html>