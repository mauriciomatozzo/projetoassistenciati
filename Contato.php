<!DOCTYPE html>
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
        <?php
        $host = 'localhost';
        $porta = 3306;
        $usuario = 'root';
        $senha = '';
        $dbNome = 'Contato';


        $pdo = new PDO("mysql:host=$host:$porta;
                   dbname=$dbNome;charset=latin1", $usuario, $senha);


        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $totalRegistrosInseridos = $pdo->exec(
                "INSERT INTO cliente(Nome, Endereco)
             VALUES('Everton', 'Rua Marechal Floriano');"
        );

        echo 'Total registros inseridos: ' . $totalRegistrosInseridos;
        ?>
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
        $opcao = $_POST["opcao"];
        $Empresa = $_POST["Empresa"];
        $TelFix = $_POST["TelFix"];
        $whats = $_POST["whats"];
        $email = $_POST["email"];
        $city = $_POST["city"];
        $Estado = $_POST["Estado"];
        $Endereco = $_POST["Endereco"];

//conectando com o localhost - mysql
        $conexao = mysql_connect("localhost", "root");
        if (!$conexao)
            die("Erro de conexão com localhost, o seguinte erro ocorreu -> " . mysql_error());
//conectando com a tabela do banco de dados
        $banco = mysql_select_db("cadastro", $conexao);
        if (!$banco)
            die("Erro de conexão com banco de dados, o seguinte erro ocorreu -> " . mysql_error());



        $query = "INSERT INTO `clientes` ( `nome` , `email` , `Empresa` , `whats` , `TelFix` , `endereço` , `city` , `Estado` , `id` ) 
VALUES ('$nome', '$email', '$Empresa',$whats, $TelFix, $Endereco, $oP1, $oP2, $oP3,  $oP4, $oP5, $oP6, $oP7, $opcao, $city, '')";

        mysql_query($query, $conexao);

        echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
        ?>
    </body>
</html>
