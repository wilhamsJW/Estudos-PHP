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
            $dia = "sexta";
            switch($dia) {
                case "segunda":
                    echo "Hoje ainda é segunda :( <br>";
                    break;
                case "quarta":
                    echo "Não é <br>";
                    break;
                case "sexta";
                    echo "Siim hoje é sextaaa";
                    break; 
                default:
                    echo "Já já a sexta chega";       
            }

            
      
      ?>


    </body>
</html>