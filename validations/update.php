<?php
    require('function.php');

    // Faz a atualização dos dados do usuario
    
if(count($_POST) > 0) 
{ 
    if(isset($_POST["email-edit"]) && verificar_email($_POST["email-edit"]) == 1) 
{ 
    if(email_cadastrado($_POST["email-edit"]) == 0 || $_POST["email-edit"] == $_SESSION["email"])
    {
        atualizar($_POST["nome-edit"], $_POST["email-edit"], md5($_POST["senha-edit"]), $_SESSION["id"]);
    }
    else{
        echo "Email já Cadastrado";
    }
    
}
else{
    echo "Digite o Email correto!";
}
} 
