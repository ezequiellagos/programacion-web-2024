<?php

$db_host = "localhost";
$db_name = "dni_db";
$db_user = "root";
$db_pass = "";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Verificar conexion
if(!$conn){
    die("Conexion fallida: " . mysqli_connect_errno());
}
