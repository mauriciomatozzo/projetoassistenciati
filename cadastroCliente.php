<html>
<head>
    <title>Cadastro</title>
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="/recebe_cadastro_cliente.php" method="POST">

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

