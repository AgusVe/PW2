<!--VARIABLES GLOBALES-->
<?php
/* EL GET MANDA EL FORMULARIO POR LA URL*/
/* ESTO VA A AGARRAR LA VARIABLES NOMBRE QUE ME LLEGUE POR URL*/
$nombre= $_GET["nombre"];

echo 'Hola'. $nombre;
/*LO VISUALIZAS ESCRIBIENDO DESPUES DE LA URL ?nombre=agustin ESTO SETEA LA VARIABLE CON ESE VALOR*/

/*INCLUDE*/
/*ADJUNTA ARCHIVOS EXTERNOS AL CODIGO (TIENE QUE ESTAR EN LA MISMA CARPETA)*/

echo "<br>";
include "function.php";

/* EN CASO DE TENER QUE LLENAR OTRAS VARIBALES LAS CONCATENAS CON & ENTONCES QUEDARIA
   ?nombre=agustin&edad=22*/
$edad= $_GET["edad"];
/*SI NO QUERES SETEARLAS MANUALMENTE TENES QUE HACER (NO RECOMENDADO)

 * $nombre=$_GET['nombre']?? "nombre por default";
 * ESTO ES COMO UN IF, SI NO HAY NOMBRE LO RELLANA CON EL VALOR DEFAULT
 *
 * SI QUERES QUE TERMINE EL PROGRAMA CON UNA "PREGUNTA" ES
 * $nombre=$_GET['nombre']?? died("Escrbi un nombre por url");
*/

esMayorDeEdad($edad);

/*$$*/

$nombre='gato';
/*ESTO CREA UNA VARIABLE CON EL CONTENIDON DE $nombre OSEA LA VARIABLE SE VA A
PASAR A LLAMAR COMO EL CONTENIDO DE NOMBRE*/
$$nombre='¡Miau!';

echo "El $nombre hace $gato";

/*EJEMPLO DE USO
 * RECIBE POR COMPLETO LO QUE TIENE POST COMO CLAVE VALOR Y DESPUES ME CREA UNA
 * VARIABLE CON CADA VALOR QUE RECIBIO DE POST Y LE ASIGNA EL VALOR.
 * O SEA, TRANSFORMA EN VARIABLES A TODAS LAS CLAVES VALOR QUE HAY EN POST
 *
 * foreach($_POST as $Key => $value){
 * $$key=$value;
 * }
 * */


/*TABLAS*/
$valor= ['Volvo',
    'Toyota',
    'BMW',
    2];

/* LE AGREGA UNA CLAVE NUMERICA (DE 0 A INFINITO) A LOS VALORES DE UN ARRAY*/
  foreach($valores as $Key => $valor){
  echo "$key -> $valor<br>";
  }
/*TAMBIEN LE PUEDO ASIGNAR LA CLAVE QUE YO DESEE*/
$valorConClave= [
        'nombre'=> 'facu',
    'apelldo'=> 'mbappe',
    'edad'=>'23'];
foreach($valores as $Key => $valorConClave){
    echo "$key -> $valorConClave<br>";
}
/*PUEDO SELECCIONAR LA QUE QUIERO*/
echo $valorConClave['nombre'] . "<br>";

/*OBJETOS*/
/*IMPLEMENTAR CHATGP*/

class ChatGPT{
    /*CREAR UN ATRIBUTO
    private $atributo;
    */
    /*LLAMAR A UN ATRIBUTO EN PHP $this->$apiKey*/
    public function __construct()
    {
    }

    public function query($text)
    {
        $apiKey = "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"; //buscarla en la web https://platform.openai.com/account/api-keys
        $url = 'https://api.openai.com/v1/engines/davinci-codex/completions?prompt=Hola%20mundo&max_tokens=100&api_key=' . $apiKey;
        $response = file_get_contents($url);
        $obj = json_decode($response);
        $respuesta = $obj->choices[0]->text;
        echo $respuesta;
    }
}
$chatGPT=new ChatGPT();

/*TEXTO QUE QUEREMOS QUE RESPONDA SE MANDA POR URL*/
$text=$_GET["texto"];
/*LLAMO AL METODO*/
$chatGPT->query($text);

/*DA UN MESAJE DE ERROR PORQUE: Por lo que pude ver es un tema de que hay que pagar para consumir la api y te asigne un limite de consumo que por defecto es 0*/

?>


