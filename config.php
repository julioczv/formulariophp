<?php
/*     $dbHost = 'localhost';
    $dbUsername = 'julio';
    $dbPassword = 'julio@2022';
    $dbName = 'bancovsa';  */

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'Admin';
    $dbName = 'acessowifi';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


    /* if($conexao->connect_errno)
    {
        echo "Algo inesperado aconteceu :(";
    }
    else 
    {
        echo "Conexão efetuada com sucesso";
    } */

?>