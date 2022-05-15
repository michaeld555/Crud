<?php

if(!isset($_SESSION)){
    session_start();
}

header('Content-Type: application/json');
require "function.php";

 // Cadastrar Usuario

if(isset($_POST["email_cadastro"]))
{
    if(email_cadastrado($_POST["email_cadastro"]) == false)
    {
        cadastro($_POST["nome"], $_POST["email_cadastro"], md5($_POST["senha_cadastro"]));
        echo json_encode(1);
    }
    else {
        echo json_encode("Email já Cadastrado");
    }
}

if(isset($_POST["email_login"]))
{
    login($_POST['email_login'], md5($_POST['senha_login']));
}

// Editar Usuario

if(isset($_POST["email_editar"]))
{
    if(email_cadastrado($_POST["email_editar"]) == false || $_POST["email_editar"] == $_SESSION["email"])
    {
        atualizar($_POST["nome"], $_POST["email_editar"], md5($_POST["senha_editar"]), $_SESSION["id"]);
        echo json_encode(1);
    }
    else {
        echo json_encode("Email já Utilizado ou Dados Incorretos");
    }
}

// Deletar Usuario

if(isset($_POST["deletar"]))
{
    deletar();
}

