<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 5</title>
</head>
<body>
    <h1>Premios por Puntos en Juego</h1>

    <!-- Formulario para que el usuario ingrese sus puntos -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="puntos">Ingresa tus puntos: </label>
        <input type="number" step="1" name="puntos" required>
        <button type="submit">Ver Premios</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["puntos"])) {
        // Obtener los puntos ingresados por el usuario
        $puntos = intval($_POST["puntos"]);

    

        // Verificar y asignar mensajes según los puntos
        if ($puntos == 100) {
            $mensaje = "¡Ganaste $40.00!";
        } elseif ($puntos == 200) {
            $mensaje = "¡Ganaste $60.00!";
        } elseif ($puntos == 400) {
            $mensaje = "¡Ganaste $80.00!";
        } elseif ($puntos == 500) {
            $mensaje = "¡Ganaste $100.00!";
        } else {
            $mensaje = "Lo siento, no ganaste ningún premio.";
        }

        // Mostrar mensaje de premio o pérdida
        echo "<p>" . $mensaje . "</p>";
    }
    ?>
</body>
</html>
