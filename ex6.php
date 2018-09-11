<!DOCTYPE html>
<html>
<head>
	<title>
		


	</title>
</head>
<body>

<h1>Informe seus dados</h1>

<form action="" method="post">
<ul>
	<li><label for="nome">Nome:<input id="nome" name="nome"> </li>
	<li><label for="sobrenome">Sobrenome:<input id="sobrenome" name="snome"> </li>
	<li><label for="email">Email:<input id="email" name="email"> </li>
	<li><label for="confemail">Confirmação do Email:<input id="confemail" name="confemail"> </li>
	<li><input type="radio" name="sex" value="m">Masculino <input type="radio" name="sex" value="f">Feminino</li>
	<li><input type="submit" value="Cadastrar"> </li>
</ul>
<?php 
session_start();


$_SESSION["nome"]= $_POST["nome"];
$_SESSION["snome"]= $_POST["snome"];
$_SESSION["sex"]= $_POST["sex"];


$email=$_POST["email"];
$confemail=$_POST["confemail"];



if ($email!==$confemail){
echo"
	<h1>Informe seus dados</h1>
<h2>Os emails informados são diferentes!</h2>
<form action= method=post>
<ul>
	<li><label for=nome>Nome:<input id=nome name=nome value=$_SESSION[nome]> </li>
	<li><label for=sobrenome>Sobrenome:<input id=sobrenome name=snome value=$_SESSION[snome]> </li>
	<li><label for=email>Email:<input id=email name=email> </li>
	<li><label for=confemail>Confirmação do Email:<input id=confemail name=confemail> </li>
	<li><input type=radio name=sex value=m>Masculino <input type=radio name=sex value=f>Feminino</li>
	<li><input type=submit value=Cadastrar> </li>
</ul>
";
}else{
	
	echo"
	<h1>Informe seus dados</h1>
<h2>Dados cadastrados com sucesso!</h2>
<form action= method=post>
<ul>
	<li><label for=nome>Nome:<input id=nome name=nome> </li>
	<li><label for=sobrenome>Sobrenome:<input id=sobrenome name=snome> </li>
	<li><label for=email>Email:<input id=email name=email> </li>
	<li><label for=confemail>Confirmação do Email:<input id=confemail name=confemail> </li>
	<li><input type=radio name=sex value=m>Masculino <input type=radio name=sex value=f>Feminino</li>
	<li><input type=submit value=Cadastrar> </li>
</ul>
";
	
}

?>


</body>
</html>