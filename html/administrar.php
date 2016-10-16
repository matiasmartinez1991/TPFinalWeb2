<?php
session_start();
?>

<?php
if ()
?>

<html>

<head>
</head>

<body>
	<form method = "post" action = "administrar.php">
				<input type = "text" name = "nombre"></input>
				<br>
				<br>
				<input type = "checkbox" name = "borrar" 	value = "true">Borrar</input>
				<input type = "checkbox" name = "ver"	 	value = "true">Ver</input>
				<input type = "checkbox" name = "modificar" value = "true">Modificar</input>
				<br>
				<input type = "submit"	 value = "Consultar"></input>
	</form>
	
</head>
			
</html>
			
<?php

include 'funciones.php';


$nombre = $_POST['nombre'];
$borrar = $_POST['borrar'];
$ver    = $_POST['ver'];
$modificar = $_POST['modificar'];


conectar();
								
if($borrar == "true")	{
						$link = conectar();
						borrar($nombre, $link);
						}

if($ver == "true")		{
						$link = conectar();
						ver($nombre, $link);
						}

if($modificar == "true"){
						$link = conectar();
						modificar($nombre, $link);
						}						
						
?>						