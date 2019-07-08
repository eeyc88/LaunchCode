<?php


	$n = $_POST['usuario'];
	$p = $_POST['clave'];
	include_once("UsuarioCollector.php");
	$objUsuarioCollector = new UsuarioCollector();
	$objUsuarioCollector->insertUsuarios($n,$p);
?>

	<script>
		alert('Bienvenido');
		window.location="index.php";
	</script>

