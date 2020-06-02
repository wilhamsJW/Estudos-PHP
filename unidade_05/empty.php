<?php 
    $nome = null; //nulo é sem valor ou vazio, em branco
    $idade = ""; //só aspas é diferente de null
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL (empty)</title>
    </head>

    <body>

        <?php  
                echo "A variável estar vazia? " . empty($nome) . "</br>"; //os dois estão vazios tanto essa linha como alinha de baixo retornará false
                echo "A variável estar vazia?" . empty($idade); 

        ?>


    </body>
</html>