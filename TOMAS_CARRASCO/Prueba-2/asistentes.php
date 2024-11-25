<?php

//conexion BD
$conexion = new mysqli('localhost', 'tomas','Micaela8050', 'registro_evento_carrasco');
if ($conexion->connect_error) {
    die("Error de conexion: " . $conexion->connect_error);
}


$resultado = $conexion->query("SELECT * FROM asistentes");
//$persona= $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Carnet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .texto {
            color: Blue;
        }

        .card {
            background-image: url('imagen_tarea_web.jpg');
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Rut</th>
                        <th scope="col">Email</th>
                        <th scope="col">LINK</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $resultado->fetch_assoc()): ?>
                        <tr>
                            <td>
                                <?php echo $row['id'] ?>
                            </td>
                            <td>
                                <?php echo $row['nombres'] ?>
                            </td>
                            <td>
                                <?php echo $row['rut'] ?>
                            </td>
                            <td>
                                <?php echo $row['email'] ?>
                            </td>
                            <td>
                                <?php echo $row['telefono'] ?>
                            </td>
                            <td>
                                <?php echo $row['fecha_registro'] ?>
                            </td>
                            <td>
                                <a href="ver_asistente.php?id=<?php echo $row['id'];?>">Ver Información de la persona </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <br>
            <div class="col-12 text-center">
            <a href="index.php">Agregar nueva Asistente </a>
            </div>
        </div>
        <br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>