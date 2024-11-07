<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDatos = "registro_evento_apellido";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDatos);

if (!$enlace) {
    die("Conexion fallida: " . mysqli_connect_errno());
}

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$Rut = isset($_POST['Rut']) ? $_POST['Rut'] : '';
$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
$Telefono = isset($_POST['Telefono']) ? $_POST['Telefono'] : '';


$imagen = isset($_FILES['imagen']) ? $_FILES['imagen'] : null;

if ($imagen && $imagen['error'] == UPLOAD_ERR_OK) {
    // Upload file
    $ruta_imagen = subir_archivo($imagen);
} else {
    $ruta_imagen = ''; 
}

insertar_registro($enlace, $nombre, $Rut, $Email, $Telefono, $ruta_imagen);

function insertar_registro($enlace, $nombre, $Rut, $Email, $Telefono, $imagen) {
    $sql = "
        INSERT INTO asistentes (nombre, RUT, Email, Telefono, imagen)
        VALUES ('$nombre', '$Rut', '$Email', '$Telefono', '$imagen')";
    
    $resultado = mysqli_query($enlace, $sql);
    if ($resultado) {
        echo "Registro insertado correctamente";
    } else {
        echo "Error al insertar el registro: " . mysqli_error($enlace);
    }
}

function subir_archivo($archivo) {
    $archivo_nombre = $archivo["name"];
    $directorio = "img/";
    $archivo_destino = $directorio . basename($archivo_nombre);

    if (!is_dir($directorio)) {
        mkdir($directorio, 0777, true);
    }

    if (move_uploaded_file($archivo["tmp_name"], $archivo_destino)) {
        return $archivo_destino;
    } else {

        return "";
    }
}