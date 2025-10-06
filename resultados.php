<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de Datos!</title>
    <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dive2">
        <h1>¡Resultados!</h1>
        <center>
            <img src="img/img1.jpg" alt="pigpen">
        </center>
        <h2>¡Bien Hecho!</h2>

        <?php
            $name = $_POST['Name'] ?? '';
            $age = $_POST['Age'] ?? '';
            $city = $_POST['City'] ?? '';
            $birthday = $_POST['Birthday'] ?? '';
            $hobby = $_POST['Hobby'] ?? '';

            echo '<p><b>Nombre:</b> '.$name.'</p>';
            echo '<p><b>Edad:</b> '.$age.'</p>';
            echo '<p><b>Ciudad:</b> '.$city.'</p>';
            echo '<p><b>Cumpleaños:</b> '.$birthday.'</p>';
            echo '<p><b>Pasatiempo:</b> '.$hobby.'</p>';
        ?>

        <!-- Modal / Popup -->
        <div id="popUpOverlay"></div>
        <div id="popUpBox">
            <div id="box">
                <i class="fas fa-question-circle fa-5x"></i>
                <h1>¿Volver a ingresar datos?</h1>
                <div id="closeModal"></div>
            </div>
        </div>

        <!-- Botón para mostrar el popup -->
        <button onclick="Alert.render()" class="btn">¡Volver a Ingresar!</button>

        <!-- JS -->
        <script src="js/app.js"></script>
    </div>
</body>
</html>
