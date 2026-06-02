<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>

    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>

</head>
<body>

<div class="dive2">

    <h1>Resultados</h1>

    <img src="okeycat.jpg" width="300">

    <br><br>

    <p>
        <strong>Nombre:</strong>
        <?php echo $_POST["nombre"]; ?>
    </p>

    <p>
        <strong>Edad:</strong>
        <?php echo $_POST["edad"]; ?>
    </p>

    <p>
        <strong>Ciudad:</strong>
        <?php echo $_POST["ciudad"]; ?>
    </p>

    <p>
        <strong>Pasatiempo favorito:</strong>
        <?php echo $_POST["pasatiempo"]; ?>
    </p>

    <h2>¡Bien Hecho!</h2>

    <button onclick="mostrarMensaje()">
        Regresar
    </button>

</div>

</body>
</html>