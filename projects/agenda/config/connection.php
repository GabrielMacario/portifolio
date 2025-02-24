<?php

$host = "mysql.hostinger.com";
$dbname = "u865241405_agenda";
$user = "u865241405_root";
$pass = "G^l?n3j3RQ>1";

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    // ativar erros

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch  (PDOException $e) {
    // erro na conexão
    $erro = $e->getMessage();
    echo "Erro $erro";
}