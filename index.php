<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Captura de Datos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="dive">

    <h1>Captura de datos personales</h1>

    <br>

    <h2>Ingresa los datos que se te piden</h2>

    <br>

    <p>Mi primera encuesta</p>

    <hr>

    <form action="resultados.php" method="POST">

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <br><br>

        <label>Edad:</label>
        <input type="number" name="edad" required>

        <br><br>

        <label>Ciudad donde vives:</label>
        <input type="text" name="ciudad" required>

        <br><br>

        <label>Pasatiempo favorito:</label>
        <input type="text" name="pasatiempo" required>

        <br><br>

        <button type="submit">
            Ingresar Datos
        </button>

    </form>

</div>

</body>
</html>