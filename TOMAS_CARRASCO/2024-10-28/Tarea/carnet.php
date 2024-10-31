<?php

//Recibir Datos

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fechaNacimento = $_POST['fechaNacimento'];
$genero = $_POST['genero'];
$rut = $_POST['rut'];
$lugar_nacimiento = $_POST['lugarNacimiento'];
$profesion = $_POST['profesion'];

///processar la foto

if(isset($_FILES['foto'])){
    $foto_temporal = $_FILES['foto']['tmp_name'];
    $foto_nombre = $_FILES['foto']['name'];
    $destino = 'img/' . uniqid() . '-' . $foto_nombre;
    move_uploaded_file($foto_temporal, $destino);
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnet</title>
</head>
<body>
    
</body>
</html>