<?php


// base de conexion
$db_host = "localhost";
$db_name = "programacion-web"
$db_user = "root";
$db_pass = "";


// crear conexion de manera procedural

$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//verificar conexion
if(!$conexion){
    die("conexion fallida", mysqli_connect_errno());

}
echo "hola";
// obtener datos

//$sql = "SELECT * FROM alumnos;";

//ejecutar consola

