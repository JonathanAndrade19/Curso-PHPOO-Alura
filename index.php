<?php 

require 'src/Conta.php';

$conta1 = new Conta('105.094.394-54', 'Jonathan Andrade');
$conta2 = new Conta('702.313.104-39', 'Lídia Araújo');
var_dump($conta1);
var_dump($conta2);
var_dump(Conta::recuperaNumerodeContas());exit;