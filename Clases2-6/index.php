<!--PRIMERO: DIFERENCIA EN COMILLAS SIMPLES A DOBLES EN PHP

LAS COMILLAS DOBLES PERMITEN INTERPOLACIÓN DE VARIABLES EN LA PROPIA CADENA,
LO QUE PERMITE EMBEBER EL CONTENIDO DE VARIABLES DENTRO DE LAS CADENAS CON UNA SINTAXIS MUY LIMPIA

$cadena = "Federico tiene {$years} años y ${days} días.";

ESA MISMA SENTENCIA, SI USAS COMILLAS SIMPLES LA TENDRÍAS QUE
EXPRESAR DE UNA MANERA MÁS COMPLEJA Y MENOS LEGIBLE:

$cadena = 'Federico tiene' . $years . ' años y ' . $days . ' días';
-->

<html>
<body>
<!--EMPIEZA EL PHP-->
<!-- EN PHP NO ES NECESARIO IMPORTAR LIBRERIAS O CLASES-->
<?php
/*VARIABLE FLEXIBLE (SE LE PUEDE PONER CUALQUIER TIPO DE DATO )*/
$edad=16;

if($edad>=18){
    /*ECHO IMPRIME EN PANTALLA*/
    echo 'Eres maypor de edad';
}
else{
    echo 'Eres menor de edad';

}
/*LITERAL (NO TOMA LA VARIABLE EDAD)*/
echo '<br>$edad';

/*PROCESADO*/
echo "\n$edad<br>";


/*O OTRO METODO IF POSIBLE (HAY MUCHOS, COMO JAVA)*/

$edad2=18;

echo $edad2>=18? 'Eres mayor de edad': 'Eres menor de edad';

/*USAR UN SWITCH
TENGO UNA VARIBLE QUE, DEPENDE EL CONTENIDO, VA A IMPRIMIR VARIAS COSAS*/

echo '<br>';

switch ($edad2){
    case 18:
        echo 'Eres mayor de edad';
        break;
    case 10:
        echo 'Eres menor de edad';
        break;
    default:
        echo 'Sos menor de edad';
        break;

}
echo '<br>';

/*USAR ARRAY */
$cars= array('Volvo','toyota','BMW');
/*El var_dump muestra informacion de la variable
  ejemplo:
$b = 3.1;
$c = true;
var_dump($b, $c);

El resultado del ejemplo sería:

float(3.1)
bool(true)
*/
var_dump($cars);
echo '<br>';

/* PUEDE ITERAR CUALQUIR TIPO DE DATO CON CUALQUIER TIPO*/
$cars2= array('/*/',41,'BMW');
var_dump($cars2);

echo '<br>';

/*O SE PUEDE ES ESCRIBIR ASI*/
$cars3= ['Volvo',
    'Toyota',
    'BMW',
    2];

foreach ($cars as $car){
    /*EL PUNTO (.) ES UN CONCATENADOR DE TEXTO. FUNCIONARIA COMO EL + DE JAVA*/
    echo $car . "<br>";
}

/* MAX Y MINIMOS*/

echo (min(0,150,-200));
echo (max(0,150,-200));


?>
</body>
</html>