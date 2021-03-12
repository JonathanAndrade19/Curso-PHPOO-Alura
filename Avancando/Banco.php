<?php

function sacar(array $conta, float $valorASacar): array
{
    if ( $valorASacar > $conta['Saldo'] ) {
        exibeMensagem('Você não tem saldo suficiente');
    } else {
        $conta['Saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta,float $valorADepositar): array
{  
    if ($valorADepositar > 0) {
        $conta['Saldo'] += $valorADepositar;
        return $conta;
    }

    exibeMensagem("O Valor do Deposito e Invalido");
    
}

function exibeMensagem(string $mensagem) 
{
    // Uma SubRotina
    echo $mensagem . '</br>';
}

$contaCorrente = [ 
    10509439488 => [ 
        'Codigo' => 1, 
        'NomeConta' => 'Jonathan Moreira', 
        'Saldo' => 451
    ],
    70231322754 => [ 
        'Codigo' => 2, 
        'NomeConta' => 'Lídia Araújo', 
        'Saldo' => 488
    ],
    11148759420 => [ 
        'Codigo' => 3, 
        'NomeConta' => 'Liv Andrade', 
        'Saldo' => 357
    ]
];

$contaCorrente[10509439488] = sacar($contaCorrente[10509439488], 151);

$contaCorrente[70231322754] = depositar($contaCorrente[70231322754], 12);

foreach ($contaCorrente as $cpf => $contas) {
    exibeMensagem('');
    exibeMensagem( ' CPF: ' . $cpf . ' Nome: ' . $contas['NomeConta'] . ' Saldo: ' . $contas['Saldo']);
}