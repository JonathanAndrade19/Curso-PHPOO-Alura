<?php 

// require_once garante que esse arquivo será tránsferido apenas uma vez.
require_once 'funcoes.php';
// Array Associativos.

$contaCorrente = [ 
    10509439488 => [ 
        'Codigo' => 1, 
        'titular' => 'Jonathan Moreira', 
        'Saldo' => 451
    ],
    70231322754 => [ 
        'Codigo' => 2, 
        'titular' => 'Lídia Araújo', 
        'Saldo' => 488
    ],
    11148759420 => [ 
        'Codigo' => 3, 
        'titular' => 'Liv Andrade', 
        'Saldo' => 357
    ],
    12345678910 => [
        'codigo' => 4,
        'titular' => 'Nathan Andrade',
        'Saldo' => 378
    ]
];

// função de sacar um valor da conta.
$contaCorrente[10509439488] = sacar($contaCorrente[10509439488], 151);

// função de depositar um valor a conta. 
$contaCorrente[70231322754] = depositar($contaCorrente[70231322754], 12);

// função que deixa as letras Maiusculas. letras com acentuação não ira ser convertida para maiusculos
// e preciso usar a mb_strtoupper(); que precisa ser notificado no php.ini
titularComLetrasMaiusculas($contaCorrente[10509439488]);
titularComLetrasMaiusculas($contaCorrente[70231322754]);
titularComLetrasMaiusculas($contaCorrente[11148759420]);

// unset Usado para excluir um indice de uma arrey, ou informações passadas.
unset($contaCorrente[12345678910]);
