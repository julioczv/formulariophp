<?php
    session_start();

    if((!isset($_SESSION['auth_user']) == true) and (!isset($_SESSION['auth_pass']) == true))
    {
        unset ($_SESSION['auth_user']);
        unset ($_SESSION['auth_pass']);
        header('Location: index.php');
    }
    $logado = $_SESSION['auth_user'];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticado</title>
    <style>
        h1 {
            color: white;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(17, 54, 71), rgb(6, 10, 54));
        }
    </style>
</head>
<body>
    <?php
        echo "<h1>Você está dentro da rede, $logado</h1>"
    ?>
</body>
</html>