<?php

//Datos de conexion
$db_host = "localhost";
$db_name = "programacion_web";
$db_user = "root";
$db_pass = "";

# Crear conexion de manera procedural
$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//verificar conexion
if(!$conexion){
    die("Conexion fallida: " . mysqli_connect_errno());
}

//Obtener datos
$sql = "SELECT * FROM alumnos;";

//Ejecutar la consola
$resultado = mysqli_query($conexion, $sql);

// Verificar si hay resultados
if(mysqli_num_rows($resultado) > 0){
    //Mostrar los datos de cada fila
    while($row = mysqli_fetch_assoc($resultado)){
        echo "id: ". $row["id"] . " - Nombre: " . $row["nombre"] . " - Apellido: " . $row["apellido"] . "<br>";     
    }
}else{
    echo "0 resultados";
}

//Crear la conexion
mysqli_close($conexion);
