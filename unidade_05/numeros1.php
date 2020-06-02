<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Trimestre: " . $salario * $meses . "</br>" ;
            echo "Quinzena: " . $salario / 2 . "</br>" ;

            // Exponencial
            echo "Exponencial: " . pow(8,2) .  "</br>"; //isso seria 8 ao quadrado, posso fazer o número ao cubo tbm, é so colocar o 3 no lugar do 2

            // Raiz Quadrada
            echo "Raiz  Quadrada: " . sqrt(36) .  "</br>";

            // Randômico Generica
            echo "Radomico: " . rand() . "</br>"; //gera números aleatórios

            // Randômico entre um intervalo
            echo "Radomico: " . rand(1, 100) . "</br>"; //gera números aleatórios entre 1 e 100

            // Valor absoluto
            echo "Absoluto: " . abs(-10); //tranformará um numero inteiro sem ser negativo, se olhaar no navegador vai aparecer 10, não aparece negativo
            
            //pesquise funçoe matemáticas no php.net
        ?>
    </body>
</html>