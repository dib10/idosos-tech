<?php
    require_once "database.php";

    session_start();

    if(!(isset($_SESSION['Adm']))){
        header("Location: ../index.php?erro=true");
        exit;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST['titulo'];
        $ano = $_POST['ano']; 
        $semestre = $_POST['semestre'];
        $arquivo = $_FILES['arquivo']['name'];
        $linkTarefa = $_POST['linkTarefa'] ?? null;
        $linkJogo = $_POST['linkJogo'] ?? null;
        $linkVideo = $_POST['linkVideo'] ?? null;

        $uploadDir = '../arquivos/';

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); 
        }

        $uploadFile = $uploadDir . basename($arquivo);

        if (!move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadFile)) {
            die("Erro ao fazer o upload do arquivo.");
        }

        $stmt = $conn->prepare("CALL inserir_materiais(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isisssss", $user_modifiedby, $titulo, $ano, $semestre, $arquivo, $linkTarefa, $linkJogo, $linkVideo);
        
        $user_modifiedby = 1;

        if ($stmt->execute()) {
            header("Location: listarMaterial.php");
            exit();
        } else {
            echo "Erro ao adicionar material: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
?>
