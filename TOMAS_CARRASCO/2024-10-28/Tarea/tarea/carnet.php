<?php

///Recibir Datos
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fechaNacimiento'];
$genero = $_POST['genero'];
$rut = $_POST['rut'];
$lugar_nacimiento = $_POST['lugarNacimiento'];
$profesion = $_POST['profesion'];

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
    </style>
</head>

<body>
    
    <div class="container">
        <div class="card">
            
            <div class="col-12">
            
                
            <div class="card text-bg-dark" background-image="imagen_tarea_web.jpg">
                <div class="row">
                    <div class="col-4 text-center"> 
                        <img src="<?php echo $destino ?>" alt="Imagen de perfil para carnet" width="350">
                        <br>
                        <p>RUN <strong><?php echo $rut ?> </strong></p>
                    </div>
                    <div class="col-8"> 
                        <div classs="col-8">
                            <h6 class="texto">APELLIDOS</h6>
                            <?php echo "<h5>$apellidos</h5>"?>
                        </div>
                        <div>
                            <h6 class="texto">NOMBRES</h6>
                            <?php echo "<h5>$nombres</h5>"?>
                        </div>
                        <div>
                            <h6 class="texto">FECHA DE NACIMIENTO</h6>
                            <?php echo"<h5>$fecha_nacimiento</h5>"?>
                        </div>
                        <div>
                            <h6 class="texto">GENERO</h6>
                            <?php echo"<h5>$genero</h5>"?>
                        </div>
                    </div>
                    
                        <img src="..." class="card-img" alt="...">
                        
                    </div>
                </div>
            </div>        
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>