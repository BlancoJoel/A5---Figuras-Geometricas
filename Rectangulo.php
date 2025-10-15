<?php
require_once("FigurasGeometricas.php");

// Clase Rectangulo que hereda de FiguraGeometrica
class Rectangulo extends FiguraGeometrica {

    // Propiedad para el segundo lado (altura)
    public $altura;
    // Propiedad para guardar el resultado (no se usa directamente)
    public $resultado;

    /**
     * Constructor: inicializa tipoFigura, lado1 y altura
     */
    public function __construct($tipoFigura, $lado1, $altura){
        // Llama al constructor de la clase padre
        parent::__construct($tipoFigura, $lado1);
        // Guarda la altura
        $this->altura = $altura;
    }

    /**
     * Setter para el segundo lado (altura)
     */
    public function setlado2($altura){
        $this->altura = $altura;
    }

    /**
     * Getter para el segundo lado (altura)
     */
    public function getlado2(){
        return $this->altura;
    }

    /**
     * Calcula el área del rectángulo
     */
    public function calcularArea(){
        return $this->lado1 * $this->altura;
    }

    /**
     * Calcula el perímetro del rectángulo
     */
    public function calcularPerimetro(){
        return 2 * ($this->lado1 + $this->altura);
    }

    /**
     * Devuelve una representación en texto del rectángulo
     */
    public function __toString(){
        return "Rectángulo: tipo={$this->tipoFigura}, lados=[{$this->lado1}, {$this->altura}], área=" . $this->calcularArea() . ", perímetro=" . $this->calcularPerimetro();
    }

    /**
     * Destructor (no realiza ninguna acción)
     */
    public function __destruct(){
        // Destructor vacío
    }

}