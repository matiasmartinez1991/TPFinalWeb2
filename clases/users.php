<?php

class user {
			private $nombre;
			private $clave;
			private $tipo;
			
			public function __construct($nombre, $clave, $tipo)
										{
										$this->nombre = $nombre;
										$this->clave  = $clave;
										$this->tipo   = $tipo;
										
										$link = mysqli_connect('localhost', 'root', 'mysql153', 'web2')
										or die('No se pudo conectar:'  . mysqli_error($link));
										echo 'Conexion establecida <br>';
								
										$sql = "INSERT INTO Usuarios (nombre, clave, tipo) VALUES ('$this->nombre', '$this->clave', '$this->tipo');";
								
										$gg = mysqli_query($link, $sql) or die("error");
								
										mysqli_close($link);
										}
			
			public function veruser()
									{
									echo $this->nombre;
									echo $this->clave;
									echo $this->tipo;
									}
	
}


?>