<?php 

// Função que trás dois valores como parametro, uma função que serve para sacar valor de uma conta.
function sacar(array $conta, float $valorASacar): array
{
    if ( $valorASacar > $conta['Saldo'] ) {
        exibeMensagem('Você não tem saldo suficiente');
    } else {
        $conta['Saldo'] -= $valorASacar;
    }
    return $conta;
}

// Função que trás dois valores como parametro, uma função que serve para sacar valor de uma conta.
function depositar(array $conta,float $valorADepositar): array
{  
    if ($valorADepositar > 0) {
        $conta['Saldo'] += $valorADepositar;
        return $conta;
    }

    exibeMensagem("O Valor do Deposito e Invalido");
    
}

// Subrotina
function exibeMensagem(string $mensagem) 
{
    // Uma SubRotina
    echo $mensagem . '</br>';
}

// Função que serve para deixar o nome do titular da conta sempre em maiusculo, usando a variavel STRTOUPPER.
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}


function exibeConta(array $conta)
{
    ['titular' => $titular, 'Saldo' => $saldo] = $conta;
    echo "<li>Titular: " . $titular . "Saldo: " . $saldo .  "</li>";
}