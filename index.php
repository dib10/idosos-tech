<?php       
    $host = "localhost"; // Geralmente "localhost" em cPanel
    $user = "simplifica_idosos-tech"; // Usuário do banco de dados
    $password = "simplificaidosos"; // Senha do banco de dados
    $dbname = "simplifica_idosos-tech"; // Nome do banco de dados
    
    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("CALL GetAnos()");
    $stmt->execute();
    $result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/reset.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link para o CSS personalizado -->
    <link rel="stylesheet" href="styles/estilo2.css">
    <link rel="icon" href="img/icone.png">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top" aria-label="Menu principal">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="Logo do Idosos Tech, mostrando duas pessoas idosas" title="Logo do Idosos Tech"> 
            <!-- logo -->
        </a>
        <!-- Navbar Responsiva -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Abrir menu de navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.html" title="Ir para tela inicial">Início</a>                 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="materiais/materiais.html" title="Acessar Materiais">Materiais</a>                 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contatos" title="Ir para a seção de contatos">Contatos</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="PHP/login.php" title="Ir para tela de login">Login</a> 
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Link do WhatsApp -->
<a href="https://wa.me/5511988032350" target="_blank" class="whatsapp-button" aria-label="Acessar WhatsApp para falar com a professora">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="Ícone do WhatsApp" title="Clique para acessar o WhatsApp">
</a>

<!-- Parte de Introdução -->
<section class="main_page mx-2" id="inicio" aria-labelledby="titulo-inicio">
    <div class="content text-center pt-5">
        <div class="introduction">
            <h1 id="titulo-inicio">Idosos Tech</h1>
            <p>Olá, bem-vindo ao Idosos Tech! Aqui, você encontra tudo o que precisa para aprender a usar o computador de forma simples e prática.</p>
            <p>Disponibilizamos os arquivos das aulas para download e todas as informações de contato para suporte.</p>
        </div>
        <div class="arrow" aria-hidden="true">&#8595;</div>
        <h3>Desça a tela para acessar os conteúdos!</h3>
    </div>
</section>

   <!-- Parte de Materiais -->
<section class="main_page materiais mx-2" id="materiais" aria-labelledby="titulo-materiais">
    <div class="content text-center">
        <h1 id="titulo-materiais">Materiais</h1>
        <?php while ($row = $result->fetch_assoc()) { ?>
                <a class="btn ms-3 p-3" href="PHP/listarMaterial.php?ano=<?= $row['ano'] ?>" style="background-color: #002B36; color: white;">
                <h3>Materiais <?=($row['ano']) ?></h3>
                <p class="mb-0">Clique aqui!</p>
            </a>
        <?php } ?>
        <div class="arrow" aria-hidden="true">&#8595;</div>
        <h3>Desça a tela para acessar os contatos!</h3>
    </div>
</section>

    

    <!-- Parte de Contatos -->
<section class="main_page contatos mx-2" id="contatos" aria-labelledby="titulo-contatos">
    <div class="content text-center">
        <h1 id="titulo-contatos">Contatos</h1>
        <hr>
        <p><b>Email do curso:</b> <span class="contato-info"><a href="mailto:idosostech@gmail.com" title="Abrir o cliente de email para enviar mensagem ao curso">idosostech@gmail.com</a></span></p>
        <p><b>Site do Instituto Federal:</b> <span class="contato-info"><a href="http://gru.ifsp.edu.br" target="_blank" title="Visitar o site do Instituto Federal">http://gru.ifsp.edu.br</a></span></p>
        <p><b>Localização:</b> <span class="contato-info">Av. Salgado Filho, 3501 - Centro, Guarulhos - SP, 07115-000</span></p>
    </div>
</section>

    
 <!-- Footer -->
<footer class="text-white text-center py-3 mt-5" aria-label="Rodapé">
    <p class="mb-0">&copy; Simplifica - IFSP GRU</p>
</footer>

<!-- VLibras -->
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


