<?php
    require('../controller/function.php');
    verificar_sessao(2);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/login.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login<br> E aproveite o que há de melhor</h1>
            <img src="../assets/img/book-woman.svg" class="left-login-image" alt="animation-book">
        </div>
        <div class="right-login">
        <form class="card-login" id="login_form" method="POST" action="">
                <h1>Login</h1>
                <div class="textfield">
                    <label for="usuario">Email</label>
                    <input type="email" id="email_login" placeholder="Email" required>
                </div>
                <div class="textfield">
                    <label for="usuario">Senha</label>
                    <input type="password" id="senha_login" minlength="8" placeholder="Senha" required>
                </div>
                <button class="btn-login">Login</button>
                <label class="criar-conta">Ainda não tem conta? <a href="../index.php">Crie agora</a></label>
        </form>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>