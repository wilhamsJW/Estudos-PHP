<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

        <?php 
            //date_default_timezone_get('Etc/GMT + 3');//olhe na documentação e pegue a hora exata, php não pega a hora do seu pc igaul ao JS, este parâmetro pé uma refencia da hora do brasil
            //tem q configurar essa linha de ecódigo acima pra se obter a hora do brasil correta

            setlocale(LC_TIME, "pt_BR");
            $agora = getdate();  
            //print_r($agora); //print_r e não echo, não se dá echo em array
        

            //Mostrando data completa: Olhe sempre nas tabelas da documentação
            // o correto é fazer toda a data e hora com strftime(); pq essa função retorna as datas e hora locais de acordo com sua região
            $ano = strftime("%G"); //strftime — Formata uma hora/data de acordo com as configurações locais
            $mes = strftime("%b"); //strftime = mostra o nome do mês na língua portuguesa
            $dia = $agora["mday"];

            $hora    = $agora["hours"];
            $minuto  = $agora["minutes"];
            $segundo = $agora["seconds"];

            echo $dia . "/" . $mes . "/" . $ano . " - " . $hora . ":" . $minuto . ":" . $segundo;

        ?>

    </body>
</html>