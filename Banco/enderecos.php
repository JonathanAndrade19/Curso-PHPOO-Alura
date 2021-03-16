<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco('João Pessoa', 'Mangabeira', 'João Matias da Costa', '152');
$outroEndereco = new Endereco('Cabedelo', 'Camboinha', 'Do Mar', '1557');

// $umEndereco->cidade = 'Campina Grande';
// echo $umEndereco;

echo $umEndereco . PHP_EOL;
echo $outroEndereco;

