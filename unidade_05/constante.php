<?php 
    $nome = "wilhams";
    $nome = "Paulo";

    define("MESES", 12); //esse valor de meses foi definido como 12 e não pode ser alterado, define atribui um nome a variável e o segundo parametro é seu valor

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

    <?php 
        //o resultado será a ultima var lida, então wilhams mudará para paulo
        //então o que fazer para que o valor de uma var nunca mude?
        //para isso criaremos uma constante acima
        echo "Meu nome é : " . $nome;
        echo "Quantidade de meses no ano é = " . MESES

    ?>

    </body>
</html>