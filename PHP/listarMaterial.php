<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materiais da Aula</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/estilo2.css">
    <link rel="icon" href="../img/icone.png">
    <script src="../javascript/teste.js"></script>


    <?php require_once 'cabecalho.php'; ?>
</head>
<body>
<button class="btn btn-secondary" onclick="history.back()">Voltar</button>

    <div class="container mt-4">
        <form method="GET" action="listarMaterial.php" class="mb-4">
            <div class="row">
                <div class="col-md-4">
                    <label for="ano" class="form-label">Selecione o ano:</label>
                    <select id="ano" name="ano" class="form-select">
                        <option value="">Todos</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="pesquisa" class="form-label">Pesquisar por nome:</label>
                    <input type="text" id="pesquisa" name="pesquisa" class="form-control" placeholder="Pesquisar por nome">
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">🔍 Pesquisar</button>
                    <button type="button" class="btn btn-primary w-100" onclick="window.location.href='adicionarMaterial.php'">➕ Adicionar</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Ano</th>
                    <th>Semestre</th>
                    <th>Arquivo</th>
                    <th>Tarefa</th>
                    <th>Jogo</th>
                    <th>Vídeo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $host = "localhost";
                $user = "root";
                $password = "";
                $dbname = "idosos_tech";

                $conn = new mysqli($host, $user, $password, $dbname);

                if ($conn->connect_error) {
                    die("Erro de conexão: " . $conn->connect_error);
                }

                $ano = $_GET['ano'] ?? '';
                $pesquisa = $_GET['pesquisa'] ?? '';

                if ($ano && $pesquisa) {
                    $stmt = $conn->prepare("CALL listar_materiais_nome_adm(?)");
                    $pesquisa = "%$pesquisa%";
                    $stmt->bind_param("s", $pesquisa);
                } elseif ($ano) {
                    $stmt = $conn->prepare("CALL listar_materiais_ano_adm(?)");
                    $stmt->bind_param("s", $ano);
                } elseif ($pesquisa) {
                    $stmt = $conn->prepare("CALL listar_materiais_nome_adm(?)");
                    $pesquisa = "%$pesquisa%";
                    $stmt->bind_param("s", $pesquisa);
                } else {
                    $stmt = $conn->prepare("CALL listar_todos_materiais_adm()");
                }

                $stmt->execute();
                $result = $stmt->get_result();

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['titulo_materia']}</td>
                        <td>{$row['ano']}</td>
                        <td>{$row['semestre']}</td>
                        <td><a href='../arquivos/{$row['arquivo']}' target='_blank'>Download</a></td>
                        <td><a href='{$row['link_tarefa']}' target='_blank'>Tarefa</a></td>
                        <td><a href='{$row['link_jogo']}' target='_blank'>Jogo</a></td>
                        <td><a href='{$row['link_video']}' target='_blank'>Vídeo</a></td>
                        <td>
                            <button type='button' class='btn btn-warning btn-sm' onclick=\"window.location.href='editarMaterial.php?id={$row['materiaid']}'\">✏️</button>
                            <button type='button' class='btn btn-danger btn-sm' onclick=\"window.location.href='removerMaterialProcedure.php?id={$row['materiaid']}'\">🗑️</button>
                        </td>
                    </tr>";
                }

                $stmt->close();
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
