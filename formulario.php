<?php

require 'formulario.html';
require_once 'config.php';

 if(isset($_POST['submit']))
 {
     $nome = $_POST['nome'];
     $telefone = $_POST['telefone'];
     $email = $_POST['email'];
     $senha = $_POST['senha'];
     $genero = $_POST['genero'];
     $dataNas = $_POST['data_nascimento'];
     $cidade = $_POST['cidade'];
     $estado = $_POST['estado'];
     $endereco = $_POST['endereco'];

     $stmt = mysqli_query($conexao, "
                 INSERT INTO 
                     usuarios(nome, telefone, email, senha, genero, data_nascimento, cidade, estado, endereco)   
                 VALUES
                     ('$nome', '$telefone', '$email', '$senha', '$genero', '$dataNas', '$cidade', '$estado', '$endereco');  
     ");
     header('Location: login.html');
 }

?>