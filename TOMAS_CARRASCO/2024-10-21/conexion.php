<?php

// Datos de conexion
$db_host = "localhost";
$db_name = "hola";
$db_user = "root";
$db_pass = "";


# crear conexion de manera procedural

$conexion = mysqli_connect($db_host, $db_name, $db_user, $db_pass);

# Obtener Datos

$sql = "SELECT * FROM alumnos;";

// Ejecutar la consulta

$reslutado = mysqli_query($conexion, $sql);

//Verificar si hay resultado

if(mysqli_num_rows($reslutado) > 0){
    // mostrar los datos de cada fila
    while($row = mysqli_fetch_assoc($reslutado)){
        echo "id: " . $row["id"]. "- Nombre: " . $row["nombre"] . "Apellido: " . $row["apellido"] . "<br>";
    }
}else{
    echo "0 resultados";
}

// cerrar la conexion
mysqli_close($conexion);

?>