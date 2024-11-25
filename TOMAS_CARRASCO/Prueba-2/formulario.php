<?php
require_once 'phpqrcode/qrlib.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

///Recibir Datos
$nombre = $_POST['nombre'];
$rut = $_POST['rut'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha_registros = date("Y-m-d H:i:s"); 

//procesar la foto
if (isset($_FILES['foto'])) {
    $foto_temporal = $_FILES['foto']['tmp_name'];
    $foto_nombre = $_FILES['foto']['name'];
    $destino = 'img/' . uniqid() . '-' . $foto_nombre;
    move_uploaded_file($foto_temporal, $destino);
}
else{
    echo "Error al subir la imagen";
    exit;    
}
$qr_filename= 'qr_codigos/'.uniqid().'-qr.png';

//conexion BD
$conexion= new mysqli('localhost','tomas','Micaela8050','registro_evento_carrasco');
if($conexion->connect_error){
    die("Error de conexion: ".$conexion->connect_error);
}
$query=$conexion->prepare("INSERT INTO asistentes(nombres, rut, email, telefono, imagen, codigo_qr, fecha_registros ) VALUES (?,?,?,?,?,?,?)");
$query->bind_param("sssssss",$nombre,$rut,$email,$telefono,$destino,$qr_filename,$fecha_registros);
$query->execute();
//Obtener ID con el que se guardo los datos
$id_asistente=$query->insert_id;

$qr_contenido= "ver_asistente.php?id=$id_asistente";
QRcode::png($qr_contenido,$qr_filename, QR_ECLEVEL_L,3);

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