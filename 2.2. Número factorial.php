<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factoriales de Números Pares</title>
</head>
<body>
    <h1>Factoriales de Números Pares del 1 al 100</h1>
    <?php
    // Función para calcular el factorial
    function factorial($num) {
        if ($num === 0 || $num === 1) {
            return 1;
        }
        $factorial = 1;
        for ($i = 2; $i <= $num; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }

    echo "<ul>";
    for ($i = 1; $i <= 100; $i++) {
        // Saltar los números impares
        if ($i % 2 !== 0) {
            continue;
        }

        // Calcular el factorial del número par
        $factorial = factorial($i);
        echo "<li>El factorial de $i es $factorial</li>";

        // Romper el bucle si llegamos a 100 (opcional ya que la condición del bucle lo hace)
        if ($i == 100) {
            break;
        }
    }
    echo "</ul>";
    ?>
</body>
</html>
