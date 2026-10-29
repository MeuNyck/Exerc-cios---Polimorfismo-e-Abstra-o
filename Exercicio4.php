<?php

abstract class Eletrodomestico {
    protected $marca;

    public function __construct($marca) {
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }

    abstract public function ligar();
}

class Televisao extends Eletrodomestico {
    public function ligar() {
        return "Ligando a tela da televisão.";
    }
}

class Geladeira extends Eletrodomestico {
    public function ligar() {
        return "Começando a refrigeração da geladeira.";
    }
}

$tv = new Televisao("Bob Goles");
$geladeira = new Geladeira("Bolas Geladas");

echo "Marca da televisão: <b>" . $tv->getMarca() . "</b><br>";
echo $tv->ligar() . "<br><br>";

echo "Marca da geladeira: <b>" . $geladeira->getMarca() . "</b><br>";
echo $geladeira->ligar();

?>