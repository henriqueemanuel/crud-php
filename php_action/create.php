<?php
//Iniciando sessão
session_start();
//Conexão
require_once 'db_connect.php';


if(isset($_POST['btn_cadastrar'])):
    $nome               = clear($connection, $_POST['nome']);
    $apelido            = clear($connection, $_POST['apelido']);
    $cpf                = clear($connection, $_POST['cpf']);
    $telefone           = clear($connection, $_POST['telefone']);
    $email              = clear($connection, $_POST['email']);
    $cep                = clear($connection, $_POST['cep']);
    $endereco           = clear($connection, $_POST['endereco']);
    $estado             = clear($connection, $_POST['estado']);
    $complemento        = clear($connection, $_POST['complemento']);
    $cidade             = clear($connection, $_POST['cidade']);
    $numero             = clear($connection, $_POST['numero']);
    $nome_contato       = clear($connection, $_POST['nome_contato']);
    $telefone_contato   = clear($connection, $_POST['telefone_contato']);
    $email_contato      = clear($connection, $_POST['email_contato']);

    $sql = "INSERT INTO clientes (nome, apelido, cpf, telefone, email, cep, endereco, estado, complemento, cidade, numero, nome_contato, telefone_contato, email_contato) VALUES ('$nome', '$apelido', '$cpf', '$telefone', '$email', '$cep', '$endereco', '$estado, '$complemento', '$cidade', '$numero', '$nome_contato', '$telefone_contato', '$email_contato')";

    if(mysqli_query($connection, $sql)):
        $_SESSION['mensagem'] = "Cliente cadastrado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../index.php');
    endif;
endif; 