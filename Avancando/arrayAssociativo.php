<?php


$arrayAssociativo = [ 
    10509439488 => [ 
        'Codigo' => 1, 
        'NomeConta' => 'Jonathan Moreira', 
        'Saldo' => 4.451
    ],
    70231322754 => [ 
        'Codigo' => 2, 
        'NomeConta' => 'Lídia Araújo', 
        'Saldo' => 6.088
    ],
    11148759420 => [ 
        'Codigo' => 3, 
        'NomeConta' => 'Liv Andrade', 
        'Saldo' => 2.157
    ]

];


foreach ($arrayAssociativo as $cpf => $Assoc) {
    echo $cpf . '</br>';
    echo $Assoc['NomeConta'] . '</br>';
    echo $Assoc['Saldo'] . '<br></br>';
}