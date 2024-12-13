<?php

$host = "localhost"; // Geralmente "localhost" em cPanel
$user = "simplifica_idosos-tech"; // Usuário do banco de dados
$password = "simplificaidosos"; // Senha do banco de dados
$dbname = "simplifica_idosos-tech"; // Nome do banco de dados

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM tb_administrador WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: painelAdministrativo.php");
        exit();
    } else {
        echo "Email ou senha incorretos.";
    }
}

$conn->close();
?>
