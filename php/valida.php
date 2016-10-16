<?php
	session_start();
?>
	  

<?php

include 'funciones.php';
include '../clases/users.php';

$nombre = $_POST['nombre'];
$pass	= md5($_POST['pass']);
$recordar = $_POST['recordar'];
$_SESSION["nombre"] = $nombre;


if (empty($nombre) || empty($pass))
		{
		echo "Debe ingresar los dos campos";
		echo '<br> <a href = "../login.php"> Login </a>';
		}
		else{
			$link = conectar();

			$validar = buscar($link, $validar, $nombre, $pass);
			
			$resultado = mysqli_num_rows($validar);
			
			mysqli_close($link);
			
			if ($resultado == 1){						//RECORDAR USUARIO Y CLAVE SOLO EN LOS BOXES DEL LOGIN
								if ($recordar == "true"){
														setcookie("nombre", $nombre, time()+60*60*20, "/");
														setcookie("password", $pass, time()+60*60*20, "/");
														
														$_SESSION["login"] = "on";
														
														header('location: ../html/home.php');
														}
														else{
															// Limpiar cookies
															 
															setcookie("nombre", "", time()-3600, "/");
															setcookie("password", "", time()-3600, "/"); 
																														
															// La cookie expira cuando se cierra el navegador
															/* setcookie("nombre", $nombre, false, "/");
															setcookie("password", $pass, false, "/"); */
															
															$_SESSION['login'] = "on";
															header('location: ../html/home.php');
															}
														}
														else{
															echo "El usuario o contraseña son incorrectos";	
															}
			}
?>
			
