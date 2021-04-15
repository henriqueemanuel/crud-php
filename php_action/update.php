<?php
//Iniciando sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn_editar'])):
    $nome               = mysqli_escape_string($connect, $_POST['nome']);
    $apelido            = mysqli_escape_string($connect, $_POST['apelido']);
    $cpf                = mysqli_escape_string($connect, $_POST['cpf']);
    $telefone           = mysqli_escape_string($connect, $_POST['telefone']);
    $email              = mysqli_escape_string($connect, $_POST['email']);
    $cep                = mysqli_escape_string($connect, $_POST['cep']);
    $endereco           = mysqli_escape_string($connect, $_POST['endereco']);
    $estado             = mysqli_escape_string($connect, $_POST['estado']);
    $complemento        = mysqli_escape_string($connect, $_POST['complemento']);
    $cidade             = mysqli_escape_string($connect, $_POST['cidade']);
    $numero             = mysqli_escape_string($connect, $_POST['numero']);
    $nome_contato       = mysqli_escape_string($connect, $_POST['nome_contato']);
    $telefone_contato   = mysqli_escape_string($connect, $_POST['telefone_contato']);
    $email_contato      = mysqli_escape_string($connect, $_POST['email_contato']);
    //Campo invisível (Hidden)
    $id                 = mysqli_escape_string($connect, $_POST['id']);
    
    $sql = "UPDATE clientes SET nome = '$nome', apelido = '$apelido', cpf = '$cpf', telefone = '$telefone', email = '$email', cep = '$cep', endereco = '$endereco', estado = '$estado', complemento = '$complemento', cidade = '$cidade', numero = '$numero', nome_contato = '$nome_contato', telefone_contato = '$telefone_contato', email_contato = '$email_contato' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cliente atualizado com sucesso!";
        header('Location: ./index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar :(";
        header('Location: ./index.php');
    endif;
endif; 