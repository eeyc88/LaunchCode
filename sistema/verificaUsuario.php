<?php


//AQUI CONECTAMOS A LA BASE DE DATOS DE POSTGRES
$conex = "host=ec2-54-243-185-132.compute-1.amazonaws.com port=5432 dbname=d3j9a66dhh4ocu user=obihwaohfkvyyt password=ea5858855a8a07277db5887f17e8080c0467704a2ec10342e726c561461b5352";
//$user="obihwaohfkvyyt password=ea5858855a8a07277db5887f17e8080c0467704a2ec10342e726c561461b5352";
$cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
session_start();

function quitar($mensaje)
{
$nopermitidos = array("'",'\\','<','>',"\"");
$mensaje = str_replace($nopermitidos, "", $mensaje);
return $mensaje;
}
if(trim($_POST["Nombre"]) != "" && trim($_POST["password"]) != "")
{
// Puedes utilizar la funcion para eliminar algun caracter en especifico
//$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
//$password = $HTTP_POST_VARS["password"];
// o puedes convertir los a su entidad HTML aplicable con htmlentities
$usuario = strtolower(htmlentities($_POST["Nombre"], ENT_QUOTES));
$password = $_POST["password"];
$result = pg_query('SELECT clave, nombre FROM controlAgricola.usuario WHERE nombre=\''.$usuario.'\'');
if($row = pg_fetch_array($result)){
	if($row["clave"] == $password){
		header("location: ../../index2.php");
	}else{
		$_SESSION["Garcia"] = $row['nombre'];
	header("location: ../../sistema/login.php");
	}
}else{
	echo 'Password incorrecto';
	//echo '<script>window.location.href = "login.php";</script>';
	else{
		echo 'Usuario no existente en la base de datos';
		//echo '<script>window.location.href = "login.php";</script>';
	}
	pg_free_result($result);
}

//else{
//echo 'Debe especificar un usuario y password';
//}


pg_close();
?>
