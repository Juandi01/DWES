<?php
/**
 * 
 * @author Juandi 
 * 
 * Ejemplo de uso de las funciones anonimas. (funciones que no tienen nombre)
 */
$aPaises = array(
    array(
        'id' => 'es',
        'pais' => 'España',
        'capital' => 'Madrid'
    ),
    array(
        'id' => 'it',
        'pais' => 'Italia',
        'capital' => 'Roma'
    ),

    array(
        'id' => 'fr',
        'pais' => 'Francia',
        'capital' => 'Paris'
    )
);
//Obtener un array con los paises

//Opcion 1
$nombrePaises = array();
foreach ($aPaises as $pais) {
    $nombrePaises[] = $pais['pais'];
}
print_r($nombrePaises);

//Opcion 2
$nombrePaises = array_map(function ($pais) {
    return $pais['pais'];
}, $aPaises);
print_r($nombrePaises);


//Script que defina un array de numeros enteros y utilizando una funcion anonima genere un array con el cuadrado de los mismos.
$aNumeros = array(1, 2, 3, 4, 5);
$aCuadrados = array_map(function ($aNumbers) {
    return [$aNumbers * $aNumbers];
}, $aNumeros);
print_r($aCuadrados);
?>