<?php

class Conexion{

	public function conectar(){
#conexion a la base de datos con tres parametros , con la creacion de un objeto PDO
#var_dump : verificar el funcionamiento de esa variable
		$link = new PDO("mysql:host=localhost;dbname=cursophp","root","");
		return $link;
	}
}
#para Verificar si existe conexión
#$a = new Conexion();
#$a -> conectar();

?>