<?php
session_start();
?>

<?php

include '../clases/users.php';

$nombre = $_POST["nombre"];
$pass1	= $_POST["pass1"];
$pass2	= $_POST["pass2"];
$tipo	= "user";
$habilitado = "si";

if($nombre!=NULL )	{
					if($pass1!=NULL && $pass2!=NULL){
													if($pass1 == $pass2){
																		$pass = md5($pass2);
																																				
																		$usuario = new User($nombre, $pass, $tipo, $habilitado);
																																				
																		$_SESSION["reg"]="true";
																		
																		header('location: ../login.php');
																		}
																		else{
																			echo "Las contraseñas no coinciden";
																			}
													}else{
														 echo "Faltan datos para completar el registro";
														 }
					}
					else{
						echo "Faltan datos para completar el registro";
						}
								
?>

