<?php

abstract class ContaBancaria{
    protected $titular;
    protected $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function depositar($valor){
        if($valor > 0){
            $this->saldo += $valor;
        }
    }

    abstract public function calcularTarifa();
}

class ContaCorrente extends ContaBancaria{
    public function calcularTarifa(){
        return 15;
    }
}

class ContaPoupanca extends ContaBancaria{
    public function calcularTarifa(){
        return 0;
    }
}

$corrente = new ContaCorrente("João", 500);
$poupanca = new ContaPoupanca("Pedro", 500);

$corrente->depositar(200);
$poupanca->depositar(200);

$tarifaCorrente = $corrente->calcularTarifa();
$tarifaPoupanca = $poupanca->calcularTarifa();

echo "Conta Corrente:<br>";
echo "Saldo após depósito: <b>R$ " . number_format($corrente->getSaldo(), 2, ',', '.') . "</b><br>";
echo "Tarifa: <b>R$ " . number_format($tarifaCorrente, 2, ',', '.') . "</b><br>";
echo "Saldo após desconto da tarifa: <b>R$ " . number_format($corrente->getSaldo() - $tarifaCorrente, 2, ',', '.') . "</b><br><br>";

echo "Conta Poupança:<br>";
echo "Saldo após depósito: <b>R$ " . number_format($poupanca->getSaldo(), 2, ',', '.') . "</b><br>";
echo "Tarifa: <b>R$ " . number_format($tarifaPoupanca, 2, ',', '.') . "</b><br>";
echo "Saldo após desconto da tarifa: <b>R$ " . number_format($poupanca->getSaldo() - $tarifaPoupanca, 2, ',', '.') . "</b>";

?>