<?php

if (isset($_POST['submit']) && !empty($_POST['auth_pass'])) {

    include_once('../cpf.php');
    $V = new Validar();

    $auth_pass = $_POST['auth_pass'];

    if ($V->ValidaCpf($auth_pass) == true) {
        include_once('../config.php');

        $auth_user = $_POST['auth_user'];
        $auth_pass = $_POST['auth_pass'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(auth_user, auth_pass)
            VALUES ('$auth_user', '$auth_pass')");

/*         require_once("globals.inc");

        $request_uri = urldecode(str_replace("/index.php?zone={$_REQUEST['zone']}&redirurl=",
         "https://pudim.com.br", $_SERVER["REQUEST_URI"]));

        $portal_redirurl = urldecode("$PORTAL_REDIRURL$");

        if(!stristr($portal_redirurl, $request_uri)) {
            Header("Location: $PORTAL_REDIRURL$");
            exit;
        } */
    } else {
        echo "CPF inválido";
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <img src="../assets/vsa.png" alt="Foto da VSA">
    <div class="box">
        <form action="index.php" method="POST" class="container" id="form">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <div class="nome">
                    <label for="nome">Nome: </label>
                    <input type="text" name="auth_user" class="form-input">
                </div>
                <div class="container">
                    <label for="cpf">CPF: </label>
                    <input type="text" name="auth_pass" class="form-input">
                </div>
                <input type="hidden" name="redirurl" value="$PORTAL_REDIRURL$">
                <input type="hidden" name="zone" value="$PORTAL_ZONE$">
                <input type="submit" name="submit" value="Cadastrar" id="forminput">
            </fieldset>
        </form>
            <form action="testlogin.php" method="POST" class="container">
                <fieldset>
                    <legend><b>Login</b></legend>
                    <div class="nome">
                        <label for="nome">Nome: </label>
                        <input type="text" name="auth_user" class="form-input">
                    </div>
                    <div class="container">
                        <label for="cpf">CPF: </label>
                        <input type="text" name="auth_pass" class="form-input">
                    </div>
                    <input type="hidden" name="redirurl" value="$PORTAL_REDIRURL$">
                    <input type="hidden" name="zone" value="$PORTAL_ZONE$">
                    <input id="forminput" type="submit" name="submit" value="Logar">
                </fieldset>
            </form>
    </div>
    <footer>

    </footer>
</body>

</html>