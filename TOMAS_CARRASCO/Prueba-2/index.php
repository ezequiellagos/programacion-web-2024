<!DOCTYPE html>
<html lang="es">

<head>
    <title>Formulario carnet de identidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Formulario de Asistenes al Evento</h1>
        <form action="formulario.php" method="post"  enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre completo">
            </div>
            <div class="mb-3">
                <label for="rut" class="form-label">Rut</label>
                <input type="text" class="form-control" id="rut" name="rut" placeholder="Ingrese rut">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese los email">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese telefono">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" placeholder="Ingrese foto de la persona" accept="image/*">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar datos...</button>
        </form>
        <br>
        <div class="col-12 text-center">
            <a href="asistentes.php">Ver todos los datos almacenados </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>