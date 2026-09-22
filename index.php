<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULARALHO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
 saudacao();
<body>
    <form action="calculo.php" method="post">
        <pre>
    <label for="">primeiro valor</label>
    <input type="text" name="first" id="">
    <div>

    <label for=""><h4 >    escolha o sinal</h4></label>
<select name="operacao">
    <option value="somar">+ </option>
    <option value="menos">- </option>
     <option value="dividir">÷ </option>
      <option value="multiplica">x</option>
</select>

    <label for="">segundo valor</label>
    <input type="text" name="second" id="">

    <button class="btn btn-success" type="submit" value="enviar"> enviar</button>   
    <button class="btn btn-outline-light bg-primary" type="reset" value="limpar">Limpar <br></button> 
    
</pre>

    </form>
</body>

</html>