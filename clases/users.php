<?php

class user {
			private $nombre;
			private $clave;
			private $tipo;
			private $habilitado;
			
			public function __construct($nombre, $clave, $tipo, $habilitado)
										{
										$this->nombre = $nombre;
										$this->clave  = $clave;
										$this->tipo   = $tipo;
										$this->habilitado = $habilitado;
										
										$link = mysqli_connect('localhost', 'root', 'mysql153', 'web2')
										or die('No se pudo conectar:'  . mysqli_error($link));
										echo 'Conexion establecida <br>';
								
										$sql = "INSERT INTO Usuarios (nombre, clave, tipo, habilitado) 
										VALUES ('$this->nombre', '$this->clave', '$this->tipo', '$this->habilitado');";
								
										$gg = mysqli_query($link, $sql) or die("error");
								
										mysqli_close($link);
										}
			
			public function veruser()
									{
									echo $this->nombre;
									echo $this->clave;
									echo $this->tipo;
									echo $this->habilitado;
									}
	
}


?>