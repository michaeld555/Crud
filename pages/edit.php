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
    <link href="../assets/css/edit.css" rel="stylesheet">
    <title>Atualizar</title>
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
            <form class="card-login" id="editar_form" method="POST" action="">
                <h1>Atualizar Dados</h1>
                <div class="textfield">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome_editar" placeholder="Nome" value="<?php echo $_SESSION['nome']; ?>" required>
                </div>
                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="email" id="email_editar" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" required>
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha_editar" minlength="8" placeholder="Digite a nova senha" required>
                </div>
                <button class="btn-login">Atualizar</button>
            </form>
        </div>
        <div class="left-login">
            <img src="../assets/img/questions-animate.svg" class="left-login-image" alt="animation-book">
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>