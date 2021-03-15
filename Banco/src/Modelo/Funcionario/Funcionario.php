<?php 

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{CPF, Pessoa};


abstract class Funcionario extends Pessoa
{

    private $cargo;
    private $salario;

    public function __construct(string $nome , CPF $cpf , string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;

    }

    public function receberAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser Positivo";
            return;
        }

        $this->salario += $valorAumentado;

    }
}