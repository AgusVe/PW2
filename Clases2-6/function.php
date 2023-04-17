<?php
function esMayorDeEdad($edad){

    if ($edad>30){
        echo 'Te duele la espalda';
    } elseif ($edad> 18){
        echo 'Sos mayor de edad';
    } else {
        echo 'Sos menor';
    }

}
echo 'soy function';
include "otroincludemas.php"

?>