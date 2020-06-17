<?php require_once("../../conexao/conexao.php"); ?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
      <!--Isto é OTIMIZAÇÃO do código-->
      <!--include_once("_incluir/topo.php") => são arquivos dessa mesma pasta, de forma 
      dinamica consigo alterar o topo e o rodape de todas as páginas do meu site, sem a 
      necesidade de tá colocando o mesmo código em várias páginas, ficando um código otimizado-->
      <?php include_once("_incluir/topo.php"); ?>
        
        <main>  
            
        </main>

        <?php include_once("_incluir/rodape.php"); ?>
    </body>
</html>

<?php
    // Fechar conexao
    //mysqli_close($conecta);
?>