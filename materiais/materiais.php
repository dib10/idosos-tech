<?php       
    $host = "localhost"; // Geralmente "localhost" em cPanel
    $user = "simplifica_idosos-tech"; // Usuário do banco de dados
    $password = "simplificaidosos"; // Senha do banco de dados
    $dbname = "simplifica_idosos-tech"; // Nome do banco de dados
    
    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    if (!isset($_GET['ano']) || !is_numeric($_GET['ano'])) {
        header("Location: ../index.php");
        exit();
    }

    $ano = intval($_GET['ano']);

    $stmt = $conn->prepare("CALL GetSemestre(?)");
    
    $stmt->bind_param("i", $ano);
    $stmt->execute();
    $result = $stmt->get_result();

    $primeiroSemestre = [];
    $segundoSemestre = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            var_dump($row);
            if ($row['semestre'] == "1° semestre") {
                $primeiroSemestre[] = $row;
            } else if ($row['semestre'] == "2° semestre") {
                $segundoSemestre[] = $row;
            }
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    $stmt->close();
    $conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materiais da Aula</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link para o CSS personalizado -->
    <link rel="stylesheet" href="../styles/estilo2.css">
    <link rel="icon" href="../img/icone.png">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top" aria-label="Menu principal">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../img/logo.png" alt="Logo do Idosos Tech com duas pessoas idosas" title="Logo do Idosos Tech">
        </a>
        <!-- Navbar Responsiva -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Abrir menu de navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="../index.php" title="Ir para a página inicial">Início</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="materiais.php" title="Ir para a página de materiais">Materiais</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contatos" title="Ir para a seção de contatos">Contatos</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../PHP/login.php" title="Ir para tela de login">Login</a> 
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Link do WhatsApp -->
<a href="https://wa.me/5511988032350" target="_blank" class="whatsapp-button" aria-label="Abrir WhatsApp para contato">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="Ícone do WhatsApp">
</a>

<!-- Conteúdo -->
<div class="content text-center text1 pt-5">
    <h1>Materiais <?= $ano ?></h1>
    <p class="introduction">Essa seção dispõe de todos os materiais do ano letivo de <?= $ano ?>. Abaixo encontra-se os conteúdos separados por semestre.</p>
    <div class="arrow" aria-hidden="true">&#8595;</div>
    <h3 class="desc">Desça a tela para acessar os conteúdos!</h3>
</div><br>
<!-- Cards -->
<section id="semestres">
    <img src="../img/linha2.png" alt="Linha decorativa" class="linha">
    <h2>1º Semestre</h2>
    <img src="../img/linha2.png" alt="Linha decorativa" class="linha">
</section>
<br><br>
<div class="d-flex justify-content-center flex-wrap">
    <?php if (!empty($primeiroSemestre)) { ?>
        <?php foreach ($primeiroSemestre as $materia) { ?>
            <div class="card w-25 m-2">
                <img src="../img/drive.webp" class="card-img-top" alt="Ícone do Google Drive">
                <div class="card-body">
                    <a href="../aulas/aulas.php?materiaid=<?=$materia['materiaid'] ?>" class="text-decoration-none">
                        <h2 class="text-white"><?= $materia['titulo_materia']?></h2>
                    </a>
                    <p class="text-center text-white">Clique aqui!</p>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <p class="text-center desc">Não há materiais cadastradas para o 1º semestre.</p>
    <?php } ?>
</div>
<br>

<section id="semestres">
    <img src="../img/linha2.png" alt="Linha decorativa" class="linha">
    <h2>2º Semestre</h2>
    <img src="../img/linha2.png" alt="Linha decorativa" class="linha">
</section>
<br><br>
<div class="d-flex justify-content-center flex-wrap">
    <?php if (!empty($segundoSemestre)) { ?>
        <?php foreach ($segundoSemestre as $materia) { ?>
            <div class="card w-50 m-2">
                <img src="../img/foto1.webp" class="card-img-top" alt="Imagem ilustrativa">
                <div class="card-body">
                    <a href="../material.php?materiaid=<?= $materia['materiaid'] ?>" class="text-decoration-none">
                        <h2 class="text-white"><?= $materia['titulo_materia'] ?></h2>
                    </a>
                    <p class="text-center text-white">Clique aqui!</p>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <p class="text-center desc">Não há materiais cadastradas para o 2º semestre.</p>
    <?php } ?>
</div>

<!-- Cards -->

<!-- Seta antes da seção de contatos -->
<div class="text-center mx-2">
    <div class="arrow" aria-hidden="true">&#8595;</div>
    <h3 class="desc">Desça a tela para acessar os contatos!</h3>
</div>

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
<footer class="text-white text-center py-3 mt-5">
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
