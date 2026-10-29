<?php

abstract class FormaGeometrica{
    abstract public function calcularArea();
}

class Retangulo extends FormaGeometrica{
    private $base;
    private $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        return $this->base * $this->altura;
    }
}

class Circulo extends FormaGeometrica{
    private $raio;

    public function __construct($raio){
        $this->raio = $raio;
    }

    public function calcularArea(){
        return pi() * ($this->raio ** 2);
    }
}

$retangulo = new Retangulo(8, 5);
$circulo = new Circulo(4);

echo "Área do retângulo: <b>" . number_format($retangulo->calcularArea(), 2, ',', '.') . "</b> cm²<br>";
echo "Área do círculo: <b>" . number_format($circulo->calcularArea(), 2, ',', '.') . "</b> cm²";

?
