<?php

class Validar 
{
    function ValidaCpf($auth_pass)
    {
        $auth_pass = preg_replace('/\D/', '', $auth_pass);

        if(strlen($auth_pass) != 11) {
            return false;
        }

        $cpfValidacao = substr($auth_pass, 0, 9);
        $cpfValidacao .= self::calcularDigito($cpfValidacao);
        $cpfValidacao .= self::calcularDigito($cpfValidacao);


        return $cpfValidacao == $auth_pass;
    }

    function calcularDigito($base){
        $tamanho = strlen($base);
        $multiplicador = $tamanho + 1;

        $soma = 0;

        for($i = 0; $i < $tamanho; $i++){
            $soma += $base[$i] * $multiplicador;
            $multiplicador--;
            
        }

        $resto = $soma % 11;

        return $resto > 1 ? 11 - $resto : 0;
    }
}

?>