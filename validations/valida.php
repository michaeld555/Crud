<?php
include('/xampp/htdocs/validations/function.php');

// Faz as validações, o cadastro e o login do usuario

if(count($_POST) > 0)
{
  if(isset($_POST["nome"]) && email_cadastrado($_POST["email"]) == 0)
  {
    if(verificar_email($_POST["email"]) == 1)
    {
        if(isset($_POST["nome"]) == true)
        {
            cadastro($_POST["nome"], $_POST["email"], md5($_POST["senha"]));
            setcookie('cadastro', 'true', (time() + (1)));
            header('location: /login/login.php');
        }
    }
    else{
        echo "Digite o Email Correto";
    }
  }
  elseif (!isset($_POST["nome"]) && verificar_email($_POST["email"]) == 1)
  {
    login($_POST['email'], md5($_POST['senha']));
  }
  elseif(!isset($_POST["nome"]) && verificar_email($_POST["email"]) == 0)
  {
    echo "Digite o Email Correto";
  }
  else
  {
      echo "Email já cadastrado!";
  }
}