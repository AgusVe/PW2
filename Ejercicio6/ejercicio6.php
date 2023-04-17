<?php
class Saludar{
    private $nombre='';
    private $apellido='';

    public function __construct($nombre,$apellido){
        $this->nombre=$nombre;
        $this->apellido=$apellido;

    }
public function saludoFormal($horario)
{

    if ($horario >= 05 && $horario <= 13) {
        return "Buenos dias";

    } elseif ($horario >= 13 && $horario <= 21) {
        return "Buenas tardes";
    } else {
        return "Buenas noches";
    }
}
public function nombreApellido(){
    return " ". $this->nombre ." ". $this->apellido;
    }

public function saludoInformal($horario){
    if ($horario >= 05 && $horario <= 13) {
        return "¡Hola " . $this->nombre . "! " . "Que tengas un buen dia.";

    } elseif ($horario >= 13 && $horario <= 21) {
        return "¡Hola " . $this->nombre . "! " . "Que tengas una buena tarde.";
    } else {
        return  "¡Hola " . $this->nombre . "! " . "Que tengas una buena noche.";

    }

}
}
?>