<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Esta es una pagina</h1>
    <?php require_once "header.php"?>
    <div class="container"><!--container, da un poco de margen a la pagina-->
        <div class="row">
            <div class="col-4 bg-warning">columna 1</div> <!--bg=background-->
            <div class="col-4 bg-success">columna 2</div>
            <div class="col-4 bg-danger">columna 3</div>
        </div>

        <div class="row">
            <div class="col-2 bg-warning">columna 1</div> 
            <div class="col-6 bg-success">columna 2</div>
            <div class="col-4 bg-danger">columna 3</div>
        </div>
    </div>
    <p>esto es un parrafo</p>
    <p>esto es otro parrafo</p>


    <?php require_once "footer.php"?>
</body>
</html>