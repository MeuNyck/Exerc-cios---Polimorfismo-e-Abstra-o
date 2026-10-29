<?php

class Animal{
    public function emotirSom(){
        echo "Som desconhecido";
    }
}

class Gato extends Animal{
    public function emotirSom(){
        echo "Miauuuu!";
    }
}

class Cachorro extends Animal{
    public function emotirSom(){
        echo "AuAu!";
    }
}

$gato = new Gato();
$gato->emotirSom();
echo "<br>";
$cachorro = new Cachorro();
$cachorro->emotirSom();

?>