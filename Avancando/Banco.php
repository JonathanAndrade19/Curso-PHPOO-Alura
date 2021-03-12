<?php
    require_once 'ConsultarConta.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Alura</title>
</head>
<body>
    <dl>
        <?php foreach ( $contaCorrente as $cpf => $conta ) : ?>
            <dt><h3>Nome: <?= $conta['titular'] . ' - '. $cpf;?></h3></dt>
            <dd>Saldo: <?= $conta['Saldo']; ?></dd>
        <?php endforeach; ?>
    </dl>
</body>
</html>