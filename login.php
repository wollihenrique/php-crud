<?php

require 'login.html';

session_start();
if(isset($_POST['submit']))
{
    require 'config.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha';";
    $result = $conexao->query($query);
    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
       header('Location: sistema.php');
    }
    else
    {
        header('Location: login.html');
    }
}
else
{
    header('Location: login.html');
}