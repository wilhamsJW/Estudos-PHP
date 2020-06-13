<?php 
    if( isset($_POST["formulario"])) {

        //o ? faz a pergunta do "se" se for true executará o código, os ":" é o "se não"
       $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Sem Definição";

       //o ? faz a pergunta do "se" se for true executará o código, os ":" é o "se não" 
       $email = isset($_POST["email"]) ? $_POST["email"] : "Sem Definição";

       echo "Seu Dados foram salvos com sucesso" . "<br>";
       echo "Meu nome: " . $nome . "<br>";
       echo "Meu email: " . $email ."<br>";

    }

?>


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
        indicado quando vc tá fazendo uma inserção no banco de dados e não quer que aquelas informações sejam
        mostradas no navegador por questão de sigilo 
        
         <form action="formulario2.php" method="post"
         estou mostrando os dados enviados nessa mesma página o código php está acima 
         
         < ?php if( !isset($_POST["formulario"]) ) { ?>
         Note que esta tag engloba todo o formulário, pois há um fechamento dela antes do body as chaves que vemos 
         são as chaves do if, este if serve para não mostrar o formulário após enviado e mostrar apenas os dados enviados
         na mesma página.
         if( !isset($_POST["formulario"] a pergunta do if é uma pergunta negativa, a pergunta é: se o formulário não 
         estiver configurado  -- será executado o código, qual código? todo o formulário q vemos dentro do if
         a resposta será true e cairá no if pq o formulario não foi configurado, s eo formulário tiver sido configurado
         a resposta será false e não mostrará o formulário, estou fazendo esse código pq após o usuário clikar no formulário
         para enviar ele não verá mais a página do formulário, ele verá q os dados dele foi enviado com sucesso e verá 
         a confirmação de seus dados


        -->
        <?php if( !isset($_POST["formulario"]) ) { ?> <!--chaves do if-->

        <form action="formulario2.php" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            
            <input type="submit" name="formulario" value="Enviar Cadastro">
        </form>

      <?php } ?> <!--chaves do if-->
    </body>
</html>