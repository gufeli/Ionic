<?php
#hereda de la clase conexion.

#EXTENSIÓN DE CLASES: los objetos pueden ser extendidos, y pueden heredar propiedades y metodos. Para definir una clase como extensión, debo definir un clase padre(Conexion), y se utiliza dentro de una clase hija
#
require_once "conexion.php";

class Datos extends Conexion{

	#REGISTRO DE USUARIOS
	#-------------------------
	#mamipular la funcion Conexion
	public function registroUsuarioModel($datosModel,$tabla){
#:: Operador de resolucion de ambito
		#prepare()Prepara una sentencia SQL para ser ejecutada por el método PDOStatement:: execute(). La sentencia SQL puede contener cero o más marcadores de parámetros con nombre(:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada.Ayuda a prevernir inyeccuines SQL eliminando la necesidad de entrecomillar manualmente los parametros.
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario,password,emali) VALUES (:usuario,:password,:email)");

#donde se enlazan estos datos con los parametros reales?
		#Usando el metodo bindParam
		#bindParam() Vincula una variable PHP (lo que viene en dato real)a un parametro de sustitución con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia.
#tres de tipo String
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

#execute(): nos dice si se esta agregando a la base de datos, devuelve valores booleanos
		if($stmt->execute()){

			return "success";
		}
		else {
			return "error";
		}


	}
}

?>