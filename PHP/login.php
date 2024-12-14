<?php
session_start();
?>

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

    <?php require_once 'cabecalho.php' ?>


</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Login</h2>
            <?php
                 if (isset($_SESSION['login_error'])) {
                echo '<div class="alert alert-danger" role="alert">' . $_SESSION['login_error'] . '</div>';
                unset($_SESSION['login_error']);
                }
            ?>
            <form action="processar_Login.php" method="POST">
                <div class="mb-3 position-relative">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm13.383 1.447L8 8.803 2.617 5.447A1 1 0 0 0 2 6.385l6 3.6 6-3.6a1 1 0 0 0-.617-.938zM14 4H2a1 1 0 0 0-.5.134l6.5 3.9 6.5-3.9A1 1 0 0 0 14 4z"/>
                            </svg>
                        </span>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu email" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 30 30">
                                 <path d="M 18.5 3 C 13.806 3 10 6.806 10 11.5 C 10 12.542294 10.19765 13.536204 10.541016 14.458984 L 3 22 L 3 27 L 8 27 L 8 24 L 11 24 L 11 21 L 14 21 L 15.541016 19.458984 C 16.463796 19.80235 17.457706 20 18.5 20 C 23.194 20 27 16.194 27 11.5 C 27 6.806 23.194 3 18.5 3 z M 20.5 7 C 21.881 7 23 8.119 23 9.5 C 23 10.881 21.881 12 20.5 12 C 19.119 12 18 10.881 18 9.5 C 18 8.119 19.119 7 20.5 7 z"></path>
                        </svg>
                        </span>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Digite sua senha" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
