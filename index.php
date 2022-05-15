<?php
    require('controller/function.php');
    verificar_sessao(3);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/index.css" rel="stylesheet">
    <title>Cadastre-se</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Cadastre-se agora<br> E desfrute de um novo mundo</h1>
            <img src="assets/img/book-lover-animate.svg" class="left-login-image" alt="animation-book">
        </div>
        <div class="right-login">
            <form class="card-login" id="cadastro_form" method="POST" action="">
                <h1>Cadastre-se</h1>
                <div class="textfield">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome_cadastro" placeholder="Nome" required>
                </div>
                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="email" id="email_cadastro" placeholder="Email" required>
                </div>
                <div class="textfield">
                    <label for="usuario">Senha</label>
                    <input type="password" id="senha_cadastro" minlength="8" placeholder="Senha" required>
                </div>
                <button class="btn-login">Cadastrar</button>
                <label class="criar-conta">Já tem uma conta? <a href="pages/login.php"> Faça login</a></label>
            </form>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>