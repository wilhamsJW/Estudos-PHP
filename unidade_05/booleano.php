<?php 
    $fumante = true; 
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL (booleano)</title>
    </head>

    <body>
    <?php
        echo "È fumante? " . $fumante . "</br>";//r = 1 , aparecerá 1 com true
        echo  "È booleano? " . is_bool($fumante);

  ?>


    </body>
</html>