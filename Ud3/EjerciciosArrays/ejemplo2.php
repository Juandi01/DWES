<?php
/**
 * 
 * @author Juan Diego Delgado
 * 
 */

$diaMes = array(
    "Enero" => 31,
    "Febrero" => array(28, 29),
    "Marzo" => 31,
    "Abrl" => 30,
    "Mayo" => 31,
    "Junio" => 30,
    "Julio" => 31,
    "Agosto" => 31,
    "Septiembre" => 30,
    "Octubre" => 31,
    "Noviembre" => 30,
    "Diciembre" => 31
);

//Recorremos el array por valor con foeach
foreach ($diaMes as $clave => $valor) {
    if ($clave == 'Febrero') {
        foreach ($valor as $valor1) {//Valor va tomando cada uno de los valores del array
            echo "$clave tiene $valor1 dias <br/>";
        }

    } else {
        echo "$clave tiene $valor dias <br/>";
    }
}
?>