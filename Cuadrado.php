<?php
require_once("FigurasGeometricas.php");

// Clase Cuadrado que hereda de FiguraGeometrica
class Cuadrado extends FiguraGeometrica {

    // Propiedad para guardar el resultado (no se usa directamente)
    public $resultado;

    /**
     * Constructor: inicializa tipoFigura y lado1
     * @param string $tipoFigura Nombre de la figura
     * @param float $lado1 Longitud del lado del cuadrado
     */
    public function __construct($tipoFigura, $lado1) {
        // Llama al constructor de la clase padre
        parent::__construct($tipoFigura, $lado1);
    }

    /**
     * Calcula el área del cuadrado
     * @return float Área
     */
    public function calcularArea() {
        return $this->lado1 * $this->lado1;
    }

    /**
     * Calcula el perímetro del cuadrado
     * @return float Perímetro
     */
    public function calcularPerimetro() {
        return $this->lado1 * 4;
    }

    /**
     * Devuelve una representación en texto del cuadrado
     * @return string
     */
    public function __toString() {
        return "Has elegido el tipo de figura: " . $this->tipoFigura .
            "<br>El lado es: " . $this->lado1 .
            "<br>El área total del cuadrado es: " . $this->calcularArea() .
            "<br>El perímetro total del cuadrado es: " . $this->calcularPerimetro();
    }

    /**
     * Destructor (no realiza ninguna acción)
     */
    public function __destruct() {
        // Destructor vacío
    }

}