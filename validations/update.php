<?php
    include('/xampp/htdocs/validations/function.php');

    // Faz a atualização dos dados do usuario
    
if(count($_POST) > 0) 
{ 
    if(isset($_POST["email-edit"]) && verificar_email($_POST["email-edit"]) == 1) 
{ 
    atualizar($_POST["nome-edit"], $_POST["email-edit"], md5($_POST["senha-edit"]), $_SESSION["id"]);
}
else{
    echo "Digite o Email correto!";
}
} 
