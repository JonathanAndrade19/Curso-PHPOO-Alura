<?php 

class Funcionario 
{

    private $cargo;

    public function __construct(string $cargo)
    {
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

}