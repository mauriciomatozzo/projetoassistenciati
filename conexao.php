<?php
$host = 'localhost';
$porta = 3306;
$usuario = 'root';
$senha = '';
$dbNome = 'dbassistencia';


 $mysqli = new mysqli($host, $porta, $usuario,$senha,$dbNome);
 if($mysqli->connect_errno)
    echo "Falha na conex�o: (".$mysqli->connect_errno.") ".mysqli->connect_error;
 ?>
