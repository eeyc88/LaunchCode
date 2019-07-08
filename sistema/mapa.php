<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
 <title>Menú</title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <link href="../css/estilo.css" rel="stylesheet" >
                 <link href="../css/login.css" rel="stylesheet" >

        <link href="../css/tablas.css" rel="stylesheet" >
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: auto;  /* The height is 400 pixels */
        width: auto;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
<?php
        echo "<nav class='navbar navbar-default'>";
          echo "<div class='container-fluid'>";
           echo "<div class='navbar-header'><a class='navbar-brand' >Control Agrícola</a></div>";
            //echo "<div class='navbar-header'><a class='navbar-brand' >Menú</a></div>";
                echo " <ul class='nav navbar-nav'>";
                        echo "<li><a href='menu.php'>Menú</a></li>";
                echo " </ul>";

                echo " <ul class='nav navbar-nav navbar-right'>";
                        echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
                        echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
                echo "</ul>";
          echo "</div>";
        echo "</nav>";?>

    <h3>Ubicacion Actual</h3>
	<aside>
		<div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3522.5613213401616!2d-82.57604904997858!3d28.00731471876849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2ea1d3c537d6f%3A0x3c6f915b0f6aea10!2s8020+Jackson+Springs+Rd%2C+Tampa%2C+FL+33615!5e0!3m2!1ses!2sus!4v1560980255377!5m2!1ses!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</aside>
  </body>
</html>
