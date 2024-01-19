<?php

function Calcular($numero1, $numero2)
{

    if ($numero1 > $numero2) {

        echo "El numero $numero1 es mayor que el numero $numero2";

    } elseif ($numero1 == $numero2) {

        echo "El numero $numero1 es igual que el numero $numero2";

    } else {

        echo "El numero $numero1 es menor que el numero $numero2";
    }

}

function despliega()
{
    if (
        (isset($_GET['numero1']) && isset($_GET['numero2'])) &&
        ($_GET['numero1'] !== "" && $_GET['numero2'] !== "")
    ) {

        $respuesta = Calcular($_GET['numero1'], $_GET['numero2']);

    } else {
        echo "Por favor rellena los campos ";
    }

}
