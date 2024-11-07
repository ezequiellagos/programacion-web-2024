<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistentes</title>

    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Asistentes</h1>
            <form action="asistentes.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombre" class="form-label">nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>

                <div class="mb-3">
                    <label for="Rut" class="form-label">RUT</label>
                    <input type="text" class="form-control" id="Rut" name="Rut">
                </div>

                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="Email" name="Email">
                </div>

                <div class="mb-3">
                    <label for="Telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="Telefono" name="Telefono">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen</label>s
                    <input class="form-control" type="file" id="imagen" name="imagen">
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="http://localhost/Evaluaci%C3%B3n%202%20-%20Programaci%C3%B3n%20Web%20-%20Felipe%20Guasch/registro.php">enlace</a>
            </form>
        </div>
    </div>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>
?>