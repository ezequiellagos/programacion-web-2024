<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php require_once "header.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-4 bg-warning">columna 1</div>
            <div class="col-4 bg-success">columna 2</div>
            <div class="col-4 bg-danger">columna 3</div>
        </div>

        <div class="row">
            <div class="col-2 bg-warning">columna 1</div>
            <div class="col-6 bg-success">columna 2</div>
            <div class="col-4 bg-danger">columna 3</div>
        </div>
    </div>

    <p>Esto es un párrafo</p>
    <p>Esto es otro párrafo</p>

    <?php require_once "footer.php"; ?>
</body>
</html>