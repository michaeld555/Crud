<?php
     require('../controller/validacao.php');
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
            <form class="card-login" method="POST" action="edit.php">
                <h1>Atualizar Dados</h1>
                <p style="color: red;"><?php include('../controller/update.php') ?></p>
                <div class="textfield">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome-edit" placeholder="Nome" value="<?php echo $_SESSION['nome']; ?>" required>
                </div>
                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="email" name="email-edit" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" required>
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha-edit" minlength="8" placeholder="Digite a nova senha" required>
                </div>
                <button class="btn-login">Atualizar</button>
            </form>
        </div>
        <div class="left-login">
            <img src="../assets/img/questions-animate.svg" class="left-login-image" alt="animation-book">
        </div>
    </div>
</body>
</html>