<?php
require_once("FigurasGeometricas.php");

class Cuadrado extends FigurasGeometricas {

public $resultado;


public __construct($tipoFigura, $base){

    parent::__construct($tipoFigura, $base);
   
}

public function calcularArea(){
    return = $this->base * $this->base;
}

public function calcularPerimetro(){
    return = $this->base * 4;
}

public function __toString(){
    return  "Has elegido el tipo de figura: " . $this->tipoFigura() "<br>".
            ",El lado 1 es: " . $this->base() . 
            ",El area total del cuadrado teniendo en cuenta los dos lado es: " . $this->calcularArea .
            ",El perimetro total del cuadrado teniendo en cuenta los dos lado es: " . $this->calcularPerimetro .
}

public __destruct(){
    
}

    
}