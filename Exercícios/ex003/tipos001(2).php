<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>

    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal
        // ob = binario
        // 0 = octal
        // e2 = elevado a 2
        $num = 3e2;
        $num = 0x1A;
        echo "O valor da variável é $num ";

        $v = (float) "950"; // é possível mudar o tipo, declarando o tipo antes
        var_dump($v); // mostra o tipo primitivo da variável (no caso v)
    
    ?>
    
</body>
</html>