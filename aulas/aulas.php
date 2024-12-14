<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula: Google Drive</title>
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
                    <a class="nav-link text-white" href="../materiais/materiais.html" title="Ir para a página de materiais">Materiais</a>
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
<section class="content text-center pt-5" aria-labelledby="titulo-aula">
    <h1 id="titulo-aula">Aula: Google Drive</h1>
    <p class="introduction">Nessa aula foi discutido lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <div class="arrow mt-5" aria-hidden="true">&#8595;</div>
    <h3>Desça a tela para acessar os conteúdos!</h3>
</section>

<!-- Título do Documento e PDF Embutido -->
<section class="document-container text-center mt-5" aria-labelledby="titulo-documento">
    <h2 id="titulo-documento" class="titulo-documento">Google Drive</h2>
    <embed src="../arquivos/LIVRO DE RECEITAS.pdf" type="application/pdf" width="75%" height="600px" title="PDF com o material da aula Google Drive"></embed>
</section>
<br>

<!-- Seção com botões -->
<section class="additional-sections text-center mt-5" aria-labelledby="titulo-secoes">
    <h1 id="titulo-secoes">Outras seções para ver!</h1>
    <br>
    <div class="row justify-content-center m-5">
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100">
                <a href="tarefas.html" class="text-decoration-none">
                    <img src="../img/tarefa.png" alt="Ícone de tarefas da aula" class="button-image card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Tarefas da aula</h5>
                        <p class="card-text">Clique aqui!</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100">
                <a href="gravacao.html" class="text-decoration-none">
                    <img src="../img/gravacao-de-video.png" alt="Ícone de gravação de aula" class="button-image card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Gravação da aula</h5>
                        <p class="card-text">Clique aqui!</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100">
                <a href="gravacao.html" class="text-decoration-none">
                    <img src="../img/jogo.png" alt="Ícone de jogo da aula" class="button-image card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Jogo da aula</h5>
                        <p class="card-text">Clique aqui!</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100">
                <a href="gravacao.html" class="text-decoration-none">
                    <img src="../img/video.png" alt="Ícone de vídeo da aula" class="button-image card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Vídeo da aula</h5>
                        <p class="card-text">Clique aqui!</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Seta antes da seção de contatos -->
<div class="text-center mt-5">
    <div class="arrow" aria-hidden="true">&#8595;</div>
    <h3>Desça a tela para acessar os contatos!</h3>
</div>

<!-- Parte de Contatos -->
<section class="main_page contatos" id="contatos" aria-labelledby="titulo-contatos">
    <div class="content text-center">
        <h1 id="titulo-contatos">Contatos</h1>
        <hr>
        <p><b>Email do curso:</b> <span class="contato-info"><a href="mailto:idosostech@gmail.com" title="Enviar email para o curso">idosostech@gmail.com</a></span></p>
        <p><b>Site do Instituto Federal:</b> <span class="contato-info"><a href="http://gru.ifsp.edu.br" target="_blank" title="Ir para o site do Instituto Federal">http://gru.ifsp.edu.br</a></span></p>
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