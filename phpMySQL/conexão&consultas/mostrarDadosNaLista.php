<?php 
   
        $servidor = "localhost";
        $usuario = "root";
        $banco = "andes";
        $senha = "";
        $conecta = mysqli_connect($servidor, $usuario, $senha, $banco);

        //Passo 5 -> Testando conexão com banco de dados
        if ( mysqli_connect_errno() ) {
            die("Conexão Falhou: " . mysqli_connect_errno() ); //die = matar a conexão
            
        }

?>



<?php 
        
        $consulta_categorias = "SELECT *";
        $consulta_categorias .= " FROM produtos " ;          //este ponto antes do igual .= siginifica a concatenação da var consulta_categorias 
        //$consulta_categorias .= " WHERE categoriaID > 2";    //note que há um espaço antes do FROM e WHERE, sem esse espaço dará erro, quando concateno preciso desse espaço ou ficará tudo junto e a máquin não irá entender
        

        //fazendo a consulta via queries usando a api do mysqli, dentro dos () colocamos o nome da conexão e em seguida
        //o nome da consulta
        $categorias = mysqli_query($conecta, $consulta_categorias);


        if ( !$categorias) {  //lembre-se o ! é a pergunta negativa é o falso da questão, estou utilizando ele pq na maioria das vezes 
                             //vai cair no false
             die("Falha na consulta.");                 

        }
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mostrar dados dentro de um elemento lista</title>
    </head>

    <body>
      
    <ul>
        <?php 
                //mysqli_fetch_assoc = arrary associative, isso me trará uma especificação a mais sobre minha tabela       
                while ($registro = mysqli_fetch_assoc($categorias)) { 
        ?>
                  
                 <li> <?php echo $registro["nomeproduto"] ?> </li> <!--nomeproduto é uma informação da tabela produtos, isso será mostrado no browser em forma de uma lista--> 
        <?php 
            }  //fechamento das chaves do while
        ?>     
    </ul>  

    <?php //Liberando espaço na memória
        mysqli_free_result($categorias); //mysql_free_result() irá liberar toda a memória associada ao identificador de resultado result.
    ?>               
                
    </body>
</html>

<?php 
   //a conexão precisa ser fechada
   mysqli_close($conecta);
?>   
