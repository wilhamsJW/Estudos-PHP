<?php 
    $nome = null; //nulo é sem valor ou vazio, em branco
    $idade = ""; //só aspas é diferente de null
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

        <?php  
                echo "A variável é null? " . is_null($nome) . "</br>";//r = A variável é null? 1 , 1 de true
                echo "A variável é null " . is_numeric($idade); // o retorno será false pois uma var vazia com aspas não é nula, ela só é nula se for atrubuído o valor de null pra ela

        ?>


    </body>
</html>