<?php
$host = 'localhost';
$porta = 3306;
$usuario = 'root';
$senha = '';
$dbNome = 'dbassistencia';


$pdo = new PDO("mysql:host=$host:$porta;
                   dbname=$dbassistencia;charset=latin1", $usuario, $senha);
