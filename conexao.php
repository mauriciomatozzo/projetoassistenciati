<?php
$host = 'localhost';
$porta = 3306;
$usuario = 'root';
$senha = '';
$dbNome = 'dbassistencia';

try {
    // Criando a classe de conexão PDO com o servidor Mysql
    $connection = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
} catch (Exception $e) {
    // Apresenta uma mensagem caso ocorra algum problema
    throw new Exception('Ocorreu um erro ao executar o comando no banco de dados! ERRO: ' . $e->getMessage());
}
