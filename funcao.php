if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pega os valores do formulário e define como 0 caso estajam vazios
    $primeiro = isset($_POST['first']) ? filter_var($_POST['first'], FILTER_VALIDATE_FLOAT) : 0;
    $segundo = isset($_POST['second']) ? filter_var($_POST['second'], FILTER_VALIDATE_FLOAT) : 0;
    $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : '';

    $resultado = null;
    $simbolo = '';
    $erro = null;

    //funções matemáticas para cada operação
    function somar($a, $b) {
        return $a + $b;
    }

    function subtrair($a, $b) {
        return $a - $b;
    }

    function multiplicar($a, $b) {
        return $a * $b;
    }

    function dividir($a, $b) {
        if ($b == 0) {
            return "Erro: Divisão por zero!";
        }
        return $a / $b;
    }
    switch ($operacao) {
        case 'somar':
            $resultado = somar($primeiro, $segundo);
            $simbolo = '+';
            break;
        case 'menos':
            $resultado = subtrair($primeiro, $segundo);
            $simbolo = '-';
            break;
        case 'multiplica':
            $resultado = multiplicar($primeiro, $segundo);
            $simbolo = '×';
            break;
        case 'dividir':
            $resultado = dividir($primeiro, $segundo);
            $simbolo = '÷';
            break;
        default:
            $erro = "Operação inválida!";
            break;
    }
} 
