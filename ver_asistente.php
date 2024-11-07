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

$instruccion_SQL = "INSERT INTO asistentes (nombre, Rut, Email, Telefono, imagen)
                    VALUES ('$nombre', '$Rut', '$Email', '$Telefono')";

$consulta = "SELECT * FROM asistentes";
$result = mysqli_query($enlace, $consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "styleshett" href = "extra.css">
    <style>
.voleto{
    align-items:center;
    display: flex;
}
.cuadrado_perfecto{
            min-height: 100vh;
            justify-content:space-evenly;
            align-items:center;
            display: flex;
}
.texto{
    text-align: center;
}

</style>
</head>
<body> 
    <div class="cuadrado_perfecto">
    <div class="texto">
        <?php while ($colum = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $colum['id'] . "</td>";
        echo "<td>" . $colum['nombre'] . "</td>";
        echo "<td>" . $colum['Rut'] . "</td>";
        echo "<td>" . $colum['Email'] . "</td>";
        echo "<td>" . $colum['Telefono'] . "</td>";
        echo "</tr>";
    }?>
<img src="voleto.png"  width="50%" height="50%"  
title="Exposición de un T-Rex en el museo de la Universidad de Manchester." />
</div>
</div>
</body>
</html>