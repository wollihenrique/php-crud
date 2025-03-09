<?php

require 'index.html';
require_once 'config.php';

if(isset($_POST['submit']))
{
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $dataNas = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $stmt = mysqli_query($conexao, "
                INSERT INTO 
                    usuarios(nome, telefone, email, genero, data_nascimento, cidade, estado, endereco)   
                VALUES
                    ('$nome', '$telefone', '$email', '$genero', '$dataNas', '$cidade', '$estado', '$endereco');  
    ");
}
    echo 'Deu erro hein';

?>