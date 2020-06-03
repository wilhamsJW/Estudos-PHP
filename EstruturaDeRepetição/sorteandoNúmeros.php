<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            //criação de um sistema para sorteio de números aleatórios
            $megasena = array(); //array vazio para visualização dos números
            $contador = 1; //esta array com valor inicial de 1 é que irá executar 6 passos me trazendo 6 pares de números entre 1 e 50

            while ($contador < 7) { //$contador vai até ser menor que sete, ou até 6, ele só pode ser menor q 7 e não igual, este código que fará executar 6 passos me trazendo 6 pares de números entre 1 e 50

                $sorteio = rand(1,60); //a função ran irá sortear os números aleatoriamente
                if( !in_array($sorteio,$megasena) ){ //aqui temos uma verificação para que os números não se repita, o in_array verifica se as duas arrays são iguais 
                    $megasena[] = $sorteio;
                    $contador ++;

                };
            };

            sort($megasena);//coloca todos os números em ordem crescente





            //Outro exemplo de sortear números aleatórios
            $megasena = range(1, 6);
            shuffle($megasena);
            for($cont = 1; $cont < 7; $cont++){    
                $num = $megasena[$cont];
                echo $num . "<br>";
            }






            //exemplo do operador não lógico ! (operador lógico é esse ponto de exclamação)

            $pessoa = array("name", "email", "fax"); 
               if (!in_array("endereço", $pessoa)) { // ! = faz uma pergunta negativa, nessa situação a pergunta é: "não tem endereço, na var pessoa?" a reposta é: "não tem endereço", é uma resposta afirmativa ou seja é true e cairá na primeira condição
                 echo "Não tem endereço";           //  in_array = Checa se um valor existe em um array
             } else {
                 echo "Tem endereço sim";  
             }
            
        ?>

            <pre>
                <?php
                //este print é do primeiro exemplo
                    print_r($megasena);
                ?>

            </pre
           

    </body>
</html>