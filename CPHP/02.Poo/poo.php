<?php

#Clase
#una clase es un modelo que se utiliza para crear onjetos que comparten un mismo comportamiento, estado e identidad.

class Automovil{

	#Propiedades
	#las caracteristicas que puede tener un objeto

	public $marca;
	public $modelo;

	#Método 
	#es el algoritmo asociado a un objeto que indica la capacidad de lo que éste puede hacer. La unica diferencia entre metodo y funcion es que llamamos método a las funciones de una clase (en  la POO), mientras que llamamos funciones, a los algoritmos de la programacion estructurada.

	public function mostrar(){

		echo "<p>HOla ! soy un $this->marca, modelo $this->modelo</p>";

	}
}
#Objeto
#Entidad provista de métodos o mensajes a los cuales responde propiedades con valores concretos

$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "Hyundai";
$b -> modelo = "Accent Vision";
$b -> mostrar();

#Principios de la POO que se cumplen en este ejemplo:
#ABSTRACCIÓN: Nuevos tipos de datos(el que tu quieras, tu lo creas)
#ENCAPSULACIÓN: Organizar el código en grupos lógicos
#OCULTAMIENTO: Ocultar detalles de implementación y exponer sólo los detalles que sean necesarios para el resto del sistema
?>