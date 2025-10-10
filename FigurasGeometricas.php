<?php

class FigurasGeometricas {

public $tipoFigura;
public $base;

// Constructor
function __construct($tipoFigura, $base) {  
    $this->tipoFigura = $tipoFigura;  
    $this->lado1= $base;  
}

public function settipoFigura($tipoFigura) {  
    $this->tipoFigura = $tipoFigura;  
} 

public function gettipoFigura() {  
    return $this->tipoFigura;  
} 

public function setbase($base) {  
    $this->base = $base;  
} 

public function getbase() {  
    return $this->base;  
} 

// Método calcularArea (sin funcionalidad)
public function calcularArea() {
    // Método sin implementación concreta
}

// Destructor
function __destruct() {
    
}
    
}