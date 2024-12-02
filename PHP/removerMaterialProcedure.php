<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "idosos_tech";

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
