<?php
function binomioCuadradoPerfecto($a,$b){
     $resultado = pow(($a + $b), 2);
     return $resultado;
}
function binomioCuadradoPerfecto_b($a,$b){

    $resultado=pow($a,2) + 2*$a*$b + pow($b,2);

    return $resultado;
}

?>