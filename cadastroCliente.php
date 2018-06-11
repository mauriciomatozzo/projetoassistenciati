<?php
$host = 'localhost';
$porta = 3306;
$usuario = 'root';
$senha = '';
$dbNome = 'venda';


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

echo "O valor de nome é: " . $_POST["nome"];
echo "<br>O valor de sobrnome é: " . $_POST["sobreNome"];
?>

