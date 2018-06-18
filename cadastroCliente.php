<?php include("conexao.php"); 

if(isset($_POST['Enviar'])){
    if(!isset($_SESSION))
        session_start();
    foreach($_POST as $chave=>$valor)
        $_SESSION[$chave] = $valor;
if(strlen($_SESSION['nome']) == 0)
    $erro[] = "Preencha o nome.";

if(strlen($_SESSION['fone']) == 0)
    $erro[] = "Preencha o telefone.";

if(strlen($_SESSION['nome']) == 0)
    $erro[] = "Preencha o nome.";


if(substr_count($_SESSION['email'], '@')!=1 || substr_count($_SESSION['email'], '.') < 1 ||
    $erro[] = "Preencha o email corretamente";


?>
<?php
$host = 'localhost';
$porta = 3306;
$usuario = 'root';
$senha = '';
$dbNome = 'dbassistencia';


$pdo = new PDO("mysql:host=$host:$porta;
                   dbname=$dbassistencia;charset=latin1", $usuario, $senha);


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$conexao = $pdo->exec(
        "INSERT INTO tbcliente(id, nome, fone, endereco, email, cpf)
             VALUES($id, $nome, $fone, $endereco, $email, $cpf);"
);

?>
<html>
<head>
    <title>Cadastro</title>
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="recebe_cadastro_cliente.php?p=cadastrar" method="POST">

        <label for="nome"></label>
        <input name="nome" value="" required type="text">
        <p class=espaco></p>

        <label for="fone"></label>
        <input name="fone" value="" required type="text">
        <p class=espaco></p>

        <label for="email"></label>
        <input name="email" value="" required type="email">
        <p class=espaco></p>

        <label for="email"></label>
        <input name="email" value="" required type="email">
        <p class=espaco></p>

        <label for="cpf"></label>
        <input name="cpf" value="" required type="text">
        <p class=espaco></p>

        <label for="login"></label>
        <input name="login" value="" required type="text">
        <p class=espaco></p>

        <label for="senha"></label>
        <input name="senha" value="" required type="password">
        <p class=espaco></p>

        <label for="Repita a senha"></label>
        <input name="rsenha" value="" required type="password">
        <p class=espaco></p>

<!-- Nome: <input type=text name=nome><br><br>


<p class="Fix">TELEFONE COM DDD</p>
<input type="text" name="TelFix" size="40" required="required" placeholder="55 3314-3980">

<p class="email">EMAIL</p>
<p>Informe abaixo seu e-mail para contato</p>
<input type="text" name="email" size="60" required="required" placeholder="Exemplo: shup@up.com">

<p class="city_Adress">ENDEREÇO</p>
<input type="Text" name="Endereco" size="40" required="required" placeholder="Exemplo: Santo Ângelo RS">
CPF: <input type="Text" name="cpf" size="40" placeholder="031565959" -->

        <input type="submit" value="enviar" name="Enviar" onclick=Enviar();> 
        <input type="reset" id="Clean" value="Limpar Dados" name="limparDados" onclick=Limpar();>

    </form>
</body>
</html>

