
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    <h1>Bienvenido al sistema</h1>
</body>
</html>
<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDatos = "registro_evento_apellido";

// Connect to the database
$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
// Verificar si se enviaron datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $Rut = $_POST['Rut'];
    $Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];

    // Manejar la imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $directorio_destino = 'uploads/';
        if (!is_dir($directorio_destino)) {
            mkdir($directorio_destino, 0777, true);
        }
        $ruta_imagen = $directorio_destino . basename($_FILES['imagen']['name']);
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_imagen)) {
            echo "Imagen subida exitosamente.<br>";
        } else {
            echo "Error al subir la imagen.<br>";
            $ruta_imagen = null;
        }
    } else {
        $ruta_imagen = null;
    }

    // Insertar datos en la base de datos
    $instruccion_SQL = "INSERT INTO asistentes (nombre, Rut, Email, Telefono, imagen)
                         VALUES ('$nombre', '$Rut', '$Email', '$Telefono', '$ruta_imagen')";

    if (mysqli_query($enlace, $instruccion_SQL)) {
        echo "Datos insertados correctamente.<br>";
    } else {
        echo "Error al insertar los datos: " . mysqli_error($enlace) . "<br>";
    }
}

// Consulta de los datos
$consulta = "SELECT * FROM asistentes";
$result = mysqli_query($enlace, $consulta);

if (!$result) {
    echo "No se ha podido realizar la consulta: " . mysqli_error($enlace);
} else {
    echo "<table border='1'>";
    echo "<tr><th>id</th><th>Nombre</th><th>Rut</th><th>Email</th><th>Telefono</th><th>Imagen</th></tr>";
    while ($colum = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $colum['id'] . "</td>";
        echo "<td>" . $colum['nombre'] . "</td>";
        echo "<td>" . $colum['Rut'] . "</td>";
        echo "<td>" . $colum['Email'] . "</td>";
        echo "<td>" . $colum['Telefono'] . "</td>";
        echo "<td><img src='" . $colum['imagen'] . "' width='100'></td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Cerrar la conexión
mysqli_close($enlace);

// Link to go back
echo '<a href="asistentes.php">Volver Atrás</a>';
?>  |