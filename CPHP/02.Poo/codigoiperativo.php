<?php
#codigo imperativo o espagueti

$automovil1 = (object)["marca" => "Toyota", "modelo" => "Corolla"];
$automovil2 = (object)["marca" => "Hyundai", "modelo" => "Accen Vision"];

function mostrar($automovil){

	echo "<p> Hola ! soy un $automovil->marca, modelo $automovil->modelo </p>";
}
mostrar($automovil1);
mostrar($automovil2);
#Este tipo de programacion es vulnerable ante ataques hacia el sitio web donde este
?>