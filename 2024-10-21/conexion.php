<?php

// https://medium.com/@maniakhitoccori/sql-b%C3%A1sico-conceptos-b%C3%A1sicos-d937a8b19d02
// https://www.w3schools.com/sql/default.asp

// Datos de conexion
$db_host = "localhost";
$db_name = "programacion_web";
$db_user = "root";
$db_pass = "";

// Crear conexion de manera procedural
$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Verificar conexion
// if(!$conexion){
//     die("Conexion fallida: " . mysqli_connect_errno());
// }

// Obtener datos
// $sql = "SELECT * FROM alumnos;";

// Ejecutar la consulta
//$resultado = mysqli_query($conexion, $sql);

//echo $resultado;
