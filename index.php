<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fácil Soluções</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <p>Valores solicitados no Teste</p>
    <?php
        include_once 'conexao.php';

        $result_Tb_convenio = "SELECT c.*, tbc.*, tbb.*  
        FROM `Tb_contrato` AS c
        LEFT JOIN `Tb_convenio` AS tbc ON c.`codigo` = tbc.`codigo`
        LEFT JOIN `Tb_banco` AS tbb ON tbc.`banco` = tbb.`codigo`
        ORDER BY c.`codigo` ASC";
        
        $resultConvenio = mysqli_query($conn, $result_Tb_convenio);
    ?>
<div class="container">
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Data de inclusao</th>
            <th scope="col">Valor</th>
            <th scope="col">Prazo</th>
            <th scope="col">Verba</th>
            <th scope="col">Nome do Banco</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($resultConvenio)):?>
        <?php $data = $row['data_inclusao'] ?>
            <tr>
                <th><?php echo $row['codigo'] ?></th>
                <td><?php echo date('d/m/Y',strtotime($data))?></td>
                <td><?php echo $row['valor'] ?></td>
                <td><?php echo $row['prazo'] ?></td>
                <td><?php echo $row['verba'] ?></td>
                <td><?php echo $row['nome'] ?></td>
            </tr>
        <?php endwhile ;?>
        </tbody>
    </table>
</div>
</body>
</html>