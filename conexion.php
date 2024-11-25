<?php

$servidor = "localhost";
$ususario= "root";
$clave = "";
$baseDatos = "registro_evento_apellido";


$enlace = mysqli_connect($servidor,$ususario,$clave,$baseDatos);

// Verificar conexion
if(!$enlace){
    die("Conexion fallida: " . mysqli_connect_errno());
}