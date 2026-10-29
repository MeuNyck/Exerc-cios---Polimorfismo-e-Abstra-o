<?php

class Carro{
    public function acelerar(){
        echo "O carro está acelerando...";
    }
}

class CarroCombustao extends Carro{
    public function acelerar(){
        echo "Injetando combustivel 🕊️";
    }
}

class CarroEletrico extends Carro{
    public function acelerar(){
        echo "Enviando energia";
    }
}

$carro = new Carro();
$carro->acelerar();
echo "<br>";

$carroCombustao = new CarroCombustao();
$carroCombustao->acelerar();
echo "<br>";

$carroEletrico = new CarroEletrico();
$carroEletrico->acelerar();
echo "<br>";

?>