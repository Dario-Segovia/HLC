<?php
function calcularFactorial($numero) {
    // Validar que el argumento sea un número entero no negativo
    if (!is_int($numero) || $numero < 0) {
        return -1;
    }

    // Calcular el factorial
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

// Ejemplo de uso
echo calcularFactorial(5); // 120 (5!)
echo "\n";
echo calcularFactorial(-3); // -1 (inválido)
echo "\n";
echo calcularFactorial(0); // 1 (0! = 1)
?>