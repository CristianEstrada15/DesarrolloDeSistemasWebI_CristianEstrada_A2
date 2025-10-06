<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de datos</title>
    <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dive">
        <h1>Captura de Datos Personales</h1>
        <br>
        <h2>Ingresa los datos que se te piden</h2>
        <br>
        <p>Mi primera encuesta</p>
        <hr>
        <form action="resultados.php" method="POST">
            <label for="Name">Nombre:</label>
            <input type="text" id="Name" name="Name" value="Ingresa tu nombre"><hr>
            <label for="Age">Edad:</label>
            <input type="number" id="Age" name="Age" value="Ingresa tu edad"><hr>
            <label for="City">Ciudad:</label>
            <input type="text" id="City" name="City" value="Ingresa tu ciudad"><hr>
            <label for="Birthday">Fecha de Nacimiento:</label>
            <input type="date" id="Birthday" name="Birthday"><hr>
            <label for="Hobby">Pasatiempo:</label>
            <input type="text" id="Hobby" name="Hobby" value="Ingresa tu pasatiempo"><hr>
            <button type="submit">¡Ingresamos Datos!</button>
        </form>

    </div>
</body>
</html>
