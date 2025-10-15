<?php
// Clase base para todas las figuras geométricas
class FiguraGeometrica {
    // Propiedades protegidas para el tipo de figura y el primer lado/radio
    protected $tipoFigura;
    protected $lado1;

    /**
     * Constructor: inicializa tipoFigura y lado1
     */
    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    /**
     * Getter para el tipo de figura
     */
    public function getTipoFigura() {
        return $this->tipoFigura;
    }

    /**
     * Setter para el tipo de figura
     */
    public function setTipoFigura($tipoFigura) {
        $this->tipoFigura = $tipoFigura;
    }

    /**
     * Getter para el primer lado/radio
     */
    public function getLado1() {
        return $this->lado1;
    }

    /**
     * Setter para el primer lado/radio
     */
    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }

    /**
     * Método genérico para calcular el área (debe ser sobrescrito)
     */
    public function calcularArea() {
        // Sin funcionalidad concreta en la clase base
        return 0;
    }

    /**
     * Destructor (no realiza ninguna acción)
     */
    public function __destruct() {
        // Destructor vacío
    }
}