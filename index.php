<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewTeste</title>
</head>
<body>
<h1>Valores solicitados no Teste</h1>

<h4>Nome do Banco (Tb_banco) <h4>
<h4>Verba (TB_convenio) </h4> 
<h4>Codigo do contrato (Tb_contrato) - Data de inclusao (Tb_contrato) - Valor (Tb_contrato) - Prazo (Tb_contrato)</h4>
<hr>
<?php
include_once 'conexao.php';

$result_Tb_contrato = "SELECT c.*, cs. `servico` AS servico FROM `Tb_contrato` AS c
INNER JOIN `Tb_convenio_servico` AS cs ON c.`codigo` = cs.`codigo`
ORDER BY c.`codigo` ASC";

$resultConsulta = mysqli_query($conn, $result_Tb_contrato);

while ($rowConsulta = mysqli_fetch_assoc($resultConsulta)){
    $data = $rowConsulta['data_inclusao'];

    echo "Codigo do contrato: ".$rowConsulta['codigo']."</br>";
    echo "Data de inclusao: ".date('d/m/Y',strtotime($data))."</br>"; //Formatando Data (pt-br)
    echo "Valor: ".$rowConsulta['valor']."</br>";
    echo "Prazo: ".$rowConsulta['prazo']."</br><hr>";

    // var_dump($rowConsulta);
}


?>
    
</body>
</html>