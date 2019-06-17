<?php
session_start();
?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Actualizar Supervision-Dron</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilo.css" rel="stylesheet" >
        <link href="../css/tablas.css" rel="stylesheet" >
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
	<script src= "../js/jquery.js" ></script>
	<script src="../js/jquery.bootgrid.min.js"></script>
	<script src="../js/jquery-1.11.1.min.js"></script>
</head>
<body>
<?php
	echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Supervision-Dron</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createDetalleSupervisionDron.php'>Nuevo</a></li>";
			echo "<li><a href='readDetalleSupervisionDron.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

    $ca =$_GET['idCabeceraDron'];
	$id =$_GET['id'];
	$e =$_GET['idEmpleado'];
    $l =$_GET['idlabor'];
	$c =$_GET['cantidad'];
	$a =$_GET['tarifa'];
?>

<form method= "POST" class="form-horizontal" action= "saveDetalleSupervisionDron.php?usuario=" >
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">CabeceraDron:</label>
         <div class="col-xs-10">
             <input name = "CabeceraDron" type="text" id= "CabeceraDron" class="form-control" placeholder="CabeceraDron" value="<?php echo $ca;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">DetalleDron:</label>
         <div class="col-xs-10">
             <input name = "DetalleDron" type="text" id= "DetalleDron" class="form-control" placeholder="DetalleDron" value="<?php echo $id;?>">
         </div>
     </div>
	 <div class="form-group">
         <label for="inputEmpleado" class="control-label col-xs-2">Empleado:</label>
         <div class="col-xs-10">
             <input name = "Empleado" type="text" id= "Empleado" class="form-control" placeholder="Empleado" value="<?php echo $e;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Labor:</label>
         <div class="col-xs-10">
             <input name = "Labor" type="text" id= "Labor" class="form-control" placeholder="Labor" value="<?php echo $l;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputCantidad" class="control-label col-xs-2">Cantidad:</label>
         <div class="col-xs-10">
             <input name = "Cantidad" type="text" id= "Cantidad" class="form-control" placeholder="Cantidad" value="<?php echo $c;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputTarifa" class="control-label col-xs-2">Tarifa:</label>
         <div class="col-xs-10">
             <input name = "Tarifa" type="text" id= "Tarifa" class="form-control" placeholder="Tarifa" value="<?php echo $a;?>">
         </div>
     </div>
     <div class="form-group">
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Grabar</button>
         </div>
     </div>
</form>



	</body>
</html>


