<?php
require_once("FigurasGeometricas.php");

// Clase Circulo que hereda de FiguraGeometrica
class Circulo extends FiguraGeometrica {

    // Propiedad privada para el radio
    private $radio;

    /**
     * Constructor: inicializa tipoFigura y radio
     */
    public function __construct($tipoFigura, $radio) {
        parent::__construct($tipoFigura, $radio);
        $this->radio = $radio;
    }

    /**
     * Getter para el radio
     */
    public function getRadio() {
        return $this->radio;
    }

    /**
     * Setter para el radio
     */
    public function setRadio($radio) {
        $this->radio = $radio;
    }

    /**
     * Calcula el área del círculo
     * @return float Área
     */
    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }

    /**
     * Calcula el perímetro del círculo
     * @return float Perímetro
     */
    public function calcularPerimetro() {
        return 2 * pi() * $this->radio;
    }

    /**
     * Devuelve una representación en texto del círculo
     * @return string
     */
    public function __toString() {
        return "Has elegido el tipo de figura: " . $this->tipoFigura .
            "<br>El radio es: " . $this->radio .
            "<br>El área total del círculo es: " . $this->calcularArea() .
            "<br>El perímetro total del círculo es: " . $this->calcularPerimetro();
    }

    /**
     * Destructor (no realiza ninguna acción)
     */
    public function __destruct() {
        // Destructor vacío
    }
}