<?php
$host = 'localhost';
$porta = 3306;
$usuario = 'root';
$senha = '';
$dbNome = 'dbassistencia';


$pdo = new PDO("mysql:host=$host:$porta;
                   dbname=$dbassistencia;charset=latin1", $usuario, $senha);


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$totalRegistrosInseridos = $pdo->exec(
        "INSERT INTO tbcliente(id, nome, fone, endereco, email, cpf)
             VALUES($id, $nome, $fone, $endereco, $email, $cpf);"
);

echo 'Total registros inseridos: ' . $totalRegistrosInseridos;
?>
html>
<head>
    <title>Cadastro</title>
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="POST" action="recebe_cadastro_cliente.php">
        Nome: <input type=text name=nome><br><br>
        

        <p class="Fix">TELEFONE COM DDD</p>
        <input type="text" name="TelFix" size="40" required="required" placeholder="55 3314-3980">

        <p class="email">EMAIL</p>
        <p>Informe abaixo seu e-mail para contato</p>
        <input type="text" name="email" size="60" required="required" placeholder="Exemplo: shup@up.com">

        <p class="city_Adress">ENDEREÇO</p>
        <input type="Text" name="Endereco" size="40" required="required" placeholder="Exemplo: Santo Ângelo RS">
        CPF: <input type="Text" name="cpf" size="40" placeholder="031565959"
        </fieldset>

        <input type="submit" value="Enviar " onclick=Enviar();> 
        <input type="reset" id="Clean" value="Limpar Dados" onclick=Limpar();>

    </form>
</body>
</html>

