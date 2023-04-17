<?php
function semaforo_a($color){

    if ($color=='rojo'){
        echo 'frene';
    } elseif ($color== 'amarillo'){
        echo 'precaución';
    } elseif($color=='verde') {
        echo 'avance';
    }
    else{
        echo 'estado desconocido';
    }

}
function semaforo_b($color){

    /* LO QUE ESCRIBI (ESTA MAL) EL RETURN FUNCIONA SOLO CON UNA VARIABLE
    $frene= $color=='rojo'? 'frene': 'estado desconocido';
    $precausion= $color=='amarillo'? 'precaución': 'estado desconocido';
    $avance= $color=='verde'? 'avance': 'estado desconocido';

    if($frene=='frene' || $precausion=='precaución' || $avance=='avance'){
    return $frene;
    }
*/
    /*LO QUE ESCRIBIO CHATGPT*/
        $accion = $color == 'rojo' ? 'frene' :
            ($color == 'amarillo' ? 'precaución' :
                ($color == 'verde' ? 'avance' : 'estado desconocido'));

        return $accion;

}
function semaforo_c($color){
    switch ($color){
        case "rojo":
            return  "frene";
            break;
        case "amarillo":
            return  "precaución";
            break;
        case "verde":
            return  "avance";
            break;
        default:
            return  "estado desconocido";
            break;
    }

}
?>