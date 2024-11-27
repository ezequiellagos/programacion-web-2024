<?php
require_once 'phpqrcode/qrlib.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Validar datos del formulario
if (empty($_POST['nombre']) || empty($_POST['rut']) || empty($_POST['email']) || empty($_POST['telefono'])) {
    die("Todos los campos son obligatorios.");
}

$nombre = $_POST['nombre'];
$rut = $_POST['rut'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha_registros = date("Y-m-d H:i:s");

// Procesar imagen
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $foto_temporal = $_FILES['foto']['tmp_name'];
    $foto_nombre = $_FILES['foto']['name'];
    $destino = 'img/' . uniqid() . '-' . $foto_nombre;
    if (!move_uploaded_file($foto_temporal, $destino)) {
        die("Error al mover la imagen al directorio.");
    }
} else {
    die("Error al subir la imagen.");
}

// Verificar directorio para QR
if (!is_dir('qr_codigos')) {
    mkdir('qr_codigos', 0777, true);
}
$qr_filename = 'qr_codigos/' . uniqid() . '-qr.png';

$db_host = "localhost";
$db_name = "root";
$db_user = "registro_evento_carrasco";
$db_pass = "";

// Conexión BD
$conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Insertar datos
$query = $conexion->prepare("INSERT INTO asistentes(nombres, rut, email, telefono, imagen, codigo_qr, fecha_registros) VALUES (?, ?, ?, ?, ?, ?, ?)");
if (!$query) {
    die("Error al preparar la consulta: " . $conexion->error);
}
$query->bind_param("sssssss", $nombre, $rut, $email, $telefono, $destino, $qr_filename, $fecha_registros);
if (!$query->execute()) {
    die("Error al ejecutar la consulta: " . $query->error);
}

// Generar QR
$id_asistente = $query->insert_id;
$qr_contenido = "ver_asistente.php?id=$id_asistente";
QRcode::png($qr_contenido, $qr_filename, QR_ECLEVEL_L, 3);

// Cerrar conexiones
$query->close();
$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Asistente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .texto{
            color:Blue;
        }
        .card{
            background-image: url('imagen_tarea_web.jpg');
        }
    </style>
</head>

<body>
    
    <div class="container">
        <div class="col-12">
            <div class="card " heigth="600px"   >
                <div class="row p-5" width="300px">
                <div class="alert alert-success" role="alert">
                    Datos alcamenados en BD
                </div>
                <a href="ver_asistente.php?id=<?php echo $id_asistente;?>">Ver Información </a>
                </div>
            </div>
        </div>    
        <br>    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>