<?php 


     /**Informação sobre segurança do banco de dados (este código abaixo está no arquivo conexaoMySQL.php)
      * Note que todo este código abaixo está dentro da pasta junto com todos os arquivos do site (suponhamos
      que isso seja um site), então informações do meu banco de dados estão expostas nessa pasta, o ideal é 
      protegermos, como? (1) Crie uma pasta  fora da pasta do contéudo do site e cole este código da conexão com
      o banco de  dados dentro dela (2) após ter criado a pasta e ter retirado essas informações daqui, faça um
      requerimento dessa informações para sua página por usar o require_once (vimos sobre ele nessas pastas de estudos)
      dessa forma: <?php require_once("conexao"); ?>   conexao é a pasta criada com as informações do banco de dados
      estou usando o require para fazer essa conexão da minha página com o banco de dados
      */




     /**Como criar uma conexão MySQL?
      * Passo 1 -> crie uma var e atribua qq nome, vamos chamar de conect
        Passo 2 -> vamo utilizar a api mysqli_connect, ficará dessa forma $conecta = mysqli_connect("", "", "", "")
        Passo 3 -> dentro dos parenteses colocamos 4 informações, são elas:(1) nome do acesso ao banco de dados ou nome 
        do servidor, aqui estamos usando localhost mas se fosse um site em produção seria o nome do servidor do banco de dados
        que seu provedor informar. (2) nome do usuário do banco de dados, esse nome é padrão do xamp se chama: root
        (3) senha, não tem senha na instalação então deixamos vazio
        (4) nome do banco do dados -> chamado: andes.
        Passo 4 -> feche a conexão no final da tag html, dessa forma:     <?php mysqli_close($conecta)?> 
        Passo 5 -> Teste a conexão do banco de dados*/  
        
        //pode ser feito dessa forma
        //$conecta = mysqli_connect("localhost", "root", "", "andes");

        //outra forma de fazer abaixo
        $servidor = "localhost";
        $usuario = "root";
        $banco = "andes";
        $senha = "";
        $conecta = mysqli_connect($servidor, $usuario, $senha, $banco);

        //Passo 5 -> Testando conexão com banco de dados
        if ( mysqli_connect_errno() ) {
            die("Conexão Falhou: " . mysqli_connect_errno() );
            //esta verificação é um teste pra vermos se há algum erro, 
            //"Conexão Falhou: " . mysqli_connect_errno() essa linha mostrará o erro no browser dessa forma: Conexão Falhou: 1049
            //1049 é o número em questão, é importante vc saber o número do erro pra saber onde está o erro, pode ser erro no banco de dados
            //erro no usuário ou qq outra coisa, se não houver erros aparecerá tudo normal
        }

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      <h1>Developer Wilhams</h1>
    </body>
</html>

<?php 
   //a conexão precisa ser fechada
   mysqli_close($conecta);
?>   