<?php
function sumatoria($array)
{
    $resultado = 0;
    for ($i = 0; $i < count($array); $i++) {
        $resultado += $array[$i];
    }
    return $resultado;
}
function sumatoria_b($array){
    $resultado = 0;
    foreach ($array AS $valor){
        $resultado += $valor;
    }
    return $resultado;
}
function sumatoria_c($array){
    $resultado = 0;
    $i=0;
    while ($i< count($array)){
        $resultado += $array[$i];
        $i++;
    }
return $resultado;
}


?>