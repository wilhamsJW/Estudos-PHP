<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            // strlen - Retorna primeira ocorrencia, retornou a quantidade de caractere da variável
            echo strlen($_nome) . "</br>";
            
            // stripos  - Retorna primeira ocorrência - me retorna a posição da var que é 1 0 é a letra c
            echo stripos($_nome, 'u') . "</br>"; 

            // strripos - Retorna última ocorrência - retorna a última posição que ele encontrou a letr u
            echo strripos($_nome, 'u') . "</br>"; 

            
            // strtolower - converte para letras min.
            echo strtolower($_nome) . "</br>"; 

            // strtoupper - converte para letras maisc. Todas as letras aparecerão maiusculas
           
        
            // SUBSTR_COUNT - Conta quantas ocorreram
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            //conta quantas vezes aparece o a
            //ele pesquisa palavra tbm
            //php.net é o site com a documentação da página
            echo SUBSTR_COUNT($_nome, 'a') . "</br>"; 
        ?>
        
        
    </body>
</html>