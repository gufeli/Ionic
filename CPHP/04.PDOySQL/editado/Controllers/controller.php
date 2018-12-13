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
    #Registro de Usuarios
    #-------------------------------------------------------
    public function registrousuarioController(){
#Recive el metodo post

    	if(isset($_POST["usuario"])){
    	$datosController = array("usuario"=>$_POST["usuario"],
    		"password"=>$_POST["password"],
    	    "email"=>$_POST["email"]);

    $respuesta = Datos::registroUsuarioModel($datosController, "usuarios");

    if($respuesta == "success"){
#header(): hacer una redirección a una pagina que necesite
    	header("location:index.php?action=ok");
    }
    else{

    	header("location:index.php");
            }

        }


    }
}



?>