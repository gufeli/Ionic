<?php

class MvcController{
	#LLamada a la PLANTILLA
	#-------------------------------------

	public function plantilla(){

		include "Views/template.php";
	}
	#Interaccion del usuario
	#-------------------------------------
	public function enlacesPaginasController(){
	#Usar el metodo isset para mostrar que la variable siempre trae un contenido

		if(isset($_GET["action"])){
		$enlacesController = $_GET["action"];
	}
	else{
		$enlacesController = "index";
	}
	#toma de modelo la clase de enlacesPaginas, y se conecte con la funcion enlacesPaginasModel(), usamos los dos puntos para heredar la clase EnlacesPaginas con la funcion.	
	$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
	
	include $respuesta;	

	}

}
?>