<?php
require_once("FigurasGeometricas.php");

// Clase Triangulo que hereda de FiguraGeometrica
class Triangulo extends FiguraGeometrica {

    // Propiedad para la altura (no se usa directamente)
    public $altura;
    // Propiedades privadas para los otros dos lados
    private $lado2;
    private $lado3;

    /**
     * Constructor: inicializa tipoFigura, lado1, lado2 y lado3
     */
    public function __construct($tipoFigura, $lado1, $lado2, $lado3) {
        // Llama al constructor de la clase padre
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    /**
     * Getter para el lado2
     */
    public function getLado2() {
        return $this->lado2;
    }

    /**
     * Setter para el lado2
     */
    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    /**
     * Getter para el lado3
     */
    public function getLado3() {
        return $this->lado3;
    }

    /**
     * Setter para el lado3
     */
    public function setLado3($lado3) {
        $this->lado3 = $lado3;
    }

    /**
     * Calcula el área del triángulo usando la fórmula de Herón
     * @return float Área
     */
    public function calcularArea(){
        $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
        return sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
    }

    /**
     * Calcula el perímetro del triángulo
     * @return float Perímetro
     */
    public function calcularPerimetro(){
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

    /**
     * Devuelve una representación en texto del triángulo
     * @return string
     */
    public function __toString(){
        return  "Triángulo: tipo={$this->tipoFigura}, lados=[{$this->lado1}, {$this->lado2}, {$this->lado3}], área=" . $this->calcularArea() . ", perímetro=" . $this->calcularPerimetro();
    }

    /**
     * Destructor (no realiza ninguna acción)
     */
    public function __destruct(){
        // Destructor vacío
    }

}