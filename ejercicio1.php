<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <div>
        <h1>Descuento Bancario</h1>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="salario">Salario mensual: $</label>
            <input  step="0.01" name="salario" required>
            <button>Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $salario = floatval($_POST["salario"]);
            $descuento = 0;

            if ($salario <= 450) {$descuento = $salario * 0.08; $porcentaje = 8;}
            elseif ($salario <= 600) {$descuento = $salario * 0.15; $porcentaje = 15;}
            elseif ($salario <= 800) {$descuento = $salario * 0.18; $porcentaje = 18;}
            else {$descuento = $salario * 0.20; $porcentaje = 20;}

            echo "<h2>Resultado:</h2>";
            echo "<p>Salario mensual: $" . number_format($salario, 2) . "</p>";
            echo "<p>Porcentaje:" .$porcentaje."%</p>"; 
            echo "<p>Descuento bancario: $" . number_format($descuento, 2) . "</p>";
            
        }
        ?>
    </div>
</body>

</html>