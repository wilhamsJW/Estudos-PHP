<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
            <pre>
            <?php   
                
                //print_r($_POST);
                /**este pré visualizador irá mostrar este código:
                 *             Array
                   (
                       [nome] => Wilhams Meira Júnior 
                       [email] => wilhams.dev@gmail.com
                   )
           
                   Estes dados foram enviados via post após o click do usuário em enviar, esses dados evem do formulario
                   que o usuário preeencheu
                 */

                 ?>

                 <?php 
                 
                 /**Suponhamos que em uma página seja destinada aos dados cadastradso do usuário e que ele possa ter
                  * acesso á esses dados dele, porém digamos que o usário acesse a página sem ter se cadastrado, então
                  quero que gere uma mensagem informando que não tem dados cadastrados, essa configuração será feita
                  pela função isset(); isset verfica se a var está configurada, 
                  */

                  //isset verfica se a var está configurada
                 if (isset($_POST["nome"])) {
                       $nome = $_POST["nome"]; //se sim, então $nome vai ser igual á $_POST["name"]; quem é post? as informações de post estão sendo recebidas da página formulario, e nome está me trazendo o valor digitado pelo usuário 
                 } else { 
                       $nome = "Sem Definição"; 
                 }
                 //$nome = $_POST['nome'];    //este nome é nome dado na página do formulário, lá tem esse código: name="nome"

                 if (isset($_POST["email"])) {
                    $email = $_POST["email"]; 
              } else { 
                    $email = "Sem Definição"; 
              }

                 //$email = $_POST['email']; //este nome é nome dado na página do formulário, lá tem esse código: name="email"

                 echo "Meu nome: " . $nome . "<br>";
                 echo "Meu email: " . $email ."<br";
                 ?>
            
            
            </pre>

    </body>
</html>