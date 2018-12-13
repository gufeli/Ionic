<?php

class PaginasModel{
	

	public function enlacesPaginasModel($enlaces){

		if($enlaces == "ingresar" || $enlaces == "registro" || $enlaces == "salir" || $enlaces ==  "usuarios"){

			$module = "Views/Models/".$enlaces.".php";
		}

		else if($enlaces == "index"){

			$module  = "Views/Models/registro.php";
		}

		else{$module  = "Views/Models/registro.php";}

		return $module;


	}
}


?>