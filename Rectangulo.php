<?php
require_once("FigurasGeometricas.php");

class Rectangulo extends FigurasGeometricas {

public $lado2;
public $resultado;

public __construct($tipoFigura, $lado1, $lado2){

    parent::__construct($tipoFigura, $lado1);
    $this->lado2 = $lado2
}

public function setlado2($lado2){
    $this->lado2 = $lado2;
}

public function getlado2(){
    return $this->lado2;
}

public function calcularArea(){
    return = $this->lado1 * $this->lado2;
}

public function calcularPerimetro(){
    return = 2 * ($this->lado1 + $this->lado2);
}

public function __toString(){
    return  "Has elegido el tipo de figura: " . $this->tipoFigura() "<br>".
            ",El lado 1 es: " . $this->lado1() . 
            ",El lado 2 es: " . $this->lado2() .
            ",El area total del cuadrado teniendo en cuenta los dos lado es: " . $this->calcularArea .
            ",El perimetro total del cuadrado teniendo en cuenta los dos lado es: " . $this->calcularPerimetro .
}

public __destruct(){
    
}

    
}