<?php

require_once "conexion.php";

$nombre = $_POST["nombre"];
$editor = $_POST["editor"];
$valor = $_POST["valor"];
$genero = $_POST["genero"];
$clasificacion = $_POST["clasificacion"];
$imagen = $_FILES["imagen"];

print_r($imagen);


function insertar_registro($conn, $nombre, $editor, $valor, $genero, $clasificacion, $imagen){
    $sql = "
    INSERT INTO juegos (nombre, editor, valor, genero, clasificacion, imagen)
    VALUES ('$nombre', '$editor', $valor, '$genero', '$clasificacion', '".$imagen['name']."')
    ";

    $resultado = mysqli_query($conn, $sql);
}

function subir_archivo($archivo){
    $archivo_nombre = $archivo["name"];
    $directorio = "img/";
    $archivo_destino = $directorio . basename($archivo_nombre);

    if (move_uploaded_file($archivo["tmp_name"], $archivo_destino)){
        //echo "El archivo $archivo_nombre ha sido subido correctamente";
        return $archivo_destino;
    }else{
        //echo "Ocurrió un error al subir el archivo";
        return "";
    }

}


insertar_registro(
    $conn,
    $nombre,
    $editor,
    $valor,
    $genero,
    $clasificacion,
    $imagen
);
