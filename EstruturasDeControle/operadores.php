<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

    <?php 
            $salario = 1000;
            $premio = "1000";



            if ($salario === $premio){
                echo "salário é igual á premio .  </br>";
            } else {
                echo "não é igual . </br>";
            }


            $fumante = false;

            if ($fumante != true) { // != faz a pergunta negativa, pergunta: "não é true?" daí a reposta é: "não é true", pois o valor dele é false e o código do if é excecutado pq a condição foi verdadeira
                echo "Vc não é fumante . </br>";  //
            } else {
                echo "vc é fumante . </br>";
            };


            $dia = "sábado";

            if($dia == "sábado" || $dia == "domingo") { //  || = ou isso , && = usado no meio de duas condiçoes, o código só será executado se ambas atenderem as condiçoes impostas
                echo "dia de descasnsar";
            } else {
                echo "Dia de trabalhar";
            }


    
    ?>

    </body>
</html>