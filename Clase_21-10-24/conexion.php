<?php

//Datos de conexión
$db_host = "localhost";
$db_name = "programacion_web";
$db_user = "root";
$db_pass = " ";

#Crear conexión de manera procedural
$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//Obtener datos
$sql = "SELECT * FROM alumnos;";

//Ejecutar consulta
$resultado = mysqli_query($conexion, $sql);
