<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php 
            
                $n = $_REQUEST["num"];
                $ant = $n - 1;
                $suc = $n + 1;
                echo "O número escolhido foi <strong>$n</strong>";
                echo "<br>O seu <em>antecessor</em> é <strong>$ant</strong>";
                echo "<br>O seu <em>sucessor</em> é <strong>$suc</strong>";

            ?>
        </p>
        <button onclick="javascript: location.href='index.html'">&#x2b05; Voltar</button>
    </main>

</body>
</html>