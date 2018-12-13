<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>
<!--hoja de estilo-->
<!--Estilo del cabezote-->
<!--Estilo de la barra de navegación-->
<!--Estilo de la seccion-->
<style>

	header{
		position:relative;
		margin:auto;
		text-align:center;
		padding:5px;
	}

	nav{
		position:relative;
		margin:auto; 
		width: 100%
		height:auto;
		background:black;
	}

	nav ul{
		position:relative;
		margin:auto;
		width: 50%
		text-align: center;
	}
	nav ul li{
		display: inline-block;
		width: 24%;
		line-height: 50px;
		list-style: none;
	}	
	nav ul li a{
		color:white;
		text-decoration: none;
	}
</style>

</head>
<body>
	
<!--Cabezote-->
<header>
	
	<h1>LOGOTIPO</h1>
</header>
<?php
 include "Modules/navegacion.php";
?>


<!--Contenido-->
<section>
<?php	
$mvc = new MvcController();
$mvc -> enlacesPaginasController();
?>
</section>
</body>
</html>