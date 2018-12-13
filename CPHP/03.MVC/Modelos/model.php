<?php

#Se crea una funcion con parametro que se retorna en el valor enlaces. que se arroja en la variable enlaces que esta en la funcion enlacesPaginasController()
class EnlacesPaginas{

	public function enlacesPaginasModel($enlacesModel){

		if ($enlacesModel == "nosotros" ||
		    $enlacesModel == "servicios" ||
		    $enlacesModel == "contactenos"){

			$module = "Views/Modules/".$enlacesModel.".php";


		}
		else if ($enlacesModel == "index") {
			$module = "Views/Modules/inicio.php";
			
		}
#Lista Blanca: Hacer una restriccion de enlaces permitidos
#Lista Negra: Listado de palabras que no se admiten en la URL
		else{
			$module = "Views/Modules/error.php";
		}

    return $module;
	}
#Lista Blanca: Hacer una restriccion de enlaces permitidos
#Lista Negra: Listado de palabras que no se admiten en la URL
}
?>