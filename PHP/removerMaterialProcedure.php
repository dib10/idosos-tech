<?php
    require_once "database.php";
    session_start();

    if(!(isset($_SESSION['Adm']))){
        header("Location: Index.php?erro=true");
        exit;
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
