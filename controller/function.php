<?php

//função verificar se email é valido

function verificar_email($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
        return 1;
    } else {
        return 0;
    }
}

//função de cadastro do usuario

function cadastro($nome, $email, $senha)
{
    require('conexao.php');
    $sql_code = "INSERT INTO usuarios (nome, email, senha) VALUES('$nome', '$email', '$senha')";
    $mysqli->query($sql_code) or die($mysqli->error);
}

// funcao logar

function login($email, $senha)
{
    require('conexao.php');
    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha no login: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
        $usuario = $sql_query->fetch_assoc();

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];

        header('location: home.php');
    } else {
        echo "Email ou senha incorretos!";
    }
}

//funcao verificar se o email já está cadastrado

function email_cadastrado($email)
{

    require('conexao.php');
    $sql = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE email = '$email'");

    if (mysqli_num_rows($sql) > 0)
        return 1;
    else
        return 0;
}

//função atualizar dados

function atualizar($nome, $email, $senha, $id)
{
    if (count($_POST) > 0) {
        require('conexao.php');
        $sql = $mysqli->prepare("UPDATE usuarios SET nome=?, email=?, senha=? WHERE id=?");
        $sql->execute(array($nome, $email, $senha, $id));

        // pegar dados atualizados

        $sql_code = "SELECT * FROM usuarios WHERE id = '$id'";
        $sql_query = $mysqli->query($sql_code) or die("Falha ao obter dados: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
        }
        echo "Dados atualizados com sucesso!";
    }
}

// função deletar usuario

function deletar()
{
    require('conexao.php');
    $sql = $mysqli->prepare("DELETE FROM usuarios WHERE id=?");
    $sql->execute(array($_SESSION['id']));

    session_start();
    session_destroy();
    header('location: ../index.php');
}
