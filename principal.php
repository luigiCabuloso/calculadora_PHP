<?php

$first = $_POST["first"];
$second = $_POST["second"];



 $operacao = $_POST['operacao'];
        $resultado = 0;

        switch ($operacao) 
        {
            case 'somar':
                $resultado = $first + $second;
                break;
            case 'menos':
                $resultado = $first - $second;
                break;
            case 'multiplica':
                $resultado = $first * $second;
                break;
            case 'dividir':
                if ($second == 0) {
                    $resultado = "Erro: Divisão por zero!";

                    } else {
                    $resultado = $first / $second;
                }
                break;
        }
        echo "O resultado é: " . $resultado;
        ?>