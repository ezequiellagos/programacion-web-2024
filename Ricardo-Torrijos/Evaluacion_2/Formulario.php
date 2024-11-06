<?php

// Conexión a la base de datos (considera usar variables de entorno para la contraseña)
$_server = "LocalHost";
$db = "registro_evento_torrijos";
$user = "root";
$pass = ""; // Reemplaza con tu contraseña real (considera usar variables de entorno)

$conexion = mysqli_connect($_server, $user, $pass, $db );

if (!$conexion){
  die("Conexion fallida: " . mysqli_connect_errno());
} else{
  //echo "Conectado"; // Puedes comentar esta línea o mostrar un mensaje más informativo
}

// Manejo del formulario
if(isset($_POST['registro'])){

  $id = ($_POST['id']); 
  $nombre = ( $_POST['nombre']);
  $rut = ($_POST['rut']);
  $correo = ($_POST['correo']);
  $telefono = ($_POST['telefono']);

  
  if (empty($nombre) || empty($rut) || empty($correo) || empty($telefono)) {
    $error_message = "Todos los campos son obligatorios.";
  } else if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $error_message = "Correo electrónico inválido.";
  } else {

    $imagen = $_FILES['imagen'];
    $imagen_name = $imagen['name'];
    $imagen_tmp_name = $imagen['tmp_name'];
    $imagen_size = $imagen['size'];
    $imagen_error = $imagen['error'];

    if ($imagen_error === 0) {
      $imagen_allowed_extensions = array("jpg", "jpeg", "png");
      $imagen_extension = explode('.', $imagen_name)[1];

      if (in_array($imagen_extension, $imagen_allowed_extensions)) {
        $imagen_new_name = uniqid('', true) . '.' . $imagen_extension;
        $imagen_destination = "uploads/" . $imagen_new_name;

        if (move_uploaded_file($imagen_tmp_name, $imagen_destination)) {
          // Consulta SQL preparada para evitar inyección SQL
          $stmt = $conexion->prepare("INSERT INTO asistentes (id, nombre, rut, correo, telefono, imagen) VALUES (?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("ssssss", $id, $nombre, $rut, $correo, $telefono, $imagen_new_name);
          $stmt->execute();

          if ($stmt->affected_rows === 1) {
            $success_message = "Asistente registrado exitosamente.";
          } else {
            $error_message = "Error al registrar asistente."; // Mensaje más informativo
          }
        } else {
          $error_message = "Error al subir la imagen.";
        }
      } else {
        $error_message = "Solo se permiten imágenes JPG, JPEG y PNG.";
      }
    }
  }
  

  $insertar_datos = "INSERT INTO asistentes values('','$nombre','$rut','$correo','$telefono', '$imagen')"; 

    $ejecutar_insertar = mysqli_query($conexion,$insertar_datos);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <title>Formulario</title>
</head>
<body>
    
    <form action="#" name="registro_evento_torrijos" method="post">
    <label for="id">Id</label><br>
    <input type="number" name="id" placeholder="id"><br>

    <label for="nombre">Nombre</label><br>
    <input type="text" name="nombre" placeholder="nombre"><br>

    <label for="rut">Rut</label><br>
    <input type="text" name="rut" placeholder="rut"><br>

    <label for="correo">Correo</label><br>
    <input type="email" name="correo" placeholder="correo"><br>

    <label for="telefono">Telefono</label><br> 
    <input type="text" name="telefono" placeholder="telefono"><br>

    
    <input type="file" name="imagen"><br>

    <input type="submit" name="registro">
    <input type="reset">

    </form>

</body>
</html>