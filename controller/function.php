<?php

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

        echo json_encode(1);
    } else {
        echo json_encode("Email ou senha incorretos!");
    }
}

//funcao verificar se o email já está cadastrado

function email_cadastrado($email)
{

    require('conexao.php');
    $sql = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE email = '$email'");

    if (mysqli_num_rows($sql) > 0)
        return true;
    else
        return false;
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
    }
}

// função deletar usuario

function deletar()
{
    require('conexao.php');

    if (!isset($_SESSION)) {
        session_start();
    }

    $sql = $mysqli->prepare("DELETE FROM usuarios WHERE id=?");
    $sql->execute(array($_SESSION['id']));

    session_start();
    session_destroy();
    echo json_encode(1);
}

// Função verifificar se usuario não está logado

function verificar_sessao($i)
{
    if ($i == 1) {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION['id'])) {
            header('location: login.php');
        }
    } else if ($i == 2) {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (isset($_SESSION['id'])) {
            header('location: home.php');
        }
    } else if ($i == 3) {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (isset($_SESSION['id'])) {
            header('location: pages/home.php');
        }
    }
}
