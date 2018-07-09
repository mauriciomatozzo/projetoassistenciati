<?php
require_once 'conexao.php';
// pega o ID da URL
$Id = isset($_GET['Id']) ? $_GET['Id'] : null;
// valida o ID
if (empty($Id)) {
    echo "ID não informado";
    exit;
}
// remove do banco
$connection = db_connect();
$sql = "DELETE FROM contatos WHERE Id = :Id";
$stmt = $connection->prepare($sql);
$stmt->bindParam(':Id', $Id, PDO::PARAM_INT);
if ($stmt->execute()) {
    header('Location: lista.php');
} else {
    echo "Erro ao remover";
    print_r($stmt->errorInfo());
}


