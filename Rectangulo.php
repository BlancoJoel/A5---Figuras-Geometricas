<?php
require_once("FigurasGeometricas.php");

class Rectangulo extends FigurasGeometricas {

public $altura;
public $resultado;

public __construct($tipoFigura, $base, $altura){

    parent::__construct($tipoFigura, $base);
    $this->altura = $altura
}

public function setlado2($altura){
    $this->altura = $altura;
}

public function getlado2(){
    return $this->altura;
}

public function calcularArea(){
    return = $this->base * $this->altura;
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