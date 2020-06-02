<?php
    $salario  = 800;
    $gasolina = 2.50;
    $gasolina2 = 2.99;
    $gasolina3 = 2.14745614651;
    $nome = "Wilhams";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O $salario é um número?" . is_numeric($salario) . "</br>"; //O 800 é um número?1 // esse é um é uma espécie de true e valor booleano, pra confimar q é um número, não entrei em detalhes pq mais pra frente irei ver
            echo "O $gasolina é um número?" . is_numeric($gasolina) . "</br>"; //O 2.79 é um número?1
            echo "O $nome é um número?" . is_numeric($nome) . "</br>" . "</br>"; //O Wilhams é um número? , note q não retornou o 1

            // testar se é inteiro
            echo "O $salario é um inteiro?" . is_int($salario) . "</br>"; //retorno = O 800 é um inteiro?1, note que retornou com o 1 no final, é tipo uma confirmação de true.
            echo "O $gasolina é um inteiro?" . is_int($gasolina) . "</br>" . "</br>"; //retorno = O 2.5 é um inteiro?, retornou sem o 1 pq não é inteiro

            // testar se é float
            echo "O $salario é float?" . is_float($salario) . "</br>"; //O 800 é float?
            echo "O $gasolina é float?" . is_float($gasolina) . "</br>" . "</br>"; //O 2.5 é float?1 

            echo "A gasolina será arrendonda para: " . round($gasolina) . "</br>"; //se tiver em 2.49 será arrendondado para 2 e a partir de 2.50 será arrendondado para 3

            echo "Sempre arrendonda pra baixo: " . floor($gasolina2) . "</br>";//Sempre arrendonda pra baixo: 2
            echo "Sempre arrendonda para cima: " . ceil($gasolina3) . "</br>";//Sempre arrendonda para cima: 3
        ?>
        
        
    </body>
</html>