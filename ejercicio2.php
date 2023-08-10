<?php
$precioProducto = $montoDepositado = $cambio = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $precioProducto = floatval($_POST["precio"]);
    $montoDepositado = floatval($_POST["monto_depositado"]);
    $cambio = $montoDepositado - $precioProducto;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Cambio en Efectivo</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="precio">Precio del producto: $</label>
        <input type="number" step="0.01" name="precio" required><br>
        <label for="monto_depositado">Monto depositado: $</label>
        <input type="number" step="0.01" name="monto_depositado" required><br>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Informacion del tiket:</h2>
        <p>Precio del producto: $<?php echo $precioProducto; ?></p>
        <p>Monto depositado: $<?php echo $montoDepositado; ?></p>
        <p>Cambio en efectivo: $<?php echo $cambio; ?></p>
    <?php endif; ?>
</body>
</html>
