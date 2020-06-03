<?php
    $_nome = "Wilhams Developer ";
    $_sobrenome = " Meira";
    $_idade =  23;
    $_profissao = " programador";
    $_total = $_idade . " " . $_profissao;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL Strings</title>
    </head>

    <body>
        <p> <?php echo $_nome . "Seu sobrenome é " . $_sobrenome ?> </p>
        <p> <?php echo "Idade e profissão: " . $_total ?> </p>
    </body>
</html>