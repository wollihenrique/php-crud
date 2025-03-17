<?php
    session_start();
    if(!isset($_SESSION['email']) && !isset($_SESSION['senha']))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.html');
    }
    else
    {
        $logado = $_SESSION['email'];   
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema</title>
    <link rel="stylesheet" href="./css/sistema.css">
</head>
<body>
    <header>
        <a href="sair.php">Sair</a>
    </header>
    <main>
        <h1>Bem vindo(a) <?php print_r($_SESSION['email']);?>!</h1>
    </main>
</body>
</html>