<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
</head>
<body>
    <h1>Cuenta de Crédito en Street Fighter</h1>

    <!-- Formulario para que el usuario ingrese su crédito -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="credito">Ingresa tu credito: $</label>
        <input type="number" step="1" name="credito" required>
        <button type="submit">Jugar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["credito"])) {
        // Obtener el crédito ingresado por el usuario
        $credito = intval($_POST["credito"]);
        $costoPartida = 1;

        // Ciclo que permite al usuario jugar mientras tenga crédito
        while ($credito >= $costoPartida) {
            // Resta el costo de la partida al crédito
            $credito -= $costoPartida;

            // Muestra mensaje mientras el usuario tenga crédito
            echo "<p>Sigue jugando... Crédito restante: $" . $credito . "</p>";
        }

        // Mensaje final cuando se queda sin crédito
        echo "<p>¡Se acabó el crédito! deposita más.</p>";
    }
    ?>
</body>
</html>
