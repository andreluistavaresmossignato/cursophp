<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes em PHP</title>
</head>
<body>

    <?php 
    
        $nome = "Pedro";
        $Nome = "Maria";
        // são 2 variáveis (por ser case sensitive)

        echo "É verdade que seu nome é $nome? ";
        echo "É verdade que seu nome é $Nome? ";

        $salario = 2500.75;

        print "Seu salário é de R$ $salario"

    ?>
    
</body>
    <!-- 
        Regras para nomes identificadores:
            
        1- Variáveis sempre começam com o síbolo $
        2- O segundo pode ser letras ou o símbolo _
        3- Aceia caracteres [a-z], [A-Z], [0-9] e [_]
        4- Aceita caracteres da tabela ASCII a partir de 128
        5- Aceita caracteres acentuados como á, õ, ç
        6- A linguagem é case sensitive em relação aos nomes
        7- Nomes especiais como $this não podem ser usados
    -->
</html>