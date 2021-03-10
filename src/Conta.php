<?php 

class Conta 
{
    // Atributos
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;
    private static $numeroDeContas = 0;

    // Métodos
    public function __construct(string $cpfTitular, string $nomeTitular)
    {   
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;

        self::$numeroDeContas++;

    }

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo Indisponível";

            return;
        } 
        
        $this->saldo -= $valorASacar;
        
    }

    public function depositar(float $valorADespositar): void
    {
        if ($valorADespositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        } 
        
        $this->saldo += $valorADespositar;
 
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
 
    }

    public function resulperarSaldo(): float
    {
        return $this->saldo;
    }

    public function resulperarcpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function resulperarnomeTitular(): string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5){
            echo "Olá seu nome e invalido, e preciso cadastrar um nome com mais de 5 caractere";
            exit();
        }
    }

    public static function recuperaNumerodeContas():int 
    {
        return self::$numeroDeContas;
    }
}