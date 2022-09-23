<?php
session_start();
    if(isset($_POST['submit']) && !empty($_POST['auth_user']) && !empty($_POST['auth_pass']))
    {
        include_once('../config.php');
        $auth_user = $_POST['auth_user'];
        $auth_pass = $_POST['auth_pass'];

        $sql = "SELECT * FROM usuarios WHERE auth_user = '$auth_user' and auth_pass = '$auth_pass'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset ($_SESSION['auth_user']);
            unset ($_SESSION['auth_pass']);
            header('Location: index.php');
        }
        else
        {
            $_SESSION['auth_user'] = $auth_user;
            $_SESSION['auth_pass'] = $auth_pass;
            header('Location: autenticado.php');
        }
    }
    else
    {
        header('Location: index.php');
    }
?>