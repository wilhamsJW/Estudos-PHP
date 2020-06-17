<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Diferenças entre include e require</title>
    </head>

    <body>

            <?php 

            /**Diferenças entre include e require
             * include() = se ele encontrar algum erro ele mostrará o erro mas continuará a executar o código
             * require() = mostrará o erro mas não executará os outros comandos sem erros
             * faça o teste coloque um erro no nome do arquivo com include e verá q ele executará as outras linhas
             * se colocar a função require no lugar da include e colocar um erro verá q o require não permitirá mos
             * trar mais nada da página, é uma pequena diferença.
             * 
             * Temos também o include_once = ele add a mesma página uma vez, o include add a mesma págian várias
             * vezes
             * Temos também o require_once = também só add uma vez
             */

                //usando o include para incluir outra página dentro dessa página
                //includeXrequire.php = arquivo dessa mesma pasta
                include("includeXrequire.php");
                echo "</br>";
                include_once("includeXrequire2.php");//include_once só permite add a mesma página uma vez
                echo "</br>";
                include("includeXrequire2.php");//mas se eu usar apenas o include na mesma página usada pelo include_once naturalmente ele vai aceitar
            
            ?>

    </body>
</html>