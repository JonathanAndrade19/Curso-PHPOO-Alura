<?php 

namespace Alura\Banco\Modelo\Funcionario;

class Gerente extends Funcionario
{
    public function caluclaBonificacao(): float
    {
        return $this->recuperaSalario();
    }
}