<!DOCTYPE html>
<html lang="es">

<head>
    <title>Formulario carnet de identidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Formulario de Carnet de Identidad</h1>
        <form action="carnet.php" method="post"  enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese los nombres">
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese los apellidos">
            </div>
            <div class="mb-3">
                <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="Ingrese fecha de nacimiento">
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Genero</label>
                <select class="form-select" id="genero" name="genero" aria-label="Default select example">
                    <option selected>Seleccione una opcion</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" placeholder="Ingrese foto de la persona" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="rut" class="form-label">Rut</label>
                <input type="text" class="form-control" id="rut" name="rut" placeholder="Ingrese rut">
            </div>
            <div class="mb-3">
                <label for="lugarNacimiento" class="form-label">Lugar de Nacimiento</label>
                <input type="text" class="form-control" id="lugarNacimiento" name="lugarNacimiento" placeholder="Ingrese lugar de nacimiento">
            </div>
            <div class="mb-3">
                <label for="profesion" class="form-label">Profesion</label>
                <input type="text" class="form-control" id="profesion" name="profesion" placeholder="Ingrese profesion">
            </div>
            <button type="submit" class="btn btn-primary">Enviar datos...</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>