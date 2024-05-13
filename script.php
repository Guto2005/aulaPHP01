<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valor01 = $_POST['valor1'];
    echo "O valor digitado em valor1 foi: ".$valor01;
    $resultado=$valor01*9/5+32;
    echo "<br> o valor em fahrenheit é:".$resultado; 
    ?>
</body>
</html>