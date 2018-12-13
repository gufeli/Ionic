 <?php

 #El INDEX: En él mostraremos la salida de las vistas al usuario y tambien a traves de él enviaremos las distintas acciones que el usuario envíe al controlador.

#require()establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. Por ello, si el archivo especificado en la funcion require() no se encuentra saltará un error "PHP fatal error" y el programa PHP se detendrá

 #La versión require_once() funcionan de la misma forma que sus respectivo, salvo que, al utilizar la version _once, se impide la carga de un mismo archov mas de una vez

 #Si requerimos el mismo código ma de una vez corremos el riesgo de redeclaraciones de variable, funciones o clases.

#crear el objeto
 #invocar las funciones desde el index, cargando los archivos.
require_once "Controladores/controller.php";
require_once "Modelos/model.php";

 $mvc = new MvcController();
 $mvc -> plantilla();


 ?>