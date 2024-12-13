<?php
$host = "localhost"; // Geralmente "localhost" em cPanel
$user = "simplifica_idosos-tech"; // Usuário do banco de dados
$password = "simplificaidosos"; // Senha do banco de dados
$dbname = "simplifica_idosos-tech"; // Nome do banco de dados

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$materiaid = $_GET['id'] ?? null;
if (!$materiaid) {
    die("ID do material não fornecido.");
}

$stmt = $conn->prepare("SELECT * FROM tb_materiais WHERE materiaid = ?");
$stmt->bind_param("i", $materiaid);
$stmt->execute();
$result = $stmt->get_result();
$material = $result->fetch_assoc();
$stmt->close();

if (!$material) {
    die("Material não encontrado.");
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Material</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/estilo2.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Material</h1>
        <form method="POST" action="editarMaterialProcedure.php" enctype="multipart/form-data">
            <input type="hidden" name="materiaid" value="<?= $material['materiaid'] ?>">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título do material:</label>
                <input type="text" id="titulo" name="titulo" class="form-control" value="<?= $material['titulo_materia'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="ano" class="form-label">Ano:</label>
                <input type="date" id="ano" name="ano" class="form-control" value="<?= $material['ano'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="semestre" class="form-label">Semestre:</label>
                <select id="semestre" name="semestre" class="form-select" required>
                    <option value="1° semestre" <?= $material['semestre'] == '1° semestre' ? 'selected' : '' ?>>1° semestre</option>
                    <option value="2° semestre" <?= $material['semestre'] == '2° semestre' ? 'selected' : '' ?>>2° semestre</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="arquivo" class="form-label">Arquivo:</label>
                <input type="file" id="arquivo" name="arquivo" class="form-control">
                <small>Arquivo atual: <?= $material['arquivo'] ?></small>
            </div>
            <div class="mb-3">
                <label for="linkTarefa" class="form-label">Link da tarefa:</label>
                <input type="url" id="linkTarefa" name="linkTarefa" class="form-control" value="<?= $material['link_tarefa'] ?>">
            </div>
            <div class="mb-3">
                <label for="linkJogo" class="form-label">Link do jogo:</label>
                <input type="url" id="linkJogo" name="linkJogo" class="form-control" value="<?= $material['link_jogo'] ?>">
            </div>
            <div class="mb-3">
                <label for="linkVideo" class="form-label">Link do vídeo:</label>
                <input type="url" id="linkVideo" name="linkVideo" class="form-control" value="<?= $material['link_video'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="listarMaterial.php" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>
</html>
