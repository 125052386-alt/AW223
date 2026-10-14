<?php

$servidor="localhost";
$usuario="root";
$password="";
$baseDatos="portafolio_db";
$conexion=new mysqli($servidor,$usuario,$password,$baseDatos);

if($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "Conexion Exitosa <br>";

?>
