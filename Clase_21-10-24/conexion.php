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

//Verificar si hay resultados
if(mysqli_num_rows($resultado) > 0)
{
    //Mostrar los datos de cada fila
    while($row = mysqli_fetch_assoc($resultado))
    {
        echo "id: " . $row["id"] . " - Nombre: " . $row["nombre"] . " - Apellido: " . $row["apellido"] . "<br>";
    }
}else{
    echo "0 resultados";
}
//Cerrar conexion
mysqli_close($conexion);

