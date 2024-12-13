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
    $titulo = $_POST['titulo'];
    $ano = $_POST['ano']; 
    $semestre = $_POST['semestre'];
    $arquivo = $_FILES['arquivo']['name'];
    $linkTarefa = $_POST['linkTarefa'] ?? null;
    $linkJogo = $_POST['linkJogo'] ?? null;
    $linkVideo = $_POST['linkVideo'] ?? null;

    $ano = date("Y-m-d", strtotime($ano));

    $uploadDir = '../arquivos/';

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); 
    }

    $uploadFile = $uploadDir . basename($arquivo);

    if (!move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadFile)) {
        die("Erro ao fazer o upload do arquivo.");
    }

    $stmt = $conn->prepare("CALL inserir_materiais(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssss", $user_modifiedby, $titulo, $ano, $semestre, $arquivo, $linkTarefa, $linkJogo, $linkVideo);
    
    $user_modifiedby = 1;

    if ($stmt->execute()) {
        echo "Material adicionado com sucesso!";
        header("Location: listarMaterial.php");
        exit();
    } else {
        echo "Erro ao adicionar material: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
