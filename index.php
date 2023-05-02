<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera aplicacion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <form method="POST" action="registrar.php" class="container">
        <div class="mb-3">
            <label for="identificador" class="form-label">Identificador</label>
            <input type="text" class="form-control" id="identificador" name="identificador">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="detalle" class="form-label">Detalle</label>
            <input type="text" class="form-control" id="detalle" name="detalle">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</body>

</html>