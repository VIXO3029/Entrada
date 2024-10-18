<?php

do {
    echo "Introduce un número: ";

    $input = trim(fgets(STDIN));

    // Verificamos si el input es un número válido
    if (is_numeric($input)) {
        $numero = (int)$input;
        echo "El número ingresado es: $numero\n";
        break; // Salir del bucle si es un número válido
    } else {
        echo "Por favor, introduce solo números.\n";
    }

} while (true); // Continuar hasta que se ingrese un número válido

?>
