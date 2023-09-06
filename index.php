<?php
require('conexion.php');
$sql = "SELECT * FROM encuestas ORDER BY id DESC";
$req = mysqli_query($conex, $sql);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Programacion WEB</title>
    <link rel="stylesheet" href="estilos.css">

        <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script>
    
</head>
<body>
    <div class="wrap">
        <h1>Cuestionarios</h1>
        <ul class="votacion index">
        <?php
            while($result = mysqli_fetch_object($req)){
                echo '<li><a href="encuesta.php?id='.$result->id.'">'.$result->titulo.'</a></li>';
            }
        ?>
        </ul>
        <a href="agregar.php">Crear Cuestionario</a>
    </div>
</body>
</html>
