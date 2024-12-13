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
                    <a class="nav-link text-white" href="../index.html" title="Ir para a página inicial">Início</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="materiais.html" title="Ir para a página de materiais">Materiais</a> 
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
    <h1>Materiais 2022</h1>
    <p class="introduction">Essa seção dispõe de todos os materiais do ano letivo de 2022. Abaixo encontra-se os conteúdos separados por semestre.</p>
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
<div class="container d-flex justify-content-center">
    <div class="card w-25">
        <img src="../img/drive.webp" class="card-img-top" alt="Ícone do Google Drive">
        <div class="card-body">
            <a href="../aulas/aulas.html" class="text-decoration-none">
                <h2 class="text-white">Aula Google Drive</h2>
            </a>
        </div>
    </div>
</div>
<br>

<section id="semestres">
    <img src="../img/linha2.png" alt="Linha decorativa" class="linha">
    <h2>2º Semestre</h2>
    <img src="../img/linha2.png" alt="Linha decorativa" class="linha">
</section>
<br><br>
<div class="container d-flex justify-content-center">
    <div class="card w-25">
        <img src="../img/foto1.webp" class="card-img-top" alt="Imagem de um quebra-cabeça">
        <div class="card-body">
            <a href="../material.html" class="text-decoration-none">
                <h2 class="text-white">Lorem ipsum dolor</h2>
            </a>
        </div>
    </div>
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