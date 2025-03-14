<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>

    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
        
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max); // randomiza um número de 0 a 100 (nesse caso)
            echo "<p>Gerando um número aleatório entre $min e $max... <br>O valor gerado foi <strong>$num</strong></p>"
        
        ?>

        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button> <!-- Recarrega a página -->
    </main>
    
</body>
</html>