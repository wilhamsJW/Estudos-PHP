<?php 
    $nome = null; //nulo é sem valor ou vazio, em branco
    $idade = 23; 
    $email = "";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL (isset)</title>
    </head>

    <body>

        <?php  
                //isset verfica se a var está configurada
                echo "A variável está configurada? " . isset($nome) . "</br>"; // r = A variável está configurada? , não apareceu o 1 pq ela não tá configurada, é uma var nula
                echo "A variável está configurada? " . isset($idade)  . "</br>"; // r = A variável está configurada? 1 , apareceu o um pq está configurada, já existe um valor pra ela
                echo "A variável está configurada? " . isset($email)  . "</br>";// r = A variável está configurada? 1 , sim, está configurada porém não tem valor nela
                

        ?>


    </body>
</html>