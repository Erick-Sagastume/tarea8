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