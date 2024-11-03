<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Ingresar juegos</h1>
            <form action="procesar.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>

                <div class="mb-3">
                    <label for="editor" class="form-label">Editor</label>
                    <input type="text" class="form-control" id="editor" name="editor">
                </div>

                <div class="mb-3">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="number" class="form-control" id="valor" name="valor">
                </div>

                <div class="mb-3">
                    <label for="genero" class="form-label">Genero</label>
                    <select class="form-select" id="genero" name="genero">
                        <option value="Acción">Acción</option>
                        <option value="Estrategia">Estrategia</option>
                        <option value="Shooter">Shooter</option>
                        <option value="Deporte">Deporte</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="clasificacion" class="form-label">Clasificación</label>
                    <select class="form-select" id="clasificacion" name="clasificacion">
                        <option value="1">Todas las edades</option>
                        <option value="2">Mayores de 17 años</option>
                        <option value="3">Mayores de 13 años</option>
                        <option value="4">Mayores de 7 años</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen juego</label>
                    <input class="form-control" type="file" id="imagen" name="imagen">
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="js/bootstrap.js"></script>
</body>
</html>
