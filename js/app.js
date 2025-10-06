var Alert = new CustomAlert();

function CustomAlert() {
    // Muestra el cuadro de alerta
    this.render = function() {
        let popUpBox = document.getElementById('popUpBox');
        let popUpOverlay = document.getElementById('popUpOverlay');

        // Mostrar el fondo semitransparente
        popUpOverlay.style.display = "block";
        popUpBox.style.display = "block";

        // Agregamos el botón dentro del modal
        document.getElementById('closeModal').innerHTML = `
            <button type="button" onclick="Alert.volverAIndex()">¡Volver a ingresar!</button>
        `;
    }

    // Cierra el cuadro de alerta
    this.ok = function() {
        document.getElementById('popUpBox').style.display = "none";
        document.getElementById('popUpOverlay').style.display = "none";
    }

    // Redirige al index.php
    this.volverAIndex = function() {
        window.location.href = "index.php";
    }
}
