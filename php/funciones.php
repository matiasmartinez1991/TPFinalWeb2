<?php

function conectar() {
					$conexion = mysqli_connect('localhost', 'root', 'mysql153', 'web2')
								or die('No se pudo conectar:'  . mysqli_error($conexion));
								echo 'Conexion establecida <br>';
					
					return $conexion;
					}

function buscar($link, $validar, $nombre, $pass)
					{					
					$validar = mysqli_query ($link, "SELECT clave from Usuarios WHERE nombre LIKE '$nombre' AND clave LIKE '$pass' ")
					or die ("Fallo la consulta");
						
					return $validar;
					}
					
function ver($nombre, $link)
					{								
					$mostrar = "SELECT * FROM usuarios WHERE nombre LIKE '$nombre';";
					$query = mysqli_query($link, $mostrar) or die ("Fallo la consulta");
						
					$ver = mysqli_fetch_assoc($query);
								
					echo "Nombre: " . $ver["nombre"] . " Clave: " . $ver["clave"] . " Tipo de usuario: " . $ver["tipo"];
					}			

function modificar($nombre, $link)
					{								
					$mostrar = "SELECT * FROM usuarios WHERE nombre LIKE '$nombre';";
					$query = mysqli_query($link, $mostrar) or die ("Fallo la consulta");
					}								
					
function borrar($nombre, $link)
					{								
					$delete = "DELETE FROM usuarios WHERE nombre LIKE '$nombre';";
					$query = mysqli_query($link, $delete) or die ("Fallo la consulta");
													
					echo "El usuario  $nombre  ha sido borrado";
					}					
?>