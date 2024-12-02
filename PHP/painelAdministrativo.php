<?php
    $tituloPagina = "Painel Administrativo"; 
    require_once 'cabecalho.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloPagina; ?></title> 
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/estilo2.css">
    <link rel="icon" href="../img/icone.png">
    <script src="../javascript/teste.js"></script>
    
</head>
<body>
    <div class="container adm-container">
        <button type="button" class="adm-button1" onclick="window.location.href='adicionarMaterial.php'">Adicionar material</button>
        <button type="button" class="adm-button1" onclick="window.location.href='listarMaterial.php'">Listar material</button>
    </div>

    <a href="https://wa.me/5511988032350" target="_blank" class="whatsapp-button">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>
</body>
</html>
