<?php

$host = "localhost"; // Geralmente "localhost" em cPanel
$user = "simplifica_idosos-tech"; // Usuário do banco de dados
$password = "simplificaidosos"; // Senha do banco de dados
$dbname = "simplifica_idosos-tech"; // Nome do banco de dados

$conn = new mysqli($host, $user, $password, $dbname);
session_start();

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $email = $_POST['email'];
        $senha = $_POST['password'];
    
        $sql = "SELECT * FROM tb_administrador WHERE email = ?";
        $stmt = $conn->prepare($sql);
        
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            if ($senha == $user['senha']) {
                header("Location: painelAdministrativo.php");
                exit();
            } else {
                $_SESSION['login_error'] = "Email ou senha incorretos.";
                header("Location: login.php"); 
            }
        } else {
            $_SESSION['login_error'] = "Email ou senha incorretos.";
            header("Location: login.php"); 
        }
        $stmt->close();
    }

$conn->close();
?>

