
<?php

$tiempo_de_vida = 300;
ini_set('session.gc_maxlifetime', $tiempo_de_vida);

session_start();

$_SESSION["nombre_usuario"] = "juan.perez.24";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        <a href="pagina2.php" target="_self">Ir a otra página</a>
    </h1>
    
</body>
</html>