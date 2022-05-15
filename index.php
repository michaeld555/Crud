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
            <form class="card-login" method="POST" action="index.php">
                <h1>Cadastre-se</h1>
                <p class="erro"><?php require('validations/valida.php'); ?></p>
                <div class="textfield">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Nome" required>
                </div>
                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="textfield">
                    <label for="usuario">Senha</label>
                    <input type="password" name="senha" minlength="8" placeholder="Senha" required>
                </div>
                <button class="btn-login">Cadastrar</button>
                <label class="criar-conta">Já tem uma conta? <a href="pages/login.php"> Faça login</a></label>
            </form>
        </div>
    </div>
</body>
</html>