<?php

abstract class Funcionario{
    protected $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    abstract public function calcularSalario();
}

class FuncionarioFixo extends Funcionario{
    private $salario;

    public function __construct($nome, $salario){
        parent::__construct($nome);
        $this->salario = $salario;
    }

    public function calcularSalario(){
        return $this->salario;
    }
}

class FuncionarioComissionado extends Funcionario{
    private $salarioBase;
    private $vendas;

    public function __construct($nome, $salarioBase, $vendas){
        parent::__construct($nome);
        $this->salarioBase = $salarioBase;
        $this->vendas = $vendas;
    }

    public function calcularSalario(){
        return $this->salarioBase + ($this->vendas * 0.10);
    }
}

$fixo = new FuncionarioFixo("João", 2500);
$comissionado = new FuncionarioComissionado("Pedro", 1800, 8000);

echo "Funcionário fixo: <b>" . $fixo->getNome() . "</b><br>";
echo "Salário: <b>R$ " . number_format($fixo->calcularSalario(), 2, ',', '.') . "</b><br><br>";

echo "Funcionário comissionado: <b>" . $comissionado->getNome() . "</b><br>";
echo "Salário: <b>R$ " . number_format($comissionado->calcularSalario(), 2, ',', '.') . "</b>";

?>