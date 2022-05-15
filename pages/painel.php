<?php
    require('../controller/function.php');
    verificar_sessao(1);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/painel.css" rel="stylesheet">
    <title>Painel</title>
</head>
<body>
    <header>
        <div class="menu-content">
            <h1 class="logo">Bookland</h1>
            <nav class="header-menu">
                <ul class="list-itens">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="../controller/logout.php">Sair</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="main-login">
        <div class="left-login">
            <img src="../assets/img/book-menino.svg" class="left-login-image" alt="animation-book">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>O que deseja fazer? </h1>
                <button class="btn-login" onclick="window.location='edit.php'">Atualizar Dados</button>
                <button style="background: #ff5b42;" onclick="deletar()" class="btn-delete">Deletar Conta</button>
        </div>
        </div>
        <div class="left-login">
            <img src="../assets/img/questions-animate.svg" class="left-login-image" alt="animation-book">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>