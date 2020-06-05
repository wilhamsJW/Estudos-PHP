<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 

        <?php 
            //$salada = array("Laranja", "Maçâ", "Abacate");   //criei um array e coloquei na mesma ordem que os frutas da página font, até aqui se clikarem na págian irá 
                                                              //aparecer os nomes das frutas, dessa forma podemos mostrar qq coisa no bowser usando esses links, pode se usar uma foto ou arquivo de uma página
            $salada = array("imagens/laranja.jpg", "imagens/maca.jpg", "imagens/abacate.jpg");  

            $fruta = $_GET["codigo"];                       //$_GET = pega a variável do link em questão, cada variável ou parametro tem um valor diferente começando do 0
            //echo $salada[$fruta];                        //me retornará um item da array $salada na posição $fruta, dessa forma 

        ?>
        <!--Para chamadas de imagens temos que colocar a tag img e dentro dela o src="" e dentro do src abra a tag php
        e dê um eco da variável e da posição do array em questão, a var $fruta contém exatamente o click do usuário
        por isso que colocamos uma var na página fonte e atribuimos um valor á ela, dessa forma: <li><a href="destino.php?codigo=0" >Laranja</a></li>-->
        <img src="<?php echo $salada[$fruta]; ?> "> 

    </body>
</html>