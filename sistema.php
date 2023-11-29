<?php
    session_start();
    print_r($_SESSION);
    include_once('config.php');
    if((!isset($_SESSION['email'])==true ) and (!isset($_SESSION['senha'])==true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');


    }
    else
    {
        $email = $_SESSION['email'];
        $sql = "SELECT nome FROM usuarios WHERE email='$email'";
        $result = $conexao->query($sql);
        $row = mysqli_fetch_assoc($result);
        $nome = $row['nome'];


        print_r($nome);

    }
    







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integra Aprendiz</title>
</head>
<body>
    <H1> PLATAFOMRA INTEGRA    APRENDIZ </H1>
    
    <div class="sair">
        <a href="sair.php" class="butto-sair">sair</a>
    </div>
    <?php

    echo"<H2>BEM-VINDO <u>$nome</u></H2>"

    ?>

</body>
</html>