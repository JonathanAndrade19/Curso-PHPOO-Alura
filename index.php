<?php 

require 'src/Conta.php';

$conta1 = new Conta('777.333.444-99', 'Jonathan Andrade');
$conta2 = new Conta('222.333.555-77', 'Lídia Araújo');
new Conta('111.222.333-44', 'Nathan Moreira');
var_dump($conta1);
var_dump($conta2);
var_dump(Conta::recuperaNumerodeContas());exit;