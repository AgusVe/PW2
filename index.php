<!--

/*

require_once "Ejercicio6/ejercicio6.php";

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$hora = $_GET["hora"];

$persona = new Saludar($nombre, $apellido);

echo $persona->saludoFormal($hora) . $persona->nombreApellido();
echo "<br>";
echo $persona->saludoInformal($hora);*/
?>-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía práctica de ejercicios PW2</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
<header>
    <div class="div-nombreApellido">

        <h1 class="nombreApellido">AGUSTIN VEGA DOBAL</h1>

    </div>

</header>

<div class="div-ejercicio">

    <h2 class="ejercicio-num"> EJERCICIO 1</h2>

    <p class="enunciado"><b>ENUNCIADO:</b> Cree una función llamada Semaforo, que recibe por
        parametro un cólor cómo texto (“rojo”
        “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
        “avance” o “estado desconocido” ante un caso no esperado.
    <ol type="A" class="lista-objetivos">
        <li>función semaforo_a($color): Resuelva la solución utilizando if else</li>
        <li>función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )</li>
        <li>función semaforo_c($color): Resuelva la solución utilizando switch</li>
    </ol>
    </p>

    <div class="formulario">
        <form action="index.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="consulta" class="label">Ingrese el color del semaforo:</label>
            <input type="text" name="consulta" class="campo-form" placeholder="Rojo, Amarrilo, Verde"><br>
            <button type="submit" class="boton-envio" name="Enviar">ENVIAR</button>

        </form>
    </div>
    <?php
    /*REQUIERE_ONCE CORTA LA EJECUCION DEL RESTO DEL CODIGO SI HAY UN PROBLEMA EN ESA LINEA, EL INCLUDE NO*/
    require_once "Ejercicio1/ejercicio1.php";

    if (isset($_POST["Enviar"])) {
        $color = $_POST["consulta"];
        echo "<b>RESULTADO:</b>";
        echo '<ol type="a" style="padding-left: 1.0em;">';
        echo "<li>";
        semaforo_a($color);
        echo "</li>"; // Agregar </li>
        echo "<li>";
        echo semaforo_b($color);
        echo "</li>"; // Agregar </li>
        echo "<li>";
        echo semaforo_c($color);
        echo "</li>"; // Cambiar </ul> por </ol>
        echo "</ol>"; // Agregar </ol>
    }
    ?>
</div>

<div class="div-ejercicio">

    <h2 class="ejercicio-num"> EJERCICIO 2</h2>

    <p class="enunciado"><b>ENUNCIADO:</b> Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de
        dicha problemática:
        recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)^2.
    <ol type="A" class="lista-objetivos">
        <li>función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
            potencia
        </li>
        <li> función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
            desarrollada del binomio: a
            2 + 2*a*b + b
        </li>
    </ol>
    </p>

    <div class="formulario">
        <form action="index.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="consultaAEJ2" class="label">Ingrese el primer numero:</label>
            <input type="number" name="consultaAEJ2" class="campo-form" placeholder="Ejemplo: 24"><br>
            <label for="consultaBEJ2" class="label">Ingrese el segundo numero:</label>
            <input type="number" name="consultaAEJ2" class="campo-form" placeholder="Ejemplo: 16"><br>
            <button type="submit" class="boton-envio" name="Enviar2">ENVIAR</button>

        </form>
    </div>
    <?php
    require_once "Ejercicio2/ejercicio2.php";

    if (isset($_POST["Enviar2"])) {
        $a = $_POST["consultaAEJ2"];
        $b = $_POST["consultBEJ2"];
        echo "<b>RESULTADO:</b>";
        echo '<ol type="a" style="padding-left: 1.0em;>';
        echo "<li>";
        $resultadoEcucacion1 = binomioCuadradoPerfecto($a, $b);
        echo $resultadoEcucacion1;
        echo "</li>"; // Agregar </li>
        echo "<li>";
        $resultadoEcucacion2 = binomioCuadradoPerfecto_b($a, $b);
        echo $resultadoEcucacion2;
        echo "</li>"; // Agregar </li>
        echo "</ol>";
    }
    ?>
</div>

<div class="div-ejercicio">

    <h2 class="ejercicio-num"> EJERCICIO 3</h2>

    <p class="enunciado"><b>ENUNCIADO:</b> Cree una función concatenar($texto1, $texto2) que reciba dos textos como
        parámetro y devuelva ambos textos concatenados como uno solo.
    </p>
    <br>
    <br>

    <div class="formulario">
        <form action="index.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="consultaAEJ3" class="label">Ingrese el primer comentario:</label>
            <input type="text" name="consultaAEJ3" class="campo-form" placeholder="Ejemplo: Hola!"><br>
            <label for="consultaBEJ3" class="label">Ingrese el segundo comentario:</label>
            <input type="text" name="consultaBEJ3" class="campo-form" placeholder="Ejemplo: Como andas?"><br>
            <button type="submit" class="boton-envio" name="Enviar3">ENVIAR</button>

        </form>
    </div>

    <?php
    require_once "Ejercicio3/ejercicio3.php";

    if (isset($_POST["Enviar3"])) {
        $texto1 = $_POST["consultaAEJ3"];
        $texto2 = $_POST["consultaBEJ3"];
        $texto = concatenar($texto1, $texto2);
        echo "<b>RESULTADO:</b>";
        echo $texto;
    }
    ?>
</div>

<div class="div-ejercicio">

    <h2 class="ejercicio-num"> EJERCICIO 4</h2>

    <p class="enunciado"><b>ENUNCIADO:</b> Cree una función llamada incrementar, que reciba una variable y sin devolver
        nada como retorno de
        la función, el valor del parámetro haya sido incrementado en 1.
    </p>
    <br>
    <br>
    <div class="formulario">
        <form action="index.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="consultaEJ4" class="label">Ingrese el numero que desea incrementar:</label>
            <input type="number" name="consultaEJ4" class="campo-form" placeholder="Ejemplo: 100!"><br>
            <button type="submit" class="boton-envio" name="Enviar4">ENVIAR</button>

        </form>
    </div>

    <?php
    require_once "Ejercicio4/ejercicio4.php";

    if (isset($_POST["Enviar4"])) {
        $numeroAIncrementar = $_POST["consultaEJ4"];
        incrementar($numeroAIncrementar);
        echo "<b>RESULTADO:</b>";
        echo $numeroAIncrementar;
    }
    ?>

</div>

<div class="div-ejercicio">

    <h2 class="ejercicio-num"> EJERCICIO 5</h2>
    <p class="enunciado"><b>ENUNCIADO:</b> Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la
        suma de todos sus
        valores.
    <ol type="A" class="lista-objetivos">
        <li>función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for</li>
        <li>función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each</li>
        <li>función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while</li>
    </ol>
    </p>

    <div class="formulario">
        <form action="index.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="consultaAEJ5" class="label">Ingrese un conjunto de numeros SEPARADOS POR COMA:</label><br>
            <input type="text" name="consultaAEJ5" class="campo-form" placeholder="Ejemplo: 2,6,9,8 "><br>
            <button type="submit" class="boton-envio" name="Enviar5">ENVIAR</button>

        </form>
    </div>
    <?php
    require_once "Ejercicio5/ejercicio5.php";
    if (isset($_POST["Enviar5"])) {

        $array = $_POST["consultaAEJ5"];

        /*CON AYUDA DE CHATGPT */
        /* LA FUNCION EXPLODE DIVIDE UNA CADENA EN VARIAS PARTES,
        * UTILIZANDO UN SEPARADOR ESPECÍFICO (, o -). LA FUNCIÓN DEVUELVE UN ARRAY DE CADENAS, DONDE CADA ELEMENTO DEL ARRAY ES UNA PORCIÓN DE LA CADENA ORIGINAL
        * QUE FUE SEPARADA POR EL SEPARADOR.
        *
        * LA FUNCIÓN ARRAY_MAP() EN PHP ES UNA FUNCIÓN DE ORDEN SUPERIOR (FUNCIÓN QUE TOMA OTRA FUNCIÓN COMO ARGUMENTO) QUE TOMA UNA O MÁS MATRICES COMO ARGUMENTOS Y
        * DEVUELVE UNA NUEVA MATRIZ DESPUÉS DE APLICAR UNA FUNCIÓN DE DEVOLUCIÓN DE LLAMADA A CADA ELEMENTO DE LA MATRIZ ORIGINAL
        * EN ESTE CASO USA LA FUNCION (COMO PARAMETRO) INTVAL, QUE CONVIERTE LOS VALORES EN NUMEROS ENTEROS
        *
        * */
        $array = explode(",", $array);
        $array = array_map('intval', $array);
        echo "<b>RESULTADO:</b>";

        echo '<ol type="a" style="padding-left: 1.0em;>';
        echo "<li>";
        $sumaDeArray = sumatoria($array);
        echo $sumaDeArray;
        echo "</li>";
        echo "<li>";
        $sumaDeArray_b = sumatoria_b($array);
        echo $sumaDeArray_b;
        echo "</li>";
        echo "<li>";
        $sumaDeArray_c = sumatoria_c($array);
        echo $sumaDeArray_c;
        echo "</li>";
        echo "</ol>";
    }
    ?>
</div>

<div class="div-ejercicio">

    <h2 class="ejercicio-num"> EJERCICIO 6</h2>

    <p class="enunciado"><b>ENUNCIADO:</b> Cree una clase llamada Saludar, la misma tendrá un constructor que reciba
        nombre, apellido de una persona.
    <ol type="A" class="lista-objetivos">
        <li> Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
            concatenado al nombre un prefijo dependiendo del horario:
            05hs a 13hs “Buenos días”
            13hs a 21hs “Buenas tardes”
            21hs a 05hs “Buenas noches”
            Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
        </li>
        <li> Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder
            sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
            perteneciente al horario .
            Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
            “¡Hola Ezequiel! Que tengas un buen día”
        </li>
    </ol>
    </p>

    <div class="formulario">
        <form action="index.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="consultaAEJ6" class="label">Ingrese un nombre:</label>
            <input type="text" name="consultaAEJ6" class="campo-form" placeholder="Ejemplo: Marcelo"><br>
            <label for="consultaBEJ6" class="label">Ingrese un apellido:</label>
            <input type="text" name="consultaBEJ6" class="campo-form" placeholder="Ejemplo: Diaz"><br>
            <label for="consultaCEJ6" class="label">Ingrese el un horario (00 a 24):</label>
            <input type="number" name="consultaCEJ6" class="campo-form" placeholder="Ejemplo: 11"><br>
            <button type="submit" class="boton-envio" name="Enviar6">ENVIAR</button>

        </form>
    </div>

    <?php
    require_once "Ejercicio6/ejercicio6.php";

    if (isset($_POST["Enviar6"])) {
        $nombre = $_POST["consultaAEJ6"];
        $apellido = $_POST["consultaBEJ6"];
        $hora = $_POST["consultaCEJ6"];

        $persona = new Saludar($nombre, $apellido);
        echo "<b>RESULTADO:</b>";
        echo $persona->saludoFormal($hora) . $persona->nombreApellido();
        echo "<br>";
        echo $persona->saludoInformal($hora);
    }
    ?>
</div>
</body>

</html>
