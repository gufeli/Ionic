<?php

class MvcController{

#LLamar a la pagina
	public function pagina(){
     
     include "Views/template.php";

	}
#LLamado de los enlaces
	public function enlacesController(){

		if(isset($_GET["action"])){

		$enlaces = $_GET["action"];
	}

	else{
		$enlaces = "index";
	}

	$respuesta = PaginasModel::enlacesPaginasModel($enlaces);

	include $respuesta; 
		

	}

}



?>