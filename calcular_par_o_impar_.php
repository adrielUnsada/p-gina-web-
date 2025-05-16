<?php
// Verificamos si se envió el formulario
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validamos que se haya enviado un número
    if (isset($_POST["numero"]) && is_numeric($_POST["numero"])) {
        $numero = (int)$_POST["numero"];

        // Validamos que el número sea entero y positivo
        if ($numero >= 0) {
            if ($numero % 2 === 0) {
                $mensaje = "El número {$numero} es PAR.";
            } else {
                $mensaje = "El número {$numero} es IMPAR.";
            }
        } else {
            $mensaje = "Por favor, ingrese un número entero positivo.";
        }
    } else {
        $mensaje = "Por favor, ingrese un número válido.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Par o Impar</title>
</head>
<body>
    <h1>Verificar si un número es par o impar</h1>
    <form method="post">
        <label for="numero">Ingrese un número entero positivo:</label>
        <input type="text" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>
    <?php if ($mensaje): ?>
        <p><strong><?php echo $mensaje; ?></strong></p>
    <?php endif; ?>
</body>
</html>
