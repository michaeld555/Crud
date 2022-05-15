<?php
    if(!isset($_SESSION)){
        session_start();
    }
    
    if(isset($_SESSION['id'])) {
        header('location: /home/home.php');
    }
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
        <form class="card-login" method="POST" action="login.php">
                <h1>Login</h1>
                <p style="color: red;" class="erro"><?php include('../validations/valida.php'); ?></p>
                <p style="color: red;""><?php if(isset($_COOKIE['cadastro'])) { echo "Cadastrado com sucesso, faça login para continuar!"; } ?></p>
                <div class="textfield">
                    <label for="usuario">Email</label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="textfield">
                    <label for="usuario">Senha</label>
                    <input type="password" name="senha" minlength="8" placeholder="Senha" required>
                </div>
                <button class="btn-login">Login</button>
                <label class="criar-conta">Ainda não tem conta? <a href="../index.php">Crie agora</a></label>
        </form>
        </div>
    </div>
</body>
</html>