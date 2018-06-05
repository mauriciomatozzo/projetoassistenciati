<!DOCTYPE html>
<?php
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO!
$nome = $_POST ["Name"];
$oP1 = $_POST ["Op1"];
$oP2 = $_POST["Op2"];
$oP3 = $_POST["Op3"];
$oP4 = $_POST["Op4"];
$oP5 = $_POST["Op5"];
$oP6 = $_POST["Op6"];
$oP7 = $_POST["Op7"];


//conectando com o localhost - mysql
$conexao = mysql_connect("localhost", "root");
if (!$conexao)
    die("Erro de conexão com localhost, o seguinte erro ocorreu -> " . mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("clientes", $conexao);
if (!$banco)
    die("Erro de conexão com banco de dados, o seguinte erro ocorreu -> " . mysql_error());



$query = "INSERT INTO `clientes` ( `nome` , `email` , `sexo` , `ddd` , `telefone` , `endereço` , `cidade` , `estado` , `bairro` , `país` , `login` , `senha` , `news` , `id` ) 
VALUES ('$nome', '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha', '$news', '')";

mysql_query($query, $conexao);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?>
/* RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$email	= $_POST ["email"];	//atribuição do campo "email" vindo do formulário para variavel
$ddd	= $_POST ["ddd"];	//atribuição do campo "ddd" vindo do formulário para variavel
$tel	= $_POST ["telefone"];	//atribuição do campo "telefone" vindo do formulário para variavel
$endereco	= $_POST ["endereco"];	//atribuição do campo "endereco" vindo do formulário para variavel
$cidade	= $_POST ["cidade"];	//atribuição do campo "cidade" vindo do formulário para variavel
$estado	= $_POST ["estado"];	//atribuição do campo "estado" vindo do formulário para variavel
$bairro = $_POST ["bairro"];	//atribuição do campo "bairro" vindo do formulário para variavel
$pais	= $_POST ["pais"];	//atribuição do campo "pais" vindo do formulário para variavel
$login	= $_POST ["login"];	//atribuição do campo "login" vindo do formulário para variavel
$senha	= $_POST ["senha"];	//atribuição do campo "senha" vindo do formulário para variavel
$news	= $_POST ["news"];	//atribuição do campo "news" vindo do formulário para variavel
$sexo	= $_POST ["sexo"];	//atribuição do campo "sexo" vindo do formulário para variavel
//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root");
if (!$conexao)
die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("clientes",$conexao);
if (!$banco)
die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());



$query = "INSERT INTO `clientes` ( `nome` , `email` , `sexo` , `ddd` , `telefone` , `endereço` , `cidade` , `estado` , `bairro` , `país` , `login` , `senha` , `news` , `id` ) 
VALUES ('$nome', '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha', '$news', '')";

mysql_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";        
?>
*/

<html>
    <head>
        <script>
            window.fbAsyncInit = function () {
                FB.init({
                    appId: '213766026077864',
                    cookie: true,
                    xfbml: true,
                    version: '{latest-api-version}'
                });

                FB.AppEvents.logPageView();

            };

            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

            FB.getLoginStatus(function (response) {
                statusChangeCallback(response);
            });
            {
                status: 'connected',
                        authResponse: {
                            accessToken: '...',
                            expiresIn: '...',
                            signedRequest: '...',
                            userID: '...'
                        }
            }
        </script>
    </head>
    <body>
    </body>
    <address>

    </address>

    <footer>

    </footer>

</html>
