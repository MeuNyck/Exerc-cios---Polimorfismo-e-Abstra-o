<?php

class Frete{
    public function calcularFrete($peso){
        return 0;
    }
}

class FreteNormal extends Frete{
    public function calcularFrete($peso){
        return 10 + (2 * $peso);
    }
}

class FreteExpresso extends Frete{
    public function calcularFrete($peso){
        return 20 + (5 * $peso);
    }
}

class RetiradaLoja extends Frete{
    public function calcularFrete($peso){
        return 0;
    }
}

function exibirFrete(Frete $frete, $peso){
    echo "Valor do frete: <b>R$ " . number_format($frete->calcularFrete($peso), 2, ',', '.') . "</b><br>";
}

$normal = new FreteNormal();
$expresso = new FreteExpresso();
$retirada = new RetiradaLoja();

$peso = 3;

echo "Frete Normal: ";
exibirFrete($normal, $peso);

echo "Frete Expresso: ";
exibirFrete($expresso, $peso);

echo "Retirada na Loja: ";
exibirFrete($retirada, $peso);

?>