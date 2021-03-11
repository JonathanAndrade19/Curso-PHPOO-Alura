<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <div style="text-align: center;margin-top: 2rem;">
        <form action="index.php" method="POST">
            <label>Altura: </label>
            <input type="text" name="altura">
            <label>Peso: </label>
            <input type="text" name="peso">
            <input type="submit" value="Calcular">
        </form>
    </div>
   
    <?php 
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / $altura ** 2;
    ?>
    
    <div style="text-align: center;margin-top: 2rem;">
        <?php 
            echo "Seu IMC é de $imc.";

            if ($imc < 18.5) {
                echo " MAGREZA";
                return " MAGREZA";
            }
            if ($imc > 15.5 && $imc <= 24.9){
                echo " NORMAL";
                return " NORMAL";
            }
            if ($imc >= 25.0 && $imc <= 29.9) {
                echo " SOBREPESO";
                return " SOBREPESO";
            }
            if ($imc >= 30.0 && $imc <= 39.9) {
                echo " OBESIDADE";
                return " OBESIDADE";
            }
            if ($imc > 40.0) {
                echo " OBESIDADE GRAVE";
                return " OBESIDADE GRAVE";
            }
        ?>
    </div>
</body>
</html>