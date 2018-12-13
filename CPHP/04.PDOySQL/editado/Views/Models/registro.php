<h1>REGISTRO DE USUARIO</h1>
<!--Metodo post , para el envio de datos de manera interna donde un usuario no podra visualizarlos-->
<!--NO usamos el metodo get-->
<form method="post" >
<!--input: para el ingreso de datos-->
	<input type="text" placeholder="Usuario" name="usuario" required>
<!--atributo name: importante usarlo dentro de un input se convierte en la variable que va a recibir el metodo post-->
	<input type="password" placeholder="Contraseña" name="password" required>

	<input type="email" placeholder="Email" name="email" required>
<!--value:siempre se almacena el valor-->
	<input type="submit" value="Enviar">

</form>

<?php
$registro = new MvcController();
$registro -> registroUsuarioController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	}
}

?>