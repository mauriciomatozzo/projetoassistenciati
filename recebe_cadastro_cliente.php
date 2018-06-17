<?php
    include_once('conexao.php');
    $_POST['id'];
    $_POST['nome'];
    $_POST['fone'];
    $_POST['endereco'];
    $_POST['email'];
    $_POST['cpf'];
    
    $cada_client = "INSERT INTO cadastro_clientes(id, nome, fone, endereco, email, cpf ',' '', NOW())";
    $= mysql_query($pdo);
?>    
