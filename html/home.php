<?php
session_start();
?>

<?php 
	
	
	if ($_SESSION['login'] == "on")
		{
		
		}else{
			 header('location: ../login.php'); 
			 }  
										
?>

<html>

	<head>
		
	</head>
	
	<body>
				
		<h1>Bienvenido a la home</h1>
		
		<h2>Administrar Usuario</h2>
		<a href = "registro.php"> Alta </a>
		<br>
		<a href = "segunda.php"> Baja </a>
		<br>
		<a href = "administrar.php"> Modificacion </a>
		<br>
		<a href = "administrar.php"> Ver </a>
		<br>
		<a href = "segunda.php"> Segunda </a>
		<br>
		<a href = "../php/logout.php"> Logout </a>	
		
	</body>

</html>

<?php

/*
	if(($_SESSION['nombre'] == $_COOKIE["nombre"]) && ($_SESSION['pass'] == $_COOKIE["password"]))
		{
		
		}
		else{
			header('location: login.php');
			} 
*/		
/* PRUEBA DE VARIABLES
if ($_SESSION['nombre'] == $_COOKIE["nombre"]){		 
												echo $_SESSION['nombre'];
												echo $_COOKIE["nombre"];		 
												}
*/		
?>