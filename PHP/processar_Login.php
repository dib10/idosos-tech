<?php
$host = "localhost";
$user = "root"; 
$password = ""; 
$dbname = "idosos_tech"; 

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM Tb_administrador WHERE email = '$email' AND senha = '$senha'";
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
