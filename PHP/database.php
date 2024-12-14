<?php
    $host = "localhost"; // Geralmente "localhost" em cPanel
    $user = "simplifica_idosos-tech"; // Usuário do banco de dados
    $password = "simplificaidosos"; // Senha do banco de dados
    $dbname = "simplifica_idosos-tech"; // Nome do banco de dados

    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }
?>