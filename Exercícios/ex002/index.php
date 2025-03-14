<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <!-- Data atual -->
</head>
<body>

    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); // por padrão, a timezone é dos EUA, para isso temos que coloca America/Sao_Paulo

        echo "Hoje é dia " . date("d/M/Y"); // Dia, mes e Ano
        echo " e a hora atual é " . date("G:i:s"); // Hora, minuto e segundo

        /* Tudo isso mostra a data DO SERVIDOR */
    ?>
    
</body>
</html>