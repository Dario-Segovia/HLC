<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Factorial</title>
</head>
<body>
    <h1>Calculadora de Factorial</h1>
    <form method="POST">
        <label for="number">Introduce un número:</label>
        <input type="number" id="number" name="number" min="0" required>
        <button type="submit">Calcular Factorial</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];

        // Función para calcular el factorial
        function factorial($num) {
            if ($num === 0 || $num === 1) {
                return 1;
            }
            return $num * factorial($num - 1);
        }

        // Validación y cálculo
        if (filter_var($number, FILTER_VALIDATE_INT) !== false && $number >= 0) {
            $result = factorial($number);
            echo "<h2>El factorial de $number es: $result</h2>";
        } else {
            echo "<h2>Por favor, introduce un número válido mayor o igual a 0.</h2>";
        }
    }
    ?>
</body>
</html>
