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
    <link href="home.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <header>
        <div class="menu-content">
            <h1 class="logo">Bookland</h1>
            <nav class="header-menu">
                <ul class="list-itens">
                    <li><a href="/painel/painel.php">Painel</a></li>
                    <li><a href="/validations/logout.php">Sair</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="main-login">
        <div class="left-login">
            <img src="/img/floating-book-purple.svg" class="left-login-image" alt="purple-book">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Olá, <?php echo $_SESSION['nome']; ?></h1>
                <div class="img-soon">
                    <img src="/img/bibliophile-animate.svg" class="left-login-image" alt="animation-book">
                </div>
                
            </div>
        </div>
        <div class="left-login">
            <img src="/img/developer-activity-animate.svg" class="left-login-image" alt="animation-book">
        </div>
    </div>
</body>
</html>