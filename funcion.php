```php
<?php

function burbuja($arreglo) {

    $n = count($arreglo);

    echo "Inicio: ";
    print_r($arreglo);
    echo "\n";

    for ($i = 0; $i < $n - 1; $i++) {

        for ($j = 0; $j < $n - $i - 1; $j++) {

            if ($arreglo[$j] > $arreglo[$j + 1]) {

                $aux = $arreglo[$j];
                $arreglo[$j] = $arreglo[$j + 1];
                $arreglo[$j + 1] = $aux;
            }
        }

        echo "Pasada " . ($i + 1) . ": ";

        foreach ($arreglo as $numero) {
            echo $numero . " ";
        }

        echo "\n";
    }

    return $arreglo;
}

$numeros = [8, 3, 5, 1, 9, 2];

$resultado = burbuja($numeros);

echo "Resultado: ";

foreach ($resultado as $numero) {
    echo $numero . " ";
}

?>