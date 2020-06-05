<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>

        <!--Aqui veremos como receber campos de formulários em php, note que na tag form temos um action ou seja 
        a ação que esse formulário vai ter, no caso action recebe a página de destino que é chamada de destino.php
        (poderia ser qq nome), method="post" é a forma que vai ser enviada, poderia se usar o get também, o get é
        como que vc fosse fazer uma url ou um link, os dados irão pelo navegador lá em cima na url, no get vc vê
        as informaçoes indo pelo navegador no endereço da url, já o método post vc não vê nada na url, isso é
        indicado quando vc tá fazendo uma inserção no banco de dados e não quer que aquelas infirmações sejam
        mostradas no navegador por questão de sigilo -->

        <form action="destino.php" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            
            <input type="submit" value="Enviar Cadastro">
        </form>
    </body>
</html>