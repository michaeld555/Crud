<?php
    if(!isset($_SESSION)){
        session_start();
    }
    
    if(!isset($_SESSION['id'])) {
        header('location: /login/login.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="painel.css" rel="stylesheet">
    <title>Painel</title>
</head>
<body>
    <header>
        <div class="menu-content">
            <h1 class="logo">Bookland</h1>
            <nav class="header-menu">
                <ul class="list-itens">
                    <li><a href="/home/home.php">Home</a></li>
                    <li><a href="/validations/logout.php">Sair</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="main-login">
        <div class="left-login">
            <img src="/img/book-menino.svg" class="left-login-image" alt="animation-book">
        </div>
        <div class="right-login">
            <form class="card-login" method="POST" action="edit.php">
                <h1>O que deseja fazer? </h1>
                <button class="btn-login" formaction="/edit/edit.php">Atualizar Dados</button>
                <button style="background: #ff5b42;" class="btn-delete" formaction="/validations/delete.php" >Deletar Conta</button>
            </form>
        </div>
        <div class="left-login">
            <img src="/img/questions-animate.svg" class="left-login-image" alt="animation-book">
        </div>
    </div>
</body>
</html>