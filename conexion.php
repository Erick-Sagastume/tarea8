<?php // datos para la conexion a mysql
define('DB_SERVER','localhost');
define('DB_NAME','tarea8');
define('DB_USER','root');
define('DB_PASS','');
 
$conex = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
mysqli_select_db($conex, DB_NAME);