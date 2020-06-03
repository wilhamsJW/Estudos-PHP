<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

            <?php 
                    //for em php, o for é executado em três passos:
                    //$contador= 1 ; criação da variável
                    //$contador < 7 ; condição de existência    
                    //$contador++) ; incrementação
                    //echo rand(1,100) . " "; execução do código
                    for ( $contador= 1 ; $contador < 7 ; $contador++){
                           echo rand(1,100) . " " . "</br>";

                    }

                    //for com if e break

                    for ( $contador= 1 ; $contador < 7 ; $contador++){
                        if ($contador == 7) {
                        break;              // usamos o break para parar de executar o código, ele sai do for ou do loop depois de excutado
                        }
                        echo rand(1,100) . " ";

                 }


                 //for each - usado em arrays e objetos
                 $salada  = array("Maçã", "Abacate", "Laranja", "Banana");

                 foreach($salada as $fruta) {
                     echo $fruta . "</br>";
                 }


                 //Foreach com Associative Array

                 $agenda = array(
                        "nome" => "Wilhams",
                        "sobrenome" => "Meira",
                        "Salário" => 1000
                 );

                 foreach($agenda as $atributo => $valor) { //$atributo = é as propriedades de agenda, tais como:nome,sobrenome,salário
                     echo $atributo . ": " . $valor . "</br>"; //$valor = é os valores de agenda, tais como: Wilhams, meira...
                 };


                 /**
                  * Para modificar diretamente elementos de um array dentro de um laço, preceda $value com &. 
                  * Neste caso, o valor será atribuído por referência. Exemplo abaixo:
                  */

                 $numbers = array(1, 2, 3, 4);
                  foreach ($numbers as &$value) { //uso do $value e o &, esse nome value pode ser qq um

                  $value  = 67; //atribuindo um novo valor a array numbers

                  //$value = $value * 2;//apenas outra forma de atribuir valor, desta miltiplicando todos os itens de numbers

                  echo $value . "- Atribuição feita " . "<br>";//r = 67, todos os valores se tornaram 67
                 };
                 


                 
                 //Mais um exemplo igual ao da array agenda acima
                 $a = array(
                    "one" => 1,
                    "two" => 2,
                    "three" => 3,
                    "seventeen" => 17
                );
                
                foreach ($a as $k => $v) {//$k = propriedades ou atributos de a, tais como:one,two,three...
                    echo "\$a[$k] => $v.\n . <br>" ;//$v = os valores de a, tais como?1,2,3,17
                }
            
            ?>

    </body>
</html>