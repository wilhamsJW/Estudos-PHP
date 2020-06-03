<?php 
        

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
         <?php 
                $a = 5;
                $b = 3;

                if($a > $b) {
                    echo "A é maior do que b" . "</br>";
                }

                $idade = 17;

                if($idade >= 18) {
                    echo "Pode acessar o site";
                } else {
                    echo "Não pode acessar o site" . "</br>";
                }

                $rádio = false;

                if( !$rádio ){ //o exclamação teste se é false, ele pergunta: é false? se for ele excuta o código
                    echo "Está com o valor de false"; 
                } else {
                    echo "Está com o valor de true";
                }


              


         ?>


    </body>
</html>