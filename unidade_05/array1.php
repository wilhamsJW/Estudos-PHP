<?php 
    $pessoa = array("nome", "endereço", "idade");

    //array com propriedades e valores
    $agenda = array("nome" => "Wilhams",
                    "sobrenome" => "Meira",
                    "salario" => "$1500", 
                    
    $lost = array(23, 15, 16, 8, 42, 4),                

    )

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL (Array)</title>
    </head>

    <body>
        <?php 
          // r conrresponde ao retorno ao browser
          echo $pessoa[0] . "</br>"; //r = nome ,  colocando só o 0 ele me retorna o primiero item do array que é nome
          echo $pessoa[1] . "</br>"; //r =  endereço , 
          echo count($pessoa) .  "</br>"; //r = 3 , count conta quantos elementos tem no meu array, ele conta sem começar do 0, me rerornando exaramente 3 itens
          $pessoa[] = "e-mail" .  "</br>"; //apenas para add um item 
          echo count($pessoa) .  "</br>";// r = 4 , note que foi add mais um item que é o acima, <e-mail class=""></e-mail>  
          echo in_array("idade", $pessoa) .  "</br>"; //r = 1 , retorna 1 tipo true pq encontrou, se não encontrou retornaria nada ou false, in_array busca o elemeto desejado na array
          echo array_search("idade", $pessoa) .  "</br>"; //r = 2, me retorna a posição do elemento dentro do array 

        ?>
        <pre> 
            <?php
              //este pre é tipo uma pré visualização, com ele consigo ver tudo o que tem no array, não é algo para o 
              //usuário ver e sim o programador
                 print_r($pessoa);
                 print_r($agenda);
             ?>
        </pre>

        <p>
            <?php 
                //echo $agenda[0]; //r = dará um erro, pois se trata de nomes e valores, ele não trará nada da posição 0
            ?>
        </p>

        <p>
            <?php 
                echo max($lost) . "</br>"; //r = 42 , max trás o maior número
                echo min($lost) . "</br>"; //r = 4 , min trás o menor número
                echo array_sum($lost) . "</br>";//r = 108 , soma todos os números
                sort($lost); //coloca os números em oredem crescente
               
               
            ?>

           
        </p>
        <!--visualização do método sort-->
        <p>
        <?php 
                print_r($lost); //visualização do método sort
            ?>
        </p>
        <!--coloca na ordem descrescente-->
        <p>
        <?php 
                 rsort($lost); //coloca na ordem descrescente
                print_r($lost); //visualização do método sort
            ?>
        </p>

        <!--Embaralha a ordem dos número a cada refresh-->
        <p>
        <?php 
                 shuffle($lost); //coloca na ordem descrescente
                print_r($lost); //visualização do método sort
            ?>
        </p>
        


    </body>
</html>