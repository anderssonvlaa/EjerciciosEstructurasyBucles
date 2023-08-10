<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imágenes de Pokémon</title>
</head>
<body>
    <h1>Imágenes de Pokémon</h1>
    
    <!-- Formulario para ingresar la cantidad de imágenes -->
    <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

        <label for="cantidad">Cantidad de imágenes: </label>
        <input type="number" name="cantidad" required>
        <button type="submit">Mostrar Imágenes</button>
    </form>

    <?php
    // Verifica si se ha enviado una solicitud GET y si se han proporcionado los valores
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["cantidad"])) {

        $cantidad = intval($_GET["cantidad"]);
        //accede al valor enviado, y convierte el valor obtenido en un entero.


        // Bucle para mostrar las imágenes solicitadas
        for ($i = 1; $i <= $cantidad; $i++) {
            // Genera la etiqueta <img> con la ruta a la imagen GIF del Pokémon
            echo '<img src="pikachu.gif" alt="pikachu">';
        }
    }
    ?>
</body>
</html>
