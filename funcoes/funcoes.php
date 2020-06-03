<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

    <?php 
        function retornarDiaria(){ 
            $salario = 800;
            return number_format($salario / 30, 2); //number_format = te permite colocar duas casas decimais após a vírgula, igual o Tofixed do JS, o último número 2 é a quantidade de casas decimais desejada
        }

        echo retornarDiaria() . " $ È o tanto que vc ganha em 30 dias" . "</br>";




        //Função com parãmetros

        function retornarDiaria1($dinheiro){ 
            return number_format($dinheiro / 25, 2); //number_format = te permite colocar duas casas decimais após a vírgula, igual o Tofixed do JS, o último número 2 é a quantidade de casas decimais desejada
        }

        $diaria = retornarDiaria1(2000) . " $ È o tanto que vc ganha em 25 dias" . "</br>";
        echo  $diaria;




        //Função com três parâmetros(pode se criar qunatos parâmetro você desejar)

        function retornarDiaria2($salario3, $diasganho){ 
            return number_format($salario3 / $diasganho, 2); //number_format = te permite colocar duas casas decimais após a vírgula, igual o Tofixed do JS, o último número 2 é a quantidade de casas decimais desejada
        }

        $diaria = retornarDiaria2(1800, 15) . " $ Por dias Trabalhados" . "</br>";
        echo  $diaria;



        //Função com múltiplos retornos

        function retornarDiaria3($salario4, $diasganho0, $moeda){
            
            $real = number_format($salario4 / $diasganho0, 2);
            $dolar = number_format($salario4 / $diasganho0 * $moeda, 2);
            return array($real, $dolar);
        };

        $diaria_array = retornarDiaria3(1800, 15, 4.2, );
        echo  "Diária em R$:  " .  $diaria_array[0] . "<br>";
        echo  "Diária em US$: " .  $diaria_array[1] . "<br>";
        
    ?>

    </body>
</html>