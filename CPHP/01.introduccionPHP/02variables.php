<?php
#Uso del metodo vas_dump para saber el tipo de variable
#Variable Númerica
$numero = 5;
echo "Esto es una variable entera: $numero<br>";
var_dump($numero);
echo "<br><br>";

#Variable de texto
$palabra = "palabra";
echo "Esto es una variable de texto: $palabra<br>";
var_dump($palabra);
echo "<br><br>";

#Variable booleana
$boleana = true;
echo "Esto es una variable booleana: $boleana<br>";
var_dump($boleana);
echo "<br><br>";

#Variable Arreglo
$colores = array("rojo","amarillo","verde");
echo "Esto es una variable de tipo Arreglo: $colores[0]<br>";
var_dump($colores);
echo "<br><br>";

#Variable Arreglo con propiedades, "Especifica un nombre a cada indice"
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo "Esto es una variable Arreglo con propiedades: $verduras[verdura2]<br>";
var_dump($verduras);
echo "<br><br>";

#Varible de tipo objeto
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esta es una variable de tipo objeto: $frutas->fruta2<br>";
var_dump($frutas);
echo "<br><br>";
?>