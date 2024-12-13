<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.html">
            <img src="../img/logo.png" alt="Logo" width="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 id="dynamic-title" class="titulo_cabecalho">
    <?php echo isset($tituloPagina) ? $tituloPagina : "Título Padrão"; ?>
</h1>

        <script src="../javascript/teste.js"></script>
        <link rel="stylesheet" href="../styles/estilo2.css">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="../index.html">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Materiais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contatos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
