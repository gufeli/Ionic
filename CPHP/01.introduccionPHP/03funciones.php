<?php
#Tipos de Funciones

#Funciones sin parámetros

function saludo(){

	echo "hola<br>";
}

saludo();

#Funciones con PArametro

function despedida($adios){

	echo $adios."<br>";

}
despedida("adios");

#Funciones con retorno
function retorno($retornar){

	return $retornar."<br>";
}

echo retorno("retornar");
?>