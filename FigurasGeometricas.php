<?php

class FigurasGeometricas {

public $tipoFigura;
public $lado1;

// Constructor
function __construct($tipoFigura, $lado1) {  
    $this->tipoFigura = $tipoFigura;  
    $this->lado1= $lado1;  
}

public function settipoFigura($tipoFigura) {  
    $this->tipoFigura = $tipoFigura;  
} 

public function gettipoFigura() {  
    return $this->tipoFigura;  
} 

public function setlado1($lado1) {  
    $this->lado1 = $lado1;  
} 

public function getlado1() {  
    return $this->lado1;  
} 

// Método calcularArea (sin funcionalidad)
public function calcularArea() {
    // Método sin implementación concreta
}

// Destructor
function __destruct() {
    
}
    
}