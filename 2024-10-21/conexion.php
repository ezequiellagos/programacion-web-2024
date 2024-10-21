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
$resultado = mysqli_query($conexion, $sql);

// Verificar si hay resultados
if (mysqli_num_rows($resultado) > 0) {
    // Mostrar los datos de cada fila
    while($row = mysqli_fetch_assoc($resultado)){
        echo "id: " . $row["id"] . " - Nombre: " . $row["nombre"] . " - Apellido: " . $row["apellido"] . "<br>";
    }
}else {
    echo "0 resultados";
}

// Cerrar la conexion
mysqli_close($conexion);


// Crear conexión de manera orientda a objetos
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Verificar conexion
if ($conn->connect_error){
    die("Conexion fallida: " . $conn->connect_error);
}

// Ejecutar la consulta
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    foreach($result as $row){
        echo "id: " . $row["id"] . " - Nombre: " . $row["nombre"] . " - Apellido: " . $row["apellido"] . "<br>";
    }
} else {
    echo "0 resulatdos";
}

// Cerrar conexion
$conn->close();
