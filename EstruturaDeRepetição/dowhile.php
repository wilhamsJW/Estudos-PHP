<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

    <?php 
    //exemplo de while
     $contdor = 1;
     while ($contdor <= 10){ //testa a condição depois executa o código
         $sorteio = rand(1,80); //a função rand sorteoou números aleatório entre 1 e 80
         echo $sorteio . " " . "</br></br>"; //27 13 28 79 24 5 8 62 40 16 , 10 números sorteados entre 1 e 80
         $contdor ++; //incrementação
     } 


     //exemplo de do while a diferença entre eles é que o while já faz a condição de existençia ou seja ele só executa o código se a condição for favorável, o do while 
     //realiza primeiro o passo daquele laço pra depois testar a existençia
     
     $contador = 1;
      do {
          $sorteio2 = rand(1, 10); //executa o código
          echo $sorteio2 . " ";
          $contador ++;
      } while ($contador <= 5)//depois testa a condição

     

?>

    </body>
</html>