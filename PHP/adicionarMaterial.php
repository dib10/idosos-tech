<?php
    session_start();

    if(!(isset($_SESSION['Adm']))){
        header("Location: ../index.php?erro=true");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Material</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/estilo2.css">
    <link rel="icon" href="../img/icone.png">

    <?php require_once 'cabecalho.php' ?>
</head>
<body>
<button class="btn btn-secondary" onclick="history.back()">Voltar</button>
    <div class="container mt-4">
        <form action="adicionarMaterialProcedure.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título do material:</label>
                <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título do material" required>
            </div>
            <div class="mb-3">
                <label for="ano" class="form-label">Ano:</label>
                <select id="ano" name="ano" class="form-select" required>
                    <option value="">Selecione o ano</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="semestre" class="form-label">Semestre:</label>
                <select id="semestre" name="semestre" class="form-select" required>
                    <option value="">Selecione o semestre</option>
                    <option value="1° semestre">1° semestre</option>
                    <option value="2° semestre">2° semestre</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="arquivo" class="form-label">Upload de arquivo:</label>
                <input type="file" id="arquivo" name="arquivo" class="form-control" accept=".pdf,.doc,.docx,.png,.jpg,.jpeg" required>
            </div>
            <div class="mb-3">
                <label for="linkTarefa" class="form-label">Link da tarefa:</label>
                <input type="url" id="linkTarefa" name="linkTarefa" class="form-control" placeholder="Link da tarefa">
            </div>
            <div class="mb-3">
                <label for="linkJogo" class="form-label">Link do jogo:</label>
                <input type="url" id="linkJogo" name="linkJogo" class="form-control" placeholder="Link do jogo">
            </div>
            <div class="mb-3">
                <label for="linkVideo" class="form-label">Link do vídeo:</label>
                <input type="url" id="linkVideo" name="linkVideo" class="form-control" placeholder="Link do vídeo">
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </form>
    </div>
</body>
</html>
