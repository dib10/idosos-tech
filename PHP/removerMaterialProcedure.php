<?php
$host = "localhost"; // Geralmente "localhost" em cPanel
$user = "simplifica_idosos-tech"; // Usuário do banco de dados
$password = "simplificaidosos"; // Senha do banco de dados
$dbname = "simplifica_idosos-tech"; // Nome do banco de dados

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

if (!isset($_GET['id'])) {
    die("ID do material não fornecido.");
}

$materiaid = $_GET['id'];

$stmt = $conn->prepare("CALL excluir_materiais_adm(?)");
$stmt->bind_param("i", $materiaid);

if ($stmt->execute()) {
    header("Location: listarMaterial.php?success=1");
    exit();
} else {
    echo "Erro ao remover material: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
