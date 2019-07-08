<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilo.css" rel="stylesheet" >
        <link href="../css/tablas.css" rel="stylesheet" >
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
</head>
<body>

<?php

$n = $_POST['Nombre'];
$p = $_POST['password'];

include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();


foreach($UsuarioCollectorObj->showUsuario($n,$p) as $c){
		if(($c->getNombre() == $n)&&($c->getClave() == $p)){
				echo '<script>'; 
//					$_SESSION['Garcia'] = $n;
					echo "alert('Ha ingresado exitosamente');";
					echo 'window.location="login.php";';
				echo '</script>';
		}
		/*else {
			echo '<script>';
				 echo "alert('Credenciales incorrectas');";
				echo 'window.location="index.php";';
				session_destroy();
			echo '</script>';
		}*/
}

                        echo '<script>';
                                 echo "alert('Credenciales incorrectas');";
                                echo 'window.location="index.php";';
                                session_destroy();
                        echo '</script>';
                






//DESDE AQUI SE TOMO PARA PROBAR LA CONEXION A LA BASE DE DATOS Y DIO -OK-


// Conectando y seleccionado la base de datos  
//$dbconn = pg_connect("host=localhost dbname=controlAgricola user=postgres password=Erick88")
//    or die('No se ha podido conectar: ' . pg_last_error());

// Realizando una consulta SQL
//$query = "SELECT nombre, clave FROM controlAgricola.usuario WHERE nombre='$n' and clave='$p'";
//$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());







//foreach($UsuarioCollectorObj->showUsuario($n,$p) as $a){
/*
if ((pg_query($query)) == true){
	echo '<script>';
		echo 'alert("Ingreso Fallido");';
		echo 'window.location="index.php";';
	echo '</script>';
	}
if ((pg_query($query)) == false){
		echo '<script>';
			echo 'alert("Ingreso Exitoso");';
			echo 'window.location="login.php";';
		echo '</script>';
		}
*/



// Imprimiendo los resultados en HTML
/*echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";
*/

//mandar a la pagina de login.








// Liberando el conjunto de resultados
//pg_free_result($result);

// Cerrando la conexión
//pg_close($dbconn);


?>

</body>
</html>
