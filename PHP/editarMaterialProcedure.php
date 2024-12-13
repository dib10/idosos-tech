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
    $materiaid = $_POST['materiaid'];
    $titulo = $_POST['titulo'];
    $ano = (int) $_POST['ano'];
    $semestre = $_POST['semestre'];
    $arquivo = $_FILES['arquivo']['name'];
    $linkTarefa = $_POST['linkTarefa'] ?? null;
    $linkJogo = $_POST['linkJogo'] ?? null;
    $linkVideo = $_POST['linkVideo'] ?? null;

    if (!empty($_FILES['arquivo']['tmp_name'])) {
        $uploadDir = '../arquivos/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $uploadFile = $uploadDir . basename($arquivo);
        if (!move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadFile)) {
            die("Erro ao fazer o upload do arquivo.");
        }
    } else {
        $stmt = $conn->prepare("SELECT arquivo FROM tb_materiais WHERE materiaid = ?");
        $stmt->bind_param("i", $materiaid);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $arquivo = $row['arquivo'];
        $stmt->close();
    }

    $stmt = $conn->prepare("CALL alterar_materiais_adm(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isisssss", $materiaid, $titulo, $ano, $semestre, $arquivo, $linkTarefa, $linkJogo, $linkVideo);

    if ($stmt->execute()) {
        header("Location: listarMaterial.php?success=1");
        exit();
    } else {
        echo "Erro ao atualizar material: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
