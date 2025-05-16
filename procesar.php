<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["numero"];

        if (!empty($num) && is_numeric($num)) {
            $num = (int)$num;

            if ($num > 0) {
                if ($num % 2 == 0) {
                    echo "El número $num es PAR.";
                } else {
                    echo "El número $num es IMPAR.";
                }
            } else {
                echo "Por favor ingrese un número mayor a cero.";
            }
        } else {
            echo "Debe ingresar un número válido.";
        }
    } else {
        echo "No se recibió ningún dato.";
    }
    ?>

    <br><br>
    <a href="formulario.html">Volver</a>
</body>
</html>

