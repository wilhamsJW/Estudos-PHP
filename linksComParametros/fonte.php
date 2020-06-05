<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <!-- Link tradicional pra chamar página
        <ul>
            <li><a href="laranja.html" >Laranja</a></li>
            <li><a href="maca.html" >Maçâ</a></li>
            <li><a href="abacate.html" >Abacate</a></li>
        </ul>
        -->

        <!--Link usando PHP,  -> Links Com Parametros
        o diferencial em php é que estou chamando apenas uma página para atribuir 3 fotos diferentes
        todos os links irão para uma única página destinada, da forma acima estamos chamando três páginas diferente
        Apoós destino.php foi colocado uma interrogação e a partir daí colocamos um nome qualquer que reprresenta
        uma variável e colocamos o sinal de igual e atribuimos um valor numérico, isto se chama LINK com PARAMETROs
        Note: se desejar colocar mais de um parâmetro, se usa o e-comercial (&) e acrescenta-se uma nova variável ou parametro
        Olhe a página destino.php e veja como tudo está acontecendo-->

        <ul>
            <li><a href="destino.php?codigo=0" >Laranja</a></li>
            <li><a href="destino.php?codigo=1" >Maçâ</a></li>
            <li><a href="destino.php?codigo=2" >Abacate</a></li>
        </ul>


    </body>
</html>