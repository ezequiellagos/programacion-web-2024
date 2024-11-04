
<?php

require_once "conexion.php";

$names = $_POST["names"];
$lastnames = $_POST["lastnames"];
$gender = $_POST["gender"];
$rut = $_POST["rut"];
$nationality = $_POST["nationality"];
$imagen = $_FILES["imagen"];

print_r($imagen);


function insertar_registro($conn, $names, $lastnames, $gender, $rut, $nationality, $imagen){
    $sql = "
    INSERT INTO juegos (names, lastnames, gender, rut, nationality, imagen)
    VALUES ('$names', '$lastnames', $gender, '$rut', '$nationality', '".$imagen['name']."')
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
    $names,
    $lastnames,
    $gender,
    $rut,
    $nationality, 
    $imagen
);

?>