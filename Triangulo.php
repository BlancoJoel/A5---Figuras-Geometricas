<?php
require_once("FigurasGeometricas.php");

class Triangulo extends FigurasGeometricas {

public $altura;



public __construct($tipoFigura, $base, $altura){

    parent::__construct($tipoFigura, $base);
    $this->altura = $altura
}



public function calcularArea(){
    return = 2 * ($this->base * $this->altura);
}

public function calcularPerimetro(){
    return = 2 * ($this->base + $this->altura);
}

public function __toString(){
    return  "Has elegido el tipo de figura: " . $this->tipoFigura() "<br>".
            ",El lado 1 es: " . $this->base() . 
            ",El lado 2 es: " . $this->altura() .
            ",El area total del cuadrado teniendo en cuenta los dos lado es: " . $this->calcularArea .
            ",El perimetro total del cuadrado teniendo en cuenta los dos lado es: " . $this->calcularPerimetro .
}

public __destruct(){
    
}

    
}