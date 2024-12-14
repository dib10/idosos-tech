<?php
require_once "database.php";
    session_start();

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
                $_SESSION['Adm'] = $result;
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

