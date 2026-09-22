<?php
//variaveis
$first = $_POST["first"];
$second = $_POST["second"];
$operacao = $_POST['operacao'];
$resultado = 0;


        switch ($operacao) 
        {
            //fazer a soma
            case 'somar':
                $resultado = $first + $second;
                break;
                
            //fazer a subtração
            case 'menos':
                $resultado = $first - $second;
                break;

            //fazer a multiplicação
            case 'multiplica':
                $resultado = $first * $second;
                break;

            //fazer a divisão
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
