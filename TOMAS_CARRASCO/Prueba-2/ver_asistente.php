<?php
$id= $_GET['id']??null;
if(!$id){
    die('ID no proporcionado');
}

 //conexion BD
$conexion= new mysqli('localhost','tomas','Micaela8050','registro_evento_carrasco');
if($conexion->connect_error){
    die("Error de conexion: ".$conexion->connect_error);
}
$resultado=$conexion->query("SELECT * FROM asistentes WHERE id=$id");
$asistente= $resultado->fetch_assoc();

if(!$asistente){
    die('asistente no encontrada');
}

///Recibir Datos
///Recibir Datos
$nombres = $asistente['nombres'];
$rut = $asistente['rut'];
$email=$asistente['email'];
$telefono=$asistente['telefono'];
$imagen=$asistente['imagen'];
$qr=$asistente['codigo_qr'];


$resultado->close();
$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Carnet</title>
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
                    <div class="col-4 text-center"> 
                        <img src="<?php echo $imagen ?>" alt="Imagen de perfil para carnet" width="300">
                        <br>
                        <p>RUN <strong><?php echo $rut ?> </strong></p>
                    </div>
                    <div class="col-7"> 
                        <div>
                            <h6 class="texto">Nombre</h6>
                            <?php echo "<h5>$nombres</h5>"?>
                        </div>
                        <div>
                            <h6 class="texto">Rut</h6>
                            <?php echo "<h5>$rut</h5>"?>
                        </div>
                        
                        <div>
                            <h6 class="texto">Email</h6>
                            <?php echo"<h5>$email</h5>"?>
                        </div>
                        <div>
                            <h6 class="texto">Telefono</h6>
                            <?php echo"<h5>$genero</h5>"?>
                        </div>
                        <div class="col-4 text-center"> 
                        <img src="<?php echo $qr ?>" alt="QR" width="236">
                        <br>
                        </div>
                    </div>    
                </div>
            </div>
        </div>    
        <div class="col-12 text-center">
            <a href="asistentes.php">Ver todos los datos almacenados </a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>