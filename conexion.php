<?php
/*$servidor="localhost";
$usuario="root";
$pwd="alex";
$BD="servcios_libres";*/

$servidor="mysql.hostinger.mx";
$usuario="u942239213_movil";
$pwd="roma-1723";
$BD="u942239213_movil";

$conn=mysqli_connect($servidor,$usuario,$pwd,$BD)or die("Error al conectarse a la base de datos".mysqli_error());
?>
